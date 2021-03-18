@extends('layout/masterdashboard')

@section('container')

<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Buat Modul Materi</h4>
              <p class="card-description">
                Admin bisa membuat mengupload materi dengan mengisi form berikut
              </p>
              <form class="forms-sample">
                <div class="form-group">
                  <label for="exampleFormControlSelect2">Pilih Kategori</label>
                  <select class="form-control" id="exampleFormControlSelect2">
                    <option>Penciptaan Ekosistem Positif di Sekolah</option>
                    <option>Pembelajaran Berbasis Riset</option>
                    <option>Pengembangan Karakter</option>
                    <option>Tri Sentra Pendidikan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect2">Pilih Level</label>
                  <select class="form-control" id="exampleFormControlSelect2">
                    <option>Special</option>
                    <option>Basic</option>
                    <option>Advanced</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect2">Tingkat Sekolah</label>
                  <select class="form-control" id="exampleFormControlSelect2">
                    <option>SD/MI</option>
                    <option>SMP/MTS</option>
                    <option>SMA/SMK/MA/MAK</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputName1">Judul Modul</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Masukkan Judul Modul">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">Deskripsi Modul</label>
                  <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">Tantangan</label>
                  <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                </div>
                <div class="form-group">
                  <label>Upload URL Video</label>
                  <input type="file" name="video" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Masukkan URL Video">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                  </div>
                </div>
                <div class="form-group">
                  <label>Upload URL Dokumen</label>
                  <input type="file" name="dokumen" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Masukkan URL Dokumen">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                  </div>
                </div>
                <div class="form-group">
                  <label>Upload URL Gambar</label>
                  <input type="file" name="image" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="button">Choose File</button>
                    </span>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit Modul</button>
                <button class="btn btn-light">Cancel</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection