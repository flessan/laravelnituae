<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notes CRUD</title>
</head>
<body>
    <h1>Daftar Catatan</h1>
    <a href="{{ route('notes.create') }}">+ Tambah Catatan</a>

    @foreach ($notes as $note)
        <div style="margin-top: 12px; border: 1px solid #ccc; padding: 8px;">
            <h3>{{ $note->title }}</h3>
            <p>{{ $note->body }}</p>
            <a href="{{ route('notes.edit', $note) }}">Edit</a>
            <form action="{{ route('notes.destroy', $note) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </div>
    @endforeach
</body>
</html>
