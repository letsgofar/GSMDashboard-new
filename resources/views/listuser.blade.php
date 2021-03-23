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
                      <th>
                        Nama
                      </th>
                      <th>
                        Jabatan
                      </th>
                      <th>
                        Sekolah
                      </th>
                      <th>
                        Kabupaten
                      </th>
                      <th>
                        Label GSM
                      </th>
                      <th>
                        Role
                      </th>
                      <th>
                        Actions
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        Muhammad Ghifari
                      </td>
                      <td>
                        Kepala Sekolah
                      </td>
                      <td>
                        SD Muhammadiyah
                      </td>
                      <td>
                        Sleman
                      </td>
                      <td>
                        Sekolah Model
                      </td>
                      <td>
                        Guru
                      </td>
                      <td>
                        <button type="button" class="btn btn-info btn-sm">Detail</button>
                        <button type="button" class="btn btn-warning btn-sm">Role</button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Moch. Safii
                      </td>
                      <td>
                        Kepala Sekolah
                      </td>
                      <td>
                        SMPN 1 Ngaglik
                      </td>
                      <td>
                        Sleman
                      </td>
                      <td>
                        Sekolah Model
                      </td>
                      <td>
                        Assesor
                      </td>
                      <td>
                        <button type="button" class="btn btn-info btn-sm">Detail</button>
                        <button type="button" class="btn btn-warning btn-sm">Role</button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Deddy Kurniawan S
                      </td>
                      <td>
                        Guru
                      </td>
                      <td>
                        SD Ngebel Gede
                      </td>
                      <td>
                        Gunung Kidul
                      </td>
                      <td>
                        Sekolah Jejaring
                      </td>
                      <td>
                        Guru
                      </td>
                      <td>
                        <button type="button" class="btn btn-info btn-sm">Detail</button>
                        <button type="button" class="btn btn-warning btn-sm">Role</button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Arga Wirawan
                      </td>
                      <td>
                        Kepala Sekolah
                      </td>
                      <td>
                        SMP 2 Muhammadiyah
                      </td>
                      <td>
                        Sleman
                      </td>
                      <td>
                        Sekolah Jejaring
                      </td>
                      <td>
                        Guru
                      </td>
                      <td>
                        <button type="button" class="btn btn-info btn-sm">Detail</button>
                        <button type="button" class="btn btn-warning btn-sm">Role</button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Ahmadi Ahmar A
                      </td>
                      <td>
                        Guru
                      </td>
                      <td>
                        SMP 3 Ngaglik
                      </td>
                      <td>
                        Sleman
                      </td>
                      <td>
                        Sekolah Model
                      </td>
                      <td>
                        Guru
                      </td>
                      <td>
                        <button type="button" class="btn btn-info btn-sm">Detail</button>
                        <button type="button" class="btn btn-warning btn-sm">Role</button>
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection