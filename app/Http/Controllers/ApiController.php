<?php

namespace App\Http\Controllers;

use App\DashboardDevice;
use App\Faker\DashboardDataFaker;
use App\Faker\HistoricalAvgDataFaker;
use App\GraphData;
use App\Faker\GraphDataFaker;
use App\HistoricalDevice;
use Cache;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getDashboardData()
    {
        if (env('APP_DEMO')) {
            return response()->json(DashboardDataFaker::fake());
        }

        return response()->json([
            'data' => Cache::remember('api_dashboard_data', 180, function () {
                return DashboardDevice::all();
            }),
        ]);
    }

    public function getHistoricalAverageData()
    {
        if (env('APP_DEMO')) {
            return response()->json(HistoricalAvgDataFaker::fake());
        }

        return response()->json([
            'data' => Cache::remember('api_historical_avg_data', 180, function () {
                return HistoricalDevice::all();
            }),
        ]);
    }

    public function getHistoricalGraphData(Request $request)
    {
        if (env('APP_DEMO')) {
            return response()->json(GraphDataFaker::fake());
        }

        $device_id = $request->input('device_id');
        $channel_id = $request->input('channel_id');

        return response()->json([
            'data' => GraphData::where(compact('device_id', 'channel_id'))->get(),
        ]);
    }
}
