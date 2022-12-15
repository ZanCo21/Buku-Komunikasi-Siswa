@extends('admin_master')
@section('konten')
<div class="main-panel">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data kelas</h4>
            <a href="{{ route('formkelas') }}" class="badge badge-outline-success">Add Kelas</a>
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
                    <th> Name </th>
                    <th> Created </th>
                    <th> Update </th>
                    <th> Action </th>
                  </tr>
                </thead>
                @foreach ($kelas as $item)
                <tbody>
                  <tr>
                    {{-- <td> {{ $no++ }} </td> --}}
                    <td> {{ $item->id }} </td>
                    <td> {{ $item->name }} </td>
                    <td> {{ $item->created_at }} </td>
                    <td> {{ $item->updated_at }} </td>
                    <td>
                        <a href="{{ url('getkelas', $item->id) }}" class="badge badge-outline-success">Edit</a>
                        <a href="/deletekelas/{{ $item->id }}" class="badge badge-outline-danger">Delete</a>
                    </td>
                  </tr>
                </tbody>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection