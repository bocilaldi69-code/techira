@extends('admin.layouts.app')
@section('title', 'Tambah Anggota Tim')
@section('content')
<div class="p-6 max-w-2xl">
    <div class="flex items-center gap-3 mb-6">
        <a href="{{ route('admin.teams.index') }}" class="text-gray-500 hover:text-primary">← Kembali</a>
        <h2 class="text-xl font-bold">Tambah Anggota Tim</h2>
    </div>

    <div class="panel p-6">
        <form action="{{ route('admin.teams.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block font-semibold mb-1">Nama <span class="text-red-500">*</span></label>
                <input type="text" name="name" value="{{ old('name') }}"
                       class="form-input w-full" placeholder="Nama anggota...">
                @error('name')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Jabatan <span class="text-red-500">*</span></label>
                <input type="text" name="position" value="{{ old('position') }}"
                       class="form-input w-full" placeholder="Contoh: CEO, Developer...">
                @error('position')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <div class="mb-6">
                <label class="block font-semibold mb-1">Foto</label>
                <input type="file" name="photo" class="form-input w-full" accept="image/*">
                <p class="text-gray-400 text-xs mt-1">Format: JPG, JPEG, PNG. Maks: 2MB</p>
                @error('photo')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <div class="flex gap-3">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('admin.teams.index') }}" class="btn btn-outline-danger">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection