<?php

use App\Services\Dataforged\Data\Truths\Truth;
use App\Services\Dataforged\TruthsService;

require_once 'datasets.php';

describe('Dataforged TruthsService', function () {
    it('can get truth names', function (array $truths) {
        $service = app(TruthsService::class);
        $names = $service->getTruthNames();

        expect($names)->toBeArray()
                    ->toEqualCanonicalizing($truths);
    })->with('truths');

    describe('can get truth from', function () {
        it('can get truth from name (camel case)', function () {
            $service = app(TruthsService::class);
            $truth = $service->getTruth('Cataclysm');

            expect($truth)->toBeInstanceOf(Truth::class);
            expect($truth->name)->toBe('Cataclysm');
        });

        it('can get truth from name (uppercase)', function () {
            $service = app(TruthsService::class);
            $truth = $service->getTruth('CATACLYSM');

            expect($truth)->toBeInstanceOf(Truth::class);
            expect($truth->name)->toBe('Cataclysm');
        });

        it('can get truth from name (lowercase)', function () {
            $service = app(TruthsService::class);
            $truth = $service->getTruth('cataclysm');

            expect($truth)->toBeInstanceOf(Truth::class);
            expect($truth->name)->toBe('Cataclysm');
        });

        it('can get truth from name (index)', function () {
            $service = app(TruthsService::class);
            $truth = $service->getTruth(0);

            expect($truth)->toBeInstanceOf(Truth::class);
            expect($truth->name)->toBe('Cataclysm');
        });
    });
});