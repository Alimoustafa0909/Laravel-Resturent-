@extends('web.partials.master')

@push('styles')

@endpush

@section('content')
    {{--HeaderSliders--}}
    <section class="home-slider owl-carousel js-fullheight">

        @foreach($HeaderSliders as $slider)
            <div class="slider-item js-fullheight"
                 style="background-image:url({{asset('storage/images/Sliders/' . $slider['image'])}}) ;">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text js-fullheight justify-content-center align-items-center"
                         data-scrollax-parent="true">
                        <div class="col-md-12 col-sm-12 text-center ftco-animate">
                            <span class="subheading">{{$slider->title}}</span>
                            <h1 class="mb-4">{{$slider->body}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
    {{-- End HeaderSliders--}}
    {{--Showing Product On Slider--}}
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="featured">
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-md-3">
                                    <div class="featured-menus ftco-animate">
                                        <div class="menu-img img"
                                             style="background-image: url({{asset('storage/images/products/' . $product['image'])}});"></div>
                                        <div class="text text-center">
                                            <h3>{{$product->name}}</h3>
                                            <p>{{$product->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--End Showing Products--}}

    <section class="ftco-section ftco-wrap-about">
        <div class="container">
            <div class="row">
                @foreach($BodySliders as $slider)
                    <div class="col-md-7 d-flex">
                        <div class="img img-1 mr-md-2"
                             style="background-image: url({{asset('storage/images/Sliders/' . $slider['image'])}});"></div>
                        <div class="img img-2 ml-md-2"
                             style="background-image: url({{asset('storage/images/Sliders/' . $slider['image'])}});"></div>

                    </div>
                    <div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
                        <div class="heading-section mb-4 my-5 my-md-0">
                            <span class="subheading">{{$slider->title}}</span>

                            <h2 class="mb-4">{{$slider->body}}</h2>
                        </div>
                        <p class="time">

                            <span>Sun - Fri <strong>10 AM - 11 PM</strong></span>
                        <h1> ------------ </h1>
                        </p>

                    </div>
                @endforeach
                @if($about)
            </div>


        </div>
    </section>
    <section class="ftco-section ftco-counter img ftco-no-pt" id="section-counter">
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-md-9">
                    <div class="row d-md-flex align-items-center">
                        <div
                            class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="{{$about->year}}">0</strong>
                                    <span>Years of Experienced</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="{{$about->dish}}">0</strong>
                                    <span>Menus/Dish</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="{{$about->staff}}">0</strong>
                                    <span>Staffs</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="{{$about->happy_customers}}">0</strong>
                                    <span>Happy Customers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                    <h2></h2>
                @endif
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row no-gutters justify-content-center mb-5 pb-2">
                <div class="col-md-12 text-center heading-section ftco-animate">
                    <span class="subheading">Specialties</span>
                    <h2 class="mb-4">Our Menu</h2>
                </div>
            </div>
            <div class="row no-gutters d-flex align-items-stretch">
                @if($breakfast_pro)
                    <div class="col-md-12 col-lg-6 d-flex p-4 align-self-stretch">
                        <div class="menus d-sm-flex ftco-animate align-items-stretch">
                            <div class="menu-img img"
                                 style="background-image: url({{asset('storage/images/products/' . $breakfast_pro['image'])}});"></div>
                            <div class="text d-flex align-items-center">
                                <div>
                                    <div class="d-flex">
                                        <div class="one-half">
                                            <h3>{{$breakfast_pro->name}}</h3>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">{{$breakfast_pro->price}}</span>
                                        </div>
                                    </div>
                                    <p>{{$breakfast_pro->description}}</p>
                                    <p><a href="#" class="btn btn-primary">Order now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <h1></h1>
                @endif


                @if($lunch_pro)
                    <div class="col-md-12 col-lg-6 d-flex p-4 align-self-stretch">
                        <div class="menus d-sm-flex ftco-animate align-items-stretch">
                            <div class="menu-img img"
                                 style="background-image: url({{asset('storage/images/products/' . $lunch_pro['image'])}});"></div>
                            <div class="text d-flex align-items-center">
                                <div>
                                    <div class="d-flex">
                                        <div class="one-half">
                                            <h3>{{$lunch_pro->name}}</h3>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">{{$lunch_pro->price}}</span>
                                        </div>
                                    </div>
                                    <p>{{$lunch_pro->description}}</p>
                                    <p><a href="#" class="btn btn-primary">Order now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <h1></h1>
                @endif

                @if($dinner_pro)
                    <div class="col-md-12 col-lg-6 d-flex p-4 align-self-stretch">
                        <div class="menus d-sm-flex ftco-animate align-items-stretch">
                            <div class="menu-img img"
                                 style="background-image: url({{asset('storage/images/products/' . $dinner_pro['image'])}});"></div>
                            <div class="text d-flex align-items-center">
                                <div>
                                    <div class="d-flex">
                                        <div class="one-half">
                                            <h3>{{$dinner_pro->name}}</h3>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">{{$dinner_pro->price}}</span>
                                        </div>
                                    </div>
                                    <p>{{$dinner_pro->description}}</p>
                                    <p><a href="#" class="btn btn-primary">Order now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <h1></h1>
                @endif
                @if($drinks_pro)
                    <div class="col-md-12 col-lg-6  p-4 d-flex align-self-stretch">
                        <div class="menus d-sm-flex ftco-animate align-items-stretch">
                            <div class="menu-img img"
                                 style="background-image: url({{asset('storage/images/products/' . $drinks_pro['image'])}});"></div>
                            <div class="text d-flex align-items-center">
                                <div>
                                    <div class="d-flex">
                                        <div class="one-half">
                                            <h3>{{$drinks_pro->name}}</h3>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">{{$drinks_pro->price}}</span>
                                        </div>
                                    </div>
                                    <p>{{$drinks_pro->description}}</p>
                                    <p><a href="#" class="btn btn-primary">Order now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <h1></h1>
                @endif
                @if($desserts_pro)
                    <div class="col-md-12 col-lg-6 p-4 d-flex align-self-stretch">
                        <div class="menus d-sm-flex ftco-animate align-items-stretch">
                            <div class="menu-img img"
                                 style="background-image: url({{asset('storage/images/products/' . $desserts_pro['image'])}});"></div>
                            <div class="text d-flex align-items-center">
                                <div>
                                    <div class="d-flex">
                                        <div class="one-half">
                                            <h3>{{$desserts_pro->name}}</h3>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">{{$desserts_pro->price}}</span>
                                        </div>
                                    </div>
                                    <p>{{$desserts_pro->description}}</p>
                                    <p><a href="#" class="btn btn-primary">Order now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @else

                    <h1></h1>
                @endif

                    @if($wine_pro)
                        <div class="col-md-12 col-lg-6 p-4 d-flex align-self-stretch">
                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                <div class="menu-img img"
                                     style="background-image: url({{asset('storage/images/products/' . $wine_pro['image'])}});"></div>
                                <div class="text d-flex align-items-center">
                                    <div>
                                        <div class="d-flex">
                                            <div class="one-half">
                                                <h3>{{$wine_pro->name}}</h3>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">{{$wine_pro->price}}</span>
                                            </div>
                                        </div>
                                        <p>{{$wine_pro->description}}</p>
                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <h1></h1>
                    @endif
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-12 text-center heading-section ftco-animate">
                    <span class="subheading">Chef</span>
                    <h2 class="mb-4">Our Master Chef</h2>
                </div>
            </div>
            <div class="row">
                @foreach($chefs as $chef)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="staff">
                            <div class="img"
                                 style="background-image: url({{asset('storage/images/chefs/' . $chef['image'])}});"></div>
                            <div class="text pt-4">
                                <h3>{{$chef->name}}</h3>
                                <span class="position mb-2"> {{$chef->role}}</span>
                                <div class="faded">
                                    <ul class="ftco-social d-flex">
                                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a>
                                        </li>
                                        <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a>
                                        </li>
                                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="ftco-section testimony-section img">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-12 text-center heading-section ftco-animate">
                    <span class="subheading">Testimony</span>
                    <h2 class="mb-4">Trusted Reviews</h2>
                </div>
            </div>
            <div class="row ftco-animate justify-content-center">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                      @foreach($reviews as $review)
                        <div class="item">
                            <div class="testimony-wrap text-center pb-5">
        <span class="quote d-flex align-items-center justify-content-center">
            <i class="icon-quote-left"></i>
            </span>

                                <div class="text p-3">
                                    <p class="mb-4">{{$review->content}}</p>
                                    <p class="name">{{$review->name}}</p>
                                    <span class="position">Customer</span>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
@endpush

