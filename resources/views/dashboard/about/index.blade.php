@extends('dashboard.partials.master')
@section('content')
    @if( session()->has('success_message') )
        @include('dashboard.partials.success_alert')
    @endif
    <!-- begin :: Subheader -->
    <div class="toolbar">

        <div class="container-fluid d-flex flex-stack">

            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                 data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                 class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">

                <!-- begin :: Title -->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">About Page</h1>
                <!-- end   :: Title -->

                <!-- begin :: Separator -->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!-- end   :: Separator -->


            </div>

        </div>

    </div>
    <!-- end   :: Subheader -->

    @if( count($errors) > 0 )
        @include('dashboard.partials.error_alert')
    @endif

    <div class="card">
        <!-- begin :: Card body -->
        <div class="card-body p-0">
            <!-- begin :: Form -->
            <form action="{{ route('dashboard.abouts.store') }}" class="form" method="post"
                  enctype="multipart/form-data">
                @csrf
                <!-- begin :: Card header -->
                <div class="card-header d-flex align-items-center">
                    <h3 class="fw-bolder text-dark"> About </h3>
                </div>
                <!-- end   :: Card header -->

                <!-- begin :: Inputs wrapper -->
                <div class="px-8 py-4">


                    <!-- begin :: Row -->
                    <div class="row mb-8">


                        <!-- begin :: Column -->
                        <div class="col-md-12 text-center mb-5 fv-row">

                            <!--begin::Image input-->

                            <!--end::Image input-->




                        </div>
                        <!-- end   :: Column -->

                    </div>
                    <!-- end   :: Row -->


                    <!-- begin :: Row -->
                    <div class="row mb-8">

                        <!-- begin :: Column -->
                        <div class="col-md-6 fv-row">

                            <label class="fs-5 fw-bold mb-2">Title</label>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name_inp" name="title" placeholder="example"
                                       value="{{ old('title') }}">
                                <label for="name_inp">Enter Title</label>
                            </div>
                            @error('title')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror


                        </div>



                        <div class="col-md-6 fv-row">

                            <label class="fs-5 fw-bold mb-2">Description</label>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name_inp" name="description"
                                       placeholder="example"
                                       value="{{ old('description') }}">
                                <label for="name_inp">Enter Description </label>
                            </div>
                            @error('description')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="row mb-8">

                        <div class="col-md-6 fv-row">

                            <label class="fs-5 fw-bold mb-2">Phone</label>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name_inp" name="phone"
                                       placeholder="example"
                                       value="{{ old('phone') }}">
                                <label for="name_inp">Enter Phone </label>
                            </div>
                            @error('phone')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>



                        <div class="col-md-6 fv-row">

                            <label class="fs-5 fw-bold mb-2">Years Of Experience </label>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name_inp" name="year"
                                       placeholder="example"
                                       value="{{ old('year') }}">
                                <label for="name_inp">Enter Years OF Exp </label>
                            </div>
                            @error('year')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        </div>





                        <!-- begin :: Column -->


                        <!-- end   :: Column -->
                        <!-- begin :: Column -->

                        <div class="row mb-8">

                        <!-- end   :: Column -->
                        <div class="col-md-6 fv-row">

                            <label class="fs-5 fw-bold mb-2">No.Of Staff</label>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="email_inp" name="staff"
                                       placeholder="example" value="{{ old('staff') }}">
                                <label for="email_inp">Enter,No.Of Staff</label>
                            </div>
                            @error('staff')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-md-6 fv-row">

                            <label class="fs-5 fw-bold mb-1">No.Of Customers</label>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="email_inp" name="happy_customers"
                                       placeholder="example" value="{{ old('happy_customers') }}">
                                <label for="email_inp">No.Of happy_customers</label>
                            </div>
                            @error('happy_customers')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>


                    </div>

                        <div class="row mb-8">

                        <div class="col-md-6 fv-row">

                            <label class="fs-5 fw-bold mb-2">No.Of Dishes</label>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="email_inp" name="dish"
                                       placeholder="example" value="{{ old('dish') }}">
                                <label for="email_inp">Enter,No.Of Dishes</label>
                            </div>
                            @error('dish')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                            <div class="col-md-6 fv-row">

                                <label class="fs-5 fw-bold mb-2">Address</label>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="email_inp" name="address"
                                           placeholder="example" value="{{ old('address') }}">
                                    <label for="email_inp">Enter Address</label>
                                </div>
                                @error('address')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>


                        </div>
                    <!-- end   :: Row -->

                </div>
                <!-- end   :: Inputs wrapper -->

                <!-- begin :: Form footer -->
                <div class="form-footer p-8 text-end">

                    <!-- begin :: Submit btn -->
                    <button type="submit" class="btn btn-primary">

                        <span class="indicator-label">save</span>

                    </button>
                    <!-- end   :: Submit btn -->

                </div>

                </div>

                <!-- end   :: Form footer -->
            </form>
            <!-- end   :: Form -->
        </div>
        <!-- end   :: Card body -->
    </div>

@endsection
