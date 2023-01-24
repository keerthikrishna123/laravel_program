
<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from mannatthemes.com/dastone/default/demo-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 15:41:15 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Global Limo Admin</title>
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
                <a href="index.html" class="logo">
                    <span>
                        <img src="../assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                    </span>
                    <span>
                        <img src="../assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">
                        <img src="../assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                    </span>
                </a>
            </div>
            <!--end logo-->
            <div class="menu-content h-100" data-simplebar>
                <ul class="metismenu left-sidenav-menu">
                    <li class="menu-label mt-0">Main</li>
                    <li>
                        <a href="index.html"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span></a>
                        
                    </li>
    
                    <li>
                        <a href="javascript: void(0);"><i data-feather="grid" class="align-self-center menu-icon"></i><span>Vendor</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">

                            <li class="nav-item"><a class="nav-link" href="create_merchandiser"><i class="ti-control-record"></i>Create vendor</a></li>

                            <li class="nav-item"><a class="nav-link" href="/view_merchandiser"><i class="ti-control-record"></i>View Vendor</a></li>
                             
                            <li class="nav-item"><a class="nav-link" href="merchandiser_vr.html"><i class="ti-control-record"></i>View Request</a></li>
                            <li class="nav-item"><a class="nav-link" href="merchandiser_rl.html"><i class="ti-control-record"></i>Rejected List</a></li>
                            <li class="nav-item"><a class="nav-link" href="merchandiser_al.html"><i class="ti-control-record"></i>Approved List</a></li>
                            
                        </ul>
                    </li> 

                    <li>
                        <a href="javascript: void(0);"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Vendor Cars</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">

                            
                             
                            <li class="nav-item"><a class="nav-link" href="view_merchandiser_products.html"><i class="ti-control-record"></i>View Cars</a></li>
                            <li class="nav-item"><a class="nav-link" href="reject_merchandiser_products.html"><i class="ti-control-record"></i>Rejected List</a></li>
                            <li class="nav-item"><a class="nav-link" href="approved_merchandiser_products.html"><i class="ti-control-record"></i>Approved List</a></li>
                            
                        </ul>
                    </li> 
                    <li>
                        <a href="javascript: void(0);"><i data-feather="file-plus" class="align-self-center menu-icon"></i><span>Reports</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">

                            <li class="nav-item"><a class="nav-link" href="products_reports.html"><i class="ti-control-record"></i>Cars</a></li>
                            <li class="nav-item"><a class="nav-link" href="user_report.html"><i class="ti-control-record"></i>Vendors</a></li>
                        </ul>
                    </li>
                    
    
                    <hr class="hr-dashed hr-menu">
                    <li class="menu-label my-2">Components & Extra</li>
                    <li>
                        <a href="javascript: void(0);"><i data-feather="lock" class="align-self-center menu-icon"></i><span>Authentication</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="auth-login.html"><i class="ti-control-record"></i>Log in</a></li>
                            
                            <li class="nav-item"><a class="nav-link" href="auth-recover-pw.html"><i class="ti-control-record"></i>Recover Password</a></li>
                            
                        </ul>
                    </li> 
                </ul>
    
                <div class="update-msg text-center">
                    <a href="javascript: void(0);" class="float-end close-btn text-muted" data-dismiss="update-msg" aria-label="Close" aria-hidden="true">
                        <i class="mdi mdi-close"></i>
                    </a>
                    <h5 class="mt-3">Global Limo Admin</h5>
                    
                    <a href="javascript: void(0);" class="btn btn-outline-warning btn-sm">Panel Features</a>
                </div>
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
                                <img src="assets/images/users/user-5.jpg" alt="profile-user" class="rounded-circle thumb-xs" />                                 
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="pages-profile.html"><i data-feather="user" class="align-self-center icon-xs icon-dual me-1"></i> Profile</a>
                                
                                <div class="dropdown-divider mb-0"></div>
                                <a class="dropdown-item" href="auth-login.html"><i data-feather="power" class="align-self-center icon-xs icon-dual me-1"></i> Logout</a>
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