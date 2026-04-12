<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Team;
use App\Models\Message;
use App\Models\CompanyProfile;

class FrontendController extends Controller
{
    public function index()
    {
        $company    = CompanyProfile::first();
        $services   = Service::all();
        $portfolios = Portfolio::all();
        $teams      = Team::all();

        return view('frontend.index', compact(
            'company',
            'services',
            'portfolios',
            'teams'
        ));
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Message::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Pesan berhasil dikirim! Kami akan segera menghubungi Anda.');
    }
}