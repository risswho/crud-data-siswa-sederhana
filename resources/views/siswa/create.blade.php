<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tambah siswa</h1>

    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <div>
            <label for="">nomor induk</label>
            <input type="number" name="nomor_induk" value="{{ old('nomor_induk') }}">

            @error('nomor_induk')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="">nama</label>
            <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap') }}">

            @error('nama_lengkap')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="">jenis kelamin</label>
            <select name="jenis_kelamin" id="">
                <option value="">Pilih jenis kelamin</option>
                <option value="L">laki-laki</option>
                <option value="P">perempuan</option>
            </select>

            @error('jenis_kelamin')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="">tempat lahir</label>
            <textarea value="{{ old('tempat_lahir') }}" name="tempat_lahir" id="" cols="10" rows="1" ></textarea>

            @error('tempat_lahir')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="">tanggal lahir</label>
            <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">

            @error('tanggal_lahir')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="">alamat</label>
            <textarea value="{{ old('alamat') }}" name="alamat" id="" cols="10" rows="1" ></textarea>

            @error('alamat')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="">nomor telepon</label>
            <input type="number" name="nomor_telepon" value="{{ old('nomor_telepon') }}">

            @error('nomor_telepon')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="">email</label>
            <input type="email" name="email" value="{{ old('email') }}">

            @error('email')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Tambah</button>
    </form>
</body>
</html>