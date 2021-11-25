@extends('admin.app',['activePage' => 'slider'])
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/slider" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/slider" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="image">Upload</label>
                                <input type="file" class="form-control" name="image" accept="image/*">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm float-right"
                                style="background-color: #1c7a24 !important">Save</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection