@extends('admin_master')
@section('konten')
<div class="main-panel">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">List Data Pelanggaran</h4>
            <a href="{{ Route('formpelanggaran') }}" class="badge badge-outline-success">Add Data</a>
            {{-- <p class="card-description"> Add class  --}}
            </p>
            <div class="table-responsive">
              @php
                  $no = 1;
              @endphp
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th> No </th>
                    <th> Jenis Pelanggaran </th>
                    <th> Point </th>
                    <th> Sanksi </th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    @foreach ($data as $item)
                    <td> {{ $no++ }} </td>
                    <td> {{ $item->jenispelanggaran }} </td>
                    <td> {{ $item->point }} </td>
                    <td> {{ $item->sanksi }} </td>
                    <td>
                        <a href="{{ Route('getpelanggaran', $item->id) }}" class="badge badge-outline-success">Edit</a>
                        <a href="{{ Route('deletepelanggaran', $item->id) }}" class="badge badge-outline-danger">Delete</a>
                    </td>
                    @endforeach
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection