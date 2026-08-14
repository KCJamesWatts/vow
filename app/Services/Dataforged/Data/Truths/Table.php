<?php

namespace App\Services\Dataforged\Data\Truths;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Optional;

final class Table extends Data
{
    public function __construct(
        #[MapInputName('Floor')]
        public int $floor,

        #[MapInputName('Ceiling')]
        public int $ceiling,

        #[MapInputName('Result')]
        public string $result,

        #[MapInputName('Subtable')]
        #[DataCollectionOf(SubTable::class)]
        public DataCollection|Optional $subtable,

        #[MapInputName('Description')]
        public string $description,

        #[MapInputName('Quest Starter')]
        public string $questStarter,
    ) {
    }
}
