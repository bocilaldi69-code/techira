<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    public function edit()
    {
        $company = CompanyProfile::first();
        return view('admin.company.edit', compact('company'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'tagline'      => 'nullable|string|max:255',
            'description'  => 'nullable|string',
            'vision'       => 'nullable|string',
            'mission'      => 'nullable|string',
        ]);

        CompanyProfile::updateOrCreate(
            ['id' => 1],
            $request->only('company_name', 'tagline', 'description', 'vision', 'mission')
        );

        return redirect()->route('admin.company.edit')
                         ->with('success', 'Profil perusahaan berhasil diupdate!');
    }
}