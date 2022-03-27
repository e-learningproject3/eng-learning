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


        <div class="container-fluid page-body-wrapper">
            <div align="center" style="padding-top: 50px;">

                <form action="{{url('store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="control-group col-12">
                            <label for="title">Title</label>
                            <input style="color: gray;" type="text" id="title" class="form-control" name="title" placeholder="Enter Post Title" required>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
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
                                <label for="body">Question</label>
                                <textarea style="color: white;" id="body" class="form-control" name="body" placeholder="Enter Question" rows="" required></textarea>
                            </div>

                            <div class="control-group col-12 mt-2">
                                <label for="body">Option 1</label>
                                <textarea style="color: white;" id="body" class="form-control" name="body" rows="" required></textarea>
                            </div>

                            <div class="control-group col-12 mt-2">
                                <label for="body">Option 2</label>
                                <textarea style="color: white;" id="body" class="form-control" name="body" rows="" required></textarea>
                            </div>

                            <div class="control-group col-12 mt-2">
                                <label for="body">Option 3</label>
                                <textarea style="color: white;" id="body" class="form-control" name="body" rows="" required></textarea>
                            </div>

                            <div class="control-group col-12 mt-2">
                                <label for="body">Option 4</label>
                                <textarea style="color: white;" id="body" class="form-control" name="body" rows="" required></textarea>
                            </div>

                            <div class="col-12 col-sm-6 py-2 wow fadeInRight" >
                                <div class="col-12 col-sm-6 py-2 wow fadeInRight" >
                                    {!! Form::label('correct', 'Correct', ['class' => 'control-label']) !!}
                                    {!! Form::select('correct', $correct_options, old('correct'), ['class' => 'form-control']) !!}
                                    <p style="color: white;"></p>
                                    @if($errors->has('correct'))
                                    <p style="color: white;">
                                        {{ $errors->first('correct') }}
                                    </p>
                                    @endif
                                </div>
                            </div>

                            <div class="control-group col-12 mt-2">
                                <label for="body">Question Explains</label>
                                <textarea style="color: white;" id="body" class="form-control" name="body" rows="" required></textarea>
                            </div>
                            <br><br><br><br>
                            <div class="control-group col-12 text-center">
                                <input type="submit" class="btn btn-success">
                            </div>
                        </div>
                </form>
            </div>
        </div>
        @include('admin.script')
        <!-- End custom js for this page -->
</body>

</html>