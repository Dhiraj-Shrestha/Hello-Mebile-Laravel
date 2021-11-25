@extends('admin.app',['activePage' => 'secondhandproduct'])
@section('content')

    <div class="content">
       
        <div class="container-fluid">
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
                                    <h3 class="mb-0">Approval Pending Product</h3>
                                    <p class="text-sm mb-0">
                                        Approval required for secondhand product requested
                                    </p>
                                </div>
                        
                            </div>


                        </div>
                        <div class="col-8 mt-2">
                        </div>


                        <div class="table-responsive py-4" style="max-height: 30.5vh;">
                        <table class="table align-items-center table-flush table-hover dataTable dtr-inline collapsed"
                            id="datatable2" >
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    {{-- <th>Product Image</th> --}}
                                    <th>Action</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pendingsecondhandproducts as $product)
                                    <tr>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        {{-- <td>
                                            <span class="avatar avatar-lg rounded-circle">
                                                <img class="avatar border-gray"
                                                    src="{{ asset('/secondhand/detailImage/' . $productImage) }}" alt="..."
                                                    style="  vertical-align: middle;
                                                    width: 50px;
                                                    height: 50px;
                                                    border-radius: 50%;">
                                            </span>
                                        </td> --}}


                                        <td>
                                            <div class="row">
                                                <div class="col">
                                                    <form action="/secondhandproducts/{{ $product->id }}" method="post">
                                                        @csrf
                                                        @method('put')
                                                        <button type="submit" class="btn btn-danger btn-sm">Approve</button>
                                                    </form>


                                                </div>
                                                <div class="col">
                                                    <a href="/secondhandproducts/{{ $product->id }}"
                                                        class="btn btn-info btn-sm">View Details</a>
                                                </div>
                                                <div class="col">
                                                    <form action="/secondhandproducts/{{ $product->id }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                            </div>
                                        </td>
                                    </tr>

                                @endforeach


                            </tbody>

                        </table>
                        </div>
                    </div>


                </div>


               


            </div>


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
                                <h3 class="mb-0">Approved Secondhand Products </h3>
                                <p class="text-sm mb-0">
                                    Approved secondhand products are here
                                </p>
                            </div>
                
                        </div>


                    </div>
                    <div class="col-8 mt-2">
                    </div>


                    <div class="table-responsive py-4" style="max-height: 31vh;">
                    <table class="table align-items-center table-flush table-hover dataTable dtr-inline collapsed"
                        id="datatable">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Product Name</th>
                                <th scope="col">Price</th>
                                {{-- <th>Product Image</th> --}}
                            
                                <th>Expire Date</th>
                                <th>Posted By</th>
                                <th>Approved By</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($approvedsecondhandproducts as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    {{-- <td>
                                        <span class="avatar avatar-lg rounded-circle">
                                            <img class="avatar border-gray"
                                                src="{{ asset('/secondhand/feature/' . $product->image) }}" alt="..."
                                                style="  vertical-align: middle;
                                                width: 50px;
                                                height: 50px;
                                                border-radius: 50%;">
                                        </span>
                                    </td> --}}
                                    <td>{{ $product->expire_date}}</td>
                                    <td>{{ $product->users->name}}</td>
                                    <td>{{ $product->approvedBy->name}}</td>
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
