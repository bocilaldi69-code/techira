@extends('admin.layouts.app')
@section('title', 'Edit Anggota Tim')
@section('content')
<div class="p-6 max-w-2xl">
    <div class="flex items-center gap-3 mb-6">
        <a href="{{ route('admin.teams.index') }}" class="text-gray-500 hover:text-primary">← Kembali</a>
        <h2 class="text-xl font-bold">Edit Anggota Tim</h2>
    </div>

    <div class="panel p-6">
        <form action="{{ route('admin.teams.update', $team) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')

            <div class="mb-4">
                <label class="block font-semibold mb-1">Nama <span class="text-red-500">*</span></label>
                <input type="text" name="name" value="{{ old('name', $team->name) }}"
                       class="form-input w-full">
                @error('name')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Jabatan <span class="text-red-500">*</span></label>
                <input type="text" name="position" value="{{ old('position', $team->position) }}"
                       class="form-input w-full">
                @error('position')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <div class="mb-6">
                <label class="block font-semibold mb-1">Foto</label>
                @if($team->photo)
                    <div class="mb-2">
                        <p class="text-sm text-gray-500 mb-1">Foto saat ini:</p>
                        <img src="{{ asset('storage/'.$team->photo) }}" class="w-16 h-16 object-cover rounded-full">
                    </div>
                @endif
                <input type="file" name="photo" class="form-input w-full" accept="image/*">
                <p class="text-gray-400 text-xs mt-1">Kosongkan jika tidak ingin mengubah foto</p>
                @error('photo')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <div class="flex gap-3">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.teams.index') }}" class="btn btn-outline-danger">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection