<?php

use App\Services\Dataforged\TruthsService;

it('can get truth names', function () {
    $service = new TruthsService();

    $names = $service->getTruthNames();
    expect($names)->toBeArray();
});