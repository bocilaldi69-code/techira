<?php

namespace App\Http\Controllers\Admin;
use App\Models\Message;
use App\Models\Portfolio;
use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $data = Service::all();
        return view('admin.services.index', compact('data'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        Service::create($request->all());
        return redirect()->route('admin.services.index');
    }

    public function edit($id)
    {
        $data = Service::findOrFail($id);
        return view('admin.services.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        Service::findOrFail($id)->update($request->all());
        return redirect()->route('admin.services.index');
    }

    public function destroy($id)
    {
        Service::destroy($id);
        return back();
    }
}