@extends('admin_master')
@section('konten')
<div class="col-12 grid-margin stretch-card">
    <div class="card mt-4">
      <div class="card-body">
        <h4 class="card-title"> From Edit Kasus </h4>
        <p class="card-description"> Edit Kasus </p>
        
        <form class="forms-sample" action="" method="post" enctype="multipart/form-data">
            @csrf
            
            <div class="col-12 grid-margin stretch-card">
                <div class="card mt-4">
                  <div class="card-body">
                    <h4 class="card-title"> From Kasus </h4>
                    <p class="card-description"> Data Siswa </p>
                    
                    <form class="forms-sample" action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                        <label for="exampleInputName1">Nama</label>
                          <div class="input-field">
                              <input type="text" id="searchhere_id" value="" placeholder="Search" />
                            {{-- <select class="js-example-basic-single nama" name="siswa_id" id="nama" style="width:100%;">
                              <option value="" selected disabled>Search</option>
                              @foreach ($siswas as $siswa)
                              <option value="{{ $siswa->id }}" data-kelas="{{ $siswa->kelas }}">{{ $siswa->name }}</option>
                              @endforeach
                            </select> --}}
                          </div>
                          </div>
                      {{-- <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="Fauzan Ganteng banget loh tbl tbl">
                      </div> --}}
            
                      
                      <div class="form-group">
                        <label for="exampleInputName1">Nis</label>
                        <input type="hidden" class="form-control" id="idsiswa"  name="siswa_id" value="">
                        <input type="text" disabled class="form-control" id="namakelas" style="color: black;" name="" value="">
                      </div>
            
                      <div class="form-group">
                        <label for="exampleInputName1">Jurusan</label>
                        <input type="text" disabled class="form-control" id="namajurusan" style="color: black;" name="">
                      </div>
            
                      <div class="form-group">
                        <label for="exampleInputName1">Alamat</label>
                        <input type="text" disabled class="form-control" value="" name="" id="alamat" style="color: black;">
                      </div>
            
            {{-- pelanggaran --}}
            
                      <br>
                        <div class="form-group">
                          <label for="">Pelangaran</label>
                          <div class="input-field">
                            <input type="text" id="searchhere_plgr" value="" placeholder="Search" />
                          </div>
                        </div>
                        
                        <div class="form-group d-flex">
                            
                            <div class="d-flex flex-column w-50">
                                <label for="exampleInputName1">Point</label>
                                <input type="hidden" class="form-control" id="idpelanggaran" placeholder="" name="pelanggaran_id" style="color: black;">
                                <input type="number" disabled class="form-control" id="point" placeholder="" name="" style="color: black;">
                            </div>
                            <div class="d-flex flex-column w-50">
                                <label for="exampleInputName1">Sanksi</label>
                                <input type="text" disabled class="form-control" id="sanksi" placeholder="" name="" style="color: black;">
                            </div>
            
                            
                            
                        </div>
            
                        <div class="form-group">
                            <label for="exampleInputName1">Petugas</label>
                            <input type="hidden" class="form-control" id="exampleInputName1" value="{{Auth::user()->id}}" name="">
                            <input type="text" disabled class="form-control" id="exampleInputName1" value="{{Auth::user()->name}}" name="" style="color: black;">
                        </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <a href="{{ route('kelas') }}" class="btn btn-dark">Cancel</a>
        </form>
      </div>
    </div>
  </div>
@endsection