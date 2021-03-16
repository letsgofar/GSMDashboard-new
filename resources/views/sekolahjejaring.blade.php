@extends('layout/masterdashboard')

@section('container')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Sekolah Jejaring GSM</h4>
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
                        27812342
                      </td>
                      <td>
                        SMPN 1 Sleman
                      </td>
                      <td>
                        Sleman
                      </td>
                      <td>
                        Yogyakarta
                      </td>
                      <td>
                        <button type="button" class="btn btn-info btn-sm">Detail</button>
                        <button type="button" class="btn btn-warning btn-sm">Label</button>
                      </td>
                    </tr>
                    <tr>
                        <td>
                          17291754
                        </td>
                        <td>
                          SDN 2 Kulon Progo
                        </td>
                        <td>
                          Kulon Progo
                        </td>
                        <td>
                          Yogyakarta
                        </td>
                        <td>
                          <button type="button" class="btn btn-info btn-sm">Detail</button>
                          <button type="button" class="btn btn-warning btn-sm">Label</button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          16217890
                        </td>
                        <td>
                          SMPN 1 Gunung Kidul
                        </td>
                        <td>
                          Gunung Kidul
                        </td>
                        <td>
                          Yogyakarta
                        </td>
                        <td>
                          <button type="button" class="btn btn-info btn-sm">Detail</button>
                          <button type="button" class="btn btn-warning btn-sm">Label</button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          17261999
                        </td>
                        <td>
                          SDN Muhammadiyah 11
                        </td>
                        <td>
                          Sleman
                        </td>
                        <td>
                          Yogyakarta
                        </td>
                        <td>
                          <button type="button" class="btn btn-info btn-sm">Detail</button>
                          <button type="button" class="btn btn-warning btn-sm">Label</button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          16234509
                        </td>
                        <td>
                          SMAN 1 Yogyakarta
                        </td>
                        <td>
                          Sleman
                        </td>
                        <td>
                          Yogyakarta
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