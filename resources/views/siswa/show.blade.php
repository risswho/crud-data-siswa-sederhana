<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Detail Siswa</h1>

<p>Nama: {{ $siswa->nama_lengkap }}</p>
<p>Nomor Induk: {{ $siswa->nomor_induk }}</p>
<p>Jenis Kelamin: {{ $siswa->jenis_kelamin }}</p>
<p>Tempat Lahir: {{ $siswa->tempat_lahir }}</p>
<p>Tanggal Lahir: {{ $siswa->tanggal_lahir }}</p>
<p>Alamat: {{ $siswa->alamat }}</p>
<p>Nomor Telepon: {{ $siswa->nomor_telepon }}</p>
<p>Email: {{ $siswa->email }}</p>

<a href="{{ route('siswa.index') }}">Kembali</a>
</body>
</html>