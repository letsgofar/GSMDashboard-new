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
              <h4 class="card-title">Edit Peran Mentor</h4>
              <p class="card-description">
                Admin bisa memngubah peran 'Mentor' menjadi 'Admin' disini.
              </p>
              <form class="forms-sample" method="POST" action="/listuser/{{$mentor->id}}">
                @method('put')
                @csrf
                <div class="form-group">
                  <label for="">Ubah Role</label>
                  <input type="text" class="form-control" id="title" placeholder="" name="role" value="{{$mentor->role}}" required>
                </div>
                <button type="submit" class="btn btn-primary mr-2" id="upload_modul" onclick="upload_modul()">Update Role</button>
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