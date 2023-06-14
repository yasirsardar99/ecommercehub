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

                @if(session()->has('message'))

                <div class="alert alert-success alert-dismissible fade show" role="alert">

                        {{session()->get('message')}}
                </div>

                @endif

                <div class="text-center">
                    <h2> <b>ADD CATEGORY:</b> </h2>
                </div>

                <form action="{{url('/add_category')}}" method="POST">
                    @csrf
                    <div class="text-center my-5 ">
                        <input type="text" name="category" id="category_name" class="input-feild col-md-6 " style="color: #000000" placeholder="Enter your Category Name">
                        <input type="submit" name="submit" value="add Category" style="color: #ffffff; padding:12px; " class=" btn btn-warning  rounded-0 col-md-3">
                    </div>
                </form>

                <table class="table table-bordered trble-striped">
                    <thead>
                        <tr class="text-center" >
                            <th class="text-light"> <strong>Category Name</strong> </th>
                        <th class="text-light"> <strong>Action</strong> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center text-light">
                            <td>shalwar kamees</td>
                            <td>
                                <a class="btn btn-sm btn-danger mx-2" href="#">DELETE</a>
                                <a class="btn btn-sm btn-success" href="#">show</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

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
