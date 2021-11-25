


@extends('admin.app',['activePage' => 'secondhandproduct'])
@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0"> {{ $secondhandproduct->name }}</h3>

                </div>
                <div class="col-4 text-right">
                    <a href="/secondhandproducts" class="btn btn-primary btn-sm">Back to List</a>
                </div>
            </div>
          
      

            <div class="card shadow mt-3">


                <div class="card-header">
                    <div>
                        Price: {{ $secondhandproduct->price }}
                    </div>
                    <div>
                        Expire Date: {{ $secondhandproduct->expire_date }}

                    </div>
                  
                </div>


                <div class="card-body">
                  
               
                     
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
                                        <img src="{{ url('/secondhand/detailImage/' . $slider->name) }}"  alt="..." style="width:auto; height:400px;object-fit: fill;"/> 
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
                    <p>{{ $secondhandproduct->description }}</p>
                    <br>
                    <p>{{ $secondhandproduct->created_at->diffforhumans() }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

    {{-- <div class="container">
        <a href="/secondhandproducts" class="btn btn-primary btn-sm">Back</a>
        <div class="card shadow mt-3">
            <div class="card-header">
                {{ $secondhandproduct->name }}
            </div>
         

            <div class="card-body">
                <p>{{ $secondhandproduct->body }}</p>
                <br>
        
                <p>{{ $secondhandproduct->created_at->diffforhumans() }}</p>
                @foreach ($productImages as $productImage)




<div class="dropdown">
    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <img src="{{ url('/secondhand/detailImage/' . $productImage->name) }}" alt="" width="200px">
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
        <a class="dropdown-item" href="/secondhand/detailImage/{{ $productImage->id }}/edit">Edit</a>



        <form action="/secondhand/detailImage/{{ $productImage->id }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>



    </div>
</div> --}}

{{-- @endforeach --}}

            </div>


        </div>
    </div>

@endsection
