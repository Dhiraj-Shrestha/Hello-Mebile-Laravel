
@extends('admin.app',['activePage' => 'profile'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="background: linear-gradient(
                            60deg,firebrick,white); color:white;box-shadow: 0 1px 4px 0 rgb(0 0 0 / 14%); display:block;border-radius: 3px;
                            margin-top: -20px;
                            padding: 15px;">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Admin</h3>
                                    <p class="text-sm mb-0">
                                        This is an example of category management. This is a minimal setup in order to get
                                        started fast.
                                    </p>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="/register"
                                        class="btn btn-sm btn-primary">Add Admin</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                           
                         
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" head-light">
                                        <tr>
                                            <th>
                                                Name
                                            </th>
                                            <th>Image</th>
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                dsgdg
                                            </th>
                                            <th>
                                                dfgfdgdgffhghfgg
                                            </th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($admins as  $admin)
                                            <tr>
                                                <td>{{ $admin->name }}</td>

                                                <td>

                                                    <span class="avatar avatar-lg rounded-circle">
                                                        <img class="avatar border-gray"
                                                            src="{{ asset('profileImage/' . $admin->profile_image) }}" alt="..."
                                                            style="  vertical-align: middle;
                                                            width: 50px;
                                                            height: 50px;
                                                            border-radius: 50%;">
                                                    </span>
                                             
                                                </td>
                                                
                                                <td>{{ $admin->email }}</td>
                                                <td>{{$admin->profile_image}}</td>
                                                <td>ddd</td>
                                               
                                             
                                            
                                            </tr>
    
                                        @endforeach
    
    
                                    </tbody>
                                    
                                    
                                </table>
                                {{ $admins ->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>

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
                                    <h3 class="mb-0">user</h3>
                                    <p class="text-sm mb-0">
                                        This is an example of category management. This is a minimal setup in order to get
                                        started fast.
                                    </p>
                                </div>
                            
                            </div>


                        </div>
                        <div class="col-8 mt-2">
                        </div>




                        <div class="table-responsive py-4" style="max-height: 73vh;">
                            <table class="table table-bordered table-hover dataTable dtr-inline collapsed" id="datatable">
                                <thead class="head-light">
                                    <tr>
                                        <th scope="col">Name</th>
                                        
                                        <th scope="col">Email</th>
                                        <th>fsdd</th>
                                        <th>ffff

                                        </th>
                                        <th>fd</th>
                                    

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as  $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>fdd</td>
                                            <td>dfd</td>
                                            <td>ssrse</td>
                                           
                                         
                                        
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
