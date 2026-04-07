<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $data = Team::latest()->get();
        return view('admin.teams.index', compact('data'));
    }

    public function create()
    {
        return view('admin.teams.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'photo' => 'nullable|image'
        ]);

        $data = $request->all();

        // upload foto
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('teams', 'public');
        }

        Team::create($data);

        return redirect()->route('admin.teams.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = Team::findOrFail($id);
        return view('admin.teams.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'photo' => 'nullable|image'
        ]);

        $team = Team::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('teams', 'public');
        }

        $team->update($data);

        return redirect()->route('admin.teams.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        Team::destroy($id);
        return back()->with('success', 'Data berhasil dihapus');
    }
}