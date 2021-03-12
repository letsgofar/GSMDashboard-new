@extends('layout/masterdashboard')

@section('container')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Buat Kupon Perubahan</h4>
              <p class="card-description">
                Admin bisa membuat kupon dengan mengisi form berikut
              </p>
              <form class="forms-sample">
                <div class="form-group">
                  <label for="exampleInputName1">Nama Kupon</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama Kupon">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Kode Kupon</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Kode Kupon">
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Kategori Kupon</label>
                    <div class="col-sm-4">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked>
                          Date
                        </label>
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2">
                          Kuota
                        </label>
                      </div>
                    </div>
                  </div>
                <button type="submit" class="btn btn-primary mr-2">buat Kupon</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection