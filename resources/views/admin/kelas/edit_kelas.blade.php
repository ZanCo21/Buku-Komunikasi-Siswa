@extends('admin_master')
@section('konten')
<div class="col-12 grid-margin stretch-card">
    <div class="card mt-4">
      <div class="card-body">
        <h4 class="card-title"> From Edit Kelas </h4>
        <p class="card-description"> Edit Kelas </p>
        
        <form class="forms-sample" action="{{ route('postkelas', $getkelas->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputName1">Nama</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="" value="{{ $getkelas->name }}" name="name">
            </div>

          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <a href="{{ route('kelas') }}" class="btn btn-dark">Cancel</a>
        </form>
      </div>
    </div>
  </div>
@endsection