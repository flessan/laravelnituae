<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Catatan</title>
</head>
<body>
    <h1>Edit Catatan</h1>
    <a href="{{ route('notes.index') }}">Kembali</a>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('notes.update', $note) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Judul</label><br>
            <input type="text" name="title" value="{{ old('title', $note->title) }}">
        </div>
        <div style="margin-top: 8px;">
            <label>Isi</label><br>
            <textarea name="body" rows="4">{{ old('body', $note->body) }}</textarea>
        </div>
        <button type="submit" style="margin-top: 10px;">Update</button>
    </form>
</body>
</html>
