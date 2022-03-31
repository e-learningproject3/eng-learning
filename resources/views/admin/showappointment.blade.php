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
                <table class="table">
                    <tr>
                        <th style="padding: 10px;padding-right: 60px;text-align: center; color:white;">Customer Name</th>
                        <th style="padding: 10px;padding-right: 60px;text-align: center; color:white;">Email</th>
                        <th style="padding: 10px;padding-right: 60px;text-align: center; color:white;">Phone</th>
                        <th style="padding: 15px;padding-right: 60px;text-align: center; color:white;">Teacher Name</th>
                        <th style="padding: 10px;padding-right: 60px;text-align: center; color:white;">Date</th>
                        <th style="padding: 10px;padding-right: 60px;text-align: center; color:white;">Message</th>
                        <th style="padding: 10px;padding-right: 60px;text-align: center; color:white;">Status</th>
                        <th style="padding: 10px;padding-right: 60px;text-align: center; color:white;">Approved</th>
                        <th style="padding: 10px;padding-right: 60px;text-align: center; color:white;">Cancelled</th>

                    </tr>

                    @foreach($data as $appoint)
                    <tr align="center" style="background-color: silver; color: black;">
                        <td style="padding: 10px;padding-right: 60px;text-align: center; color:white;">{{$appoint -> name}}</td>
                        <td style="padding: 10px;padding-right: 60px;text-align: center; color:white;">{{$appoint -> email}}</td>
                        <td style="padding: 10px;padding-right: 60px;text-align: center; color:white;">{{$appoint -> phone}}</td>

                         @if($appoint -> teacher === null) 
                        <!-- <td>{{$appoint -> teacher}}</td> -->
                        <td>Waiting for new teacher</td>
                         @else
                         <td style="padding: 10px;padding-right: 100px;text-align: center; color:white;">{{$appoint -> teacher}}</td>
                        @endif

                        <!-- <td>{{$appoint -> teacher}}</td> -->

                        <td style="padding: 10px;padding-right: 100px;text-align: center; color:white;">{{$appoint -> date}}</td>
                        <td style="padding: 10px;padding-right: 100px;text-align: center; color:white;">{{$appoint -> message}}</td>
                        <td style="padding: 10px;padding-right: 100px;text-align: center; color:white;">{{$appoint -> status}}</td>
                        <td>
                            <a class="btn btn-outline-success" href="{{url('approved', $appoint -> id)}}">Approved</a>
                        </td>
                        <td>
                            <a class="btn btn-outline-danger" href="{{url('cancelled', $appoint -> id)}}">Cancelled</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <!-- partial -->

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <!-- <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer> -->
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>

</html>