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
                <h2>Add Product</h2>
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
                    <form action="{{ url('/add_product') }}" method="Post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 ">
                            <label for="exampleInputEmail1" class="form-label">Product Name </label>
                            <input type="text" class="form-control" id="product" name="product" Required>
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-3 ">
                            <label for="exampleInputEmail1" class="form-label">Catagory </label>
                            <select class="form-control" aria-label="Default select example" name="catagory" Required>
                                <option selected>Open this select menu</option>
                                @foreach ($catagory as $cat)
                                <option value="{{$cat->id}}">{{$cat->catgories_name}}</option>
                                @endforeach
                            </select>
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-3 ">
                            <label for="exampleInputEmail1" class="form-label">Product Description </label>
                            <textarea class="form-control"  id="product_description" Required name="product_description" aria-label="With textarea"></textarea>
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-3 ">
                            <label for="exampleInputEmail1" class="form-label">Image </label>
                            <input type="file" class="form-control" id="product_image" name="product_image">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-3 ">
                            <label for="exampleInputEmail1" class="form-label">Quantity </label>
                            <input type="text" class="form-control" id="product_quantity" Required name="product_quantity" aria-label="Dollar amount (with dot and two decimal places)">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-3 ">
                            <label for="exampleInputEmail1" class="form-label">Price </label>
                            <input type="text" class="form-control" Required id="product_price" name="product_price" aria-label="Dollar amount (with dot and two decimal places)">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-3 ">
                            <label for="exampleInputEmail1" class="form-label">Discount Price </label>
                            <input type="text" class="form-control" Required id="dis_price" name="dis_price">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
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