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
                    @foreach($sekolahemodel as $model)
                    <tr>
                      <td class="text-center">
                        {{$model->npsn}}
                      </td>
                      <td class="text-center">
                        {{$model->nama_sekolah}}
                      </td>
                      <td class="text-center">
                        {{$model->kabupaten}}
                      </td>
                      <td class="text-center">
                        {{$model->provinsi}}
                      </td>
                      <td>
                        <div class="text-center">
                        <a href="{{url("/sekolah/sekolahemodel/$model->id")}}" type="button" class="btn btn-info btn-sm">Detail</a>
                        <a type="button" class="btn btn-warning btn-sm">Label</a>
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