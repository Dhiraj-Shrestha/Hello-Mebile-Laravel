@extends('admin.app',['activePage' => 'category'])
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <h3 class="mb-0">Sub Categories</h3>
                              
                            </div>
                                                                <div class="col-12 text-right">
                                  <a href="/subcategories" class="btn btn-primary btn-sm" style="background-color: #990008 !important">Back to Category</a>
                                </div>
                        </div>                           
                    </div>
                    <div class="card-body">
                        <form action="/subcategories" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="category_id">Category Name</label>
                                <select id="select" class="form-control" name="category_id">
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        
                                    @endforeach

                                </select>
                           
                            </div>
                            <div class="form-group">
                                <label for="name">Sub Category Name</label>
                                <input id="name" class="form-control" type="text" name="name" placeholder="Category Name">
                            </div>
                            <div class="form-group">
                                <label for="image">Sub Category Image</label>
                                <input type="file" class="form-control" name="image" accept="image/*">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
@endsection