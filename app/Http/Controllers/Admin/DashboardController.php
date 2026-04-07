<?php

namespace App\Http\Controllers\Admin;
use App\Models\Message;
use App\Models\Portfolio;
use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'services' => Service::count(),
            'portfolios' => Portfolio::count(),
            'messages' => Message::count()
        ]);
    }
}