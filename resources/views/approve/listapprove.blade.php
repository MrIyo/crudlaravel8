@extends('layouts.admin')
@section('content')
<div class                                    = "content-wrapper">
  <!-- Content Header (Page header) -->
  <div class                                  = "content-header">
    <div class                                = "container-fluid">
      <div class                              = "row mb-2">
        <div class                            = "col-sm-6">
          <h1 class                           = "m-0">Data Approve</h1>
        </div><!-- /.col -->
        <!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class                              = "content">
    <div class                                = "container-fluid">
      <!-- Info boxes -->

      <!-- /.row -->

      <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

    <form action="#" method="" enctype="multipart/form-data">
      <!-- Main row -->
      <div class                              = "row">
        <!-- Left col -->
        <div class                            = "col-md-12">
          <!-- MAP & BOX PANE -->

          <!-- TABLE                          : LATEST ORDERS -->
          <div class                          = "card">
            <div class                        = "card-header border-transparent">
              <h3 class                       = "card-title">Menunggu Konfirmasi</h3>

              <div class                      = "card-tools">
                <button type                  = "button" class="btn btn-tool" data-card-widget="collapse">
                  <i class                    = "fas fa-minus"></i>
                </button>
                <button type                  = "button" class="btn btn-tool" data-card-widget="remove">
                  <i class                    = "fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class                        = "card-body p-0">
              <div class                      = "table-responsive">
                <table class = "table m-0" id="datatable">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Lokasi</th>
                    <th>Kendaraan</th>
                    <th>Plat</th>
                    <th>Paket Berlangganan</th>
                    <th>Harga</th>
                    <th>E_Kartu</th>
                    <th>F_KTP</th>
                    <th>F_SIM</th>
                    <th>F_STNK</th>
                    <th>Bukti_Transaksi</th>
                    <th>Terima&Tolak</th>
                  </tr>
                  </thead>
                  <tbody>
                      @php
                          $no                     = 1;
                      @endphp

                      @foreach ($data as $index => $row)
                          <tr>
                              <th scope = "row">{{ $index + $data->firstItem() }}</th>
                              <td>{{ $row->nama }}</td>
                              <td>{{ $row->lokasis->lokasi }}</td>
                              <td>{{ $row->kendaraans->jenis_kendaraan }}</td>
                              <td style="text-transform:uppercase">{{ $row->plat_nomor }}</td>
                              <td>{{ $row->pakets->paket_kendaraan }}</td>
                              <td>Rp.{{ number_format($row->harga) }}</td>
                              <td>{{ $row->kartu_e }}</td>
                              <td>{{ $row->f_ktp }}</td>
                              <td>{{ $row->f_sim }}</td>
                              <td>{{ $row->f_stnk }}</td>
                              <td>{{ $row->bukti_transaksi }}</td>

                              <td>
                                  {{-- <a title="Detail" class="btn btn-outline-warning detail" data-toggle="modal" data-target="#UserView" data-idShow="'.$row->id.'">
                                     <i class="fa fa-eye"></i> Detail
                                  </a> --}}
                                  <a href="#modalTerima{{ $row->id }}" data-toggle="modal" class="btn btn-outline-warning detail"><i class="fa fa-eye">Detail</i></a>
                              </td>
                          </tr>
                      @endforeach


                      {{-- Modal View --}}

                      @foreach ($data as $d)
<div class="modal fade" id="modalTerima{{ $d->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLongTitle">Approve Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="/approve/{{ $d->id }}/terima" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="modal-body">

                <input type="hidden" value="{{ $d->id }}"  name="id" required>

                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" value="{{ $d->nama }}" class="form-control" name="nama" placeholder="Nama" required readonly>
                </div>

                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <input type="text" value="{{ $d->jeniskelamin }}" class="form-control" name="jeniskelamin" placeholder="Jenis Kelamin" required readonly>
                </div>

                <div class="form-group">
                    <label for="">No Telpon</label>
                    <input type="text" value="{{ $d->notelpon }}" class="form-control" name="notelpon" placeholder="No Telpon" required readonly>
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" value="{{ $d->email }}" class="form-control" name="email" placeholder="Email" required readonly>
                </div>

                <div>
                    <label>Kendaraan</label>
                    <input type="text" value="{{ $d->kendaraans->jenis_kendaraan }}" class="form-control" name="id_kendaraan" required readonly>
                </div>

                <div class="form-group">
                    <label for="">Plat Nomor</label>
                    <input type="text" style="text-transform: uppercase;" value="{{ $d->plat_nomor }}" class="form-control" name="plat_nomor" placeholder="Plat Nomor" required readonly>
                </div>

                <div class="form-group">
                    <label for="">Lokasi</label>
                    <input type="text" value="{{ $d->lokasis->lokasi }}" class="form-control" name="id_lokasi" placeholder="Lokasi" required readonly>
                </div>

                <div class="form-group">
                    <label for="">Paket</label>
                    <input type="text" value="{{ $d->pakets->paket_kendaraan }}" class="form-control" name="id_paket" placeholder="Paket" required readonly>
                </div>

                <div class="form-group">
                    <label for="">Harga</label>
                    <input type="text" value="{{ $d->harga }}" class="form-control" name="harga" placeholder="Harga" required readonly>
                </div>

                <div class="form-group">
                    <label for="">Kartu-E</label>
                    <input type="text" value="{{ $d->kartu_e }}" class="form-control" name="kartu_e" placeholder="Kartu-E" required readonly>
                </div>

                <div class="form-group">
                    <label for="">Foto KTP</label>
                    {{-- <input type="text" value="{{ $d->f_ktp }}" class="form-control" name="f_ktp" placeholder="Nama" required readonly> --}}
                    <img src="fotoktp/{{ $d->f_ktp }}" alt="">
                </div>

                <div class="form-group">
                    <label for="">Foto SIM</label>
                    {{-- <input type="text" value="{{ $d->f_sim }}" class="form-control" name="f_sim" placeholder="Nama" required readonly> --}}
                    <img src="fotosim/{{ $d->f_sim }}" alt="">
                </div>

                <div class="form-group">
                    <label for="">Foto STNK</label>
                    {{-- <input type="text" value="{{ $d->f_stnk }}" class="form-control" name="f_stnk" placeholder="Nama" required readonly> --}}
                    <img src="fotostnk/{{ $d->f_stnk }}" alt="">
                </div>

                <div class="form-group">
                    <label for="">Rekening Tujuan</label>
                    <input type="text" value="{{ $d->no_rekening }}" class="form-control" name="no_rekening" placeholder="Nama" required readonly>
                </div>

                <div class="form-group">
                    <label for="">Bukti Transaksi</label>
                    {{-- <input type="text" value="{{ $d->bukti_transaksi }}" class="form-control" name="bukti_transaksi" placeholder="Nama" required readonly> --}}
                    <img src="fotobuktitransaksi/{{ $d->bukti_transaksi }}" alt="">
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-undo"></i> Terima</button>
                <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i> Tolak</button>
            </div>

            </form>

        </div>
    </div>
</div>
@endforeach

                      {{-- End Modal View --}}

                      <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
                      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"></script>
                      <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

                      <script type="text/javascript">

                        $(document).ready(function (){

                            var table = $('#TerimaForm').DataTable();

                            // Start Edit Record
                            table.on('click','.detail',function(){

                                $tr = $(this).closest('tr');
                                if ($($tr).hasClass('child')) {
                                    $tr = $tr.prev('.parent');
                                }

                                var data = table.row($tr).data();
                                console.log(data);


                                $('#nama').val(data[1]);
                                $('#jeniskelamin').val(data[2]);
                                $('#notelpon').val(data[3]);

                                $('#email').val(data[4]);
                                $('#id_lokasi').val(data[5]);
                                $('#id_kendaraan').val(data[6]);
                                $('#plat_nomor').val(data[7]);
                                $('#id_paket').val(data[8]);
                                $('#harga').val(data[9]);
                                $('#kartu_e').val(data[10]);
                                $('#f_ktp').val(data[11]);
                                $('#f_sim').val(data[12]);
                                $('#f_stnk').val(data[13]);
                                $('#no_rekening').val(data[14]);
                                $('#bukti_transaksi').val(data[15]);


                                // $('#TerimaForm').attr('action','/listapprove/'+data[0]);
                                // $('#UserView' data-idShow="'..'").modal('show');

                            })

                        })

                      </script>

                      {{-- <script>
                            $('#editModal')
                      </script> --}}

                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.card-body -->
            <div class                        = "card-footer clearfix">
              <a href                         = "javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
              <a href                         = "javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </form>


    </div><!--/. container-fluid -->



  </section>
  <!-- /.content -->
</div>
@endsection
