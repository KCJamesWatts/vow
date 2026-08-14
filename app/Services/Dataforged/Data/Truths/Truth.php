<?php

namespace App\Services\Dataforged\Data\Truths;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

final class Truth extends Data
{
    public function __construct(
        #[MapInputName('Name')]
        public string $name,

        #[MapInputName('Table')]
        #[DataCollectionOf(Table::class)]
        public DataCollection $table,

        #[MapInputName('Character')]
        public string $character,

        #[MapInputName('Display')]
        public Display $display,

        #[MapInputName('Source')]
        public Source $source,
    ) {
    }
}
