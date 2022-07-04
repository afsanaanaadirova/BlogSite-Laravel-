@extends('master')
@section('content')
 <main class="container">
        <div class="blog-main">
            <h4>{{ $blog->name }}</h1>
        </div>
        <div class="blog-body">
            <img src="{{ asset($blog->blog_images->first()->image)}}" alt="">
            <div class="blog-body--title">
                <a href="#">{{ $blog->blog_category->name }}</a>
            </div>
            <div class="blog-body--info">
                <p>{!! $blog->description !!}</p>
            </div>
            <div class="blog-body--gallery">
                <div class="container-sm">
                    <div class="row justify-content-center">
                        <div class="col col-md-10">
                            <div class="gallery-container  animated-thumbnails-gallery" style="width: inherit;" id="animated-thumbnails-gallery">
                                 @foreach ($blog->blog_images as $image)
                                <a data-lg-size="1600-1067" class="gallery-item" data-src="{{ asset($image->image) }}">
                                    <img alt={{ $blog->name }} class="img-responsive" src="{{ asset($image->image) }}" />
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

  