<?php

namespace App\Services\Dataforged\Data\Truths;

use App\Services\Dataforged\Data\IconPathCast;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

final class Display extends Data
{
    public function __construct(
        #[MapInputName('Title')]
        public string $title,

        #[MapInputName('Icon')]
        #[WithCast(IconPathCast::class)]
        public string $icon,
    ) {
    }
}
