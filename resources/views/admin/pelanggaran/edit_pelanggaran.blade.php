@extends('admin_master')

@section('konten')
<div class="col-12 grid-margin stretch-card">
    <div class="card mt-4">
      <div class="card-body">
        <h4 class="card-title">Basic form elements</h4>
        <p class="card-description"> Basic form elements </p>
        
        <form class="forms-sample" action="{{ route('editpelanggaran',$getpelanggaran->id ) }}" method="post">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Jenis Pelanggaran</label>
            <input type="text" value="{{ $getpelanggaran->jenispelanggaran }}" class="form-control" name="jenispelanggaran" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Point</label>
            <input type="text" value="{{ $getpelanggaran->point }}"  class="form-control" name="point" id="exampleInputName1" placeholder="Name">
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Sanksi</label>
            <input type="text" value="{{ $getpelanggaran->sanksi }}"  class="form-control" name="sanksi" id="exampleInputName1" placeholder="Name">
          </div>


          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <a href="{{ route('datapelanggaran') }}" class="btn btn-dark">Cancel</a>
        </form>
      </div>
    </div>
  </div>
@endsection