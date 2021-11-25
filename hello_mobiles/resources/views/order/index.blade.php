

@extends('admin.app',['activePage' => 'invoice'])

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
                                <h3 class="mb-0">Invoice</h3>
                                <p class="text-sm mb-0">
                                    This is an invoice where all details of invoice is displayed.
                                </p>
                        </div>
                                                            {{-- <div class="col-12 text-right">
                              <a href="/products/create" class="btn btn-primary btn-sm">Create Product</a>
                            </div> --}}
                    </div>  
                </div>
                <div class="card-body">
                    <table class="table table-sm table-bordered table-striped" id="datatable">
                        <thead>
                        <tr>
                            <th> # </th>
                            <th> Name </th>
                            <th class="text-center"> Transaction Type </th>
                            <th class="text-center"> Transaction Status </th>
                            <th class="text-center"> Delivery Status </th>
                            <th class="text-center"> Total </th>
                            <th class="text-center"> Order Date </th>
                            <th class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($invoices as $invoice)
                                <tr>
                                    <td>{{ $invoice->id }}</td>
                                    <td>{{ $invoice->user->name }}</td>
                                    <td class="text-center">
                                        @if ($invoice->transaction_type == 1)
                                        <span class="badge badge-warning" style="background-color: green; color:whitesmoke; padding:5px;">Esewa</span>
                                    @else
                                        <span class="badge badge-danger">Cash on Delivery</span>
                                    @endif
                                        
                                        {{-- {{ $invoice->transaction_type }}</td> --}}
                                    <td class="text-center">
                                        @if ($invoice->transaction_status == 1)
                                            <span class="badge badge-success" style="background-color: green; color:whitesmoke; padding:5px;">Completed</span>
                                        @else
                                            <span class="badge badge-danger">Not Completed</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($invoice->status == 1)
                                            <span class="badge badge-success">Delivered</span>
                                        @else
                                            <span class="badge badge-danger">Pending</span>
                                        @endif
                                    </td>
                                    <td>{{ $invoice->total }}</td>
                                    <td>{{ $invoice->created_at->format('Y-m-d') }}</td>
                                    {{-- <td class="text-center">
                                        <div class="btn-group" role="group" aria-label="Second group">
                                            <a href="{{ route('admin.order.show', $invoice->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                        </div>
                                    </td> --}}
                                    <td>
                                        <div class="row">
                                            <div class="col-md-auto">
                                                <a class="btn btn-primary btn-sm"
                                                    href="/invoice/{{ $invoice->id }}">
                                                    <i class="fas fa-folder">
                                                    </i>
                                                    View Invoice Details
                                                </a>
                                            </div>

                                            <div class="col-md-auto">
                                                <a class="btn btn-primary btn-sm"
                                                    href="/invoice/{{ $invoice->id }}/edit">
                                                    <i class="fas fa-edit">
                                                    </i>
                                                    Edit
                                                </a>
                                            </div>


                                            {{-- <div class="col-md-auto">
                                                <form action="/invoice/{{ $invoice->id }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-sm"> <i
                                                            class="fas fa-trash">
                                                        </i> Delete</button> --}}
                                                    {{-- <a class="btn btn-danger btn-sm"
                                                        href="healthtips/{{ $healthtip->id }}">
                                                        <i class="fas fa-trash">
                                                        </i>
                                                        Delete
                                                    </a> --}}
                                                </form>

                                            </div>
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
    </div>
</div>
@endsection