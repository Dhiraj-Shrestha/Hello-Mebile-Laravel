@extends('admin.app',['activePage' => 'faqs'])
@section('content')
<div class="container">
<div class="row">
    <div class="col">
        <div class="card">

            
            <div class="card-header">
                <div class="col-12">
                    <h3 class="mb-0">Add FAQ</h3>
                  
                </div>
                <div class="col-12 text-right">
                    <a href="/faqs" class="btn btn-primary btn-sm" style="background-color: #990008 !important">Back</a>
                  </div>
            </div>
            <div class="card-body">
                <form action="/faqs" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="title">FAQ Title</label>
                        <input id="name" class="form-control" type="text" name="title" required placeholder="FAQ Title">


                    </div>

                    <div class="form-group">
                        <label for="detail">Description</label>
                        <textarea id="description" class="form-control" placeholder="Description" required name="detail" rows="3"></textarea>
                    </div>
              
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>

            </div>
        </div>
    </div>
</div>
</div>
</div>





@endsection