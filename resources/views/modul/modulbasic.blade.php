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
                        Lingkungan Sekolah yang positif dan etis
                      </td>
                      <td>
                        Ekosistem-Positif
                      </td>
                      <td class="text-wrap">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic nihil autem quis doloremque a tenetur nam at saepe commodi. Ut ipsam quos atque dolor non illum repellat vitae culpa aliquid.
                      </td>
                      <td>
                        <div class="text-center">
                        <button type="button" class="btn btn-warning btn-sm">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                        </div>
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