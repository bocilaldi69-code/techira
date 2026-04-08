<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::latest()->paginate(10);
        return view('admin.teams.index', compact('teams'));
    }

    public function create()
    {
        return view('admin.teams.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'photo'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only('name', 'position');

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('teams', 'public');
        }

        Team::create($data);

        return redirect()->route('admin.teams.index')
                         ->with('success', 'Anggota tim berhasil ditambahkan!');
    }

    public function show(Team $team)
    {
        return view('admin.teams.show', compact('team'));
    }

    public function edit(Team $team)
    {
        return view('admin.teams.edit', compact('team'));
    }

    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'photo'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only('name', 'position');

        if ($request->hasFile('photo')) {
            if ($team->photo) {
                Storage::disk('public')->delete($team->photo);
            }
            $data['photo'] = $request->file('photo')->store('teams', 'public');
        }

        $team->update($data);

        return redirect()->route('admin.teams.index')
                         ->with('success', 'Anggota tim berhasil diupdate!');
    }

    public function destroy(Team $team)
    {
        if ($team->photo) {
            Storage::disk('public')->delete($team->photo);
        }
        $team->delete();
        return redirect()->route('admin.teams.index')
                         ->with('success', 'Anggota tim berhasil dihapus!');
    }
}