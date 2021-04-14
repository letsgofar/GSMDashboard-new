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
                                      {{$emodel->nama_sekolah}}
                                    </p>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h4 class="card-title ">NPSN :</h4>
                                    <p class="card-description">
                                        {{$emodel->npsn}} 
                                    </p>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h4 class="card-title ">Kabupaten/Kota :</h4>
                                    <p class="card-description">
                                        {{$emodel->kabupaten}}
                                    </p>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h4 class="card-title ">Bentuk :</h4>
                                    <p class="card-description">
                                        {{$emodel->bentuk}}
                                    </p>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h4 class="card-title ">Alamat :</h4>
                                    <p class="card-description">
                                        {{$emodel->alamat}}
                                    </p>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h4 class="card-title ">Provinsi :</h4>
                                    <p class="card-description">
                                        {{$emodel->provinsi}}
                                    </p>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h4 class="card-title ">Status :</h4>
                                    <p class="card-description">
                                        {{$emodel->status}}
                                    </p>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h4 class="card-title ">Kecamatan</h4>
                                    <p class="card-description">
                                        {{$emodel->kecamatan}}
                                    </p>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h4 class="card-title ">Label GSM :</h4>
                                    <p class="card-description">
                                        <mark class="bg-warning text-white">{{$emodel->label_gsm}}</mark> 
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
        
    </div>
</div>
</div>

@endsection