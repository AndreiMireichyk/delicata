@extends('layouts.layouts')

@section('title', 'Услуги и цены')

@section('content')
    <section class="bg-light py-10">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Simple Pricing</h2>
                <p class="lead">Easy pricing means no suprises.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="card pricing h-100">
                        <div class="card-body p-5">
                            <div class="text-center">
                                <div class="badge badge-light badge-pill badge-marketing badge-sm">Free</div>
                                <div class="pricing-price"><sup>$</sup>0<span class="pricing-price-period">/mo</span></div>
                            </div>
                            <ul class="fa-ul pricing-list">
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span><span class="text-dark">1 user</span>
                                </li>
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span><span class="text-dark">Community support</span>
                                </li>
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-circle text-gray-200"></i></span>Style customizer
                                </li>
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-circle text-gray-200"></i></span>Custom components
                                </li>
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-circle text-gray-200"></i></span>Expanded utilities
                                </li>
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-circle text-gray-200"></i></span>Third-party integration
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
                                <div class="badge badge-primary-soft badge-pill badge-marketing badge-sm text-primary">Standard</div>
                                <div class="pricing-price"><sup>$</sup>19<span class="pricing-price-period">/mo</span></div>
                            </div>
                            <ul class="fa-ul pricing-list">
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span><span class="text-dark">Up to 15 users</span>
                                </li>
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span><span class="text-dark">Email and live chat support</span>
                                </li>
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span><span class="text-dark">Style customizer</span>
                                </li>
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span><span class="text-dark">Custom components</span>
                                </li>
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span><span class="text-dark">Expanded utilities</span>
                                </li>
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span><span class="text-dark">Third-party integration</span>
                                </li>
                                <li class="pricing-list-item">
                                    <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span><span class="text-dark">Layout options</span>
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
                                <p class="card-text py-10">We offer discounts for larger organizations. Contact us to inquire about enterprise level plans!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 text-center">
                <a class="btn btn-primary btn-marketing rounded-pill" href="javascript:void(0);">Связаться с нами</a>
            </div>
        </div>
        <div class="svg-border-rounded text-light">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
        </div>
    </section>

    <section class="bg-white py-10">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4"><i data-feather="layers"></i></div>
                    <h3>Built for developers</h3>
                    <p class="mb-0">Our customizable, block-based build system makes creating your next project fast and easy!</p>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4"><i data-feather="smartphone"></i></div>
                    <h3>Modern responsive design</h3>
                    <p class="mb-0">Featuring carefully crafted, mobile-first components, your end product will function beautifully on any device!</p>
                </div>
                <div class="col-lg-4">
                    <div class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4"><i data-feather="code"></i></div>
                    <h3>Complete documentation</h3>
                    <p class="mb-0">All of the layouts, page sections, components, and utilities are fully covered in this products docs.</p>
                </div>
            </div>
        </div>
        <div class="svg-border-rounded text-light">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
        </div>
    </section>

    <section class="bg-light py-10">
        <div class="container">

            <div class="accordion accordion-faq" id="billingAccordion">
                <div class="card border-bottom">
                    <div class="card-body">
                        <div class="accordion-faq-title">
                            <div class="mr-2">
                                <h4 class="mb-0">Billing</h4>
                                <p class="card-text text-gray-500">Issues related to logging in, registering a new account, and setting your account password</p>
                            </div>
                            <div class="badge badge-success-soft badge-pill text-success">3 Answers</div>
                        </div>
                    </div>
                </div>
                <div class="card accordion-faq-item">
                    <a class="card-header collapsed" id="billingHeadingOne" data-toggle="collapse" data-target="#billingCollapseOne" aria-expanded="true" aria-controls="billingCollapseOne" href="javascript:void(0);"
                    ><div class="accordion-faq-item-heading">I can't remember my account email address.<i class="accordion-faq-item-heading-arrow" data-feather="chevron-down"></i></div
                        ></a>
                    <div class="collapse" id="billingCollapseOne" aria-labelledby="authHeadingOne" data-parent="#billingAccordion"><div class="card-body border-bottom">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div></div>
                </div>
                <div class="card accordion-faq-item">
                    <a class="card-header collapsed" id="billingHeadingTwo" data-toggle="collapse" data-target="#billingCollapseTwo" aria-expanded="true" aria-controls="billingCollapseTwo" href="javascript:void(0);"
                    ><div class="accordion-faq-item-heading">Why doesn't my password work?<i class="accordion-faq-item-heading-arrow" data-feather="chevron-down"></i></div
                        ></a>
                    <div class="collapse" id="billingCollapseTwo" aria-labelledby="authHeadingTwo" data-parent="#billingAccordion"><div class="card-body border-bottom">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div></div>
                </div>
                <div class="card accordion-faq-item">
                    <a class="card-header collapsed" id="billingHeadingThree" data-toggle="collapse" data-target="#billingCollapseThree" aria-expanded="true" aria-controls="billingCollapseThree" href="javascript:void(0);"
                    ><div class="accordion-faq-item-heading">Why do I keep getting logged out of my account?<i class="accordion-faq-item-heading-arrow" data-feather="chevron-down"></i></div
                        ></a>
                    <div class="collapse" id="billingCollapseThree" aria-labelledby="authHeadingThree" data-parent="#billingAccordion"><div class="card-body border-bottom">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div></div>
                </div>
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
