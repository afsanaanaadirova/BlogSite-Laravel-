@extends('back.layout')
@section('css')
<style>
  .img-item{
    position: relative;
    width: 100px;
    height: 100px;
  }
  .img-item img{
    width: 100px;
    height: 100px;
    border: 1px solid blue;
    border-radius: 3px
  }
  .img-item i{
    position: absolute;
    right: 7px;
    top: 9px;
    font-size: 12px;
    cursor: pointer;
    color: #fb9678;
    font-weight: bold;
  }
  .items{
    display: flex;
    column-gap: 10px;
    flex-direction: column;
  }
  .item-imgs{
    display: flex;
    column-gap: 10px;
    row-gap: 18px;
    flex-wrap: wrap;
    margin-top: 14px;
  }
  input[type="file"] {
  display: block;
}
.imageThumb {
    border: 2px solid;
    padding: 1px;
    cursor: pointer;
    height: 182px;
    width: 126px;
    object-fit: contain;
    border: 1px solid #ccc;
    border-radius: 7px;
}
.pic {
  display: inline-block;
  margin: 10px 10px 0 0;
  position: relative;
}
.remove {
  display: block;
  color: white;
  text-align: center;
  cursor: pointer;
  position: absolute;
  top: 0;
  right: 0;
  background: #274083;
  padding: 2px 10px;
}
.remove:hover {
  background: white;
  color: black;
}
.img-projects{
  display: flex;
    column-gap: 20px;
    flex-wrap: wrap;
    row-gap: 20px;
}
.img-project{
  width: 200px;
    height: 200px;
    object-fit: contain;
    border: 1px solid #ccc;
}
.img-projects i{
  position: absolute;
    right: -11px;
    top: -11px;
    color: #3e458a;
    padding: 5px;
    font-weight: 900;
}
.img-projects div{
  position: relative;
}
.ti-close{
  cursor: pointer;
}
.image-form{
    position: absolute;
    left: 0px;
    top: -20px;
    color: #3e458a;
    padding: 5px;
    font-weight: 900;
}
</style>
@endsection
@section('back.content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Şirkətlər</h4>
            </div>
            <div class="col-md-7 align-self-center text-end">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb justify-content-end">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Ana Səhifə</a>
                        </li>
                        <li class="breadcrumb-item active">Şirkətlər</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-body">
                    <h4 class="card-title">Şirkətlər</h4>
                     @if($errors->any())
                     <div class="alert alert-danger">
                         @foreach ($errors->all() as $error )
                             <li>{{ $error }}</li>
                         @endforeach
                     </div>
                     @endif
                  
                    <form class="form-horizontal" action="{{is_null($companies) ?  route('company.store.image') : route('updateCompany',$companies->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Şirkətin adı</label>
                            <input type="text" class="form-control" name="name" value="{{ is_null($companies) ? '' : $companies->name }}" placeholder="Başlıq əlavə edin...">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Text</label>
                            <textarea class="form-control" name="description" id="editor" cols="30" rows="10">{{is_null($companies) ? '' : $companies->description }} </textarea>
                            <div class="summernote"></div>
                        </div>
                        <div class="form-group col-12">
                            <div class="field">
                                <label for="formFileMultiple" class="form-label">Şəkil Yüklə</label>
                                <input class="form-control" type="file" id="files" name="image[]" value="test" type="file" id="formFileMultiple" multiple="">
                              </div>
                        </div>
                        <button type="submit" class="btn btn-primary text-white" style="float: right">Yadda Saxla</button>
                    </form>
                    @if(is_null($companies))
                    <span></span>
                   @else
                     <div class="form-group  col-12 img-projects">
                       @foreach ($companies->company_images as $image)
                      <div>
                        <a href={{ "/adminpanel/destroyCompanyImg/".$image->id }}> 
                          <input type="checkbox" class="form-check-input image-form" id="checkbox0" {{ $image->status == 1 ? 'checked' : '' }} onclick="Status({{ $image->id }})"  >
                          <img alt="{{ $companies['title'] }}" class="img-project" src="{{ asset($image->image) }}" />
                         <i class="ti-close"></i>
                       </a>
                      </div>
                      @endforeach
                     </div> 
                   @endif
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
@endsection
@section('js')
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
<script>
  function Status(id){
    console.log(id);
$.ajax({
  url: '/adminpanel/company_image_status/' + id,
  type: "POST",
  data: {"_token": "{{ csrf_token() }}", "id": id, _method: 'PUT'} ,
  success: function(data){
      alert('succeess')
      location.reload();
  },
  error: function(){
      swal({
              title: "Əməliyyat uğursuz oldu!",
              icon: 'error',
              timer: '1500',
          });
  }
});
}
$(document).ready(function() {
  $(".img-projects .ti-close").click(function(){
    $(this).parent().remove();
  })
    if (window.File && window.FileList && window.FileReader) {
      $("#files").on("change", function(e) {
        var files = e.target.files,
          filesLength = files.length;
        for (var i = 0; i < filesLength; i++) {
          var f = files[i]
          var fileReader = new FileReader();
          console.log(f)
          fileReader.onload = (function(e) {
            var file = e.target;
            $("<span class=\"pic\">" +
              "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
              "<br/><span class=\"remove\"><i class=\"ti-close\"></i></span>" +
              "</span>").insertAfter("#files");
            $(".remove").click(function(){
                var m=document.getElementById("files").files.length;
                for (var i = 0; i < m; i++) {
                    $(this).parent(".pic").remove();
                }
            });
          });
          fileReader.readAsDataURL(f);
        }
        console.log(files);
      });
    } else {
      alert("Your browser doesn't support to File API")
    }
  });
  </script>
  
@endsection