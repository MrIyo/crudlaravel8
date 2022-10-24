@extends('layouts.admin')

@section('content')

    <body>
        <br>
        <h1 class="text-center mb-3 mt-5">Tambah Data Admin</h1>
        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="/insertadmin" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                        @error('nama')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="exampleInputEmail1" class="form-select">Jenis Kelamin</label>
                                    <select class="form-control custom-select" name="jeniskelamin">
                                      <option selected disabled>Jenis Kelamin</option>
                                      <option value="lakilaki">Laki-Laki</option>
                                      <option value="perempuan">Perempuan</option>
                                    </select>
                                    @error('jeniskelamin')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                  </div>
                                <div class="form-group mb-3">
                                    <label for="exampleInputEmail1" class="form-select">Jenis Kendaraan</label>
                                    <select class="form-control custom-select" name="id_kendaraan">
                                      <option selected disabled>Pilih Jenis Kendaraan</option>
                                      @foreach ($datakendaraan as $data)
                                        <option value="{{ $data->id }}">{{ $data->jenis_kendaraan }}</option>
                                      @endforeach


                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Plat Nomor</label>
                                    <input type="text" name="plat_nomor" class="text-uppercase form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">No Telp</label>
                                    <input type="number" class="form-control" name="notelpon" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                        @error('notelpon')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Masukan Foto</label>
                                    <input type="file" class="form-control" name="foto">
                                    @error('foto')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control"
                                        id="exampleInputPassword1">
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a type="submit" href="/admin" class="btn btn-success">Kembali</a>
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
