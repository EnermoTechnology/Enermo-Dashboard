<?php

namespace App\Http\Controllers;

use App\DashboardDevice;
use App\Device;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getVesselDashboard()
    {
        // $devices = DashboardDevice::all();
        return view('vessel-dashboard');
    }

    public function getEquipmentDetails(Device $device)
    {
        return view('equipment-details', compact('device'));
    }
}
