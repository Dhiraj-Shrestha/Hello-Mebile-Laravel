@extends('admin.app',['activePage' => 'category'])
@section('content')

<div class="content">

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card" style="font-size: .875rem; border-radius: 3px; padding: 15px;">
                    <div class="card-header" style="background: linear-gradient(
                        60deg,firebrick,white); color:white;box-shadow: 0 1px 4px 0 rgb(0 0 0 / 14%); display:block;border-radius: 3px;
                        margin-top: -20px;
                        padding: 15px;">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Sub Categories</h3>
                                <p class="text-sm mb-0">
                                    All sub categories is listed below
                                </p>
                            </div>
                                <div class="col-4 text-right">
                                
                                    <a href="/subcategories/create" class="btn btn-primary btn-sm" style="background-color: #990008 !important">Create Sub Category</a>
                                </div>
                        </div>
                        
                    </div>
                    <div class="col-8 mt-2">
                    </div>
                    <div class="table-responsive py-4" style="max-height: 73vh;">
                        <table class="table align-items-center table-flush table-hover dataTable dtr-inline collapsed " id="datatable">
                            <thead>
                                <tr>
                                   
                                    <th>Sub Category Name</th>
                                    <th>Image</th>
                                    <th>Belong to Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($subcategories as $subcategory)
                                    <tr>
                                       
                                        <td>{{ $subcategory->name }}</td>
                                        <td>
                                            <span class="avatar avatar-lg rounded-circle">
                                                <img class="avatar border-gray"
                                                    src="{{asset('subCategoryImage/' .$subcategory->image) }}" alt="..."
                                                    style="  vertical-align: middle;
                                                    width: 70px;
                                                    height: 70px;
                                                    border-radius: 50%;">
                                            </span>
                                        </td>
                                        <td>{{ $subcategory->category->name }}</td>
                                        <td>

                                        <form action="/subcategories/{{ $subcategory->id }}" method="post">
                                            @csrf
                                            <a href="/subcategories/{{ $subcategory->id }}/edit"
                                                class="btn btn-primary btn-sm">Edit</a>
                                      
                                   
                                      
                                            @method('delete')
                                            <button type="submit"
                                                class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                        </td>
                                        {{-- <td>
                                            <div class="row">
                                            <div class="col">
                                                <a href="/subcategories/{{ $subcategory->id }}/edit" class="btn btn-primary btn-sm" style="background-color: #8b4f52 !important">Edit</a>
                                            </div>
                                       
                                            <div class="col"> 
                                            <form action="subcategories/{{ $subcategory->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm" style="background-color: #990008 !important">Delete</button>
                                            </form>
                                            </div>
                                        </td> --}}
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


@endsection