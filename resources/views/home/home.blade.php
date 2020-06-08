@extends('layouts.layouts')

@section('title', 'Наши проекты')

@section('content')
    <header class="page-header page-header-dark bg-img-cover overlay overlay-60"
            style='background-image: url("https://source.unsplash.com/R-LK3sqLiBw/1600x1200")'>
        <div class="page-header-content">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h1 class="page-header-title mb-3">Наши проекты</h1>
                        <p class="page-header-text mb-0">Интерьеры для жизни</p>
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
            <div class="card-columns card-columns-portfolio">
                @foreach($projects as $project)
                    <a class="card card-portfolio" href="{{route('detail', $project->slug)}}">
                        <img class="card-img-top" src="{{$project->getCover()}}" alt="..."/>
                        <div class="card-body">
                            <div class="card-title">{{$project->title}}</div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    <section class="bg-white py-10">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 text-center py-5">
                    <h2>Нужен дизайн помещения?</h2>
                    <p class="lead text-gray-500 mb-5">Мы готовы обсудить ваши потребности и идеи. Сейчас мы
                        открыты для новых заказов.</p>
                    <a class="btn btn-primary btn-marketing rounded-pill" href="{{route('contacts')}}">Связаться с
                        нами</a>
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
