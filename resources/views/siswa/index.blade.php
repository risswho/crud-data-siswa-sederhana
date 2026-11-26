<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <style> table, th, td { border: 1px solid #333; border-collapse: collapse; } th, td { padding: 8px 12px; text-align: left; } </style>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <a href="{{ route('siswa.create') }}">Tambah Siswa</a>

    <br>
    <br>

    <table>
        <tr>
            <th>No</th>
            <th>Nomor Induk</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Nomor Telepon</th>
            <th>Email</th>
            <th colspan="3">Aksi</th>
        </tr>

        @foreach ($siswa as $index => $item)
            <tr>
                <td>{{ $index+1 }}</td>
                <td>{{ $item->nomor_induk }}</td>
                <td>{{ $item->nama_lengkap }}</td>
                <td>{{ $item->jenis_kelamin }}</td>
                <td>{{ $item->tempat_lahir }}</td>
                <td>{{ $item->tanggal_lahir }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->nomor_telepon }}</td>
                <td>{{ $item->email }}</td>
                <td>
                @foreach ($siswa as $item)
                    <a href="{{ route('siswa.show', ['siswa' => $item->id]) }}">Detail</a>
                @endforeach
                </td>
                <td>update</td>
                <td>hapus</td>
            </tr>
        @endforeach
    </table>
</body>
</html>