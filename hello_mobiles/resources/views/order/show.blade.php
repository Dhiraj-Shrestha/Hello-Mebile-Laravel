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
                     
                    </div>
                    <div class="mt-3">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Unit</th>
                                    <th>Price</th>
                             
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($orderInvoiceDetails as $invoiceDetail)
                                <tr>
                                    <td>{{$invoiceDetail->products->name}}</td>
                                    <td>{{$invoiceDetail->quantity}}</td>
                                    <td>{{$invoiceDetail->products->selling_price}}</td>
                                   
                                </tr>
                                    
                                @endforeach
                              
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="text-right mb-3"><span class="btn btn-danger btn-sm mr-5">Total: {{$invoice->total}}</span></div>
                </div>
            </div>
        </div>
    </div>
@endsection