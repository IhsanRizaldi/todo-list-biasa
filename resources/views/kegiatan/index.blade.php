@extends('master.main')
@section('content')
    <div class="row justify-content-center mb-3 mt-3">
        <div class="col-md-9">
            {{-- Card --}}
            <div class="card">
                <div class="card-header">
                    <div class="d-flex">
                        <div class="card-title">Table Kegiatan</div>
                        <button type="button" class="btn btn-primary ms-auto btn-sm" data-bs-toggle="modal" data-bs-target="#tambahModal">
                            Tambah
                        </button>
                    </div>
                </div>
                <div class="card-body">

                    {{-- Table --}}
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kegiatan</th>
                                <th>Waktu</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($data as $d)
                            <tbody>
                                <tr>
                                    <td>{{ $d->id }}</td>
                                    <td>{{ $d->nama_kegiatan }}</td>
                                    <td>{{ $d->waktu }}</td>
                                    <td>{{ $d->status }}</td>
                                    <td>
                                        <button type="button" class="btn btn-success ms-auto btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">
                                            Edit
                                        </button>
                                        <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>

                    {{-- Modal Box Tambah --}}
                    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="tambahModalLabel">Tambah Data</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form action="{{ route('kegiatan.store') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="">Nama Kegiatan</label>
                                    <input type="text" class="form-control" name="nama_kegiatan">
                                </div>
                                <div class="mb-3">
                                    <label for="">Waktu</label>
                                    <input type="datetime-local" class="form-control" name="waktu">
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                              <button type="submit" class="btn btn-primary">Tambah</button>
                            </form>
                            </div>
                          </div>
                        </div>
                    </div>

                    {{-- Modal Box Edit --}}
                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form action="{{ route('kegiatan.store') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="">Nama Kegiatan</label>
                                    <input type="text" name="" id="" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">Waktu</label>
                                    <input type="datetime-local" name="" id="" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">Status</label>
                                    <br>
                                    <input type="checkbox" name="" id="">
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                              <button type="submit" class="btn btn-primary">Tambah</button>
                            </form>
                            </div>
                          </div>
                        </div>
                      </div>

                </div>
            </div>
        </div>
    </div>
@endsection