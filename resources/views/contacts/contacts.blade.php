@extends('layouts.layouts')

@section('title', 'О нас')

@section('content')
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary">
        <div class="page-header-content pt-10">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h1 class="page-header-title mb-3">Контакты</h1>
                        <p class="page-header-text">Есть вопросы? Мы здесь, чтобы помочь!</p>
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
                <div class="col-lg-8 text-center">
                    <h2>Не можете найти ответ, который вам нужен?</h2>
                    <p class="lead mb-5">Contact us and we'll get back to you as soon as possible with a solution to
                        whatever issues you're having with SB UI Kit Pro.</p>
                </div>
            </div>
            <div class="row align-items-center mb-10">
                <div class="col-lg-4 text-center mb-5 mb-lg-0">
                    <div class="section-preheading">Адрес</div>
                    <a href="#!">91074 Herzogenaurach Germany</a>
                </div>
                <div class="col-lg-4 text-center mb-5 mb-lg-0">
                    <div class="section-preheading">Телефон</div>
                    <a href="#!">(555) 565-1846</a>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="section-preheading">Email</div>
                    <a href="#!">support@startbootstrap.com</a>
                </div>
            </div>
            @if(Session::has('alert'))
                <div class="alert alert-blue">
                    Спасибо, Ваша заявка принята! Мы свяжемся с вами в ближайшее время.
                </div>
            @endif
            <form action="{{route('order')}}#form" method="post" id="form">
                @csrf
                @method('POST')
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="text-dark" for="inputName">Ваше имя</label>
                        <input class="form-control py-4" id="inputName" type="text" placeholder="Ваше имя" name="name"/>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="text-dark" for="inputPhone">Ваш телефон</label>
                        <input class="form-control py-4 @error('phone') is-invalid @enderror" id="inputPhone"
                               name="phone" type="text" placeholder="Ваш телефон"/>
                        @error('phone')
                        <div class="invalid-feedback">{{$errors->first('phone')}}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label class="text-dark" for="inputMessage">Текст сообщения</label>
                    <textarea class="form-control py-3" id="inputMessage" type="text" name="text"
                              placeholder="Введите Ваше сообщение" rows="4"></textarea>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary btn-marketing mt-4" type="submit">Отправить</button>
                </div>
            </form>

        </div>

        <div class="svg-border-rounded text-dark">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none"
                 fill="currentColor">
                <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path>
            </svg>
        </div>
    </section>
@endsection
