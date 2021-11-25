@extends('admin.app',['activePage' => 'product'])
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    {{-- <button type="submit" class="btn btn-danger btn-sm" ><a href="/products/create" style="color: white">Add Product</a></button> --}}
                    <div class="card" style="font-size: .875rem; border-radius: 3px;
                          
                                    padding: 15px;">
                        <div class="card-header" style="background: linear-gradient(
                                60deg,firebrick,white); color:white;box-shadow: 0 1px 4px 0 rgb(0 0 0 / 14%); display:block;border-radius: 3px;
                                margin-top: -20px;
                                padding: 15px;">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Product</h3>
                                    <p class="text-sm mb-0">
                                        This is an example of category management. This is a minimal setup in order to get
                                        started fast.
                                    </p>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="/products/create" class="btn btn-sm btn-primary">Add product</a>
                                </div>
                            </div>


                        </div>
                        <div class="col-8 mt-2">
                        </div>


                            
                        <table class="table align-items-center table-flush table-hover dataTable dtr-inline collapsed" id="datatable">
                            <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Sub Category</th>
                                        <th scope="col">Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->price }}</td>

                                            <td>
                                                <span class="avatar avatar-lg rounded-circle">
                                                    <img class="avatar border-gray"
                                                        src="{{ asset('uploadedFiles/' . $product->image) }}" alt="..."
                                                        style="  vertical-align: middle;
                                                        width: 70px;
                                                        height: 70px;
                                                        border-radius: 50%;">
                                                </span>
                                            </td>
                                            <td>{{ $product->subcategory->category->name }}</td>

                                            <td>{{ $product->subcategory->name }}</td>
                                            <td>
                                            
                                                        
                            
                                               
                                               
                                                        <form action="/products/{{ $product->id }}" method="post">
                                                            @csrf
                                                            <a href="products/{{ $product->id }}/edit"
                                                                class="btn btn-primary btn-sm">Edit</a>
                                                      
                                                   
                                                            <a href="products/{{ $product->id }}"
                                                                class="btn btn-info btn-sm">Show</a>
                                                            @method('delete')
                                                            <button type="submit"
                                                                class="btn btn-danger btn-sm">Delete</button>
                                                        </form>
                                                  




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
@endsection
