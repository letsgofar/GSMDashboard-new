@extends('layout/masterdashboard')

@section('container')

<div class="main-panel">        
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Profil Sekolah</h4>
                  <form class="form-sample">
                    <div class="row">
                      <div class="col-md-3">
                            <img href="/" alt="image">
                      </div>
                      <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h4 class="card-title">Nama :</h4>
                                    <p class="card-description">
                                      SD Nasional KPS
                                    </p>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h4 class="card-title ">NPSN :</h4>
                                    <p class="card-description">
                                      30402881 
                                    </p>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h4 class="card-title ">Kabupaten/Kota :</h4>
                                    <p class="card-description">
                                       Balikpapan
                                    </p>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h4 class="card-title ">Bentuk :</h4>
                                    <p class="card-description">
                                      SD
                                    </p>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h4 class="card-title ">Alamat :</h4>
                                    <p class="card-description">
                                      JL. Sekolah No. 1
                                    </p>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h4 class="card-title ">Provinsi :</h4>
                                    <p class="card-description">
                                       Kalimantan Timur
                                    </p>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h4 class="card-title ">Status :</h4>
                                    <p class="card-description">
                                      Swasta 
                                    </p>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h4 class="card-title ">Kecamatan</h4>
                                    <p class="card-description">
                                      Kec. balikpapan Kota
                                    </p>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h4 class="card-title ">Label GSM :</h4>
                                    <p class="card-description">
                                        <mark class="bg-warning text-white">Sekolah Jejaring GSM</mark> 
                                    </p>
                                  </div>
                            </div>
                        </div>
                      </div>

                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Raport Sekolah</h4>
                  <button type="button" class="btn btn-outline-info btn-icon-text">
                    Create Raport Sekolah                        
                  </button>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Judul
                          </th>
                          <th>
                            Dibuat Oleh
                          </th>
                          <th>
                            Tanggal Diperbarui
                          </th>
                          <th>
                            Tanggal Dibuat
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            ...
                          </td>
                          <td>
                            ...
                          </td>
                          <td>
                            ...
                          </td>
                          <td>
                            ...
                          </td>
                          <td>
                            <button type="button" class="btn btn-info btn-sm"></button>
                            <button type="button" class="btn btn-warning btn-sm"></button>
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