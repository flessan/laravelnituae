<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Catatan</title>
</head>
<body>
    <h1>Tambah Catatan</h1>
    <a href="{{ route('notes.index') }}">Kembali</a>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('notes.store') }}" method="POST">
        @csrf
        <div>
            <label>Judul</label><br>
            <input type="text" name="title" value="{{ old('title') }}">
        </div>
        <div style="margin-top: 8px;">
            <label>Isi</label><br>
            <textarea name="body" rows="4">{{ old('body') }}</textarea>
        </div>
        <button type="submit" style="margin-top: 10px;">Simpan</button>
    </form>
</body>
</html>
