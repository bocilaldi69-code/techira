@extends('admin.layouts.app')
@section('title', 'Messages')
@section('content')
<div class="p-6">
    <h2 class="text-xl font-bold mb-6">Pesan Masuk</h2>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">{{ session('success') }}</div>
    @endif

    <div class="panel p-4">
        <table class="table-auto w-full">
            <thead>
                <tr class="border-b">
                    <th class="py-2 text-left">No</th>
                    <th class="py-2 text-left">Nama</th>
                    <th class="py-2 text-left">Email</th>
                    <th class="py-2 text-left">Pesan</th>
                    <th class="py-2 text-left">Tanggal</th>
                    <th class="py-2 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($messages as $i => $message)
                <tr class="border-b hover:bg-gray-50 dark:hover:bg-gray-800">
                    <td class="py-2">{{ $messages->firstItem() + $i }}</td>
                    <td class="py-2">{{ $message->name }}</td>
                    <td class="py-2 text-gray-500">{{ $message->email }}</td>
                    <td class="py-2 text-gray-500">{{ Str::limit($message->message, 60) }}</td>
                    <td class="py-2 text-gray-500">{{ $message->created_at->format('d M Y') }}</td>
                    <td class="py-2">
                        <form action="{{ route('admin.messages.destroy', $message) }}" method="POST"
                              onsubmit="return confirm('Yakin ingin menghapus pesan ini?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center py-6 text-gray-400">Belum ada pesan masuk.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <div class="mt-4">{{ $messages->links() }}</div>
    </div>
</div>
@endsection