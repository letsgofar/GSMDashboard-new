@extends('layout/masterdashboard')

@section('container')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">List Users</h4>
              <div class="table-responsive pt-3">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th class="text-center">
                        Nama
                      </th>
                      <th class="text-center">
                        Sekolah
                      </th>
                      <th class="text-center">
                        Jabatan
                      </th>
                      <th class="text-center">
                        Actions
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($pengguna as $pengguna)
                    <tr>
                      <td>
                        {{$pengguna->nama}}
                      </td>
                      <td>
                        {{$pengguna->sekolah}}
                      </td>
                      <td>
                        {{$pengguna->jabatan}}
                      </td>
                      <td>
                        <div class="text-center">
                        <a href="{{url("/listuser/$pengguna->id")}}" class="btn btn-info btn-sm">Detail</a>
                        <a href="/" type="button" class="btn btn-warning btn-sm">Role</a>
                        </div>
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