<?php

namespace App\Services\Dataforged;

use App\Services\Dataforged\Data\Truths\Truth;
use App\Services\Dataforged\Data\Truths\Truths;
use Illuminate\Support\Facades\Storage;

class TruthsService
{
    private Truths $data;

    public function __construct()
    {
        // Load the truths.json file from the dataforged disk
        $json = Storage::disk('dataforged')->get('truths.json');

        // Decode the JSON data
        $json_data = json_decode($json, true);

        $json_data = [ 'truths' => $json_data ];

        $this->data = Truths::from($json_data);
    }

    /**
     * Get the truths data.
     *
     * @return string[]
     */
    public function getTruthNames(): array
    {
        return $this->data
                    ->truths
                    ->toCollection()
                    ->pluck('name')
                    ->toArray();
    }

    public function getTruth(int|string $key): Truth
    {
        if (is_string($key)) {
            $key = array_search(
                mb_strtolower($key),
                array_map(
                    static fn (string $name): string => mb_strtolower($name),
                    $this->getTruthNames()
                ),
                true
            );
        }

        return $this->data->truths[$key];
    }
}
