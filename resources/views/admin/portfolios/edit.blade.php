@extends('admin.layouts.app')
@section('title', 'Edit Portfolio')
@section('content')
<div class="p-6 max-w-2xl">
    <div class="flex items-center gap-3 mb-6">
        <a href="{{ route('admin.portfolios.index') }}" class="text-gray-500 hover:text-primary">← Kembali</a>
        <h2 class="text-xl font-bold">Edit Portfolio</h2>
    </div>

    <div class="panel p-6">
        <form action="{{ route('admin.portfolios.update', $portfolio) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')

            <div class="mb-4">
                <label class="block font-semibold mb-1">Judul <span class="text-red-500">*</span></label>
                <input type="text" name="title" value="{{ old('title', $portfolio->title) }}"
                       class="form-input w-full">
                @error('title')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Deskripsi <span class="text-red-500">*</span></label>
                <textarea name="description" rows="4" class="form-textarea w-full">{{ old('description', $portfolio->description) }}</textarea>
                @error('description')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <div class="mb-6">
                <label class="block font-semibold mb-1">Gambar</label>
                @if($portfolio->image)
                    <div class="mb-2">
                        <p class="text-sm text-gray-500 mb-1">Gambar saat ini:</p>
                        <img src="{{ asset('storage/'.$portfolio->image) }}" class="w-24 h-24 object-cover rounded">
                    </div>
                @endif
                <input type="file" name="image" class="form-input w-full" accept="image/*">
                <p class="text-gray-400 text-xs mt-1">Kosongkan jika tidak ingin mengubah gambar</p>
                @error('image')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <div class="flex gap-3">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.portfolios.index') }}" class="btn btn-outline-danger">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection