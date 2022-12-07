@extends('admin_master')

@section('konten')
<div class="col-12 grid-margin stretch-card">
    <div class="card mt-4">
      <div class="card-body">
        <h4 class="card-title"> From Kasus </h4>
        <p class="card-description"> Data Siswa </p>
        
        <form class="forms-sample" action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
            <label for="exampleInputName1">Nama</label>
                <select class="js-example-basic-single" style="width:100%">
                  <option value="AL">Alabama</option>
                  <option value="WY">Wyoming</option>
                  <option value="AM">America</option>
                  <option value="CA">Canada</option>
                  <option value="RU">Russia</option>
                </select>
              </div>
          {{-- <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="Fauzan Ganteng banget loh tbl tbl">
          </div> --}}

          <div class="form-group">
            <label for="exampleInputName1">Kelas</label>
            <input type="text" disabled class="form-control" id="exampleInputName1" value="abb" style="color: black;" name="">
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Jurusan</label>
            <input type="text" disabled class="form-control" id="exampleInputName1" value="abb" style="color: black;" name="">
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Wali Kelas</label>
            <input type="text" disabled class="form-control" id="exampleInputName1" placeholder="aadad" name="">
          </div>

            <div class="form-group">
                <label for="exampleInputName1">Pelangaran</label>
                <select class="js-example-basic-single" style="width:100%">
                  <option value="AL">Alabama</option>
                  <option value="WY">Wyoming</option>
                  <option value="AM">America</option>
                  <option value="CA">Canada</option>
                  <option value="RU">Russia</option>
                </select>
            </div>
            
            <div class="form-group d-flex">
                
                <div class="d-flex flex-column w-50">
                    <label for="exampleInputName1">Point</label>
                    <input type="number" disabled class="form-control" id="exampleInputName1" placeholder="" name="">
                </div>
                <div class="d-flex flex-column w-50">
                    <label for="exampleInputName1">Sanksi</label>
                    <input type="number" disabled class="form-control" id="exampleInputName1" placeholder="" name="">
                </div>

                
                
            </div>

            <div class="form-group">
                <label for="exampleInputName1">Petugas</label>
                    <select class="js-example-basic-single" style="width:100%">
                      <option value="AL">Alabama</option>
                      <option value="WY">Wyoming</option>
                      <option value="AM">America</option>
                      <option value="CA">Canada</option>
                      <option value="RU">Russia</option>
                    </select>
                  </div>

          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <a href="#" class="btn btn-dark">Cancel</a>
        </form>
      </div>
    </div>
  </div>
@endsection