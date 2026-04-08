<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->paginate(10);
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'required',
            'icon'        => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only('name', 'description');

        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')->store('services', 'public');
        }

        Service::create($data);

        return redirect()->route('admin.services.index')
                         ->with('success', 'Service berhasil ditambahkan!');
    }

    public function show(Service $service)
    {
        return view('admin.services.show', compact('service'));
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'required',
            'icon'        => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only('name', 'description');

        if ($request->hasFile('icon')) {
            if ($service->icon) {
                Storage::disk('public')->delete($service->icon);
            }
            $data['icon'] = $request->file('icon')->store('services', 'public');
        }

        $service->update($data);

        return redirect()->route('admin.services.index')
                         ->with('success', 'Service berhasil diupdate!');
    }

    public function destroy(Service $service)
    {
        if ($service->icon) {
            Storage::disk('public')->delete($service->icon);
        }
        $service->delete();
        return redirect()->route('admin.services.index')
                         ->with('success', 'Service berhasil dihapus!');
    }
}