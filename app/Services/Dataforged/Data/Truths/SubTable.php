<?php

namespace App\Services\Dataforged\Data\Truths;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;

final class SubTable extends Data
{
    public function __construct(
        #[MapInputName('Floor')]
        public int $floor,

        #[MapInputName('Ceiling')]
        public int $ceiling,

        #[MapInputName('Result')]
        public string $result,
    ) {
    }
}
