<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <body>
    
    @include('admin.header')

    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                {{-- @include('admin.body') --}}
                <h2 class="h5 no-margin-bottom">Add Food</h2>

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="col-lg-12">
            <div class="block">
                <div class="title"><strong class="d-block">Add Food</strong><span class="d-block">Varities of food</span></div>
                    <div class="block-body">
                        <form action="{{ url('upload_food') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label class="form-control-label">Food Title</label>
                                <input type="text" placeholder="Food Title" class="form-control" name="title" required>
                            </div>
                            <div class="form-group">       
                                <label class="form-control-label">Food Details</label>
                                <textarea placeholder="Food Details" cols="30" rows="10" class="form-control" name="detail" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Food Price</label>
                                <input type="text" placeholder="Food Price" class="form-control" name="price" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Food Image</label>
                                <input type="file" placeholder="Food Image" class="form-control" name="img" required>
                            </div>
                            <div class="form-group">       
                                <input type="submit" value="Add Food" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        

        @include('admin.footer')
        </div>
    </div>
    @include('admin.js')
  </body>
</html>