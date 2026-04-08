@extends('admin.layouts.app')
@section('title', 'Tambah Service')
@section('content')
<div class="p-6 max-w-2xl">
    <div class="flex items-center gap-3 mb-6">
        <a href="{{ route('admin.services.index') }}" class="text-gray-500 hover:text-primary">← Kembali</a>
        <h2 class="text-xl font-bold">Tambah Service</h2>
    </div>

    <div class="panel p-6">
        <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block font-semibold mb-1">Nama Service <span class="text-red-500">*</span></label>
                <input type="text" name="name" value="{{ old('name') }}"
                       class="form-input w-full" placeholder="Contoh: Web Development">
                @error('name')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Deskripsi <span class="text-red-500">*</span></label>
                <textarea name="description" rows="4"
                          class="form-textarea w-full" placeholder="Deskripsi layanan...">{{ old('description') }}</textarea>
                @error('description')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <div class="mb-6">
                <label class="block font-semibold mb-1">Icon / Gambar</label>
                <input type="file" name="icon" class="form-input w-full" accept="image/*">
                <p class="text-gray-400 text-xs mt-1">Format: JPG, JPEG, PNG. Maks: 2MB</p>
                @error('icon')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <div class="flex gap-3">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('admin.services.index') }}" class="btn btn-outline-danger">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection