@extends('layout/masterdashboard')

@section('container')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Modul Basic</h4>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    @foreach ($basics as $basic)
                    <tr>
                      <th class="text-center">
                        Judul
                      </th>
                      <th class="text-center">
                        Kategori
                      </th>
                      <th class="text-center">
                        Deskripsi
                      </th>
                      <th class="text-center">
                        Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        {{$basic->judul_modul}}
                      </td>
                      <td>
                        {{$basic->kategori}}
                      </td>
                      <td class="text-wrap">
                        {{$basic->deskripsi_modul}}
                      </td>
                      <td>
                        <div class="text-center">
                        <a type="button" class="btn btn-warning btn-sm">Edit</a>
                        <a type="button" class="btn btn-danger btn-sm">Delete</a>
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