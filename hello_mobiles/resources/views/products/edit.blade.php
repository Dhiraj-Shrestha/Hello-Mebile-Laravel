@extends('admin.app',['activePage' => 'product'])
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h3 class="mb-0">Update Product Details</h3>
                          
                        </div>
                                                            <div class="col-12 text-right">
                              <a href="/products" class="btn btn-primary btn-sm" style="background-color: #990008 !important">Back to Product</a>
                            </div>
                    </div>  
                </div>
                <div class="card-body">
                    <form action="/products/{{ $product->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input id="name" class="form-control" type="text" required name="name" placeholder="Product Name" value="{{ $product->name }}"
                            >
                        </div>

                        <div class="form-group">
                            <label for="quantity">Available Status</label>
                            <select id="available_status" class="form-control" name="available_status">
                              
                                <option value=1 {{ $product->available_status == 1 ? 'selected' : '' }}>
                                    Available</option>
                                <option value=0 {{ $product->available_status == 0 ? 'selected' : '' }}>
                                        Out of stock</option>
        
                       
                         
                            </select>
                            {{-- <input id="quantity" class="form-control" type="number" required name="available_status" placeholder="Product Quantity"value="{{ $product->quantity }}"> --}}
                        </div>
  
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input id="price" class="form-control" type="number" required name="price" placeholder="Product Price" value="{{ $product->price }}">
                        </div>
  
                        <div class="form-group">
                            <label for="discount">Discount (%)</label>
                            <input id="discount" class="form-control" type="number"  required name="discount" placeholder="Discount (%)" value="{{ $product->discount }}">
                        </div>
  
                         <div class="form-group">
                            <label for="selling_price">Selling Price</label>
                            <input id="sp" class="form-control" type="number" name="selling_price" placeholder="Product Price" readonly value="{{ $product->selling_price }}">
                         </div>
  
  
                        <div class="form-group">
                            <label for="subcategory_id">Select Product Type</label>
                            <select id="my-select" class="form-control" name="subcategory_id">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id == $product->subcategory_id ? 'selected' : '' }}>
                                    {{ $category->name }}</option>
        
                            @endforeach
                         
                            </select>
                        </div>
  
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea  id="desription" class="form-control" required name="description" rows="3" >{{ $product->description}}</textarea>
                        </div>
  
  
                        <div class="form-group">
                            <label for="image">Feature Image</label>
                            <input type="file" class="form-control" name="image" accept="image/*">
                          </div>
  
        
  
                        <div class="form-group">
                            <label for="images">Detail Images</label>
                            <input id="images" class="form-control-file" type="file" name="images[]" multiple>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>

 
@endsection
