@extends('admin_master')
@section('konten')
<div class="main-panel">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Guru</h4>
            <a href="{{ route('formguru') }}" class="badge badge-outline-success">Add Guru</a>
            {{-- <p class="card-description"> Add class  --}}
            </p>
            <div class="table-responsive">
              @php
                  $no = 1;
              @endphp
              <table class="table table-striped">
                <thead>
                  <tr>
                    {{-- <th> No </th> --}}
                    <th> Id </th>
                    <th> Nik </th>
                    <th> Name </th>
                    <th> Mata Pelajaran </th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    @foreach ($guru as $item)
                    {{-- <td> {{ $no++ }} </td> --}}
                    <td> {{ $item->id }} </td>
                    <td> {{ $item->nik }} </td>
                    <td> {{ $item->name }} </td>
                    <td> {{ $item->mapel }} </td>
                    <td>
                    
                        <a href="{{ Route('getguru', $item->id) }}" class="badge badge-outline-success">Edit</a>
                        <a href="{{ Route('deleteguru', $item->id ) }}" class="badge badge-outline-danger">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection