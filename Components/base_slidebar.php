
<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-city"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Society Soft Plus</div>
            </a>


            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            
            
            <!-- Nav Item - Dashboard -->
            <?php
                if($Content=="Dashboard"){
            ?>
                <li class="nav-item active">
            <?php
                }
                else{
            ?>
                <li class="nav-item">
            <?php
                }
            ?>
                <a class="nav-link" href="index.php">
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
            <?php
                if($Content=="UnitDetails"||$Content=="PersonalStaff"||$Content=="DocumentSubmission"||$Content=="ParkingAllotment"||$Content=="TenentAgreement"){
            ?>

            <li class="nav-item active">

            <?php
                }
                else{
            ?>

            <li class="nav-item">

            <?php
                }
            ?>

                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_MyUnit"
                   aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-home"></i>
                    <span>My Unit</span>
                </a>
                <div id="collapse_MyUnit" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Features:</h6>
                        <?php
                            if($Content=="UnitDetails"){
                        ?>
                            <a class="collapse-item active" href="UnitDetails.php">Unit Details</a>
                        <?php
                            }
                            else{
                        ?>
                            <a class="collapse-item" href="UnitDetails.php">Unit Details</a>
                        <?php
                            }
                            if($Content=="PersonalStaff"){
                        ?>
                            <a class="collapse-item active" href="PersonalStaff.php">Personal Staff</a>
                        <?php
                            }
                            else{
                        ?>
                            <a class="collapse-item" href="PersonalStaff.php">Personal Staff</a>
                        <?php
                            }
                            if($Content=="DocumentSubmission"){
                        ?>
                            <a class="collapse-item active" href="DocumentSubmission.php">Document Submission</a>
                        <?php
                            }
                            else{
                        ?>
                            <a class="collapse-item" href="DocumentSubmission.php">Document Submission</a>
                        <?php
                            }
                        ?>
                            <div class="collapse-divider"></div>
                            <h6 class="collapse-header">Registrations:</h6>
                        <?php
                            if($Content=="ParkingAllotment"){
                        ?>
                            <a class="collapse-item active" href="ParkingAllotment.php">Parking Allotment</a>
                        <?php
                            }
                            else{
                        ?>
                            <a class="collapse-item" href="ParkingAllotment.php">Parking Allotment</a>
                        <?php
                            }
                            if($Content=="TenentAgreement"){
                        ?>
                            <a class="collapse-item active" href="TenentAgreement.php">Tenent Agreement</a>
                        <?php
                            }
                            else{
                        ?>
                            <a class="collapse-item" href="TenentAgreement.php">Tenent Agreement</a>
                        <?php
                            }
                        ?>

                    </div>
                </div>
            </li>

            <!-- Nav Item - Members -->
            <?php
                if($Content=="Members"){
            ?>

            <li class="nav-item active">

            <?php
                }
                else{
            ?>

            <li class="nav-item">

            <?php
                }
            ?>

                <a class="nav-link" href="Members.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Members</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <?php
                if($Content=="UnitBills"||$Content=="PayNow"){
            ?>

            <li class="nav-item active">

            <?php
                }
                else{
            ?>

                <li class="nav-item">

            <?php
                }
            ?>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_BillingAccounts"
                   aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-file-invoice-dollar"></i>
                    <span>Billing & Accounts</span>
                </a>
                <div id="collapse_BillingAccounts" class="collapse" aria-labelledby="headingUtilities"
                     data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Billing Arena:</h6>
                        <?php
                            if($Content=="UnitBills"){
                        ?>
                            <a class="collapse-item active" href="UnitBills.php">Unit Bills</a>
                        <?php
                            }
                            else{
                        ?>
                            <a class="collapse-item" href="UnitBills.php">Unit Bills</a>
                        <?php
                            }
                            if($Content=="PayNow"){
                        ?>
                            <a class="collapse-item active" href="PayNow.php">Pay Now</a>
                        <?php
                            }
                            else{
                        ?>
                            <a class="collapse-item" href="PayNow.php">Pay Now</a>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </li>

            <?php
                if($Content=="Complaints"||$Content=="SpecialRequests"){
            ?>

            <li class="nav-item active">

            <?php
                }
                else{
            ?>

            <li class="nav-item">

            <?php
                }
            ?>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_HelpDesk"
                   aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-headset"></i>
                    <span>Help Desk</span>
                </a>
                <div id="collapse_HelpDesk" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Inquiry:</h6>
                        <?php
                            if($Content=="Complaints"){
                        ?>
                            <a class="collapse-item active" href="Complaints.php">Complaints</a>
                        <?php
                            }
                            else{
                        ?>
                            <a class="collapse-item" href="Complaints.php">Complaints</a>
                        <?php
                            }
                            if($Content=="SpecialRequests"){
                        ?>
                            <a class="collapse-item active" href="Requests.php">Special Requests</a>
                        <?php
                            }
                            else{
                        ?>
                            <a class="collapse-item" href="Requests.php">Special Requests</a>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </li>



            <!-- Nav Item - Reports -->
            <?php
                if($Content=="MemberReports"){
            ?>

            <li class="nav-item active">

            <?php
                }
                else{
            ?>

            <li class="nav-item">

            <?php
                }
            ?>
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
                        <a class="collapse-item" href="OfficePanel.php">Office Panel</a>
                        <a class="collapse-item" href="Members.php">Members</a>
                        <a class="collapse-item" href="OfficeStaff.php">Office Staff</a>
                        <a class="collapse-item" href="PersonalStaff.php">Personal Staff (Members)</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Approval:</h6>
                        <a class="collapse-item" href="ParkingAllotment.php">Parking Approval</a>
                        <a class="collapse-item" href="TenentAgreement.php">Tenent Approval</a>
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
                    <span>Billing & Accounts</span>
                </a>
                <div id="collapseAdminAcc" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Member Billing:</h6>
                        <a class="collapse-item" href="MemberInvoiceGenerator.php">Invoice Generator</a>
                        <a class="collapse-item" href="">Billing</a>
                        <div class="collapse-divider"></div>
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
                        <a class="collapse-item" href="Customers.php">Customers</a>
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