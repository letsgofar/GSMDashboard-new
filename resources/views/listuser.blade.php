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
                    @foreach($user as $pgn)
                    <tr>
                      <td>
                        {{$pgn->nama}}
                      </td>
                      <td>
                        {{$pgn->sekolah}}
                      </td>
                      <td>
                        {{$pgn->jabatan}}
                      </td>
                      <td>
                        <div class="text-center">
                        <button type="button" class="btn btn-info btn-sm">Detail</button>
                        <button type="button" class="btn btn-warning btn-sm">Role</button>
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