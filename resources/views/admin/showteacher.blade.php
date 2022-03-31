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
        <div class="container-fluid page-body-wrapper">
            <div class="table-responsive">
                <br>
                <a class="btn btn-outline-success" href="{{url('add_teacher_view')}}">Add Teacher</a>
                <br>
                <br>
                <table class="table">
                    <thead>
                        <tr style="color: white;">
                            <th style="padding: 10px;padding-right: 100px;text-align: center; color:white;">Teacher Name</th>
                            <th style="padding: 10px;padding-right: 100px;text-align: center; color:white;">Phone</th>
                            <th style="padding: 10px;padding-right: 100px;text-align: center; color:white;">Speciality</th>
                            <!-- <th style="padding: 10px;">Room No</th> -->
                            <th style="padding: 10px;padding-right: 100px;text-align: center; color:white;">Image</th>
                            <th style="padding: 10px;padding-right: 100px;text-align: center; color:white;">Delete</th>
                            <th style="padding: 10px;padding-right: 100px;text-align: center; color:white;">Update</th>

                        </tr>
                    </thead>
                    @foreach($data as $teacher)
                    <tr>
                        <td style="padding: 10px;padding-right: 100px;text-align: center; color:white;">{{$teacher -> name}}</td>
                        <td style="padding: 10px;padding-right: 100px;text-align: center; color:white;">{{$teacher -> phone}}</td>
                        <td style="padding: 10px;padding-right: 100px;text-align: center; color:white;">{{$teacher -> speciality}}</td>
                        <td style="padding: 10px;padding-right: 100px;text-align: center; color:white;"><img height="100" width="100" src="teacherimage/{{$teacher -> image}}" alt=""></td>
                        <td>
                            <a onclick="return confirm('Are you sure to delete this?')" class="btn btn-outline-danger" href="{{url('deleteteacher', $teacher -> id)}}">Delete</a>
                        </td>
                        <td>
                            <a class="btn btn-outline-primary" href="{{url('updateteacher', $teacher -> id)}}">Update</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

        @include('admin.script')
        <!-- End custom js for this page -->
</body>

</html>