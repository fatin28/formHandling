<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{route('create')}}" class="btn btn-secondary mt-3">Tambah produk</a><br><br>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Deskripsi Produk</th>
                                    <th scope="col">Gambar Produk</th>
                                </tr>
                            </thead>
                            @foreach($data as $daftar)
                            <tr>
                                <td>{{$daftar->nama}}</td>
                                <td>{{$daftar->deskripsi}}</td>
                                <td><img class="img-preview img-fluid" src="{{ url('/produk/'.$daftar->gambar) }}" style="max-width: 100px;"></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



</body>

</html>