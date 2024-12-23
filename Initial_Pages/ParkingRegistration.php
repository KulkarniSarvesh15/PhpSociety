<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Society Manager Pro - Parking Allotment</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link href="css/circle.css" rel="stylesheet">


</head>

<body id="page-top">


    <!-- Brand -->
    <nav class="navbar navbar-expand navbar-light bg-gradient-primary topbar static-top shadow">

        <div class="sidebar-brand-text mx-3" style="color:#fff;font-weight:600">Society Manager Pro</div>

    </nav>





    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">Mumbai Heights</div>
            </a>


            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Member
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_MyUnit"
                   aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-home"></i>
                    <span>My Unit</span>
                </a>
                <div id="collapse_MyUnit" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Features:</h6>
                        <a class="collapse-item" href="">Unit Details</a>
                        <a class="collapse-item" href="">Personal Staff</a>
                        <a class="collapse-item" href="">Document Submission</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Registrations:</h6>
                        <a class="collapse-item active" href="">Parking Allotment</a>
                        <a class="collapse-item" href="">Tenent Agreement</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Members -->
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Members</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_BillingAccounts"
                   aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-file-invoice-dollar"></i>
                    <span>Billing & Accounts</span>
                </a>
                <div id="collapse_BillingAccounts" class="collapse" aria-labelledby="headingUtilities"
                     data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Billing Arena:</h6>
                        <a class="collapse-item" href="">Unit Bills</a>
                        <a class="collapse-item" href="">Pay Now</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_HelpDesk"
                   aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-headset"></i>
                    <span>Help Desk</span>
                </a>
                <div id="collapse_HelpDesk" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Inquiry:</h6>
                        <a class="collapse-item" href="">Complaints</a>
                        <a class="collapse-item" href="">Special Requests</a>
                    </div>
                </div>
            </li>



            <!-- Nav Item - Reports -->
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Reports</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Admin
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                   aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-briefcase"></i>
                    <span>Office</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Information:</h6>
                        <a class="collapse-item" href="">Office Pannel</a>
                        <a class="collapse-item" href="">Members</a>
                        <a class="collapse-item" href="">Office Staff</a>
                        <a class="collapse-item" href="">Personal Staff (Members)</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Approval:</h6>
                        <a class="collapse-item" href="">Parking Approval</a>
                        <a class="collapse-item" href="">Tenent Approval</a>
                        <a class="collapse-item" href="">Account Retreival</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Inquiry:</h6>
                        <a class="collapse-item" href="">Complaints</a>
                        <a class="collapse-item" href="">Special Requests</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Registration:</h6>
                        <a class="collapse-item" href="">Account Registration</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Media :</h6>
                        <a class="collapse-item" href="404.html">Send Mail</a>
                        <a class="collapse-item" href="blank.html">Send Notice</a>
                        <a class="collapse-item" href="blank.html">Send Announcements</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - AdminMaintainance -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMaintainance"
                   aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-tools"></i>
                    <span>Maintainance</span>
                </a>
                <div id="collapseMaintainance" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Work:</h6>
                        <a class="collapse-item" href="">Job Card</a>
                        <a class="collapse-item" href="">Job Scheduling</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Approval:</h6>
                        <a class="collapse-item" href="">Parking Approval</a>
                        <a class="collapse-item" href="">Tenent Approval</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - AdminAccounts -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdminAcc"
                   aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-file-invoice-dollar"></i>
                    <span>Accounts</span>
                </a>
                <div id="collapseAdminAcc" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Accounting:</h6>
                        <a class="collapse-item" href="">Balance Sheet</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Billing:</h6>
                        <a class="collapse-item" href="">Invoice History</a>
                        <a class="collapse-item" href="">Invoice Generator</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_AdminHelpDesk"
                   aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-headset"></i>
                    <span>Help Desk</span>
                </a>
                <div id="collapse_AdminHelpDesk" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Inquiry:</h6>
                        <a class="collapse-item" href="">Complaints</a>
                        <a class="collapse-item" href="">Special Requests</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - AdminReports -->
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Reports</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Heading -->
            <div class="sidebar-heading">
                Master
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMasterOffice"
                   aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-briefcase"></i>
                    <span>Office</span>
                </a>
                <div id="collapseMasterOffice" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Inquiry:</h6>
                        <a class="collapse-item" href="">Complaints</a>
                        <a class="collapse-item" href="">Special Requests</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Media :</h6>
                        <a class="collapse-item" href="404.html">Send Mail</a>
                        <a class="collapse-item" href="blank.html">Send Notice</a>
                        <a class="collapse-item" href="blank.html">Send Announcements</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - AdminMaintainance -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCustomer"
                   aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Customers</span>
                </a>
                <div id="collapseCustomer" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Edit:</h6>
                        <a class="collapse-item" href="">New Customer</a>
                        <a class="collapse-item" href="">Member Access</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">View:</h6>
                        <a class="collapse-item" href="">Customers</a>
                        <a class="collapse-item" href="">Members</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - AdminAccounts -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMasterAcc"
                   aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-file-invoice-dollar"></i>
                    <span>Billing & Accounts</span>
                </a>
                <div id="collapseMasterAcc" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Billing:</h6>
                        <a class="collapse-item" href="">Invoice History</a>
                        <a class="collapse-item" href="">Invoice Generator</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - AdminReports -->
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Reports</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Login Info -->
                    <a class="nav-link" style="pointer-events: none;" href="#pablo">
                        <span class="no-icon" style="font-weight:bold;color: #888888;">Member Id :&nbsp;</span>
                        <span class="no-icon" style="color: #888888;">MHSAB1001</span>
                    </a>
                    <a class="nav-link" style="pointer-events: none;" href="#pablo">
                        <span class="no-icon" style="font-weight:bold;color: #888888;">Unit :&nbsp;</span>
                        <span class="no-icon" style="color: #888888;">B 1001</span>
                    </a>
                    <a class="nav-link" style="pointer-events: none;" href="#pablo">
                        <span class="no-icon" style="font-weight:bold;color: #888888;">Admin Id :&nbsp;</span>
                        <span class="no-icon" style="color: #888888;">MHSAA0001</span>
                    </a>
                    <a class="nav-link" style="pointer-events: none;" href="#pablo">
                        <img src="img/Admin.svg" style="width:15px;padding-bottom:5px;" class="image" alt="" />
                        <span class="no-icon" style="font-weight:bold;color: #888888;">&nbsp;Admin</span>
                    </a>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                 aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                               placeholder="Search for..." aria-label="Search"
                                               aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                 aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                 aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                             alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">
                                            Hi there! I am wondering if you can help me with a
                                            problem I've been having.
                                        </div>
                                        <div class="small text-gray-500">Emily Fowler � 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                             alt="">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">
                                            I have the photos that you ordered last month, how
                                            would you like them sent to you?
                                        </div>
                                        <div class="small text-gray-500">Jae Chun � 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                             alt="">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">
                                            Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!
                                        </div>
                                        <div class="small text-gray-500">Morgan Alvarez � 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                             alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">
                                            Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...
                                        </div>
                                        <div class="small text-gray-500">Chicken the Dog � 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Mr Mangesh Kulkarni</span>

                                <div class="avatar avatar-online mr-1">
                                    <img class="avatar-img img-fluid" src="img/undraw_profile.svg">
                                </div>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                 aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row" style="padding-left:10px;padding-right:10px;">
                                <h6 class="m-0 font-weight-bold text-primary" style="align-self:center;">Parking Allotment</h6>
                                <div style="margin-left:auto;">
                                    <a href="#" class="btn btn-primary btn-icon-split" data-bs-toggle="modal" data-bs-target="#ParkingAllotment">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-parking"></i>
                                        </span>
                                        <span class="text">Allotment Request</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Unit Number</th>
                                            <th>Vehicle</th>
                                            <th>Registration Number</th>
                                            <th>Vehicle Type</th>
                                            <th>Alloted Plot</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Unit Number</th>
                                            <th>Vehicle</th>
                                            <th>Registration Number</th>
                                            <th>Vehicle Type</th>
                                            <th>Alloted Plot</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>A 1001</td>
                                            <td>Maruti Suzuki Ciaz</td>
                                            <td>MH02DJ4152</td>
                                            <td>4-Wheeler</td>
                                            <td>P105</td>
                                            <td>
                                                <a href="#" class="btn btn-danger btn-circle btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    


                    <!-- Modal -->
                    <div class="modal fade" id="ParkingAllotment" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title m-0 font-weight-bold" id="exampleModalScrollableTitle">Parking Allotment Request</h5>
                                    <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h6 class="m-0 font-weight-bold text-primary" style="align-self:center;">Vehical Details</h6>

                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="row gx-3 mb-3">
                                                    <!-- Form Group (first name)-->
                                                    <div class="col-md-2">
                                                        <label class="small mb-1" for="inputUnitNumber">Unit Number</label>
                                                        <input class="form-control" id="inputUnitNumber" type="text" placeholder="B 1001" value="B 1001" disabled/>
                                                    </div>

                                                    <!-- Form Group (last name)-->
                                                    <div class="col-md-6">
                                                        <label class="small mb-1" for="inputVehicalOwnerName">Vehical Owner</label>
                                                        <input class="form-control" id="inputVehicalOwnerName" type="text" placeholder="Enter Vehical Owners Name" value="" />
                                                    </div>

                                                    <!-- Form Group (last name)-->
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="inputVehicalRegistraionNumber">Vehical Registration Number</label>
                                                        <input class="form-control" id="inputVehicalRegistraionNumber" type="text" placeholder="Enter Vehical Registration Number" value="" />
                                                    </div>
                                                </div>
                                                <div class="row gx-3 mb-3">
                                                    <!-- Form Group (first name)-->
                                                    <div class="col-md-6">
                                                        <label class="small mb-1" for="inputVehicalName">Vehical Name</label>
                                                        <input class="form-control" id="inputVehicalName" type="text" placeholder="Enter Vehical Name" value="" />
                                                    </div>

                                                    <!-- Form Group (last name)-->
                                                    <div class="col-md-6">
                                                        <label class="small mb-1" for="inputVehicalType">Vehical Type</label>
                                                        <div class="row">
                                                            <div class="form-check col-md-4">
                                                                <input class="form-check-input" id="2-Wheeler" type="radio" name="VehicalType" checked="" />
                                                                <label class="form-check-label" for="2-Wheeler">2-Wheeler</label>
                                                            </div>
                                                            <div class="form-check col-md-4">
                                                                <input class="form-check-input" id="3-Wheeler" type="radio" name="VehicalType"/>
                                                                <label class="form-check-label" for="3-Wheeler">3-Wheeler</label>
                                                            </div>
                                                            <div class="form-check col-md-4">
                                                                <input class="form-check-input" id="4-Wheeler" type="radio" name="VehicalType" />
                                                                <label class="form-check-label" for="4-Wheeler">4-Wheeler</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row gx-3 mb-3">

                                                    <!-- Form Group (first name)-->
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="inputRCBookNumber">RC Book Number</label>
                                                        <input class="form-control" id="inputRCBookNumber" type="text" placeholder="Enter RC Book Number" value="" />
                                                    </div>

                                                    <!-- Form Group (last name)-->
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="inputVehicalChassisNumber">Vehical Chassis Number</label>
                                                        <input class="form-control" id="inputVehicalChassisNumber" type="text" placeholder="Enter Vehical Chassis Number" value="" />
                                                    </div>

                                                    <!-- Form Group (last name)-->
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="inputLicenseNumber">License Number</label>
                                                        <input class="form-control" id="inputLicenseNumber" type="text" placeholder="Enter License Number" value="" />
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h6 class="m-0 font-weight-bold text-primary" style="align-self:center;">Documents Submission</h6>

                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th>Document</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Document</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        <tr>
                                                            <td>Vehical Registration Papers</td>
                                                            <td>Pending</td>
                                                            <td>
                                                                <a href="#" class="btn btn-info btn-circle btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                                                                    <i class="fas fa-upload"></i>
                                                                </a>
                                                                <a href="#" class="btn btn-danger btn-circle btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                                                                    <i class="fas fa-trash"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>RC Book</td>
                                                            <td>Pending</td>
                                                            <td>
                                                                <a href="#" class="btn btn-info btn-circle btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                                                                    <i class="fas fa-upload"></i>
                                                                </a>
                                                                <a href="#" class="btn btn-danger btn-circle btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                                                                    <i class="fas fa-trash"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>License</td>
                                                            <td>Pending</td>
                                                            <td>
                                                                <a href="#" class="btn btn-info btn-circle btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                                                                    <i class="fas fa-upload"></i>
                                                                </a>
                                                                <a href="#" class="btn btn-danger btn-circle btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                                                                    <i class="fas fa-trash"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save changes</button></div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Society Manager Pro 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.17.1/components/prism-core.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.17.1/plugins/autoloader/prism-autoloader.min.js" crossorigin="anonymous"></script>

    <script src="https://assets.startbootstrap.com/js/sb-customizer.js"></script>


</body>

</html>