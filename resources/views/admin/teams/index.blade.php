@extends('admin.layouts.app')
@section('title', 'Team')
@section('content')
<div class="p-6">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-bold">Daftar Team</h2>
        <a href="{{ route('admin.teams.create') }}" class="btn btn-primary">+ Tambah Anggota</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success mb-4 p-3 bg-green-100 text-green-700 rounded">{{ session('success') }}</div>
    @endif

    <div class="panel p-4">
        <table class="table-auto w-full">
            <thead>
                <tr class="border-b">
                    <th class="py-2 text-left">No</th>
                    <th class="py-2 text-left">Foto</th>
                    <th class="py-2 text-left">Nama</th>
                    <th class="py-2 text-left">Jabatan</th>
                    <th class="py-2 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($teams as $i => $team)
                <tr class="border-b hover:bg-gray-50 dark:hover:bg-gray-800">
                    <td class="py-2">{{ $teams->firstItem() + $i }}</td>
                    <td class="py-2">
                        @if($team->photo)
                            <img src="{{ asset('storage/'.$team->photo) }}" class="w-10 h-10 object-cover rounded-full">
                        @else
                            <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center text-gray-400 text-xs">No Photo</div>
                        @endif
                    </td>
                    <td class="py-2">{{ $team->name }}</td>
                    <td class="py-2 text-gray-500">{{ $team->position }}</td>
                    <td class="py-2">
                        <div class="flex gap-2">
                            <a href="{{ route('admin.teams.edit', $team) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('admin.teams.destroy', $team) }}" method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-6 text-gray-400">Belum ada data anggota tim.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <div class="mt-4">{{ $teams->links() }}</div>
    </div>
</div>
@endsection