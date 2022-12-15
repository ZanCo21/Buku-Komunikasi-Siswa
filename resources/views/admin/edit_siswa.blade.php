@extends('admin_master')

@section('konten')
<div class="col-12 grid-margin stretch-card">
    <div class="card mt-4">
      <div class="card-body">
        <h4 class="card-title">Edit Siswa</h4>
        <p class="card-description"> Edit Siswa </p>
        
        <form class="forms-sample" action="{{ route('editsiswa', $getsiswa->id) }}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" value="{{ $getsiswa->name }}" class="form-control" name="name" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Kelas</label>
            <select class="form-control" id="exampleSelectGender" name="kelas_id">
              <option disabled></option>
              @foreach ($kelas as $item)
                  <option value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="exampleSelectGender">Jurusan</label>
            <select class="form-control" id="exampleSelectGender" name="jurusan">
              <option>{{ $getsiswa->jurusan }} </option>
              <option>PPLG</option>
              <option>TKJ</option>
              <option>MM</option>
              <option>BC</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Nis</label>
            <input type="number" value="{{ $getsiswa->nis }}"  class="form-control" id="exampleInputName1" placeholder="Name" name="nis">
          </div>
          <div class="form-group">
            <label for="exampleSelectGender">Jenis Kelamin</label>
            <select class="form-control" id="exampleSelectGender" name="jeniskelamin">
              <option>{{ $getsiswa->jeniskelamin }} </option>
              @if ($getsiswa->jeniskelamin == "Laki Laki")
              <option>Perempuan</option>
              @else
              <option>Laki Laki</option>
              @endif
            </select>
          </div>

          <div class="form-group">
            <label>File upload</label>
            <input type="file" name="image" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="file" class="form-control file-upload-info" name="image" placeholder="Upload Image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
              </span>
            </div>
          </div>
          
          <div class="form-group">
            <label for="exampleInputName1">Alamat</label>
            <input type="text" value="{{ $getsiswa->alamat }}"  class="form-control" id="exampleInputName1" placeholder="Name" name="alamat">
          </div>

          <div class="form-group">
            <label for="exampleInputName1">No Telepon</label>
            <input type="number" value="{{ $getsiswa->notelp }}"  class="form-control" id="exampleInputName1" placeholder="Name" name="notelp">
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Email</label>
            <input type="text" value="{{ $getsiswa->email }}"  class="form-control" id="exampleInputName1" placeholder="Name" name="email">
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Password</label>
            <input type="password" value="{{ $getsiswa->password }}"  class="form-control" id="exampleInputName1" placeholder="Name" name="password">
          </div>

          <div class="form-group">
            <label for="exampleSelectGender">Wali kelas</label>
            <select class="form-control" id="exampleSelectGender" name="walikelas_id">
              <option disabled value>Pilih</option>
              <option value="{{ $getsiswa->walikelas_id }}">{{ $getsiswa->gurus->name }}</option>
              @foreach ($walikelas as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach
            </select>
          </div>
          {{-- <div class="form-group">
            <label>File upload</label>
            <input type="file" name="image" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="file" class="form-control file-upload-info" name="image" placeholder="Upload Image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
              </span>
            </div>
          </div> --}}
          {{-- <div class="form-group">
            <label>File upload</label>
            <input type="file" name="img[]" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
              </span>
            </div>
          </div> --}}
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <a href="{{ route('siswa') }}" class="btn btn-dark">Cancel</a>
        </form>
      </div>
    </div>
  </div>
@endsection