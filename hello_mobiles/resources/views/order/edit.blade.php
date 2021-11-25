@extends('admin.app',['activePage' => 'invoice'])


@section('content')
  
    <div class="container-fluid">
        <div class="d-flex justify-content-center row">
            <div class="col-md-12">
                <div class="p-3 bg-white rounded">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="text-uppercase">Invoice</h1>
                          
                            <p class="billed"><span class="font-weight-bold text-uppercase">Billed:</span><span class="ml-1">{{$invoice->user->name}}</span></p>
                            <p class="billed"><span class="font-weight-bold text-uppercase">Date:</span><span class="ml-1">{{$invoice->created_at->format('Y-m-d')}}</span></p>
                            <p class="billed"><span class="font-weight-bold text-uppercase">Order ID:</span><span class="ml-1">{{$invoice->id}}</span></p>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="/invoice" class="btn btn-primary btn-sm" style="background-color: #990008 !important">Back to Invoice</a>
                          </div>
                      
                     
                    </div>
           
                </div>
            </div>
          
        </div>
    </div>



        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <h3 class="mb-0">Update Invoice Details</h3>
                              
                            </div>
                                                          
                        </div>  
                    </div>
                    <div class="card-body">
                        <form action="/invoice/{{ $invoice->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="form-group">
                                <label for="transaction_status">Transaction Status</label>
                                <select id="my-select" class="form-control" name="transaction_status">
                                  
                                    <option value="1" {{ $invoice->transaction_status == 1 ? 'selected' : '' }}>Completed
                                     </option>
                                     <option value="2" {{ $invoice->transaction_status == 0 ? 'selected' : '' }}>Not Completed
                                    </option>
                
                          
                             
                                </select>
                            </div>
                
                            <div class="form-group">
                                <label for="delivery_status">Delivery Status</label>
                                <select id="my-select" class="form-control" name="delivery_status">
                                  
                                    <option value="1" {{ $invoice->status == 1 ? 'selected' : '' }}>Delivered
                                     </option>
                                     <option value="2" {{ $invoice->status == 0 ? 'selected' : '' }}>Pending
                                    </option>
                
                          
                             
                                </select>
                            </div>
    
    
                     
      
      
      
      
                          
      
      
      
                          
      
            
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection