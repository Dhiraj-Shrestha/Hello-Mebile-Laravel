@extends('admin.app',['activePage' => 'product'])
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h3 class="mb-0">Add Products</h3>
                          
                        </div>
                                                            <div class="col-12 text-right">
                              <a href="/products" class="btn btn-primary btn-sm" style="background-color: #990008 !important">Back to Product</a>
                            </div>
                    </div>  
                </div>
                <div class="card-body">
                    <form action="/products" method="post" enctype="multipart/form-data">
                        @csrf
                        
                       
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input id="name" class="form-control" type="text"  name="name" placeholder="Product Name">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        {{-- <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input id="quantity" class="form-control" type="number" required name="quantity" placeholder="Product Quantity">
                        </div> --}}
  
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input id="price" class="form-control" type="number" required name="price" placeholder="Product Price">
                        </div>
  
                        <div class="form-group">
                            <label for="discount">Discount (%)</label>
                            <input id="discount" class="form-control" type="number"  required name="discount" placeholder="Discount (%)">
                        </div>
  
                         <div class="form-group">
                            <label for="selling_price">Selling Price</label>
                            <input id="sp" class="form-control" type="number" name="selling_price" placeholder="Product Price" readonly>
                         </div>
  
  
                        <div class="form-group">
                            <label for="subcategory_id">Select Product Type</label>
                            <select id="my-select" class="form-control" name="subcategory_id">
                               @foreach ($categories as $category)
                                   <option value="{{ $category->id }}">{{ $category->name }}</option>
                               @endforeach
                            </select>
                        </div>
  
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea  id="desription" class="form-control" required name="description" rows="3" ></textarea>
                        </div>
  
  
                        <div class="form-group">
                            <label for="image">Feature Image</label>
                            <input type="file" class="form-control" name="image" required accept="image/*">
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