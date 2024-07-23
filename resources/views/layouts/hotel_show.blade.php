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
        <div class="col-12">
            <h2>Detail Menu Hotel</h2>

            <div class="card text-center">
                <div class="card-header">
                  Detail Tiket
                </div>
                <div class="card-body">
                  <h5 class="card-title"> Nama tiket : {{ $data->nama_tiket }}</h5>
                  <p class="card-text"> Deskripsi : {{ $data->deskripsi }}</p>
                  <p class="card-text"> Harga : Rp.{{ $data->harga }}</p>
                  <p class="card-text"><img src="{{ asset('uploads/menu/'.$data->gambar) }}" style="max-width: 100px" alt=""></p>
                  <a href="{{ route('tiket.index') }}" class="btn btn-primary">Back</a>
                </div>
                {{-- <div class="card-footer text-body-secondary">
                  2 days ago
                </div> --}}
              </div>
        </div>
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
