@extends('admin.app',['activePage' => 'product'])
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0"> {{ $product->name }}</h3>

                </div>
                <div class="col-4 text-right">
                    <a href="/products" class="btn btn-primary btn-sm">Back to List</a>
                </div>
            </div>
          
      

            <div class="card shadow mt-3">


                <div class="card-header">
                    <div>
                        Price: {{ $product->price }}
                    </div>
                    <div>
                        Discount: {{ $product->discount }}

                    </div>
                    <div>
                        Selling Price: {{ $product->selling_price }}
                    </div>
                </div>


                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            
                    <div>
                        Feature Image
                    </div>
                    <img src="{{ url('uploadedFiles/' . $product->image) }}" alt="img" style="width:auto; height:400px;" >
        
                        </div>
                        <div class="col-1">
                            
                         
                                </div>
                        <div class="col-5 text-right">
                            <div>
                                Detail Images
                            </div>
                           
                                
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                </ol>
                                <div class="carousel-inner">
                                    
                                    @foreach($productImages as $key => $slider)
                                    <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                        <img src="{{ url('uploadedFiles/' . $slider->name) }}"  alt="..." style="width:auto; height:400px;object-fit: fill;"/> 
                                    </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#myCarousel" role="button"  data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true">     </span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="false"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                

                    <br>
                    
                   


                    {{-- @foreach ($productImages as $productImage)




                    <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <img src="{{ url('uploadedFiles/' . $productImage->name) }}" alt="">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="/productImages/{{ $productImage->id }}/edit">Edit</a>



                            <form action="/productImages/{{ $productImage->id }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>



                        </div>
                    </div>

                @endforeach --}}
                <br>



                    <p>Description:</p>
                    <p>{{ $product->description }}</p>
                    <br>
                    <p>{{ $product->created_at->diffforhumans() }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
