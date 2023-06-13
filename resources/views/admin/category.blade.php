<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    @include('admin.style')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
            @include('admin.header')
        <!-- partial -->


        <div class="main-panel">
            <div class="content-wrapper">
                <div class="text-center">
                    <h2> <b>ADD CATEGORY:</b> </h2>
                </div>

                <div class="text-center my-5 ">
                    <input type="text" name="name" id="category_name" class="input-feild col-md-6 " style="color: #000000" placeholder="Enter your Category Name">
                    <input type="submit" name="submit" value="add Category" style="color: #ffffff; padding:12px; " class=" btn btn-warning  rounded-0 col-md-3">
                </div>
            </div>
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
