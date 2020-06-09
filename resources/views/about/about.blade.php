@extends('layouts.layouts')

@section('title', 'О нас')

@section('content')
    <header class="page-header page-header-light bg-img-cover overlay overlay-light overlay-80" style='background-image: url("https://source.unsplash.com/R-LK3sqLiBw/1600x1200")'>
        <div class="page-header-content py-5">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10 text-center">
                        <h1 class="page-header-title">Просто сделать очень сложно</h1>
                        <p class="page-header-text mb-5">именно этим мы и занимаемся</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="svg-border-rounded text-white">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
        </div>
    </header>
    <section class="bg-white py-10">
        <div class="container" data-aos="fade-up">
            <h1>Delicata - отражение лаконичности, индивидуального стиля , высокого сервиса.</h1>
            <p class="lead">Мы думаем, что это норма жизни, и жить легко, удобно и красиво нужно только захотеть.</p>
            <p>После чего обратиться к нам и расслабиться. Мы сделаем все для того, чтобы нашему клиенту было комфортно на всех этапах совместной работы, а интерьер радовал долгие годы и был истинно "вашим".  Пожалуйста, посмотрите ролик о нас, нашем подходе к работе и о том, как мы мыслим.</p>
        </div>

    </section>
    <section class="bg-light py-10">
        <div class="container">
            <div class="row justify-content-center z-1">
                <div class="col-lg-8" data-aos="fade-up">
                    <div class="card lift mb-n15">
                        <div class="card-body p-2">
                            <iframe width="100%" height="400" src="https://www.youtube.com/embed/gC8ec_y6ewg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-10">
        <div class="container" data-aos="fade-up">
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
