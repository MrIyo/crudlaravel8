@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Approve</h1>
          </div><!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->

        <!-- /.row -->



        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-12">
            <!-- MAP & BOX PANE -->

            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Menunggu Konfirmasi</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>NoTelp</th>
                      <th>Lok Berlangganan</th>
                      <th>Kendaraan</th>
                      <th>Plat</th>
                      <th>Kartu-E</th>
                      <th>F_KTP</th>
                      <th>F_SIM</th>
                      <th>F_STNK</th>
                      <th>No_Rekening</th>
                      <th>Bukti_Transaksi</th>
                      <th>Terima&Tolak</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><span class="badge">Satriyo Ramadhan</span></td>
                      <td><span class="badge">Perumahan X, Kab.Bogor</span></td>
                      <td><span class="badge">08977053116</span></td>
                      <td>
                        <span class="badge" data-color="#00a65a" data-height="20">Askrida</span>
                      </td>
                      <td><span class="badge">Motor</span></td>
                      <td><span class="badge">F 1234 M</span></td>
                      <td><span class="badge">No Kartu-E 16 Digit</span></td>
                      <td><span class="badge">F KTP</span></td>
                      <td><span class="badge">F SIM</span></td>
                      <td><span class="badge">F STNK</span></td>
                      <td><span class="badge">No Rek</span></td>
                      <td><span class="badge">Bukti TF</span></td>
                      <td>
                        <span class="btn badge badge-success">Terima</span>
                        <span class="btn badge badge-danger">Tolak</span>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR1848</a></td>
                      <td>Samsung Smart TV</td>
                      <td><span class="badge badge-warning">Pending</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR7429</a></td>
                      <td>iPhone 6 Plus</td>
                      <td><span class="badge badge-danger">Delivered</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR7429</a></td>
                      <td>Samsung Smart TV</td>
                      <td><span class="badge badge-info">Processing</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR1848</a></td>
                      <td>Samsung Smart TV</td>
                      <td><span class="badge badge-warning">Pending</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR7429</a></td>
                      <td>iPhone 6 Plus</td>
                      <td><span class="badge badge-danger">Delivered</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR9842</a></td>
                      <td>Call of Duty IV</td>
                      <td><span class="badge badge-success">Shipped</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <!-- /.col -->
        </div>

        <div class="row">
            <!-- Left col -->
            <div class="col-md-12">
              <!-- MAP & BOX PANE -->

              <!-- TABLE: LATEST ORDERS -->
              <div class="card">
                <div class="card-header border-transparent">
                  <h3 class="card-title">Konfirmasi Berhasil</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table m-0">
                      <thead>
                      <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>NoTelp</th>
                        <th>Lok Berlangganan</th>
                        <th>Kendaraan</th>
                        <th>Plat</th>
                        <th>Kartu-E</th>
                        <th>F_KTP</th>
                        <th>F_SIM</th>
                        <th>F_STNK</th>
                        <th>No_Rek</th>
                        <th>Bukti_Trans</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td><span class="badge">Satriyo Ramadhan</span></td>
                        <td><span class="badge">Perumahan X, Kab.Bogor</span></td>
                        <td><span class="badge">08977053116</span></td>
                        <td>
                          <span class="badge" data-color="#00a65a" data-height="20">Askrida</span>
                        </td>
                        <td><span class="badge">Motor</span></td>
                        <td><span class="badge">F 1234 M</span></td>
                        <td><span class="badge">No 16 Digit</span></td>
                        <td><span class="badge">F KTP</span></td>
                        <td><span class="badge">F SIM</span></td>
                        <td><span class="badge">F STNK</span></td>
                        <td><span class="badge">No Rek</span></td>
                        <td><span class="badge">Bukti TF</span></td>

                      </tr>
                      <tr>
                        <td><a href="pages/examples/invoice.html">OR1848</a></td>
                        <td>Samsung Smart TV</td>
                        <td><span class="badge badge-warning">Pending</span></td>
                        <td>
                          <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                        </td>
                      </tr>
                      <tr>
                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                        <td>iPhone 6 Plus</td>
                        <td><span class="badge badge-danger">Delivered</span></td>
                        <td>
                          <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                        </td>
                      </tr>
                      <tr>
                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                        <td>Samsung Smart TV</td>
                        <td><span class="badge badge-info">Processing</span></td>
                        <td>
                          <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                        </td>
                      </tr>
                      <tr>
                        <td><a href="pages/examples/invoice.html">OR1848</a></td>
                        <td>Samsung Smart TV</td>
                        <td><span class="badge badge-warning">Pending</span></td>
                        <td>
                          <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                        </td>
                      </tr>
                      <tr>
                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                        <td>iPhone 6 Plus</td>
                        <td><span class="badge badge-danger">Delivered</span></td>
                        <td>
                          <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                        </td>
                      </tr>
                      <tr>
                        <td><a href="pages/examples/invoice.html">OR9842</a></td>
                        <td>Call of Duty IV</td>
                        <td><span class="badge badge-success">Shipped</span></td>
                        <td>
                          <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                        </td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                  <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
                </div>
                <!-- /.card-footer -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->

            <!-- /.col -->
          </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
