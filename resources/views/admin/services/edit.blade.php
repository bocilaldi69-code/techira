@extends('admin.layouts.app')
@section('title', 'Edit Service')
@section('content')
<div class="p-6 max-w-2xl">
    <div class="flex items-center gap-3 mb-6">
        <a href="{{ route('admin.services.index') }}" class="text-gray-500 hover:text-primary">← Kembali</a>
        <h2 class="text-xl font-bold">Edit Service</h2>
    </div>

    <div class="panel p-6">
        <form action="{{ route('admin.services.update', $service) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')

            <div class="mb-4">
                <label class="block font-semibold mb-1">Nama Service <span class="text-red-500">*</span></label>
                <input type="text" name="name" value="{{ old('name', $service->name) }}"
                       class="form-input w-full">
                @error('name')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Deskripsi <span class="text-red-500">*</span></label>
                <textarea name="description" rows="4" class="form-textarea w-full">{{ old('description', $service->description) }}</textarea>
                @error('description')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <div class="mb-6">
                <label class="block font-semibold mb-1">Icon / Gambar</label>
                @if($service->icon)
                    <div class="mb-2">
                        <p class="text-sm text-gray-500 mb-1">Icon saat ini:</p>
                        <img src="{{ asset('storage/'.$service->icon) }}" class="w-16 h-16 object-cover rounded">
                    </div>
                @endif
                <input type="file" name="icon" class="form-input w-full" accept="image/*">
                <p class="text-gray-400 text-xs mt-1">Kosongkan jika tidak ingin mengubah icon</p>
                @error('icon')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <div class="flex gap-3">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.services.index') }}" class="btn btn-outline-danger">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection