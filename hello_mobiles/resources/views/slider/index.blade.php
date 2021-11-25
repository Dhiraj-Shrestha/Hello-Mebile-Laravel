@extends('admin.app',['activePage' => 'slider'])
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/slider/create" class="btn btn-primary btn-sm float-right">CREATE</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th>#</th>

                                    <th>Slider Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($slider as $slider)
                                    <tr>
                                        <td>{{ $slider->id }}</td>

                                        <td>
                                            <img class="avatar border-gray" src="{{ asset($slider->image) }}"
                                                alt="{{ $slider->name }}"
                                                style="width: 50px; height:50px;border-radius:50%">

                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-auto">
                                                    <a class="btn btn-primary btn-sm" href="/slider/{{ $slider->id }}">
                                                        <i class="fas fa-folder">
                                                        </i>
                                                        View
                                                    </a>
                                                </div>
                                                <div class="col-md-auto">
                                                    <a class="btn btn-info btn-sm" href="/slider/{{ $slider->id }}/edit">
                                                        <i class="fas fa-pencil-alt">
                                                        </i>
                                                        Edit
                                                    </a>
                                                </div>
                                                <div class="col-md-auto">
                                                    <form action="/slider/{{ $slider->id }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger btn-sm"> <i
                                                                class="fas fa-trash">
                                                            </i> Delete</button>

                                                    </form>
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
@endsection