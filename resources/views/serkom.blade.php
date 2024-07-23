<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>nama</th>
                <th>deskripsi</th>
                <th>harga</th>
                <th>status</th>
                <th>ppn</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($serkom as $i)
                    <tr>
                        <td>{{ $i->nama_tiket }}</td>
                        <td>{{ $i->deskripsi }}</td>
                        <td>{{ $i->harga }}</td>
                        <td>{{ $i->status }}</td>
                        <td>{{ $i->ppn }}</td>
                        <td><a href="/serkom/hapusData/{{ $i->id }}">hapus</a></td>
                    </tr>
                @endforeach
        </tbody>
    </table>
</body>
</html>
