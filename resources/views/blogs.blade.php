@extends('master')
@section('content')
<main class="container-fluid">
    <div class="main-opinions" id="main-opinions">
        <h1>Mövzular</h1>
        <div class="big-demo" data-js="hero-demo">
            <div class="ui-group">
                <div class="filters button-group js-radio-button-group">
                    @foreach ($BlogCategories as $key => $blogcategory)
                    @php
                        $key++;
                    @endphp
                    <button class="button {{ $key==1 ? 'is-checked' : ''}} "  data-filter="{{'.'.\Illuminate\Support\Str::slug($blogcategory->name) }}" href="{{ $blogcategory->id }}">{{ $blogcategory->name }}</button> 
                @endforeach
                </div>
            </div>
            <div class="grid">
                @foreach ($blogs as $blog)
                <div class="element-item {{\Illuminate\Support\Str::slug($blog->blog_category->name) }}">
                        <div class="element-item--info" name="image[]" multiple>
                    <a href="{{route('BlogDetailsPage', $blog->id) }}" style="position: relative;z-index: 9;">
                        <img src="{{ asset($blog->blog_images->first()->image) }}" alt="">
                         </a>
                            <div class="info-titles" style="z-index: 99;">
                                <a href="{{route('BlogDetailsPage', $blog->id) }}" class="info-titles--btn">{{ $blog->blog_category->name }}</a>
                            </div>
                        </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</main>
@endsection