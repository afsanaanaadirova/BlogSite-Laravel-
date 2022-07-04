@extends('master')
@section('content')
 <main class="container">
        <div class="blog-main">
            <h4>{{ $company['name'] }}</h1>
        </div>
        <div class="blog-body">
            @foreach ($company->company_images as $image)
                @if($image->status == '1')
                    <img src="{{ asset($image->image) }}" alt="">
                @endif
            @endforeach
            <div class="blog-body--title">
                <a href="#">{{ $company['name'] }}</a>
            </div>
            <div class="blog-body--info">
                <p>{!! $company['description'] !!}</p>
            </div>         
            <div class="blog-body--gallery">
                <div class="container-sm">
                    <div class="row justify-content-center">
                        <div class="col col-md-10">
                            <div class="gallery-container" id="animated-thumbnails-gallery">
                                @foreach ($company->company_images as $image)
                                <a data-lg-size="1600-1067" class="gallery-item" data-src="{{ asset($image->image) }}">
                                    <img alt={{ $company['name'] }} class="img-responsive" src="{{ asset($image->image) }}" />
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 </main>
 
 @endsection

  