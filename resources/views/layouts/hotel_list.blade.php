<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SiPmw</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify/dist/css/dropify.min.css">

  </head>
  <body>
     <!-- create list of hotels -->
     <div class="container mt-5">
        <div class="col-12">
            <h2>Daftar Menu Hotel</h2>
            <a class="btn btn-warning" href="{{ route('tiket.create') }}">Tambah Data</a>
        </div>

        <div class="container mt-4">
            <table class="table table-striped" style="width: 100%" id="example">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Status</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{$item->nama_tiket}}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td>Rp. {{ number_format($item->harga, 0, '.', '.') }}</td>
                                <td>{{ $item->status }}</td>
                                <td><img src="{{ asset('uploads/menu/'.$item->gambar) }}" alt="" width="100"></td>
                                <td>
                                    <a href="{{ route('tiket.show', $item->id) }}" class="btn btn-info">Detail</a>
                                    <a class="btn btn-primary" href="{{ route('tiket.edit', $item->id) }}">Edit</a>
                                    <form action="{{ route('tiket.destroy', $item->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/dropify/dist/js/dropify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>


    <!-- Inisialisasi DataTable -->
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

    <!-- Inisialisasi Dropify -->
    <script>
        $(document).ready(function() {
            $('.dropify').dropify();
        });
    </script>
  </body>
</html>
