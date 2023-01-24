
<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from mannatthemes.com/dastone/default/demo-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 15:41:15 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- jvectormap -->
        <link href="../plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

        <!-- App css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="dark-sidenav">
        <!-- Left Sidenav -->
        <div class="left-sidenav">
            <!-- LOGO -->
            <div class="brand">
                <a href="admin-index" class="logo">
                    <!-- <span>
                        <img src="../assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                    </span>
                    <span>
                        <img src="../assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">
                        <img src="../assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                    </span> -->
                </a>
            </div>
            <!--end logo-->
            <div class="menu-content h-100" data-simplebar>
                <ul class="metismenu left-sidenav-menu">
                    <li class="menu-label mt-0">Main</li>
                    <li>
                        <a href="/admin-index"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span></a>
                        
                    </li>
                    <li>
                        <a href="javascript: void(0);"><i data-feather="grid" class="align-self-center menu-icon"></i><span>All Users</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                        <!-- <li class="nav-item"><a class="nav-link" href="/create_merchandiser"><i class="ti-control-record"></i>Banner section</a></li> -->
                            <li class="nav-item"><a class="nav-link" href="/viewusers"><i class="ti-control-record"></i>View users</a></li>
                         
                          
                            
                        </ul>
                    </li> 
                 

                 
                  
                 
                    
    
                  
                </ul>
    
               
            </div>
        </div>
        <!-- end left-sidenav-->
        

        <div class="page-wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">            
                <!-- Navbar -->
                <nav class="navbar-custom">    
                    <ul class="list-unstyled topbar-nav float-end mb-0">  
                                              

                       

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <span class="ms-1 nav-user-name hidden-sm">Admin</span>
                              
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                
                                
                                <div class="dropdown-divider mb-0"></div>
                                <a class="dropdown-item" href="{{ route('signout') }}"><i data-feather="power" class="align-self-center icon-xs icon-dual me-1"></i> Logout</a>
                            </div>
                        </li>
                    </ul><!--end topbar-nav-->
        
                    <ul class="list-unstyled topbar-nav mb-0">                        
                        <li>
                            <button class="nav-link button-menu-mobile">
                                <i data-feather="menu" class="align-self-center topbar-icon"></i>
                            </button>
                        </li> 
                                                  
                    </ul>
                </nav>
                <!-- end navbar-->
            </div>
            <div class="page-content">
                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">Update details</h4>
                                        
                                    </div><!--end col-->
                                 
                                </div><!--end row-->                                                              
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->
              
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Data</h4>
                                    
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <form   class="form-horizontal form-wizard-wrapper" method="post" enctype="multipart/form-data">
                                   
                                    @csrf
                        @method('PUT')

                                    <h3 class="mobv"></h3>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    
                                                    <div class="form-group row">
                                                        <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Name</label>
                                                        <div class="col-lg-9">
                                                            <input id="txtFirstNameBilling" name="n" type="text" class="form-control" placeholder="Name" value="{{$sdata1->name}}" required>
                                                        </div>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Password</label>
                                                        <div class="col-lg-9">
                                                            <input id="txtFirstNameBilling" name="p" type="text" class="form-control" placeholder="Password" value="{{$sdata1->password}}" required>
                                                        </div>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            
                                         
                                        </fieldset><!--end fieldset-->

                                       
                                               
                                            </div><!--end row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                        </div>
                                                </div><!--end col-->
                                               
                                            </div><!--end row-->
                                            <hr>

                                            


                                        </fieldset><!--end fieldset-->

                                        
                                    </form><!--end form-->

                                    @if (Session::has('success'))
                                    <div class="" style="padding:2%;" >
                                        <script>
                                            alert("Success");
                                            </script>
                                        <p>{!! \Session::get('success') !!}</p>
                                    </div>
                                @endif
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
               

                </div><!-- container -->

             
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        








        <script src="../assets/js/jquery.min.js"></script>

        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/metismenu.min.js"></script>
        <script src="../assets/js/waves.js"></script>
        <script src="../assets/js/feather.min.js"></script>
        <script src="../assets/js/simplebar.min.js"></script>
        <script src="../assets/js/moment.js"></script>
        <script src="../plugins/daterangepicker/daterangepicker.js"></script>



        <script src="../plugins/jquery-steps/jquery.steps.min.js"></script>
        <script src="../assets/pages/jquery.form-wizard.init.js"></script>

        <script src="../assets/js/app.js"></script>
        <script src="../assets/js/ma.js"></script>





        

        
        
    </body>


<!-- Mirrored from mannatthemes.com/dastone/default/demo-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 15:41:46 GMT -->
</html>