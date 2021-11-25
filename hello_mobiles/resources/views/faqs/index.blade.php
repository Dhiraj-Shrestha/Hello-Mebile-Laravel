@extends('admin.app',['activePage' => 'faqs'])
@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/faqs/create" class="btn btn-primary btn-sm float-right">Add FAQ</a>
                </div>
                <div class="card-body">
                    
                    <table class="table table-sm table-bordered table-striped" id="datatable">
                        <thead>
                            <tr>
                         
                                <th>FAQ Title</th>
    
                                <th>Detail</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($faqs as $faq)
                                <tr>
                            
                                    <td>{{ $faq->title }}</td>
                                    <td>{{ $faq->detail }}</td>

                                    <td>
                                            
                                                        
                            
                                               
                                               
                                        <form action="/faqs/{{ $faq->id }}" method="post">
                                            @csrf
                                            <a href="faqs/{{ $faq->id }}/edit"
                                                class="btn btn-primary btn-sm">Edit</a>
                                      
                                            @method('delete')
                                            <button type="submit"
                                                class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                  




                            </td>
                                    
                                   
                                    {{-- <td>
                                        <a class="btn btn-primary btn-sm" href="/healthtips/{{ $faq->id }}">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a>
                                        <a class="btn btn-info btn-sm" href="/healthtips/{{ $faq->id }}/edit">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>


                                        <a class="btn btn-danger btn-sm" href="healthtips/{{ $faq->id }}">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a>
                                    </td> --}}
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