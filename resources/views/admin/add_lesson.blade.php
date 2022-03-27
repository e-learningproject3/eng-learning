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

        <!-- partial -->

        @include('admin.navbar')

        <div class="container">
            <div align="center" style="padding-top: 100px;">
                <form action="{{url('upload_lesson')}}" method="post">
                    <input type="text" name="title" placeholder="Title..." class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">
                    <br>


                    <p style="color: black;">
                        <textarea name="content" id="editor" placeholder="Description..."></textarea>
                    </p>
                    <br>

                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                        <select name="teacher" id="teacher" class="custom-select">
                            <option value="">------Select Teacher-----</option>
                           
                        </select>
                    </div>
                    <br>

                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                        <select name="topic" id="topic" class="custom-select">
                            <option value="">------Select Topic-----</option>

                        </select>
                    </div>
            </div>
            <br>
            <input type="submit" class="btn btn-success">

            <div class="container-fluid page-body-wrapper">

                </form>


                <script src="{{ asset('ckeditor/ckeditor5-build-classic/ckeditor.js')}}"></script>
                <script>
                    // Remove a plugin from the default setup.
                    ClassicEditor
                        .create(document.querySelector('#editor'))
                        .catch(error => {
                            console.log(error);
                        });
                </script>
            </div>
        </div>



    </div>


    @include('admin.script')
    <!-- End custom js for this page -->
</body>

</html>