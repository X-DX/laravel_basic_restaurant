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
                <h2 class="h5 no-margin-bottom">Show Food</h2>

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
                <div class="title"><strong>Striped table with hover effect</strong></div>
                <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Food Title</th>
                            <th>Details</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $data)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $data->title }}</td>
                            <td>{{ $data->detail }}</td>
                            <td>{{ $data->price }}</td>
                            <td class="avatar">
                                <img src="storage/foodImage/{{ $data->image }}" width="80" class="img-fluid rounded-circle">
                            </td>
                            <td>
                                <button class="btn-primary">Delete</button>
                            </td>
                            <td>
                                <button class="btn btn-info">Update</button>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                    </table>
                </div>
            </div>
        </div>
        

        @include('admin.footer')
        </div>
    </div>
    @include('admin.js')
  </body>
</html>