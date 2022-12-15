@extends('admin_master')
@section('konten')
<div class="main-panel">
    <div class="container">
        <div class="main-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center pb-5">
                                <img src="{{ asset('profilsiswa/'. $detaisiswa->image) }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="120" height="150">
                                <div class="mt-3">
                                    <h4>{{ $detaisiswa->name }}</h4>
                                    <a class="btn btn-outline-primary mt-4" href="{{ route('siswa') }}">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="{{ $detaisiswa->name }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="{{ $detaisiswa->email }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">kelas</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="{{ $detaisiswa->kelaas->name }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Jurusan</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="{{ $detaisiswa->jurusan }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Nis</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="{{ $detaisiswa->nis }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Jenis Kelamin</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="{{ $detaisiswa->jeniskelamin }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">No Tlp</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="{{ $detaisiswa->notelp }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Wali Kelas</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="{{ $detaisiswa->gurus->name }}">
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="button" class="btn btn-primary px-4" value="Save Changes">
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <table>
                    <th>Name</th>
                    <th>jenispelanggaran</th>
                    <th>Point</th>
                    <th>Sanksi</th>
                    @foreach ($detailpoint as $item)                        
                    <tr>
                        @foreach ($item->siswwaa as $p)
                        <td>{{ $p->name }}</td>
                        @endforeach
                        @foreach ($item->kasuss as $l)
                            <td>{{ $l->jenispelanggaran }}</td>
                            <td>{{ $l->point }}</td>
                            <td>{{ $l->sanksi }}</td>
                        @endforeach
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection