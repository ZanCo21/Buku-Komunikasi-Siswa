@extends('admin_master')
@section('konten')
<div class="main-panel">
<div class="row">
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-9">
                <span class="menu-icon">
                    <i class="mdi mdi-account-multiple"></i>
                </span>
              <div class="d-flex align-items-center align-self-start">
                <i class="mdi mdi-people text-primary me-4"></i>
                <h3 class="mb-0"> 340</h3>
                <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
              </div>
            </div>
            <div class="col-3">
              <div class="icon icon-box-success ">
                <span class="mdi mdi-arrow-top-right icon-item"></span>
              </div>
            </div>
          </div>
          <h6 class="text-muted font-weight-normal">Siswa</h6>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-9">
                <span class="menu-icon">
                    <i class="mdi mdi-account-multiple"></i>
                </span>
              <div class="d-flex align-items-center align-self-start">
                <h3 class="mb-0">17</h3>
                <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p>
              </div>
            </div>
            <div class="col-3">
              <div class="icon icon-box-success">
                <span class="mdi mdi-arrow-top-right icon-item"></span>
              </div>
            </div>
          </div>
          <h6 class="text-muted font-weight-normal">Pelanggar</h6>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-9">
                <span class="menu-icon">
                    <i class="mdi mdi-account-multiple"></i>
                </span>
              <div class="d-flex align-items-center align-self-start">
                <h3 class="mb-0">12</h3>
                <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p>
              </div>
            </div>
            <div class="col-3">
              <div class="icon icon-box-danger">
                <span class="mdi mdi-arrow-bottom-left icon-item"></span>
              </div>
            </div>
          </div>
          <h6 class="text-muted font-weight-normal">Guru</h6>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-9">
                <span class="menu-icon">
                    <i class="mdi mdi-account-multiple"></i>
                </span>
              <div class="d-flex align-items-center align-self-start">
                <h3 class="mb-0">53</h3>
                <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
              </div>
            </div>
            <div class="col-3">
              <div class="icon icon-box-success ">
                <span class="mdi mdi-arrow-top-right icon-item"></span>
              </div>
            </div>
          </div>
          <h6 class="text-muted font-weight-normal">Pelangaran</h6>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Kasus</h4>
        <a href="{{ route('formkasus') }}" class="badge badge-outline-success">Add Kasus</a><code>.kasus</code>
        {{-- <p class="card-description"> Add class  --}}
        </p>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th> User </th>
                <th> First name </th>
                <th> Progress </th>
                <th> Point </th>
                <th> Created </th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="py-1">
                  <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                </td>
                <td> Herman Beck </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td> 77.99 </td>
                <td> May 15, 2015 </td>
                <td>
                    <a href="" class="badge badge-outline-success">Edit</a>
                    <a href="" class="badge badge-outline-danger">Delete</a>
                </td>
              </tr>
              <tr>
                <td class="py-1">
                  <img src="../../assets/images/faces-clipart/pic-2.png" alt="image" />
                </td>
                <td> Messsy Adam </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td>245.30 </td>
                <td> July 1, 2015 </td>
                <td>
                    <a href="" class="badge badge-outline-success">Edit</a>
                    <a href="" class="badge badge-outline-danger">Delete</a>
                </td>
              </tr>
              <tr>
                <td class="py-1">
                  <img src="../../assets/images/faces-clipart/pic-3.png" alt="image" />
                </td>
                <td> John Richards </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td>138.00 </td>
                <td> Apr 12, 2015 </td>
                <td>
                    <a href="" class="badge badge-outline-success">Edit</a>
                    <a href="" class="badge badge-outline-danger">Delete</a>
                </td>
              </tr>
              <tr>
                <td class="py-1">
                  <img src="../../assets/images/faces-clipart/pic-4.png" alt="image" />
                </td>
                <td> Peter Meggik </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td> 77.99 </td>
                <td> May 15, 2015 </td>
                <td>
                    <a href="" class="badge badge-outline-success">Edit</a>
                    <a href="" class="badge badge-outline-danger">Delete</a>
                </td>
              </tr>
              <tr>
                <td class="py-1">
                  <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                </td>
                <td> Edward </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td> 160.25 </td>
                <td> May 03, 2015 </td>
                <td>
                    <a href="" class="badge badge-outline-success">Edit</a>
                    <a href="" class="badge badge-outline-danger">Delete</a>
                </td>
              </tr>
              <tr>
                <td class="py-1">
                  <img src="../../assets/images/faces-clipart/pic-2.png" alt="image" />
                </td>
                <td> John Doe </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td> 123.21 </td>
                <td> April 05, 2015 </td>
                <td>
                    <a href="" class="badge badge-outline-success">Edit</a>
                    <a href="" class="badge badge-outline-danger">Delete</a>
                </td>
              </tr>
              <tr>
                <td class="py-1">
                  <img src="../../assets/images/faces-clipart/pic-3.png" alt="image" />
                </td>
                <td> Henry Tom </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td> 150.00 </td>
                <td> June 16, 2015 </td>
                <td>
                    <a href="" class="badge badge-outline-success">Edit</a>
                    <a href="" class="badge badge-outline-danger">Delete</a>
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