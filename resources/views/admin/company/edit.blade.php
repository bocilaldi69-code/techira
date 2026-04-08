@extends('admin.layouts.app')
@section('title', 'Company Profile')
@section('content')
<div class="p-6 max-w-3xl">
    <h2 class="text-xl font-bold mb-6">Edit Profil Perusahaan</h2>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">{{ session('success') }}</div>
    @endif

    <div class="panel p-6">
        <form action="{{ route('admin.company.update') }}" method="POST">
            @csrf @method('PUT')

            <div class="mb-4">
                <label class="block font-semibold mb-1">Nama Perusahaan <span class="text-red-500">*</span></label>
                <input type="text" name="company_name"
                       value="{{ old('company_name', $company->company_name ?? '') }}"
                       class="form-input w-full" placeholder="Nama perusahaan...">
                @error('company_name')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Tagline / Slogan</label>
                <input type="text" name="tagline"
                       value="{{ old('tagline', $company->tagline ?? '') }}"
                       class="form-input w-full" placeholder="Tagline perusahaan...">
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Deskripsi Perusahaan</label>
                <textarea name="description" rows="4" class="form-textarea w-full"
                          placeholder="Deskripsi singkat perusahaan...">{{ old('description', $company->description ?? '') }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Visi</label>
                <textarea name="vision" rows="3" class="form-textarea w-full"
                          placeholder="Visi perusahaan...">{{ old('vision', $company->vision ?? '') }}</textarea>
            </div>

            <div class="mb-6">
                <label class="block font-semibold mb-1">Misi</label>
                <textarea name="mission" rows="3" class="form-textarea w-full"
                          placeholder="Misi perusahaan...">{{ old('mission', $company->mission ?? '') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary w-full">Simpan Perubahan</button>
        </form>
    </div>
</div>
@endsection