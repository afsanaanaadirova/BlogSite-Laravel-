@extends('master')
@section('content')
<main class="container-fluid">
    <div class="main-blogs" id="main-blogs">
        <div class="main-blogs--large">
            <div class="main">
                <div class="main-title">
                    <h3>Lahiyələr</h3>
                </div>
                <div class="main-category">
                    @foreach ($categories as $category)
                    <a href="{{ route('ByCatProjectsPage', $category->id) }}">{{ $category->name }}</a> 
                      @endforeach
                </div>
            </div>
            @foreach ($projects as $key => $project)
              @php
              $key++;
             @endphp
            @if ($key <= 2)
            <div class="large-item">
                <a href="{{route('ProjectDetailsPage', $project->id) }}">
                    <img src="{{ asset($project->project_images->first()->image ?? 'None')  }}" alt="">
                    <div class="title">
                        <div class="title-info">{{ $project->category->name }}</div>
                        <div class="title-date">{{ $project->date }}</div>
                    </div>
                    <div class="description">
                        <h4>{{ $project->title }}</h4>
                        <p>{!! $project->description !!}</p>
                    </div>
                </a>
            </div>
            @endif
         @endforeach
        </div>
        <div class="main-blogs--small owl-carousel owl-theme" id="projects-carousel">
            @for($i=0; $i<=(count($projects)-2)/4; $i++)
            <div class="item-slider">
                @for ($j= $i*4+2; $j<($i+1)*4+2; $j++)
               @if (count($projects) <= $j)
                @break
                @endif 
                <div class="item">
                    <div class="item-image">
                       <a  href="{{route('ProjectDetailsPage', $projects[$j]->id) }}">
                        <img src="{{ asset($projects[$j]->project_images->first()->image ?? 'None')  }}" alt="">
                       </a>
                    </div>
                    <div class="item-infos">
                       <div class="item-top">
                           <div class="item-top--info">{{ $category->name}}</div>
                           <div class="item-top--date">{{ $projects[$j]->date }}</div>
                       </div>
                       <div class="item-bottom">
                           <p>{{ $projects[$j]->title }}</p>
                       </div>
                   </div>
                </div>
                @endfor
            </div>
            @endfor
        </div>
    </div>
</main>
@endsection
