@extends('layout/masterdashboard')

@section('container')

<div class="main-panel">      
    <div class="content-wrapper">
      <div class="row">
          @if (session('status'))
          <div class="ml-3 alert alert-success">
              {{ session('status') }}
          </div>
          @endif    
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Buat Modul Materi</h4>
              <p class="card-description">
                Admin bisa membuat mengupload materi dengan mengisi form berikut
              </p>
              <form class="forms-sample" method="POST" action="/modul/createmodul">
                @csrf
                <div class="form-group">
                  <label for="">Pilih Kategori</label>
                  <select class="form-control" id="kategori" name="kategori">
                    <option value="Penciptaan Ekosistem Positif di Sekolah">Penciptaan Ekosistem Positif di Sekolah</option>
                    <option value="Pembelajaran Berbasis Riset">Pembelajaran Berbasis Riset</option>
                    <option value="Pengembangan Karakter">Pengembangan Karakter</option>
                    <option value="Tri Sentra Pendidikan">Tri Sentra Pendidikan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Pilih Level</label>
                  <select class="form-control" id="level" name="level">
                    <option value="Special">Special</option>
                    <option value="Basic">Basic</option>
                    <option value="Advanced">Advanced</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Tingkat Sekolah</label>
                  <select class="form-control" id="tingkat-sekolah" name="tingkat_sekolah">
                    <option value="SD">SD/MI</option>
                    <option value="SMP">SMP/MTS</option>
                    <option value="SMA">SMA/SMK/MA/MAK</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Judul Modul</label>
                  <input type="text" class="form-control" id="title" placeholder="Masukkan Judul Modul" name="judul_modul" required>
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">Deskripsi Modul</label>
                  <textarea class="form-control" id="description" rows="4" name="deskripsi"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">Tantangan</label>
                  <textarea class="form-control" id="task" rows="4" name="tantangan"></textarea>
                </div>
                <div class="form-group">
                  <label>Upload URL Video</label>
                  <input type="text" class="file-upload-default" name="url_video">
                  <div id="field_url_video" >

                  </div>
                  <div class="input-group col-xs-12">
                    <input type="text" name="url_video" id="video_0" class="form-control file-upload-info" placeholder="Masukkan URL Video">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="button" id="add_video">Upload</button>
                    </span>
                  </div>
                </div>
                <div class="form-group">
                  <label>Upload URL Dokumen</label>
                  <input type="text" name="url_dokumen" class="file-upload-default">
                  <div id="field_url_document">

                  </div>
                  <div class="input-group col-xs-12">
                    <input type="text" name="url_dokumen" id="document_0" class="form-control file-upload-info" placeholder="Masukkan URL Dokumen">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="button" id="add_document">Upload</button>
                    </span>
                  </div>
                </div>
                <div class="form-group">
                  <label>Upload URL Gambar</label>
                  <div id="field_url_image" >

                  </div>
                  <div class="input-group col-xs-12">
                    <input type="text" name="url_gambar" id="document_0" class="form-control file-upload-info" placeholder="Masukkan URL Dokumen">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="button" id="add_document">Upload</button>
                    </span>
                  </div>
                  {{-- <input type="file" name="url_gambar" id="image_0" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="button" id="add_image">Choose File</button>
                    </span>
                  </div> --}}
                </div>
                <button type="submit" class="btn btn-primary mr-2" id="upload_modul" onclick="upload_modul()">Submit Modul</button>
                <button class="btn btn-light">Cancel</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection

@section('js')
  <script>
    $(document).ready(function(){
        $('#add_video').click(function(event ){
            event.preventDefault();
            var row = document.getElementsByName('video[]').length;
            console.log(row);
            $('#field_url_video').append(
                '<div style="margin-left:-10px;margin-top:10px;margin-bot:10px" id="row'+row+'" class="col-md-12">'+
                '<input type="text" class="form-control" id="video_0" name="video[]" placeholder="Masukkan URL Video">'+
                '<button  style="display:inline;margin-top:10px;margin-bottom:10px;" name="remove" id="'+row+'" class="btn btn-danger btn_remove">Delete</button>'+
                '</div>'
            );
        });

        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });

        $('#add_document').click(function(event ){
            event.preventDefault();
            var row = document.getElementsByName('document[]').length;
            console.log(row);
            $('#field_url_document').append(
                '<div style="margin-left:-10px;margin-top:10px;margin-bot:10px" id="row_document'+row+'" class="col-md-12">'+
                '<input type="text" class="form-control" id="document_0" name="document[]" placeholder="Masukkan URL Dokumen">'+
                '<button  style="display:inline;margin-top:10px;margin-bottom:10px;" name="remove" id="'+row+'" class="btn btn-danger btn_remove2">Delete</button>'+
                '</div>'
            );
        });

        $(document).on('click', '.btn_remove2', function(){
            var button_id = $(this).attr("id");
            $('#row_document'+button_id+'').remove();
        });

        $('#add_image').click(function(event ){
            event.preventDefault();
            var row = document.getElementsByName('image[]').length;
            console.log(row);
            $('#field_url_image').append(
                '<div style="margin-left:-10px;margin-top:10px;margin-bot:10px" id="row_image'+row+'" class="col-md-12">'+
                '<input type="file" class="form-control filestyle" data-buttonname="btn-white" id="image_0" name="image[]" placeholder="Masukkan Gambar">'+
                '<button  style="display:inline;margin-top:10px;margin-bottom:10px;" name="remove" id="'+row+'" class="btn btn-danger btn_remove3">Delete</button>'+
                '</div>'
            );
        });

        $(document).on('click', '.btn_remove3', function(){
            var button_id = $(this).attr("id");
            $('#row_image'+button_id+'').remove();
        });
    });
  </script>
  <script>
      function upload_modul(){
          var x = getCookie('token_login_user_gsm');
          var appurl = localStorage.getItem("url_elearning_gsm")
          var datas = new FormData(document.getElementById('upload_modul_form'));

          $.ajax({
              type: 'POST',
              url: "{{ secure_url('/') }}/api/v1/admin/modul/create",
              processData: false,
              contentType: false,
              data: datas,
              headers: {"Authorization": "Bearer " + x}
          })
          .done(function(data, status){
            console.log(status)
            swal({
              title: "Selamat",
              text: "Modul berhasil ditambahkan. \n\n Message: "+data.message,
              type: "success"
            }, function(){
              window.location.reload();
            });
          })
          .fail(function(data, status){
            console.log(status);
            var err_message = data.responseText;
            var fix_message = err_message.length > 100 ? err_message.substring(0, 100 - 3) + "..." : err_message;
            swal({
              title: "Maaf",
              text: "Pastikan koneksi internet anda lancar. \n\n Message: "+fix_message,
              type: "error",
              allowOutsideClick: true
            })
          })
      }
  </script>
@endsection