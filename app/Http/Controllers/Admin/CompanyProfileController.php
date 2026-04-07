<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    public function edit()
    {
        $data = CompanyProfile::first();
        return view('admin.company.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $data = CompanyProfile::first();
        $data->update($request->all());

        return back()->with('success', 'Updated');
    }
}