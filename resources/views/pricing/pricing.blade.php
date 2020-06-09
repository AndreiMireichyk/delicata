@extends('layouts.layouts')

@section('title', 'Услуги и цены')

@section('content')
    <header class="page-header page-header-light bg-img-cover overlay overlay-light overlay-80"
            style='background-image: url("https://source.unsplash.com/R-LK3sqLiBw/1600x1200")'>
        <div class="page-header-content py-5">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10 text-center">
                        <h1 class="page-header-title">Simple Pricing</h1>
                        <p class="page-header-text mb-5">Easy pricing means no suprises.</p>
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
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="card pricing h-100">
                        <div class="card-body p-5">
                            <div class="text-center">
                                <div class="badge badge-light badge-pill badge-marketing badge-sm">Free</div>
                                <div class="pricing-price"><sup>$</sup>0<span class="pricing-price-period">/mo</span>
                                </div>
                            </div>
                            <ul class="fa-ul pricing-list">
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span><span
                                        class="text-dark">1 user</span>
                                </li>
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span><span
                                        class="text-dark">Community support</span>
                                </li>
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-circle text-gray-200"></i></span>Style
                                    customizer
                                </li>
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-circle text-gray-200"></i></span>Custom
                                    components
                                </li>
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-circle text-gray-200"></i></span>Expanded
                                    utilities
                                </li>
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-circle text-gray-200"></i></span>Third-party
                                    integration
                                </li>
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-circle text-gray-200"></i></span>Layout options
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="card pricing h-100">
                        <div class="card-body p-5">
                            <div class="text-center">
                                <div class="badge badge-primary-soft badge-pill badge-marketing badge-sm text-primary">
                                    Standard
                                </div>
                                <div class="pricing-price"><sup>$</sup>19<span class="pricing-price-period">/mo</span>
                                </div>
                            </div>
                            <ul class="fa-ul pricing-list">
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span><span
                                        class="text-dark">Up to 15 users</span>
                                </li>
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span><span
                                        class="text-dark">Email and live chat support</span>
                                </li>
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span><span
                                        class="text-dark">Style customizer</span>
                                </li>
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span><span
                                        class="text-dark">Custom components</span>
                                </li>
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span><span
                                        class="text-dark">Expanded utilities</span>
                                </li>
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span><span
                                        class="text-dark">Third-party integration</span>
                                </li>
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span><span
                                        class="text-dark">Layout options</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card pricing h-100">
                        <div class="card-body p-5">
                            <div class="text-center">
                                <div class="badge badge-light badge-pill badge-marketing badge-sm">Enterprise</div>
                                <p class="card-text py-10">
                                    We offer discounts for larger organizations. Contact us to
                                    inquire about enterprise level plans!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 text-center">
                <a class="btn btn-primary btn-marketing rounded-pill" href="{{route('contacts')}}">Связаться с нами</a>
            </div>
        </div>
        <div class="svg-border-angled text-white">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"
                 fill="currentColor">
                <polygon points="0,100 100,0 100,100"></polygon>
            </svg>
        </div>
    </section>

    {{--Step 1--}}
    <section class="bg-white py-10">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="badge badge-primary-soft text-primary badge-marketing badge-pill mb-3">ЭТАП 1</div>
                    <div class="mb-3">
                        <h2>Планировочное решение</h2>
                        <p class="lead">
                            На этом этапе вы получаете на выбор несколько вариантов удачных и логичных планировок.
                            Удачная планировка — основа, "скелет" комфортного интерьера.
                            Дизайнер прорабатывает пространство с учетом пожелания всех членов семьи, продумывает
                            функциональность каждого квадратного метра.
                        </p>
                    </div>
                    <div>
                        <div class="collapse mb-2" id="step1">
                            <strong>-</strong> Обмер помещения, план обмеров помещения<br>
                            <strong>-</strong> Составление подробного технического задания<br>
                            <strong>-</strong> Планировочное решение<br>
                            <strong>-</strong> План демонтажа<br>
                            <strong>-</strong> План монтажа<br>
                            <strong>-</strong> План перепланирования<br>
                            <strong>-</strong> План перепланировки с расстановкой мебели<br>
                        </div>
                        <a class="small text-arrow-icon" href="#step1" data-toggle="collapse">
                            Состав
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-arrow-right">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-md-9 col-lg-6" data-aos="slide-left">
                    <div class="mb-4">
                        <div class="content-skewed content-skewed-left">
                            <img class="img-fluid shadow-lg rounded-lg"
                                 src="{{asset('/app/assets/img/pricing/step1.jpg')}}" alt="Планировочное решение"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="svg-border-angled text-light">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"
                 fill="currentColor">
                <polygon points="0,100 100,0 100,100"></polygon>
            </svg>
        </div>
    </section>

    {{--Step 2--}}
    <section class="bg-light py-10">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="badge badge-primary-soft text-primary badge-marketing badge-pill mb-3">ЭТАП 2</div>
                    <div class="mb-5">
                        <h2>3D визуализация интерьера</h2>
                        <p class="lead">
                            До начала визуализации дизайнер предложит коллажи настроения вашего будущего интерьера.
                            После этого Вы получите предложение дизайнера в виде фотореалистичных изображений. Мы
                            покажем интерьер со всех необходимых ракурсов. Внести правки, добавить элементы, о которых
                            давно мечтали – все эти эксперименты можно проводить сейчас, чтобы избежать дорогостоящих
                            стилистических ошибок позже.
                            Здесь происходит предварительный подбор отделочных материалов, мебели, освещения.
                        </p>
                    </div>
                </div>
                <div class="col-md-9 col-lg-6" data-aos="slide-left">
                    <div class="mb-4">
                        <div class="content-skewed content-skewed-left">
                            <img class="img-fluid shadow-lg rounded-lg"
                                 src="{{asset('/app/assets/img/pricing/step2.jpg')}}" alt="3D визуализация интерьера"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="svg-border-angled text-white">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"
                 fill="currentColor">
                <polygon points="0,100 100,0 100,100"></polygon>
            </svg>
        </div>
    </section>

    {{--Step 3--}}
    <section class="bg-white py-10">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="badge badge-primary-soft text-primary badge-marketing badge-pill mb-3">ЭТАП 3</div>
                    <div class="mb-3">
                        <h2>Рабочая документация</h2>
                        <p class="lead">
                            Рабочая документация
                            Именно здесь дизайн превращается в выверенные до миллиметра чертежи, без которых строители
                            не работают. Грамотность чертежей – показатель качественной работы дизайнера.
                        </p>
                    </div>
                    <div>
                        <div class="collapse mb-2" id="step3">
                            <strong>-</strong> План обмеров<br>
                            <strong>-</strong> План демонтажа<br>
                            <strong>-</strong> План монтажа<br>
                            <strong>-</strong> План перепланировки<br>
                            <strong>-</strong> План перепланировки с расстановкой мебели<br>
                            <strong>-</strong> План перепланировки с расстановкой мебели с размерам<br>
                            <strong>-</strong> План привязок полов<br>
                            <strong>-</strong> Схема устройства полов с электрообогревом<br>
                            <strong>-</strong> Экспликация полов<br>
                            <strong>-</strong> План привязок и уровни потолков<br>
                            <strong>-</strong> План привязки светильников<br>
                            <strong>-</strong> Схема групп освещения<br>
                            <strong>-</strong> План размещения силовых и слаботочных розеток<br>
                            <strong>-</strong> План подвода воды и канализации, размещения смесителей<br>
                            <strong>-</strong> Развертки всех основных помещени<br>
                            <strong>-</strong> Развертка по стенам санузла<br>
                        </div>
                        <a class="small text-arrow-icon" href="#step3" data-toggle="collapse">
                            Полный список чертежей
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-arrow-right">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-md-9 col-lg-6" data-aos="slide-left">
                    <div class="mb-4">
                        <div class="content-skewed content-skewed-left">
                            <img class="img-fluid shadow-lg rounded-lg"
                                 src="{{asset('/app/assets/img/pricing/step3.jpg')}}" alt="Рабочая документация"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="svg-border-angled text-light">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"
                 fill="currentColor">
                <polygon points="0,100 100,0 100,100"></polygon>
            </svg>
        </div>
    </section>

    {{--Step 4--}}
    <section class="bg-light py-10">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="badge badge-primary-soft text-primary badge-marketing badge-pill mb-3">ЭТАП 4</div>
                    <div class="mb-5">
                        <h2>Спецификация</h2>
                        <p class="lead">
                            Спецификация
                            Вы получаете спецификацию по мебели и светильникам.
                            Это таблица с полным перечнем всей мебели, освещения, розеток, выключателей, которые были
                            запланированы в дизайн-проекте.
                            В спецификации вы найдете всю необходимую информацию, которая понадобится при подборе и
                            закупке указанных элементов: объемы, артикулы, производители.
                        </p>
                    </div>
                </div>
                <div class="col-md-9 col-lg-6" data-aos="slide-left">
                    <div class="mb-4">
                        <div class="content-skewed content-skewed-left">
                            <img class="img-fluid shadow-lg rounded-lg"
                                 src="{{asset('/app/assets/img/pricing/step4.jpg')}}" alt="Спецификация"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="svg-border-angled text-white">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"
                 fill="currentColor">
                <polygon points="0,100 100,0 100,100"></polygon>
            </svg>
        </div>
    </section>

    {{--Step 5--}}
    <section class="bg-white py-10">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="badge badge-primary-soft text-primary badge-marketing badge-pill mb-3">ЭТАП 5</div>
                    <div class="mb-5">
                        <h2>Авторский надзор стройки</h2>
                        <p class="lead">
                            Даже при наличии подробных чертежей у строителей возникают дополнительные вопросы в процессе
                            ремонта - мы помогаем их решить в ходе авторского надзора стройки.
                            Мы контролируем закуп и поставку всех материалов, мебели, светильников, отслеживаем сроки и
                            берем на себя общение с поставщиками и строителями.
                        </p>
                    </div>
                </div>
                <div class="col-md-9 col-lg-6" data-aos="slide-left">
                    <div class="mb-4">
                        <div class="content-skewed content-skewed-left">
                            <img class="img-fluid shadow-lg rounded-lg"
                                 src="{{asset('/app/assets/img/pricing/step5.jpg')}}" alt="Авторский надзор стройки"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="svg-border-angled text-light">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"
                 fill="currentColor">
                <polygon points="0,100 100,0 100,100"></polygon>
            </svg>
        </div>
    </section>

    {{--Step 6--}}
    <section class="bg-light py-10">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="badge badge-primary-soft text-primary badge-marketing badge-pill mb-3">ЭТАП 6</div>
                    <div class="mb-5">
                        <h2>Декорирование интерьера</h2>
                        <p class="lead">
                            Детали решают все!
                            Подбор тканей для штор, подушек, покрывал, контроль отшива, закуп посуды, декора, все вплоть
                            до распечатки ваших фото и размещения их в интерьере.
                            Мы хотим, чтобы вы радовались такому родному, уютному и только вашему дому, где лучше, чем в
                            любой точке мира!
                        </p>
                    </div>
                </div>
                <div class="col-md-9 col-lg-6" data-aos="slide-left">
                    <div class="mb-4">
                        <div class="content-skewed content-skewed-left">
                            <img class="img-fluid shadow-lg rounded-lg"
                                 src="{{asset('/app/assets/img/pricing/step6.jpg')}}" alt="Декорирование интерьера"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="svg-border-angled text-white">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"
                 fill="currentColor">
                <polygon points="0,100 100,0 100,100"></polygon>
            </svg>
        </div>
    </section>

    <section class="bg-white py-10">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 text-center py-5">
                    <h2>Нужен дизайн помещения?</h2>
                    <p class="lead text-gray-500 mb-5">Мы готовы обсудить ваши потребности и идеи. Сейчас мы открыты для
                        новых заказов.</p>
                    <a class="btn btn-primary btn-marketing rounded-pill" href="{{route('contacts')}}">Связаться с
                        нами</a>
                </div>
            </div>
        </div>
        <div class="svg-border-angled text-dark">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"
                 fill="currentColor">
                <polygon points="0,100 100,0 100,100"></polygon>
            </svg>
        </div>
    </section>
@endsection
