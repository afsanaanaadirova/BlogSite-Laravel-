@extends('back.layout')
@section('css')
<style>
    .footable-paging{
        text-align: center;
    }
.text-table p{
    display: inline-block;
    overflow: hidden !important;
    text-overflow: ellipsis;
    height: 66px;
    white-space: break-spaces!important;
}
.contact-list td {
    vertical-align: middle;
    padding: 15px 10px!important;
}
.text-table{
    width: 30%;
}
.label-changes{
    cursor: pointer;
}
.label-changes:hover{
    color:#fff;
}
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
                <h4 class="text-themecolor">Bütün Yazılar</h4>
            </div>
            <div class="col-md-7 align-self-center text-end">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb justify-content-end">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Ana Səhifə</a></li>
                        <li class="breadcrumb-item active">Bütün Yazılar</li>
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
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="demo-foo-addrow" class="table m-t-30 table-hover no-wrap contact-list"
                                data-paging="true" data-paging-size="7">
                                <thead>
                                    <tr>
                                        <th>ID #</th>
                                        <th>Title</th>
                                        <th>Kateqori</th>
                                        <th>Text</th>
                                        <th>Status</th>
                                        <th>Şəkil sayı</th>
                                        <th>Tarix</th>
                                        <th>Düzəlt</th>
                                        <th>Sil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($blogs as $blog )
                                <tr>
                                <td>{{ $blog->id }}</td>
                                <td>{{ $blog->name }}</td>
                                <td>{{ $blog->blog_category->name }}</td>
                                <td class="text-table"><p>{{ $blog->description  }}</p></td>
                                <td> 
                                    <input type="checkbox" class="form-check-input" id="checkbox0" {{ $blog->status == 0 ? '' : 'checked' }} onclick="Status({{ $blog->id }})" >
                                </td>
                                <td>{{ count($blog->blog_images) }}</td>
                                <td>{{ $blog->created_at }}</td>
                                <td><a href={{ "/adminpanel/editBlog/".$blog->id }}><i class="ti-pencil-alt"></i></a></td>
                                <td><a href={{ "/adminpanel/deleteBlog/delete/".$blog->id }}><i class="ti-trash"></i></a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    function Status(id){
$.ajax({
    url: '/adminpanel/blog-status/' + id,
    type: "POST",
    data: {"_token": "{{ csrf_token() }}", "id": id, _method: 'PUT'} ,
    success: function(data){
        swal({
                title: "Əməliyyat uğurla yerinə yetirildi!",
                icon: "success",
                timer: '1500',
            });
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
</script>
@endsection