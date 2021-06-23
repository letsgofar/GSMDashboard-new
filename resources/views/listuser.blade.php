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
                      <td class="text-center">
                        {{$pengguna->nama}}
                      </td>
                      <td class="text-center">
                        {{$pengguna->sekolah}}
                      </td>
                      <td class="text-center">
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
        <div class="col-lg-12 stretch-card mt-5">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">List Admin</h4>
              <div class="table-responsive pt-3">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th class="text-center">
                        id
                      </th>
                      <th class="text-center">
                        Nama
                      </th>
                      <th class="text-center">
                        Email
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($user as $user)
                    <tr>
                      <td class="text-center">
                        {{$user->id}}
                      </td>
                      <td class="text-center">
                        {{$user->name}}
                      </td>
                      <td class="text-center">
                        {{$user->email}}
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