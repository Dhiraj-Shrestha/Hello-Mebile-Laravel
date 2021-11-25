@extends('admin.app',['activePage' => 'dashboard'])

@section('content')
    <div class="container-fluid">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ DB::table('invoices')->count() }}</h3>

                                <p>New Orders</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="/orders" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ DB::table('categories')->count() }}<sup style="font-size: 20px"></sup></h3>

                                <p>Categories</p>
                            </div>
                            <div class="icon">
                                <i class="ion fa-list-alt"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $approvalPending}}<sup style="font-size: 20px"></sup></h3>

                                <p>Approval Pending</p>
                            </div>
                            <div class="icon">
                                <i class="ion fa-list-alt"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ DB::table('users')->where('user_type',1)->count() }}</h3>

                                <p>User Registrations</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="/user" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ DB::table('products')->count() }}</h3>

                                <p>Products</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Users Report</h5>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    {{-- <div class="btn-group"> --}}
                                    {{-- <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown"> --}}
                                    {{-- <i class="fas fa-wrench"></i> --}}
                                    {{-- </button> --}}
                                    {{-- <div class="dropdown-menu dropdown-menu-right" role="menu"> --}}
                                    {{-- <a href="#" class="dropdown-item">Action</a> --}}
                                    {{-- <a href="#" class="dropdown-item">Another action</a> --}}
                                    {{-- <a href="#" class="dropdown-item">Something else here</a> --}}
                                    {{-- <a class="dropdown-divider"></a> --}}
                                    {{-- <a href="#" class="dropdown-item">Separated link</a> --}}
                                    {{-- </div> --}}
                                    {{-- </div> --}}
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <div id="container">

                                </div>
                                {{-- <div class="row"> --}}
                                {{-- <div class="col-md-8"> --}}
                                {{-- <p class="text-center"> --}}
                                {{-- <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong> --}}
                                {{-- </p> --}}

                                {{-- <div class="chart"> --}}
                                {{-- <!-- Sales Chart Canvas --> --}}
                                {{-- <canvas id="salesChart" height="180" style="height: 180px;"></canvas> --}}
                                {{-- </div> --}}

                                {{-- <!-- /.chart-responsive --> --}}
                                {{-- </div> --}}
                                {{-- <!-- /.col --> --}}
                                {{-- <div class="col-md-4"> --}}
                                {{-- <p class="text-center"> --}}
                                {{-- <strong>Goal Completion</strong> --}}
                                {{-- </p> --}}

                                {{-- <div class="progress-group"> --}}
                                {{-- Add Products to Cart --}}
                                {{-- <span class="float-right"><b>160</b>/200</span> --}}
                                {{-- <div class="progress progress-sm"> --}}
                                {{-- <div class="progress-bar bg-primary" style="width: 80%"></div> --}}
                                {{-- </div> --}}
                                {{-- </div> --}}
                                {{-- <!-- /.progress-group --> --}}

                                {{-- <div class="progress-group"> --}}
                                {{-- Complete Purchase --}}
                                {{-- <span class="float-right"><b>310</b>/400</span> --}}
                                {{-- <div class="progress progress-sm"> --}}
                                {{-- <div class="progress-bar bg-danger" style="width: 75%"></div> --}}
                                {{-- </div> --}}
                                {{-- </div> --}}

                                {{-- <!-- /.progress-group --> --}}
                                {{-- <div class="progress-group"> --}}
                                {{-- <span class="progress-text">Visit Premium Page</span> --}}
                                {{-- <span class="float-right"><b>480</b>/800</span> --}}
                                {{-- <div class="progress progress-sm"> --}}
                                {{-- <div class="progress-bar bg-success" style="width: 60%"></div> --}}
                                {{-- </div> --}}
                                {{-- </div> --}}

                                {{-- <!-- /.progress-group --> --}}
                                {{-- <div class="progress-group"> --}}
                                {{-- Send Inquiries --}}
                                {{-- <span class="float-right"><b>250</b>/500</span> --}}
                                {{-- <div class="progress progress-sm"> --}}
                                {{-- <div class="progress-bar bg-warning" style="width: 50%"></div> --}}
                                {{-- </div> --}}
                                {{-- </div> --}}
                                {{-- <!-- /.progress-group --> --}}
                                {{-- </div> --}}
                                {{-- <!-- /.col --> --}}
                                {{-- </div> --}}
                                <!-- /.row -->
                            </div>
                            <!-- ./card-body -->

                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->


                <div class="row">


                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Latest Members</h3>

                                <div class="card-tools">
                                    <span class="badge badge-danger">{{ $getusertoday }} new users this week</span>
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                            class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <ul class="users-list clearfix">

                                    @foreach ($users->slice(0, 10) as $user)
                                        <li>

                                            @if (isset($user->profile_image))
                                                <img src="{{ asset('profileImage/' . $user->profile_image) }}" alt="User Image"
                                                    class="img-size-50"  style="  vertical-align: middle;
                                                    width: 50px;
                                                    height: 50px;
                                                    border-radius: 50%; object-fit: cover">
                                            @else
                                                <img src="dist/img/user.png" alt="User Image"
                                                    class="img-size-50">

                                            @endif
                                            <span class="users-list-name" style="font-size: 17px">{{ $user->name }}</span>

                                            @if ($user->user_type ==0)
                                            <span style="font-size: 15px">Admin</span>
                                            @else
                                            <span style="font-size: 15px">User</span>
                                                
                                            @endif
                                            <span
                                                class="users-list-date">{{ date('Y-m-d-D', strtotime($user->created_at)) }}</span>
                                        </li>

                                    @endforeach

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-center">
                                <a href="/user">View All Users</a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Recently Added Products</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <ul class="products-list product-list-in-card pl-2 pr-2">
                                    @foreach ($products as $product)
                                        <li class="item">

                                            <div class="product-img">
                                                {{-- @if (!$product->image->isEmpty()) --}}
                                                {{-- <img src="{{$product->image}}" alt="Product Image" class="img-size-50"> --}}

                                                {{-- @else --}}
                                                {{-- <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50"> --}}
                                                {{-- @endif --}}

                                                @if (isset($product->image  ))
                                                    <img src="{{ asset('uploadedFiles/' . $product->image) }}" alt="User Image"  style="  vertical-align: middle;
                                                    width: 50px;
                                                    height: 50px;
                                                    border-radius: 50%;">
                                                @else

                                                    <img src="dist/img/user.png" alt="User Image"
                                                        class="img-size-50">

                                                @endif
                                            </div>
                                            <div class="product-info">
                                                <a href="javascript:void(0)" class="product-title">{{ $product->name }}
                                                    <span class="float-right">Rs.
                                                        {{ $product->price }}
                                                    </span></a>
                                                <span class="product-description">
                                                    {{ $product->description }}
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.item -->

                                    @endforeach


                                </ul>
                            </div>
                    
                            <!-- /.card-body -->
                            <div class="card-footer text-center">
                                <a href="/products" class="uppercase">View All Products</a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                    </div>
                </div>
   
            </div>
   

   
    <!--/. container-fluid -->
    </section>
    <!-- /.content -->




    </div>
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <script type="text/javascript">
        var userData = <?php echo json_encode($userData); ?>;    var dates = new Date();
        var dateyear = dates.getFullYear();
        Highcharts.chart('container', {
            title: {

                text: 'New User Growth,' + dateyear,
            },
            // subtitle: {
            //     text: 'Source: positronx.io'
            // },
            xAxis: {
                categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                    'October', 'November', 'December'
                ]
            },
            yAxis: {
                title: {
                    text: 'Number of New Users'
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [{
                name: 'New Users',
                data: userData,
                

            }],
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });

    </script>




@endsection