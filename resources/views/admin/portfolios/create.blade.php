@extends('admin.layouts.app')
@section('title', 'Tambah Portfolio')
@section('content')
<div class="p-6 max-w-2xl">
    <div class="flex items-center gap-3 mb-6">
        <a href="{{ route('admin.portfolios.index') }}" class="text-gray-500 hover:text-primary">← Kembali</a>
        <h2 class="text-xl font-bold">Tambah Portfolio</h2>
    </div>

    <div class="panel p-6">
        <form action="{{ route('admin.portfolios.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block font-semibold mb-1">Judul <span class="text-red-500">*</span></label>
                <input type="text" name="title" value="{{ old('title') }}"
                       class="form-input w-full" placeholder="Judul portfolio...">
                @error('title')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Deskripsi <span class="text-red-500">*</span></label>
                <textarea name="description" rows="4"
                          class="form-textarea w-full" placeholder="Deskripsi portfolio...">{{ old('description') }}</textarea>
                @error('description')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <div class="mb-6">
                <label class="block font-semibold mb-1">Gambar</label>
                <input type="file" name="image" class="form-input w-full" accept="image/*">
                <p class="text-gray-400 text-xs mt-1">Format: JPG, JPEG, PNG. Maks: 2MB</p>
                @error('image')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <div class="flex gap-3">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('admin.portfolios.index') }}" class="btn btn-outline-danger">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection