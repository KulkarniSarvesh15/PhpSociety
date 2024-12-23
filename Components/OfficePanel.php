<!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Office Panel Summary</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="row no-gutters align-items-center userdetails20">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                            Total Panel Members
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">3</div>

                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-gray-300"></i>
                                    </div>
                                </div>

                                <div class="row no-gutters align-items-center userdetails20">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Office Term Start Date
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            01/01/2021
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-hourglass-start fa-2x text-gray-300"></i>
                                    </div>
                                </div>

                                <div class="row no-gutters align-items-center userdetails20">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Office Term End Date
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            31/12/2021
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-hourglass-end fa-2x text-gray-300"></i>
                                    </div>
                                </div>

                                <div class="row no-gutters align-items-center userdetails20">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                            Last Election Date
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            10/12/2020
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="far fa-calendar-alt fa-2x text-gray-300"></i>
                                    </div>
                                </div>

                                <div class="row no-gutters align-items-center userdetails20">
                                    <a href="#" class="btn btn-primary btn-icon-split lift" style="margin:auto;"  data-bs-toggle="modal" data-bs-target="#Request">
                                        <span class="icon text-white-50">
                                            <i class="far fa-comments"></i>
                                        </span>
                                        <span class="text">Panel Electon</span>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->
                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row" style="padding-left:10px;padding-right:10px;">
                                <h6 class="m-0 font-weight-bold text-primary" style="align-self:center;">Panel Members</h6>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Admin ID</th>
                                            <th>Member ID</th>
                                            <th>Admin</th>
                                            <th>Contact</th>
                                            <th>Position</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Admin ID</th>
                                            <th>Member ID</th>
                                            <th>Admin</th>
                                            <th>Contact</th>
                                            <th>Position</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>MHA0025</td>
                                            <td>MHSAB1001</td>
                                            <td>
                                                Mr Mangesh Kulkarni
                                            </td>
                                            <td>9167862489</td>
                                            <td>
                                                <div class="badge bg-success text-white rounded-pill">Secretary</div>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-info btn-circle btn-sm"  data-bs-toggle="modal" data-bs-target="#Edit">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>MHA0026</td>
                                            <td>MHSAB1072</td>
                                            <td>
                                                Mrs Smita Dhangade
                                            </td>
                                            <td>9167027913</td>
                                            <td>
                                                <div class="badge bg-success text-white rounded-pill">Treasurer</div>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-info btn-circle btn-sm" data-bs-toggle="modal" data-bs-target="#Edit">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>MHA0027</td>
                                            <td>MHSAB1025</td>
                                            <td>
                                                Mr Narayan Nalavde
                                            </td>
                                            <td>9167468275</td>
                                            <td>
                                                <div class="badge bg-success text-white rounded-pill">Assistant</div>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-info btn-circle btn-sm" data-bs-toggle="modal" data-bs-target="#Edit">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                <!-- Member Modal -->
                    <div class="modal fade" id="Request" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title m-0 font-weight-bold" id="exampleModalScrollableTitle">New Request</h5>
                                    <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h6 class="m-0 font-weight-bold text-primary" style="align-self:center;">Requestee Details</h6>

                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="row gx-3 mb-3">
                                                    <!-- Form Group (first name)-->
                                                    <div class="col-md-2">
                                                        <label class="small mb-1" for="inputUnitNumber">Unit Number</label>
                                                        <input class="form-control" id="inputUnitNumber" type="text" placeholder="B 1001" value="B 1001" disabled />
                                                    </div>

                                                    <!-- Form Group (last name)-->
                                                    <div class="col-md-6">
                                                        <label class="small mb-1" for="inputPersonalStaffName">Unit Owner Name</label>
                                                        <input class="form-control" id="inputPersonalStaffName" type="text" placeholder="Mr Mangesh Kulkarni" value="Mr Mangesh Kulkarni" disabled />
                                                    </div>
                                                    <!-- Form Group (first name)-->
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="inputService">Member ID</label>
                                                        <input class="form-control" id="inputService" type="text" placeholder="MHSAB1001" value="MHSAB1001" disabled />
                                                    </div>
                                                    
                                                </div>
                                                
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h6 class="m-0 font-weight-bold text-primary" style="align-self:center;">Request Details</h6>

                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="row gx-3 mb-3">
                                                    <!-- Form Group (first name)-->
                                                    <div class="col-md-2">
                                                        <label class="small mb-1" for="inputUnitNumber">Reference Number</label>
                                                        <input class="form-control" id="inputUnitNumber" type="text" placeholder="SRF12876" value="" disabled />
                                                    </div>

                                                    <!-- Form Group (last name)-->
                                                    <div class="col-md-6">
                                                        <label class="small mb-1" for="inputPersonalStaffName">Request Subject</label>
                                                        <input class="form-control" id="inputPersonalStaffName" type="text" placeholder="Enter Subject For Request" value="" />
                                                    </div>
                                                    <!-- Form Group (first name)-->
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="exampleFormControlSelect1">Request Type</label><select class="form-control" id="exampleFormControlSelect1">
                                                            <option>Accounting Related</option>
                                                            <option>Installation Related</option>
                                                            <option>Keys Related</option>
                                                            <option>Parking Related</option>
                                                            <option>Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row gx-3 mb-3">
                                                    <div class="col-md-12">
                                                        <div class="mb-0">
                                                            <label class="small mb-1" for="exampleFormControlTextarea1">Request Description</label>
                                                            <textarea class="form-control" id="ComplaintDescription" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h6 class="m-0 font-weight-bold text-primary" style="align-self:center;">Request Status</h6>

                                        </div>
                                        <div class="card-body">
                                            <!-- Styled timeline component example -->
                                            <div class="timeline">
                                                <div class="timeline-item">
                                                    <div class="timeline-item-marker">
                                                        <div class="timeline-item-marker-text">01/01/2021</div>
                                                        <div class="timeline-item-marker-indicator bg-primary-soft text-primary">
                                                            <i class="fas fa-envelope-open-text"></i>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item-content timeline-active pt-0">
                                                        <div class="card shadow-sm">
                                                            <div class="card-body">
                                                                <h5 class="text-primary">Request Submitted</h5>
                                                                Your Request has been Submitted Succesfully.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="timeline-item-marker">
                                                        <div class="timeline-item-marker-text">02/02/2021</div>
                                                        <div class="timeline-item-marker-indicator bg-success-soft text-success">
                                                            <i class="fas fa-database"></i>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item-content timeline-active pt-0">
                                                        <div class="card shadow-sm">
                                                            <div class="card-body">
                                                                <h5 class="text-success">Request Has Been Registered</h5>
                                                                Your Request has been Registered Succesfully. Your Reference Number is SRF12876.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="timeline-item-marker">
                                                        <div class="timeline-item-marker-text">03/03/2021</div>
                                                        <div class="timeline-item-marker-indicator bg-warning-soft text-warning">
                                                            <i class="fas fa-search"></i>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item-content timeline-non-active pt-0">
                                                        <div class="card shadow-sm">
                                                            <div class="card-body">
                                                                <h5 class="text-warning">Request Is Been Reviewed</h5>
                                                                Your Request is being Reviewed by the Admin. This might take 2-3 days.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="timeline-item-marker">
                                                        <div class="timeline-item-marker-text"></div>
                                                        <div class="timeline-item-marker-indicator  text-secondary">
                                                            <i class="fas fa-stopwatch"></i>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item-content pt-0">
                                                        <div class="card shadow-sm">
                                                            <div class="card-body">
                                                                <h5 class="text-secondary">Request Approved / Rejected</h5>
                                                                Your request hasn't been approved by the Admin yet. We will notify you once the Admin approves your request.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save changes</button></div>
                            </div>
                        </div>
                    </div>

                    <!-- Member Modal -->
                    <div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title m-0 font-weight-bold" id="exampleModalScrollableTitle">Edit Position</h5>
                                    <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h6 class="m-0 font-weight-bold text-primary" style="align-self:center;">Position Details</h6>

                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="row gx-3 mb-3">
                                                    <!-- Form Group (first name)-->
                                                    <div class="col-md-2">
                                                        <label class="small mb-1" for="inputUnitNumber">Position</label>
                                                        <input class="form-control" id="inputUnitNumber" type="text" placeholder="Assistant" value="Assistant" disabled />
                                                    </div>

                                                    <!-- Form Group (last name)-->
                                                    <div class="col-md-6">
                                                        <label class="small mb-1" for="inputPersonalStaffName">Current Position Holder</label>
                                                        <input class="form-control" id="inputPersonalStaffName" type="text" placeholder="Mr Mangesh Kulkarni" value="Mr Mangesh Kulkarni" disabled />
                                                    </div>
                                                    <!-- Form Group (first name)-->
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="inputService">Member ID</label>
                                                        <input class="form-control" id="inputService" type="text" placeholder="MHSAB1001" value="MHSAB1001" disabled />
                                                    </div>
                                                    
                                                </div>
                                                
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h6 class="m-0 font-weight-bold text-primary" style="align-self:center;">New Position Details</h6>

                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="row gx-3 mb-3">
                                                    <!-- Form Group (first name)-->
                                                    <div class="col-md-2">
                                                        <label class="small mb-1" for="inputUnitNumber">Position</label>
                                                        <input class="form-control" id="inputUnitNumber" type="text" placeholder="Assistant" value="Assistant" disabled />
                                                    </div>

                                                    <!-- Form Group (last name)-->
                                                    <div class="col-md-6">
                                                        <label class="small mb-1" for="inputPersonalStaffName">New Position Holder</label>
                                                        <input class="form-control" id="inputPersonalStaffName" type="text" placeholder="Enter New Position Holder Name" value="" />
                                                    </div>
                                                    <!-- Form Group (first name)-->
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="exampleFormControlSelect1">Reason</label><select class="form-control" id="exampleFormControlSelect1">
                                                            <option>Personal</option>
                                                            <option>Left Society</option>
                                                            <option>Demise</option>
                                                            <option>Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row gx-3 mb-3">
                                                    <div class="col-md-12">
                                                        <div class="mb-0">
                                                            <label class="small mb-1" for="exampleFormControlTextarea1">Reason In Detail</label>
                                                            <textarea class="form-control" id="ComplaintDescription" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save changes</button></div>
                            </div>
                        </div>
                    </div>
