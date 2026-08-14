<?php

namespace App\Services\Dataforged\Data\Truths;

use App\Services\Dataforged\Data\IconPathCast;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

final class Source extends Data
{
    public function __construct(
        #[MapInputName('Title')]
        public string $title,

        #[MapInputName('Page')]
        public int $page,
    ) {
    }
}
