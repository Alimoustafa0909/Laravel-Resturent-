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
    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
        <div class="container">
            <div class="row d-flex align-items-stretch no-gutters">
                <div class="col-md-6 pt-5 px-2 pb-2 p-md-5 order-md-last">
                    @if( session()->has('success') )
                        <div class="alert alert-success" role="alert">
                            {{session()->get('success')}}
                        </div>
                    @endif
                    <h2 class="h4 mb-2 mb-md-5 font-weight-bold">Your Review </h2>
                    <form action="{{route('reviews.store')}}" method="POST">
                        @csrf
                        @auth()
                            <div class="form-group">
                                <input name="name" type="text"  value="{{Auth::user()->name}}"  class="form-control" placeholder="Your Name">
                            </div>
                        @else
                            <div class="form-group">
                                <input name="name" type="text" class="form-control" placeholder="Your Name">
                            </div>
                        @endauth
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror



                        <div class="form-group">
                            <textarea  name="content" id cols="30" rows="7" class="form-control" placeholder="Your Review "></textarea>
                            @error('message')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Submit" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4 font-weight-bold">Contact Information</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3 d-flex">
                    <div class="dbox">
                        <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="dbox">
                        <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="dbox">
                        <p><span>Email:</span> <a
                                href="https://preview.colorlib.com/cdn-cgi/l/email-protection#fa93949c95ba83958f8889938e9fd4999597"><span
                                    class="__cf_email__" data-cfemail="acc5c2cac3ecd5c3d9dedfc5d8c982cfc3c1">[email&#160;protected]</span></a>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="dbox">
                        <p><span>Website</span> <a href="#">yoursite.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
@endpush
