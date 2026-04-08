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
        // Ambil company profile, jika belum ada buat object default (tidak disimpan ke DB)
        // Ini mencegah error "Attempt to read property on null"
        $company = CompanyProfile::first() ?? new CompanyProfile([
            'company_name' => 'Techira Indonesia',
            'tagline'      => 'Solusi Digital Terbaik Untuk Bisnis Anda',
            'description'  => 'Kami hadir untuk membantu bisnis Anda berkembang dengan solusi teknologi yang inovatif dan terpercaya.',
            'vision'       => 'Menjadi perusahaan teknologi terdepan dan terpercaya di Indonesia.',
            'mission'      => 'Menghadirkan solusi digital inovatif yang memberikan nilai nyata bagi setiap klien.',
        ]);

        $services   = Service::latest()->get();
        $portfolios = Portfolio::latest()->get();
        $teams      = Team::latest()->get();

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

        return redirect()->back()->with('success', 'Pesan Anda telah berhasil dikirim! Kami akan segera menghubungi Anda.');
    }
}