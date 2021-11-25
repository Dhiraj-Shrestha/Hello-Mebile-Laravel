@extends('admin.app',['activePage' => 'category'])
@section('content')

<div class="container">
    <div class="row">
       
        <div class="col-md-12">
            <div class="card">
                <div class="card-head">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h3 class="mb-0">Add Categories</h3>
                           
                        </div>
                                                            <div class="col-12 text-right">
                              <a href="/categories" class="btn btn-primary btn-sm" style="background-color: #990008 !important">Back to Category</a>
                            </div>
                    </div>   
                    

                </div>
                <div class="card-body">
                    <form action="/categories" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Categories</label>
                            <input id="name" required class="form-control" type="text" name="name" placeholder="Category Name" value="{{old('name')}}">
                        </div>
                        <div class="form-group">
                            <label for="image">Upload</label>
                            <input type="file" required class="form-control" name="image" accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection