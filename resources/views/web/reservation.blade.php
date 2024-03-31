@extends('web.partials.master')
@push('styles')
@endpush
@section('content')
    @if($slider)
        <section

            class="hero-wrap hero-wrap-2"
                 style="background-image: url({{asset('storage/images/Sliders/' . $slider['image'])}});"
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

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container-fluid px-0">
            @if( session()->has('message') )
                <div class="alert alert-success" role="alert">
                    {{session()->get('message')}}
                </div>
            @endif

            <div class="row d-flex no-gutters">
                <div class="col-md-6 order-md-last ftco-animate makereservation p-4 p-md-5 pt-5">
                    @if( session()->has('error') )
                        <div class="alert text-danger" role="alert">
                            {{session()->get('error')}}
                        </div>
                    @endif

                    <div class="py-md-5">
                        <div class="heading-section ftco-animate mb-5">
                            <span class="subheading">Book a table</span>
                            <h2 class="mb-4">Make Reservation</h2>
                        </div>
                        <form action="{{route('reservatixbon.store')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for>Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Your Name">
                                        @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for>Email</label>
                                        <input type="text" name="email" class="form-control" placeholder="Your Email">

                                        @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for>Phone</label>
                                        <input type="text" name="phone" class="form-control" placeholder="Phone">
                                        @error('phone')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Date</label>
                                        <input type="date" name="date" class="form-control" placeholder="Date" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                                        @error('date')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>

                                @if ($errors->has('error'))
                                    <span class="text-danger">{{ $errors->first('error') }}</span>
                                @endif

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="time">Time</label>
                                        <div class="select-wrap one-third">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select name="time" id="time" class="form-control" required>
                                                <option value="">Choose a time</option>
                                                <option value="11:00">11:00 AM</option>
                                                <option value="12:00">12:00 PM</option>
                                                <option value="13:00">13:00 PM</option>
                                                <option value="14:00">14:00 PM</option>
                                                <option value="15:00">15:00 PM</option>
                                                <option value="16:00">16:00 PM</option>
                                                <option value="17:00">17:00 PM</option>
                                                <option value="18:00">18:00 PM</option>
                                                <option value="19:00">19:00 PM</option>
                                                <option value="20:00">20:00 PM</option>
                                                <option value="21:00">21:00 PM</option>
                                                <option value="22:00">22:00 PM</option>
                                                <option value="23:00">23:00 PM</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="person">Person</label>
                                        <div class="select-wrap one-third">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select name="person" id="person" class="form-control" required>
                                                <option value="">Choose number of persons</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4+">4+</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary py-3 px-5">
                                            Make a reservation
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
@push('scripts')
@endpush
