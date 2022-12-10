@extends('admin_master')
@section('konten')
<div class="main-panel">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data kelas</h4>
            <a href="" class="badge badge-outline-success">Add Kelas</a>
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
                    {{-- <td> {{ $no++ }} </td> --}}
                    <td> </td>
                    <td> </td>
                    <td>  </td>
                    <td>  </td>
                    <td>
                    
                        <a href="{{ Route('getguru', $item->id) }}" class="badge badge-outline-success">Edit</a>
                        <a href="{{ Route('deleteguru', $item->id ) }}" class="badge badge-outline-danger">Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection