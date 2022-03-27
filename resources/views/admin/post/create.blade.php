<!DOCTYPE html>
<html lang="en">

<head>
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

        @include('admin.navbar')


        <div class="container">
            <div class="row">
                <div class="col-12 pt-2">
                    <a href="/blog" class="btn btn-outline-primary btn-sm">Go back</a>
                    <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                        <h1 class="display-4">Create a New Post</h1>
                        <p>Fill and submit this form to create a post</p>

                        <hr>


                        <form action="{{url('store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="control-group col-12">
                                    <label for="title">Post Title</label>
                                    <input style="color: gray;" type="text" id="title" class="form-control" name="title" placeholder="Enter Post Title" required>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                                        <select style="color: black;" name="teacher" id="teacher" class="custom-select">
                                            <option style="color: black;" value="">------Select Teacher-----</option>
                                            @foreach($teacher as $teachers)
                                            <option style="color: black;" value="{{$teachers -> name}}">
                                                {{$teachers -> name}} - {{$teachers -> speciality}}
                                            </option>
                                            @endforeach
                                        </select>

                                        <select style="color: black;" name="topic" id="topic" class="custom-select">
                                            <option style="color: black;" value="">------Select Topic-----</option>
                                            @foreach($topic as $topics)
                                            <option style="color: black;" value="{{$topics -> content}}">
                                                {{$topics -> content}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="control-group col-12 mt-2">
                                        <label for="body">Post Body</label>
                                        <textarea style="color: white;" id="body" class="form-control" name="body" placeholder="Enter Post Body" rows="" required></textarea>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div style="padding-top: 15px;">
                                        <label>Image</label>
                                        <input style="width: 220px;" type="file" name="file" required="">
                                    </div>
                                    <div class="control-group col-12 text-center">
                                        <input type="submit" class="btn btn-success">
                                    </div>
                                </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        @include('admin.script')
        <!-- End custom js for this page -->
</body>

</html>