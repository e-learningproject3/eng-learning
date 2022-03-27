<!DOCTYPE html>
<html lang="en">

<head>

  <style type="text/css">
    label {
      display: block;
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
    <div class="container-fluid page-body-wrapper">

    <!-- alert -->
      <div class="container" align="center" style="padding-top: 100px;">
        @if(session() -> has('message'))
        <button type="button" class="close" data-dismiss="alert">
          x
        </button>
        <div class="alert alert-success">
          {{session() -> get('message')}}
        </div>
        @endif

      <!-- form register -->

        <form action="{{url('upload_topic')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div style="padding-top: 15px;">
            <label> Content</label>
            <input type="text" style="color: black;" name="content" placeholder="Write content..." required="">
          </div>

          <div style="padding-top: 15px;">
            <input type="submit" class="btn btn-success">
          </div>
        </form>
      </div>



    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->

    <!-- partial -->
  </div>
  <!-- main-panel ends -->
  <!-- page-body-wrapper ends -->
  <!-- container-scroller -->
  <!-- plugins:js -->
  @include('admin.script')
  <!-- End custom js for this page -->
</body>

</html>