<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.topnav')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="">
                <h2>Add Catagory</h2>
                <!-- <nav>
                    <ol class="breadcrumb-new">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Catagory</li>
                    </ol>
                </nav> -->
                <div class="card mt-3">
                <div class="card-body">
                    <form action="{{ url('/add_catagory') }}" method="Post">
                        @csrf
                        <div class="mb-3 ">
                            <label for="exampleInputEmail1" class="form-label">Catagory Name </label>
                            <input type="text" class="form-control" id="catagory" name="catagory">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <!-- <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div> -->
                        <!-- <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                             <label class="form-check-label" for="exampleCheck1">Check me out</label> 
                        </div> -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                </div>

                <div class="card mt-3">
                  <div class="card-body">
                    <div class="container mt-3">
                      <table class="table">
                        <thead>
                          <tr>
                            <!-- <th>Id</th> -->
                            <th>Catagory Name</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($catagory as $cat)
                          <tr>
                            <!-- <td>{{$cat->id}}</td> -->
                            <td>{{$cat->catgories_name}}</td>
                            <td>
                              <a href="#" class="btn btn-success">Edit</a>
                              <a onclick="return confirm('Are you sure to delete ths catogory?')" href="{{ url ('delete_catogories',$cat->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>   
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.adminjs')
    <!-- End custom js for this page -->
  </body>
</html>