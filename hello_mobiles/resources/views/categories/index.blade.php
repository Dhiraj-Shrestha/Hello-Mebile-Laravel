<style>
    .dropbtn {
        background-color: red;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        right: 0;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: orange;
    }

</style>

@extends('admin.app',['activePage' => 'category'])
@section('content')

    <div class="content">
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col">
                    <div class="card" style="font-size: .875rem; border-radius: 3px;
          
                        padding: 15px;">
                        <div class="card-header" style="background: linear-gradient(
                                60deg,firebrick,white); color:white;box-shadow: 0 1px 4px 0 rgb(0 0 0 / 14%); display:block;border-radius: 3px;
                                margin-top: -20px;
                                padding: 15px;">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Categories</h3>
                                    <p class="text-sm mb-0">
                                        This is an example of category management. This is a minimal setup in order to get
                                        started fast.
                                    </p>
                                </div>
                                <div class="col-4 text-right">
                                   
                                    <a href="/categories/create" class="btn btn-sm btn-primary">Add category</a>
                                </div>
                                
                            </div>
                        </div>

                        <div class="col-8 mt-2">
                        </div>





                        <div class="table-responsive py-4" style="max-height: 73vh;">
                        <table class="table align-items-center table-flush table-hover dataTable dtr-inline collapsed " id="datatable">
                            <thead>
                                <tr>
                             
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>
                           
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                 
                                        <td>{{ $category->name }}</td>
                                        <td>

                                            <span class="avatar avatar-lg rounded-circle">
                                                <img class="avatar border-gray"
                                                    src="{{ asset('categoryImage/' . $category->image) }}" alt="..."
                                                    style="  vertical-align: middle;
                                                    width: 70px;
                                                    height: 70px;
                                                    border-radius: 50%;">
                                            </span>

                                        </td>
                                        <td>
                                        <form action="/categories/{{ $category->id }}" method="post">
                                            @csrf
                                            <a href="/categories/{{ $category->id }}/edit"
                                                class="btn btn-primary btn-sm">Edit</a>
                                      
                                   
                                      
                                            @method('delete')
                                            <button type="submit"
                                                class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                        </td>
                                        {{-- <td>

                                            <div class="dropdown">
                                                <button class="dropbtn">Dropdown</button>
                                                <div class="dropdown-content">
                                                    <a href="/categories/{{ $category->id }}/edit">Edit</a>

                                                    <a class="btn btn-danger" onclick="return confirm('Are you sure?')"
                                                        href="categories/{{ $category->id }}">hh<i
                                                            class="fa fa-trash"></i></a>
                                            

                                                </div>
                                            </div>
                                        </td> --}}
                                    
                                    </tr>
                                @endforeach
                                </tr>
                            </tbody>
                            {{-- {{ $categories->links('pagination::bootstrap-4') }} --}}


                        </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
