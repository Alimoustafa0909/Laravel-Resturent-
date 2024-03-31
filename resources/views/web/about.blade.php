@extends('web.partials.master')

@push('styles')

@endpush

@section('content')
    @if($slider)
        <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('storage/images/Sliders/' . $slider['image'])}});"
                 data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-end justify-content-center">
                    <div class="col-md-9 ftco-animate text-center mb-4">
                        <h1 class="mb-2 bread">{{$slider->title}}</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i
                                        class="ion-ios-arrow-forward"></i></a></span> <span>Menu <i
                                    class="ion-ios-arrow-forward"></i></span></p>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="hero-wrap hero-wrap-2"
                 data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
        </section>
    @endif

    <section class="ftco-section ftco-wrap-about">
        @if($abouts)


        <div class="container">

            <div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
                <div class="heading-section mb-4 my-5 my-md-0">

                    <h2>{{$abouts->title}}</h2>

                </div>
                <p>{{$abouts->description}}</p>
                <p class="time">

                    <span><a href="#">+0{{$abouts->phone}}</a></span>
                </p>
            </div>
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
                                    <strong class="number" data-number="{{$abouts->year}}">0</strong>
                                    <span>Years of Experienced</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="{{$abouts->dish}}">0</strong>
                                    <span>Menus/Dish</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="{{$abouts->staff}}">0</strong>
                                    <span>Staffs</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="{{$abouts->happy_customers}}">0</strong>
                                    <span>Happy Customers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    @else
        <h2></h2>
    @endif
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
                                <h3> {{$chef->name}}</h3>
                                <span class="position mb-2">{{$chef->role}}</span>
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
    @if($slider)
        <section class="ftco-section img"
                 style="background-image: url({{asset('storage/images/Sliders/' . $slider['image'])}})"
                 data-stellar-background-ratio="0.5">
            @else
                <section class="ftco-section img"
                         data-stellar-background-ratio="0.5">
    @endif

        <div class="container">
            <div class="row d-flex">
                <div class="col-md-7 ftco-animate makereservation p-4 px-md-5 pb-md-5">
                    <div class="heading-section ftco-animate mb-5 text-center">
                        <span class="subheading">Book a table</span>
                        <h2 class="mb-4">Make Reservation</h2>
                    </div>
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for>Name</label>
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for>Email</label>
                                    <input type="text" class="form-control" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for>Phone</label>
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for>Phone</label>
                                    <input type="text" class="form-control" id="book_date" placeholder="Date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for>Time</label>
                                    <input type="text" class="form-control" id="book_time" placeholder="Time">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for>Person</label>
                                    <div class="select-wrap one-third">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name id class="form-control">
                                            <option value>Person</option>
                                            <option value>1</option>
                                            <option value>2</option>
                                            <option value>3</option>
                                            <option value>4+</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group text-center">
                                    <input type="submit" value="Make a Reservation"
                                           class="btn btn-primary py-3 px-5">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section testimony-section img">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-12 text-center heading-section ftco-animate">
                    <span class="subheading">Testimony</span>
                    <h2 class="mb-4">Happy Customer</h2>
                </div>
            </div>
            <div class="row ftco-animate justify-content-center">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap text-center pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
<span class="quote d-flex align-items-center justify-content-center">
<i class="icon-quote-left"></i>
</span>
                                </div>
                                <div class="text p-3">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia
                                        and Consonantia, there live the blind texts.</p>
                                    <p class="name">Jason McClean</p>
                                    <span class="position">Customer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
<span class="quote d-flex align-items-center justify-content-center">
<i class="icon-quote-left"></i>
</span>
                                </div>
                                <div class="text p-3">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia
                                        and Consonantia, there live the blind texts.</p>
                                    <p class="name">Mark Stevenson</p>
                                    <span class="position">Customer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
<span class="quote d-flex align-items-center justify-content-center">
<i class="icon-quote-left"></i>
</span>
                                </div>
                                <div class="text p-3">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia
                                        and Consonantia, there live the blind texts.</p>
                                    <p class="name">Art Leonard</p>
                                    <span class="position">Customer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/person_4.jpg)">
<span class="quote d-flex align-items-center justify-content-center">
<i class="icon-quote-left"></i>
</span>
                                </div>
                                <div class="text p-3">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia
                                        and Consonantia, there live the blind texts.</p>
                                    <p class="name">Rose Henderson</p>
                                    <span class="position">Customer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
<span class="quote d-flex align-items-center justify-content-center">
<i class="icon-quote-left"></i>
</span>
                                </div>
                                <div class="text p-3">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia
                                        and Consonantia, there live the blind texts.</p>
                                    <p class="name">Ian Boner</p>
                                    <span class="position">Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
@endpush
