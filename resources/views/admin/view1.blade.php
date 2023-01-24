
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
        <!-- DataTables -->
        <link href="../plugins/datatables/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/datatables/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="../plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

        <!-- App css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <link href="../sss.css" rel="stylesheet" type="text/css" />




    </head>

    <body class="dark-sidenav">
        <!-- Left Sidenav -->
        <div class="left-sidenav">
            <!-- LOGO -->
            <div class="brand">
                <a href="admin-index" class="logo">
                   
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
                                <a class="dropdown-item" href="{{ route('signout') }}""><i data-feather="power" class="align-self-center icon-xs icon-dual me-1"></i> Logout</a>
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
            <!-- Top Bar End -->

            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    
                                    
                                    </div><!--end col-->  
                                </div><!--end row-->                                                              
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->
                    

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">

                                    <div class="row">
                                        <div class="col-lg-9">
                                            <h4 class="card-title">User List</h4>
                                        </div>
                                        <div class="col-lg-3" style="float: right;text-align: right;">
                                            <a class=" btn btn-sm btn-soft-primary clorcf" href="create_merchandiser.html" role="button"></a>
                                        </div>
                                    
                                    
                                    </div><!--end card-header-->
                                </div>

                                <div class="card-body">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                          
                                            <th>Email</th>
                                      
                                        
                                          
                                            <th>Edit profile</th>
                                         
                                            <th>View</th>
                                         
                                           
                                        </tr>
                                        </thead>
                                     
                                        <tbody>
                                            
                                        @foreach($data as $list1)
                                        <tr>
                                            <td>{{$list1->name}}</td>
                                        
                                            <td>{{$list1->email}}</td>
                                          
                                           
                                           
                                            <td><a href="/edit/{{$list1->id}}">
                                            <i class="typcn typcn-edit vrt" title="Edit profile"></i>


                                                </a>
</td>
                                            
<td>
@if($list1->st=='2')

Blocked



@else



                                                <a href="/view1/{{$list1->id}}" class="btn btn-danger">
                                         Block


                                                </a>
                                                @endif
                                                
                                               
                                           
                                        </tr>
                                        @endforeach
                                        </tbody>
                                       
    
                                    </table>
    
                                </div>


                                
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                    

                </div><!-- container -->

            </div>
            <!-- end page content -->
        </div>

        








        
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title m-0" id="exampleModalCenterTitle">Center Modal</h6>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div><!--end modal-header-->
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-3 text-center align-self-center">
                                                            <img src="assets/images/widgets/btc.png" alt="" class="img-fluid">
                                                        </div><!--end col-->
                                                        <div class="col-lg-9">
                                                            <h5>Crypto Market Services</h5>
                                                            <span class="badge bg-soft-secondary">Disable Services</span>
                                                            <small class="text-muted ms-2">07 Oct 2020</small>
                                                            <ul class="mt-3 mb-0">
                                                                <li>Lorem Ipsum is dummy text.</li>
                                                                <li>It is a long established reader.</li>
                                                                <li>Contrary to popular belief, Lorem simply.</li>
                                                            </ul>
                                                        </div><!--end col-->
                                                    </div><!--end row-->   
                                                </div><!--end modal-body-->
                                                <div class="modal-footer">                                                    
                                                    <button type="button" class="btn btn-soft-primary btn-sm">Save changes</button>
                                                    <button type="button" class="btn btn-soft-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                                </div><!--end modal-footer-->
                                            </div><!--end modal-content-->
                                        </div><!--end modal-dialog-->
                                    </div><!--end modal-->

        <!-- jQuery  -->



        <script src="../assets/js/jquery.min.js"></script>

        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/metismenu.min.js"></script>
        <script src="../assets/js/waves.js"></script>
        <script src="../assets/js/feather.min.js"></script>
        <script src="../assets/js/simplebar.min.js"></script>
        <script src="../assets/js/moment.js"></script>
        <script src="../plugins/daterangepicker/daterangepicker.js"></script>

        <script src="../assets/js/app.js"></script>

        <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
        <!-- Required datatable js -->
        <script src="../plugins/datatables/dataTables.bootstrap5.min.js"></script>
        <!-- Buttons examples -->
        <script src="../plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="../plugins/datatables/buttons.bootstrap5.min.js"></script>
        <script src="../plugins/datatables/jszip.min.js"></script>
        <script src="../plugins/datatables/pdfmake.min.js"></script>
        <script src="../plugins/datatables/vfs_fonts.js"></script>
        <script src="../plugins/datatables/buttons.html5.min.js"></script>
        <script src="../plugins/datatables/buttons.print.min.js"></script>
        <script src="../plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="../plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="../plugins/datatables/responsive.bootstrap4.min.js"></script>
        <script src="../assets/pages/jquery.datatable.init.js"></script>

        <!-- App js -->
        
        
    </body>


<!-- Mirrored from mannatthemes.com/dastone/default/demo-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 15:41:46 GMT -->
</html>