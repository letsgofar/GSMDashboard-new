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
                    @foreach($sekolahjejaring as $network)
                    <tr>
                      <td>
                        {{$network->npsn}}
                      </td>
                      <td>
                        {{$network->nama_sekolah}}
                      </td>
                      <td>
                        {{$network->kabupaten}}
                      </td>
                      <td>
                        {{$network->provinsi}}
                      </td>
                      <td>
                        <button type="button" class="btn btn-info btn-sm">Detail</button>
                        <button type="button" class="btn btn-warning btn-sm">Label</button>
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