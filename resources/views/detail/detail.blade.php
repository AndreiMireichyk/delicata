@extends('layouts.layouts')

@section('title', $project->title)

@section('content')
    <header class="page-header page-header-dark bg-img-cover overlay overlay-60"
            style='background-image: url("{{$project->getCover()}}")'>
        <div class="page-header-content">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h1 class="page-header-title mb-3">{{$project->title}}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="svg-border-rounded text-light">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none"
                 fill="currentColor">
                <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path>
            </svg>
        </div>
    </header>
    <section class="bg-light py-10">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">

                    @if($project->description)
                        <div class="text-center">
                            <p class="lead mb-5">
                                {{$project->description}}
                            </p>
                        </div>
                    @endif

                    @foreach($project->images as $image)
                        <img class="img-fluid shadow rounded-lg mb-2" src="{{$image['url']}}"/>
                        <div class="small muted font-italic text-center mb-5">{{$image['filename']}}</div>
                    @endforeach

                    <hr class="my-5"/>
                    <div class="text-center"><a class="btn btn-transparent-dark btn-marketing rounded-pill"
                                                href="{{route('home')}}">Все проекты</a></div>
                </div>
            </div>
        </div>
        <div class="svg-border-rounded text-dark">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none"
                 fill="currentColor">
                <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path>
            </svg>
        </div>
    </section>
@endsection
