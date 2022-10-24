@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                @if(auth()->user()->role=="admin")
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total User</span>
                                <span class="info-box-number">
                                    {{ $jumlahadmin }}
                                    <small>Orang</small>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Jumlah Admin</span>
                                <span class="info-box-number">{{ $jumlahadminlakilaki }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Jumlah User</span>
                                <span class="info-box-number">{{ $jumlahadminperempuan }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">New Members</span>
                                <span class="info-box-number">2,000</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                @endif
                <!-- /.row -->

                @if(auth()->user()->role=="admin")
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Monthly Recap Report</h5>

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

                            <!-- ./card-body -->
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-3 col-6">
                                        <div class="description-block border-right">
                                            <span class="description-percentage text-success"><i
                                                    class="fas fa-caret-up"></i> 17%</span>
                                            <h5 class="description-header">$35,210.43</h5>
                                            <span class="description-text">TOTAL REVENUE</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-3 col-6">
                                        <div class="description-block border-right">
                                            <span class="description-percentage text-warning"><i
                                                    class="fas fa-caret-left"></i> 0%</span>
                                            <h5 class="description-header">$10,390.90</h5>
                                            <span class="description-text">TOTAL COST</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-3 col-6">
                                        <div class="description-block border-right">
                                            <span class="description-percentage text-success"><i
                                                    class="fas fa-caret-up"></i> 20%</span>
                                            <h5 class="description-header">$24,813.53</h5>
                                            <span class="description-text">TOTAL PROFIT</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-3 col-6">
                                        <div class="description-block">
                                            <span class="description-percentage text-danger"><i
                                                    class="fas fa-caret-down"></i> 18%</span>
                                            <h5 class="description-header">1200</h5>
                                            <span class="description-text">GOAL COMPLETIONS</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                @endif



                <!-- Paket -->
                <div class="row">
                    <!-- Informasi User -->

                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

                    <div class="card card-primary card-outline col-md-5">
                        <div class="card-header">
                            <h5 class="card-title">Informasi Profil</h5>
                        </div>
                        <div class="card-body box-profile">

                            <h3 class="profile-username text-center">{{ Auth::user()->nama }}</h3>

                            <ul class="list-group list-group-unbordered mb-3">

                                <li class="list-group-item">
                                    <b>Jenis Kelamin</b> <a class="float-right">{{ Auth::user()->jeniskelamin }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>No Telpon</b> <a class="float-right">+62 {{ Auth::user()->notelpon }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Jenis Kendaraan</b> <a class="float-right">{{ Auth::user()->id_kendaraan }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Plat Nomor</b> <a class="float-right">{{ Auth::user()->plat_nomor }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Email</b> <a class="float-right">{{ Auth::user()->email }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Terdaftar</b> <a class="float-right">Sejak => {{ Auth::user()->created_at }}</a>
                                </li>
                            </ul>
                            {{-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}
                        </div>
                    </div>

                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

                    <!-- Informasi Paket -->
                    <div class="card card-primary card-outline col-md-6">
                        <div class="card-header">
                            <h3 class="card-title">Paket</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body box-profile">

                            <h3 class="profile-username text-center">Paket yang Tersisa</h3>

                            <ul class="nav nav-pills flex-column">
                                <!-- Masukin Perulangan Foreach disini -->
                                <!-- nanti Paket data  -->
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Paket Bulanan Mobil
                                        <span class="float-right text-danger">
                                            <i class="fas fa-arrow-right text-sm"></i>
                                            30 Juni 2022</span>
                                    </a>
                                </li>
                                <!-- Kasih Tutup Foreach Disini-->
                            </ul>
                            <br>
                            <a href="/approvedata" class="btn btn-primary btn-block"><b>Tambah / Perbarui Paket</b></a>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- 2 -->


                <!-- Informasi User -->

                <!-- Informasi Paket -->

                <!-- /.col -->
            </div>



            <!-- Paket -->
            <!--
            <div class="card card-primary card-outline col-md-4">
                <div class="card-header">
                    <h5 class="card-title">Paket</h5>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                <div class="card-body box-profile">

                  <h3 class="profile-username text-center">{{ Auth::user()->nama }}</h3>

                  <p class="text-muted text-center">Software Engineer</p>

                  <ul class="list-group list-group-unbordered mb-3">

                    <li class="list-group-item">
                      <b>Jenis Kelamin</b> <a class="float-right">{{ Auth::user()->jeniskelamin }}</a>
                    </li>
                    <li class="list-group-item">
                      <b>No Telpon</b> <a class="float-right">{{ Auth::user()->notelpon }}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Jenis Kendaraan</b> <a class="float-right">13,287</a>
                    </li>
                    <li class="list-group-item">
                      <b>Plat Nomor</b> <a class="float-right">13,287</a>
                    </li>
                    <li class="list-group-item">
                        <b>Foto</b> <a class="float-right">13,287</a>
                    </li>
                    <li class="list-group-item">
                        <b>Email</b> <a class="float-right">{{ Auth::user()->email }}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Terdaftar</b> <a class="float-right">Sejak => {{ Auth::user()->created_at }}</a>
                    </li>
                </ul>
                  <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                </div>
            </div>
            -->
            <!-- -->
    </div>
    <!--/. container-fluid -->
    </section>
    <!-- /.content -->
    </div>
@endsection
