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
    <div class="container mt-5">
        <form action="{{ route('tiket.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="nama_tiket" class="form-label">Nama Tiket</label>
              <input type="text" name="nama_tiket" value="{{ $data->nama_tiket }}" class="form-control" id="nama_tiket" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="deskripsi" class="form-label">Deskripsi</label>
              <input type="text" name="deskripsi" value="{{ $data->deskripsi }}" class="form-control" id="deskripsi">
            </div>
            <div class="mb-3">
              <label for="harga" class="form-label">Harga</label>
              <input type="number" name="harga" value="{{ $data->harga }}" class="form-control" id="deskripsi">
            </div>
            <div class="mb-3">
              <label for="status" class="form-label">Status</label>
              <select name="status" id="status">
                <option value="Tersedia"{{ $data->status == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                <option value="Habis"{{ $data->status == 'Habis' ? 'selected' : '' }}>Habis</option>
              </select>
            </div>
            <div class="mb-3">
                @if ($data->gambar)
                <img src="{{ asset('uploads/menu/'.$data->gambar) }}" alt="Gambar Tiket" style="max-width: 300px;">
            @else
                <p>Tidak ada gambar yang tersimpan.</p>
            @endif
        </div>

                <input type="file" value="{{ $data->gambar }}" name="gambar" class="dropify" accept="image/png, image/jpeg" data-height="200" id="gambar">
              </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/dropify/dist/js/dropify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            // Initialize Dropify
            $('.dropify').dropify();
        });
    </script>
    </script>
  </body>
</html>
