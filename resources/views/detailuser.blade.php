@extends('layout/masterdashboard')

@section('container')

<div class="main-panel">        
  <div class="content-wrapper">
      <div class="row">
          <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Detail User</h4>
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
                                    {{$user->nama}}
                                  </p>
                                </div>
                          </div>
                          <div class="col-md-4">
                              <div class="card-body">
                                  <h4 class="card-title ">Jabatan :</h4>
                                  <p class="card-description">
                                      {{$user->jabatan}}
                                  </p>
                                </div>
                          </div>
                          <div class="col-md-4">
                              <div class="card-body">
                                  <h4 class="card-title ">Sekolah :</h4>
                                  <p class="card-description">
                                      {{$user->sekolah}}
                                  </p>
                                </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-4">
                              <div class="card-body">
                                  <h4 class="card-title ">Kabupaten :</h4>
                                  <p class="card-description">
                                      {{$user->kabupaten}}
                                  </p>
                                </div>
                          </div>
                          <div class="col-md-4">
                              <div class="card-body">
                                  <h4 class="card-title ">Label GSM :</h4>
                                  <p class="card-description">
                                      <mark class="bg-warning text-white">{{$user->label_gsm}}</mark> 
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


@endsection