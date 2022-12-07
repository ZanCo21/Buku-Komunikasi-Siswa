@extends('admin_master')

@section('konten')
<div class="col-12 grid-margin stretch-card">
    <div class="card mt-4">
      <div class="card-body">
        <h4 class="card-title">Basic form elements</h4>
        <p class="card-description"> Basic form elements </p>
        
        <form class="forms-sample" action="{{ route('editguru', $getguru->id) }}" method="post">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Nik</label>
            <input type="text" value="{{ $getguru->nik }}" class="form-control" name="nik" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" value="{{ $getguru->name }}"  class="form-control" name="name" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleSelectGender">Mata Pelajaran</label>
            <select class="form-control" id="exampleSelectGender" name="mapel">
              <option>{{ $getguru->mapel }} </option>
              <option>PPLG</option>
              <option>TKJ</option>
              <option>MM</option>
              <option>BC</option>
            </select>
          </div>
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
          <a href="{{ route('guru') }}" class="btn btn-dark">Cancel</a>
        </form>
      </div>
    </div>
  </div>
@endsection