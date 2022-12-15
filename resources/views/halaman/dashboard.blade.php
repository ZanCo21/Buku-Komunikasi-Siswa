@extends('admin_master')
@section('konten')
<div class="main-panel">
<div class="row">
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-9">
                <span class="menu-icon">
                    <i class="mdi mdi-account-multiple"></i>
                </span>
              <div class="d-flex align-items-center align-self-start">
                <i class="mdi mdi-people text-primary me-4"></i>
                <h3 class="mb-0"> {{ $siswas }} </h3>
                <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
              </div>
            </div>
            <div class="col-3">
              <div class="icon icon-box-success ">
                <span class="mdi mdi-arrow-top-right icon-item"></span>
              </div>
            </div>
          </div>
          <h6 class="text-muted font-weight-normal">Siswa</h6>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-9">
                <span class="menu-icon">
                    <i class="mdi mdi-account-multiple"></i>
                </span>
              <div class="d-flex align-items-center align-self-start">
                <h3 class="mb-0">{{ $kasus }}</h3>
                <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p>
              </div>
            </div>
            <div class="col-3">
              <div class="icon icon-box-success">
                <span class="mdi mdi-arrow-top-right icon-item"></span>
              </div>
            </div>
          </div>
          <h6 class="text-muted font-weight-normal">kasus</h6>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-9">
                <span class="menu-icon">
                    <i class="mdi mdi-account-multiple"></i>
                </span>
              <div class="d-flex align-items-center align-self-start">
                <h3 class="mb-0">{{ $guru }}</h3>
                <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p>
              </div>
            </div>
            <div class="col-3">
              <div class="icon icon-box-success">
                <span class="mdi mdi-arrow-top-right icon-item"></span>
              </div>
            </div>
          </div>
          <h6 class="text-muted font-weight-normal">Guru</h6>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-9">
                <span class="menu-icon">
                    <i class="mdi mdi-account-multiple"></i>
                </span>
              <div class="d-flex align-items-center align-self-start">
                <h3 class="mb-0">{{ $pelanggaran }}</h3>
                <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
              </div>
            </div>
            <div class="col-3">
              <div class="icon icon-box-success ">
                <span class="mdi mdi-arrow-top-right icon-item"></span>
              </div>
            </div>
          </div>
          <h6 class="text-muted font-weight-normal">Pelangaran</h6>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Kasus</h4>
        <a href="{{ route('formkasus') }}" class="badge badge-outline-success">Add Kasus</a><code>.kasus</code>
        {{-- <p class="card-description"> Add class  --}}
        </p>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th> Nis </th>
                <th> Name </th>
                <th> Jurusan </th>
                <th> Point </th>
                <th> Jenis Pelangaran </th>
                <th> Created </th>
                <th>Action</th>
              </tr>
            </thead>
            @php
                $no = 1;
            @endphp
            @foreach($laporan as $l)
            <tbody>
                <td>{{$no++}}</td>
                @foreach ($l->siswwaa as $item)
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->jurusan }}</td>
                @endforeach
                @foreach($l->kasuss as $pel)
                <td>{{ $pel->point }}</td>
                <td>{{ $pel->jenispelanggaran }}</td>
               @endforeach
               <td>{{$l->created_at}}</td>
               <td>
               {{-- <a href="{{ Route('getguru', $l->id) }}" class="badge badge-outline-success">Edit</a> --}}
               <a href="{{ Route('deletekasus', $l->id ) }}" class="badge badge-outline-danger">Delete</a>
               </td>
            </tbody>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection