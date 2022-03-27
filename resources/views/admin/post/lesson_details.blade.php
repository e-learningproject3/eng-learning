<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }
    </style>
    <!-- Required meta tags -->
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="ps-lg-1">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                            <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white me-0"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- partial:partials/_sidebar.html -->

        @include('admin.sidebar')

        <!-- partial -->

        @include('admin.navbar')

        <!-- partial -->

        <div class="w-4/5 m-auto text-left">
        <a class="btn btn-primary" href="{{url('updatelesson', $data -> id)}}">Update</a>
            <div class="py-15">
                <h1 class="text-6xl">
                    {{ $data->name }}
                </h1>

            </div>
            <div class="py-15">
                <img height="400" width="400" src="image/{{$data -> image}}" alt="">
            </div>

        </div>

        <div class="w-4/5 m-auto pt-20">
          
            <span class="text-gray-500">
                By <span class="font-bold italic text-white-800">{{ $data->name }}</span>, Created on {{ date('jS M Y', strtotime($data->updated_at)) }}
            </span>

            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{ $data->content }}
            </p>
        </div>



        @include('admin.script')
        <!-- End custom js for this page -->
</body>

</html>