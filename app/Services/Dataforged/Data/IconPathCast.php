<?php

namespace App\Services\Dataforged\Data;

use Spatie\LaravelData\Casts\Cast;
use Spatie\LaravelData\Support\Creation\CreationContext;
use Spatie\LaravelData\Support\DataProperty;

class IconPathCast implements Cast
{
    public function cast(DataProperty $property, mixed $value, array $properties, CreationContext $context): mixed
    {
        return '/img/dataforged/' . str_replace('../../img/vector/', '', $value);
    }
}
