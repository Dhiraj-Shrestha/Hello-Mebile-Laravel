<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hello Mobiles</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- CSS only -->
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> --}}
    <link rel="stylesheet" type="text/css" href="css/landpage/landpage.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
   <script>
    setTimeout(function() {

    // Do something after 3 seconds

    $('#notadmin').hide();

    }, 1500);
</script>
</head>

<body>
         <!-- Content Wrapper. Contains page content -->
  
    <!--Main Navigation-->
    <header>
        <div class="col">
            <!-- Content Header (Page header) -->
            <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                  @if(Session::has('alert-' . $msg))
            
                  <p id="notadmin" class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                  @endif
                @endforeach
            </div> <!-- end .flash-message -->

         


            <!-- /.content-header -->
         
        </div>

        <!--Mask-->
        <div id="intro" class="view">

            <div class="mask rgba-black-strong">

                <div class="container-fluid d-flex align-items-center justify-content-center h-100">

                    <div class="row d-flex justify-content-center text-center">

                        <div class="col-md-10">

                            <!-- Heading -->
                            <h2 class="display-4 font-weight-bold white-text pt-5 mb-2" style="color:floralwhite ">Hello Mobile Service</h2>

                            <!-- Divider -->
                            <hr class="hr-light">

                            <!-- Description -->
                            <h4 class="white-text my-4" style="color: whitesmoke">
                                A complete solution for you smart phone</h4>
                                <a href="/login" class="btn btn-primary">Login to Admin Panel</a>

                        

                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!--/.Mask-->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5">
         
        <div class="container">

            <!--Section: Best Features-->
            <section id="best-features" class="text-center">

                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold">Best Features</h2>

                <!--Grid row-->
                <div class="row d-flex justify-content-center mb-4">

                    <!--Grid column-->
                    <div class="col-md-8">

                        <!-- Description -->
                        <p class="grey-text">Hello Mobile Service provide different smartphone and other mobile accessories of different brands and afortable price and assure the quality of products</p>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-4 mb-5">
                        <i class="fa fa-check-circle fa-4x orange-text"></i>
                        <h4 class="my-4 font-weight-bold">Quality Products</h4>
                        <p class="grey-text">
                            Hello mobile service is one of the oldest and trustable mobile store in Itahari. It provides qaulity goods of different brands with customer satisfaction. 
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-1">
                        <i class="fa fa-handshake fa-4x orange-text"></i>
                        <h4 class="my-4 font-weight-bold">Online Service</h4>
                        <p class="grey-text">Now you can deal with us in online medium throug our mobile application were you can buy our goods as well se you unused one in market place.</p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-1">
                        <i class="fa fa-mobile fa-4x orange-text"></i>
                        <h4 class="my-4 font-weight-bold">Mobile Repairing</h4>
                        <p class="grey-text">All kind of mobile phone and smart devices is also repaired along with availibility of smart devices. So for all need of mobile devices to repairing we are here for your service.</p>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Best Features-->

            <hr class="my-5">

            <section class="text-center" id="team">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                        
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="team-member" style='text-align: center;'>
                                <img class="rounded-circle" src="{{ asset('images/owner1.png') }}" alt="fff" />
                                <h4>Balram Basnet</h4>
                                <p class="text-muted">Owner and Fonder</p>
                                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/mobileserviceitahari"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="{{ asset('images/owner2.png') }}" alt="" />
                                <h4>Kishor Basnet</h4>
                                <p class="text-muted">Owner and Founder</p>
                                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/kishor.basnet.71"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-member"> 
                                <img class="mx-auto rounded-circle" src="{{ asset('images/designer.png') }}" alt="" />
                                <h4>Dhiraj Shrestha</h4>
                                <p class="text-muted">Designer and Helping Manager</p>
                                <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/DhirajS04310589"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/dhiraj.shrestha.9883/"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/dhiraj-shrestha-246190191/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>


        



        </div>
    </main>


    <!--Main layout-->


 

    {{-- <script>
        setTimeout(function() {
    
    // Do something after 3 seconds
    // This can be direct code, or call to some other function
    
    $('#alert').hide();
    
    }, 1500);
    </script> --}}
</body>

<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

   


   

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="#"> Hello Mobile Service</a>
    </div>
    <!-- Copyright -->

</footer>


<!-- Footer -->

</html>