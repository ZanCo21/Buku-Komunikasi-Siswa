@extends('admin_master')
@section('konten')
<div class="center mt-4">
<div class="row mt-4">
    <div class="col-12 grid-margin mt-4">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Siswa</h4>
          <a href="{{ route('addsiswa') }}" class="badge badge-outline-success">ADD</a>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>User</th>
                  <th> Name </th>
                  <th> Kelas </th>
                  <th> Jurusan </th>
                  <th> Nis </th>
                  <th> Alamat </th>
                  <th> walikelas </th>
                  <th> Point </th>
                  <th> progress Bar Point  </th>
                  <th> Action </th>
                </tr>
              </thead>
              <tbody>
                {{-- @php
                    $no = 1;
                @endphp --}}
                @foreach ($siswa as $item)                    
                <tr>
                  {{-- <td>{{ $no++ }}</td> --}}
                  <td class="py-1">
                    <img src="{{ asset('profilsiswa/'. $item->image) }}" alt="image" />
                  </td>
                  <td>
                    {{-- <img src="assets/images/faces/face1.jpg" alt="image" /> --}}
                    <span class="pl-2"> {{ $item->name }} </span>
                  </td>
                  <td> {{ $item->kelaas->name }} </td>
                  <td> {{ $item->jurusan }} </td>
                  <td> {{ $item->nis }} </td>
                  <td> {{ $item->alamat }} </td>
                  <td> {{ $item->gurus->name }} </td>    
                  <td>
                    @php
                        $total = 0;
                    @endphp
                    @foreach($item->kasus as $pel)
                    {{-- by fauzan alghifari --}}
                    <input type="hidden" name="" value="{{ $pel->point }}">
                      @php
                          $total += $pel->point
                      @endphp
                    @endforeach
                    <p>{{ $total }}</p>
                  </td>
                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $total }}%" aria-valuenow="{{ $total }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>
                  <td>
                    <a href="{{ url('getsiswa',$item->id)}}" class="badge badge-outline-success">Edit</a>
                    <a href="{{ url('detailsiswa',$item->id)}}" class="badge badge-outline-warning">Detail</a>
                    <a href="/deletesiswa/{{ $item->id }}" class="badge badge-outline-danger">Delete</a>
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
</div>
@endsection