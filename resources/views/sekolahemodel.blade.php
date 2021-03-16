@extends('layout/masterdashboard')

@section('container')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Sekolah e-Model GSM</h4>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>
                        NPSN
                      </th>
                      <th>
                        Nama Sekolah
                      </th>
                      <th>
                        Kabupaten
                      </th>
                      <th>
                        Provinsi
                      </th>
                      <th>
                        Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        31891900
                      </td>
                      <td>
                        SMPN 1 Balungan
                      </td>
                      <td>
                        Semarang
                      </td>
                      <td>
                        Jawa Tengah
                      </td>
                      <td>
                        <button type="button" class="btn btn-info btn-sm">Detail</button>
                        <button type="button" class="btn btn-warning btn-sm">Label</button>
                      </td>
                    </tr>
                    <tr>
                        <td>
                          76190122
                        </td>
                        <td>
                          SDN Karunganom
                        </td>
                        <td>
                          Surabaya
                        </td>
                        <td>
                          Jawa Timur
                        </td>
                        <td>
                          <button type="button" class="btn btn-info btn-sm">Detail</button>
                          <button type="button" class="btn btn-warning btn-sm">Label</button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          87614234
                        </td>
                        <td>
                          SMPN 10 Malang
                        </td>
                        <td>
                          Malang
                        </td>
                        <td>
                          Jawa Timur
                        </td>
                        <td>
                          <button type="button" class="btn btn-info btn-sm">Detail</button>
                          <button type="button" class="btn btn-warning btn-sm">Label</button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          27629087
                        </td>
                        <td>
                          SDN Bareng 10
                        </td>
                        <td>
                          Sragen
                        </td>
                        <td>
                          Jawa Tengah
                        </td>
                        <td>
                          <button type="button" class="btn btn-info btn-sm">Detail</button>
                          <button type="button" class="btn btn-warning btn-sm">Label</button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          17893512
                        </td>
                        <td>
                          SMAN 10
                        </td>
                        <td>
                          Bandung
                        </td>
                        <td>
                          Jawa Barat
                        </td>
                        <td>
                          <button type="button" class="btn btn-info btn-sm">Detail</button>
                          <button type="button" class="btn btn-warning btn-sm">Label</button>
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