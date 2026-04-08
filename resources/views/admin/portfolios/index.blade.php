@extends('admin.layouts.app')
@section('title', 'Portfolio')
@section('content')
<div class="p-6">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-bold">Daftar Portfolio</h2>
        <a href="{{ route('admin.portfolios.create') }}" class="btn btn-primary">+ Tambah Portfolio</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success mb-4 p-3 bg-green-100 text-green-700 rounded">{{ session('success') }}</div>
    @endif

    <div class="panel p-4">
        <table class="table-auto w-full">
            <thead>
                <tr class="border-b">
                    <th class="py-2 text-left">No</th>
                    <th class="py-2 text-left">Gambar</th>
                    <th class="py-2 text-left">Judul</th>
                    <th class="py-2 text-left">Deskripsi</th>
                    <th class="py-2 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($portfolios as $i => $portfolio)
                <tr class="border-b hover:bg-gray-50 dark:hover:bg-gray-800">
                    <td class="py-2">{{ $portfolios->firstItem() + $i }}</td>
                    <td class="py-2">
                        @if($portfolio->image)
                            <img src="{{ asset('storage/'.$portfolio->image) }}" class="w-10 h-10 object-cover rounded">
                        @else
                            <span class="text-gray-400">-</span>
                        @endif
                    </td>
                    <td class="py-2">{{ $portfolio->title }}</td>
                    <td class="py-2 text-gray-500">{{ Str::limit($portfolio->description, 50) }}</td>
                    <td class="py-2">
                        <div class="flex gap-2">
                            <a href="{{ route('admin.portfolios.edit', $portfolio) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('admin.portfolios.destroy', $portfolio) }}" method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-6 text-gray-400">Belum ada data portfolio.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <div class="mt-4">{{ $portfolios->links() }}</div>
    </div>
</div>
@endsection