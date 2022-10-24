@extends('layouts.admin')

@section('content')

    <body>
        <br>
        <h1 class="text-center mb-3 mt-5">Edit Paket Kendaraan</h1>
        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="/updatepaket/{{ $data->id }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Paket Kendaraan</label>
                                    <input type="text" name="paket_kendaraan" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data->paket_kendaraan }}">

                                        @error('paket_kendaraan')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Sejak</label>
                                    <input type="text" name="sejak" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data->sejak }}">

                                        @error('sejak')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Sampai</label>
                                    <input type="text" name="sampai" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data->sampai}}">

                                        @error('sampai')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Harga</label>
                                    <input type="text" name="harga" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data->harga }}">

                                        @error('harga')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a type="submit" href="/datapaket" class="btn btn-success">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
        -->
    </body>
@endsection
