@extends('layouts.layouts')

@section('title', 'Контакты')

@section('content')
    <header class="page-header page-header-light bg-img-cover overlay overlay-light overlay-80" style='background-image: url("https://source.unsplash.com/R-LK3sqLiBw/1600x1200")'>
        <div class="page-header-content">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10 text-center">
                        <h1 class="page-header-title">Контакты</h1>
                        <p class="page-header-text mb-5">Есть вопросы? Мы здесь, чтобы помочь!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="svg-border-rounded text-light">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
        </div>
    </header>
    <section class="bg-light py-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="page-header-title">Get more leads, more customers, and more revenue</h1>
                    <p class="page-header-text mb-5">Stop losing leads because of a non-optimized landing page. Start converting your users to paying customers and winning more sales today with a new landing page!</p>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <h6 class="mb-1">Адрес</h6>
                            <a href="#!">91074 Herzogenaurach Germany</a>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <h6 class="mb-1">Телефон</h6>
                            <a href="#!">(555) 565-1846</a>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <h6 class="mb-1">Email</h6>
                            <a href="#!">support@startbootstrap.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    @if(Session::has('alert'))
                        <div class="alert alert-blue">
                            Спасибо, Ваша заявка принята! Мы свяжемся с вами в ближайшее время.
                        </div>
                    @endif

                    <div class="card rounded-lg text-dark">
                        <div class="card-header py-4">Напишите нам</div>
                        <div class="card-body">
                            <form action="{{route('order')}}#form" method="post" id="form">
                                @csrf
                                @method('POST')
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label class="small text-gray-600" for="name">Ваше имя</label>
                                        <input class="form-control" id="name" type="text" name="name"/>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="small text-gray-600" for="phone">Ваш телефон</label>
                                        <input class="form-control  @error('phone') is-invalid @enderror" id="phone" type="text" name="phone" />
                                        @error('phone')
                                            <div class="invalid-feedback">{{$errors->first('phone')}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="small text-gray-600" for="text">Текст сообщения</label>
                                    <textarea class="form-control" id="text" rows="4" name="text"></textarea>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary btn-marketing" type="submit">Отправить</button>
                                </div>
                            </form>
                        </div>
                    </div>
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
