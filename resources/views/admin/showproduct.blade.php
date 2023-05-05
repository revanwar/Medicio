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
                <h2>Products Details</h2>
                <!-- <nav>
                    <ol class="breadcrumb-new">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Catagory</li>
                    </ol>
                </nav> -->
                @if (session()->has('message'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ session()->get('message') }}</strong>
                    </div>
                @endif
                <div class="card mt-3">
                  <div class="card-body">
                    <div class="container mt-3">
                      <table class="table">
                        <thead>
                          <tr>
                            <!-- <th>Id</th> -->
                            <th>Image</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Dis. Price</th>
                            <th>Catagory</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($product as $prod)
                          <tr>
                            <td><img src="product1/{{$prod->image}}" alt="{{$prod->image}}" width="1000" height="1600"></td>
                            <td>{{$prod->title}}</td>
                            <td>{{$prod->quantity}}</td>
                            <td>{{$prod->price}}</td>
                            <td>{{$prod->discunt_price}}</td>
                            <td>{{$prod->catgories->catgories_name}}</td>
                            <td>
                              <a href="{{ url ('edit_product',$prod->id) }}" class="btn btn-success">Edit</a>
                              <a onclick="return confirm('Are you sure to delete ths catogory?')" href="{{ url ('delete_product',$prod->id) }}" class="btn btn-danger">Delete</a>
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