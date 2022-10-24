@extends('layouts.admin')
@push('css')
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Lokasi</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="container mb-5">

        <div class="row g-3 align-items-center mt-1">

            <div class="col-auto">
                <form action="/admin" method="get">
                    <input type="search" id="inputPassword6" name="search" class="form-control"
                        aria-describedby="passwordHelpInline">
                </form>
            </div>

            <div class="col-auto">
                <caption>
                    <a href="/tambahlokasi" class="btn btn-success">Tambah +</a>
                </caption>
                {{-- {{ Session::get('halaman_url') }} --}}
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <form action="/importexcel" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="file" name="file" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>

        </div>

        <br>
        <div class="row">

            {{-- @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif --}}

            <table class="table caption-top">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $index => $row)
                        <tr>
                            <th scope="row">{{ $index + $data->firstItem() }}</th>
                            <td>{{ $row->lokasi }}</td>

                            <td>
                                <a href="/tampilkanlokasi/{{ $row->id }}" class="btn btn-outline-warning">Edit</a>
                                <a href="/deletelokasi/{{ $row->id }}" class="btn btn-outline-danger delete" data-id="{{ $row->id }}"
                                    data-nama="{{ $row->lokasi }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $data->links() }}
        </div>
    </div>

</div>


@endsection

@push('scripts')

      </body>

@endpush
