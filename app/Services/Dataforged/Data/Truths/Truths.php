<?php

namespace App\Services\Dataforged\Data\Truths;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

final class Truths extends Data
{
    public function __construct(
        #[DataCollectionOf(Truth::class)]
        public DataCollection $truths,
    ) {
    }
}
