<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Message;

class DashboardController extends Controller
{
    public function index()
    {
        $totalServices  = Service::count();
        $totalPortfolio = Portfolio::count();
        $totalMessages  = Message::count();

        return view('admin.dashboard', compact(
            'totalServices',
            'totalPortfolio',
            'totalMessages'
        ));
    }
}