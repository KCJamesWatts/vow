<?php

namespace App\Http\Controllers;

use App\Services\Dataforged\TruthsService;

class TestController extends Controller
{
    function index(TruthsService $service)
    {
        $truths = $service->getTruthNames();

        $truth0 = $service->getTruth(0);

        $truthExodus = $service->getTruth('exodus');

        $truthCommunities = $service->getTruth('Communities');

        $truthIron = $service->getTruth('IRON');

        dd($truths, $truth0, $truthExodus, $truthCommunities, $truthIron);
    }
}