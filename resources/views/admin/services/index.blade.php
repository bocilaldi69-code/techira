@extends('admin.layouts.app')
@section('title', 'Services')
@section('content')
<div class="p-6">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-bold">Daftar Services</h2>
        <a href="{{ route('admin.services.create') }}" class="btn btn-primary">+ Tambah Service</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success mb-4 p-3 bg-green-100 text-green-700 rounded">{{ session('success') }}</div>
    @endif

    <div class="panel p-4">
        <table class="table-auto w-full">
            <thead>
                <tr class="border-b">
                    <th class="py-2 text-left">No</th>
                    <th class="py-2 text-left">Icon</th>
                    <th class="py-2 text-left">Nama</th>
                    <th class="py-2 text-left">Deskripsi</th>
                    <th class="py-2 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($services as $i => $service)
                <tr class="border-b hover:bg-gray-50 dark:hover:bg-gray-800">
                    <td class="py-2">{{ $services->firstItem() + $i }}</td>
                    <td class="py-2">
                        @if($service->icon)
                            <img src="{{ asset('storage/'.$service->icon) }}" class="w-10 h-10 object-cover rounded">
                        @else
                            <span class="text-gray-400">-</span>
                        @endif
                    </td>
                    <td class="py-2">{{ $service->name }}</td>
                    <td class="py-2 text-gray-500">{{ Str::limit($service->description, 50) }}</td>
                    <td class="py-2">
                        <div class="flex gap-2">
                            <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('admin.services.destroy', $service) }}" method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-6 text-gray-400">Belum ada data service.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <div class="mt-4">{{ $services->links() }}</div>
    </div>
</div>
@endsection