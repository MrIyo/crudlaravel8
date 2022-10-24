@extends('layouts.admin')

@section('content')

    <body>
        <br>
        <h1 class="text-center mb-3 mt-5">Registrasi Langganan</h1>
        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="/insertapprove" method="POST" enctype="multipart/form-data">
                                @csrf
                                {{-- <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                    <input type="text" name="nama" class="text-uppercase form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">

                                    <a type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                         {{ Auth::user()->nama }}
                                    </a>
                                        @error('nama')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                </div> --}}

                                {{-- <div class="form-group mb-3">
                                    <label for="exampleInputEmail1" class="form-select">Jenis Kelamin</label>
                                    <input type="text" name="jeniskelamin" class="text-uppercase form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">

                                    <a class="form-control custom-select" name="jeniskelamin">
                                        {{ Auth::user()->jeniskelamin }}
                                    </a>
                                    @error('jeniskelamin')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div> --}}

                                {{-- <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">No Telp</label>
                                    <input type="text" name="notelpon" class="text-uppercase form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    <a type="number" class="form-control" name="notelpon" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">+62
                                        {{ Auth::user()->notelpon }}
                                    </a>
                                        @error('notelpon')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                </div> --}}

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Lokasi Berlangganan</label>
                                    <select class="form-control custom-select" name="id_lokasi">
                                        <option selected disabled>Pilih Lokasi Berlangganan</option>
                                        @foreach ($datalokasi as $data)
                                          <option value="{{ $data->id }}">{{ $data->lokasi }}</option>
                                        @endforeach
                                      </select>
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



                                <div class="form-group mb-3">
                                    <label for="exampleInputEmail1" class="form-select">Paket Langganan</label>
                                    <select class="form-control custom-select" name="id_paket" id="id_paket" onclick="autofill()" >
                                      <option selected disabled>Pilih Paket Langganan</option>

                                      @foreach ($datapaket as $d)
                                        <option value="{{ $d->id }}">{{ $d->paket_kendaraan }}</option>
                                      @endforeach

                                    </select>
                                </div>

                                {{-- <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Harga</label>
                                    <input type="text" name="harga" class="text-uppercase form-control" id="harga"
                                        aria-describedby="emailHelp">
                                </div> --}}

                                <div id="detail_paket"></div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Kartu Elektronik</label>
                                    <input type="text" name="kartu_e" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                        @error('nama')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Masukan Foto KTP</label>
                                    <input type="file" class="form-control" name="f_ktp">
                                    @error('f_ktp')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Masukan Foto SIM</label>
                                    <input type="file" class="form-control" name="f_sim">
                                    @error('f_sim')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Masukan Foto STNK</label>
                                    <input type="file" class="form-control" name="f_stnk">
                                    @error('f_stnk')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">No Rekening</label>
                                    <input type="text" name="no_rekening" class="text-uppercase form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Bukti Transaksi</label>
                                    <input type="file" class="form-control" name="bukti_transaksi">
                                    @error('bukti_transaksi')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a type="submit" href="/" class="btn btn-success">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
        {{-- <script type="text/javascript">
                function autofill(){
                    var id_paket = $("#id_paket").val();
                    $.ajax({
                        url : 'autofill-ajax.blade.php',
                        data : 'id_paket='+id_paket,
                    }).success(function(data){
                        var json = data,
                        obj = JSON.parse(json);
                        $("#harga").val(obj.harga);
                    });
                }
        </script> --}}

        {{-- <script>
            $(function () {
                var id_paket = [
                    {
                        nama: 'Paket 2 Jam',
                        harga: '5000'
                    },
                    {
                        nama: 'Paket 1 Jam',
                        harga: '3000'
                    }
                ];

                $.each(id_paket, function (index, value) {
                    $('#id_paket').append('<option value="' + index + '">' + value.nama + '</option>');
                });

                $('#id_paket').change(function () {
                    var index    = $(this).val();
                   if(index!=='Pilih Paket'){
                    $('input[name=harga]').val(id_paket[index].harga);
                    }else{
                        $('input[name=harga]').val('');
                    }


                });
            });
            </script> --}}


















            <script type="text/javascript">
                $(document).ready(function() {
                    $("#jumlah_barang_masuk").keyup(function() {
                        var jumlah_barang_masuk = $("#jumlah_barang_masuk").val();
                        var harga = $("#harga").val();

                        var total = parseInt(harga) * parseInt(jumlah_barang_masuk);
                        $("#total").val(total);
                    });
                });
            </script>

            <script type="text/javascript">
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                    }
                });
            </script>

            <script type="text/javascript">
                $("#id_paket").change(function(){
                    var id_paket = $("#id_paket").val();
                    $.ajax({
                        type : "GET",
                        url :"/insertapprove/ajax",
                        data : "id_paket="+id_paket,
                        cache:false,
                        success: function(data){
                            $('#detail_paket').html(data);
                        }
                    });
                });
            </script>


















    </body>
@endsection
