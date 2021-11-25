@extends('admin.app',['activePage' => 'faqs'])
@section('content')
<div class="container">
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="col-12">
                    <h3 class="mb-0">Edit FAQ</h3>
                  
                </div>
                <div class="col-12 text-right">
                    <a href="/faqs" class="btn btn-primary btn-sm" style="background-color: #990008 !important">Back</a>
                  </div>
            </div>
            <div class="card-body">
                <form action=/faqs/{{ $faq->id }} method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="form-group">
                        <label for="title">HealthTip Name</label>
                        <input id="name" class="form-control" type="text" name="title"   required placeholder="HealthTip Name" value="{{ $faq->title }}">


                    </div>

                    <div class="form-group">
                        <label for="detail">Description</label>
                        <textarea id="description" class="form-control" required name="detail" rows="3" >{{ $faq->detail }}</textarea>
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