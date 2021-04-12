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
                      <th class="text-center">
                        NPSN
                      </th>
                      <th class="text-center">
                        Nama Sekolah
                      </th>
                      <th class="text-center">
                        Kabupaten
                      </th>
                      <th class="text-center">
                        Provinsi
                      </th>
                      <th class="text-center">
                        Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($sekolahjejaring as $network)
                    <tr>
                      <td class="text-center">
                        {{$network->npsn}}
                      </td>
                      <td class="text-center">
                        {{$network->nama_sekolah}}
                      </td>
                      <td class="text-center">
                        {{$network->kabupaten}}
                      </td>
                      <td class="text-center">
                        {{$network->provinsi}}
                      </td>
                      <td>
                        <div class="text-center">
                        <button type="button" class="btn btn-info btn-sm">Detail</button>
                        <button type="button" class="btn btn-warning btn-sm">Label</button>
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