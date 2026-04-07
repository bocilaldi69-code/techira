<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use App\Models\Message;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index', [
            'services' => Service::all(),
            'portfolios' => Portfolio::all(),
            'teams' => Team::all(),
            'company' => CompanyProfile::first()
        ]);
    }

    public function sendMessage(Request $request)
    {
        Message::create($request->all());
        return back()->with('success', 'Pesan terkirim');
    }
}