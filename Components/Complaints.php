<!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Complaints Summary</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="row no-gutters align-items-center userdetails20">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                            Total Complaints
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">3</div>

                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-exclamation-triangle fa-2x text-gray-300"></i>
                                    </div>
                                </div>

                                <div class="row no-gutters align-items-center userdetails20">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Solved
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            2
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="far fa-thumbs-up fa-2x text-gray-300"></i>
                                    </div>
                                </div>

                                <div class="row no-gutters align-items-center userdetails20">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            In Progess
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            1
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-wrench fa-2x text-gray-300"></i>
                                    </div>
                                </div>

                                <div class="row no-gutters align-items-center userdetails20">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                            Over Due
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="far fa-angry fa-2x text-gray-300"></i>
                                    </div>
                                </div>

                                <div class="row no-gutters align-items-center userdetails20">
                                    <a href="#" class="btn btn-primary btn-icon-split lift" style="margin:auto;"  data-bs-toggle="modal" data-bs-target="#Complaint">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-exclamation-circle"></i>
                                        </span>
                                        <span class="text">New Complaint</span>
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
                                <h6 class="m-0 font-weight-bold text-primary" style="align-self:center;">Complaints History</h6>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Unit Number</th>
                                            <th>Complainee Name</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Unit Number</th>
                                            <th>Complainee Name</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>B 1001</td>
                                            <td>Mr Mangesh Kulkarni</td>
                                            <td>23/10/2020</td>
                                            <td>
                                                <div class="badge bg-success text-white rounded-pill">Solved</div>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-info btn-circle btn-sm">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>B 1001</td>
                                            <td>Mr Mangesh Kulkarni</td>
                                            <td>16/04/2021</td>
                                            <td>
                                                <div class="badge bg-success text-white rounded-pill">Solved</div>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-info btn-circle btn-sm">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>B 1001</td>
                                            <td>Mr Mangesh Kulkarni</td>
                                            <td>03/08/2021</td>
                                            <td>
                                                <div class="badge bg-warning text-white rounded-pill">In Progress</div>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-info btn-circle btn-sm">
                                                    <i class="far fa-eye"></i>
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
                    <div class="modal fade" id="Complaint" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title m-0 font-weight-bold" id="exampleModalScrollableTitle">New Complaint</h5>
                                    <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h6 class="m-0 font-weight-bold text-primary" style="align-self:center;">Complainee Details</h6>

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
                                            <h6 class="m-0 font-weight-bold text-primary" style="align-self:center;">Complaint Details</h6>

                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="row gx-3 mb-3">
                                                    <!-- Form Group (first name)-->
                                                    <div class="col-md-2">
                                                        <label class="small mb-1" for="inputUnitNumber">Reference Number</label>
                                                        <input class="form-control" id="inputUnitNumber" type="text" placeholder="CRF12876" value="" disabled />
                                                    </div>

                                                    <!-- Form Group (last name)-->
                                                    <div class="col-md-6">
                                                        <label class="small mb-1" for="inputPersonalStaffName">Complaint Subject</label>
                                                        <input class="form-control" id="inputPersonalStaffName" type="text" placeholder="Enter Subject For Complaint" value="" />
                                                    </div>
                                                    <!-- Form Group (first name)-->
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="exampleFormControlSelect1">Complain Type</label>
                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                            <option>Society Related</option>
                                                            <option>Building Related</option>
                                                            <option>Member Related</option>
                                                            <option>Office Staff Related</option>
                                                            <option>Parking Related</option>
                                                            <option>Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row gx-3 mb-3">
                                                    <div class="col-md-12">
                                                        <div class="mb-0">
                                                            <label class="small mb-1" for="exampleFormControlTextarea1">Complaint Description</label>
                                                            <textarea class="form-control" id="ComplaintDescription" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </form>
                                        </div>
                                    </div>

                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h6 class="m-0 font-weight-bold text-primary" style="align-self:center;">Actions Undertaken</h6>

                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="row gx-3 mb-3">
                                                    <div class="col-md-12">
                                                        <div class="mb-0">
                                                            <label class="small mb-1" for="exampleFormControlTextarea1">Actions Taken</label>
                                                            <textarea class="form-control" id="ComplaintDescription" rows="3"></textarea>
                                                        </div>
                                                    </div>  
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h6 class="m-0 font-weight-bold text-primary" style="align-self:center;">Complaint Status</h6>

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
                                                                <h5 class="text-primary">Complaint Submitted</h5>
                                                                Your Complaint has been Submitted Succesfully.
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
                                                                <h5 class="text-success">Complaint Has Been Registered</h5>
                                                                Your Complaint has been Registered Succesfully. Your Reference Number is CRF12876.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="timeline-item-marker">
                                                        <div class="timeline-item-marker-text">03/03/2021</div>
                                                        <div class="timeline-item-marker-indicator bg-success-soft text-success">
                                                            <i class="fas fa-search"></i>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item-content timeline-active pt-0">
                                                        <div class="card shadow-sm">
                                                            <div class="card-body">
                                                                <h5 class="text-success">Request Is Been Reviewed</h5>
                                                                Your Complaint has been Reviewed by the Mr Atul Rane.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="timeline-item-marker">
                                                        <div class="timeline-item-marker-text">05/03/2021</div>
                                                        <div class="timeline-item-marker-indicator bg-success-soft text-success">
                                                            <i class="far fa-handshake"></i>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item-content pt-0">
                                                        <div class="card shadow-sm">
                                                            <div class="card-body">
                                                                <h5 class="text-success">Actions Completed</h5>
                                                                Required Actions had been taken by the Committee
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                                    <button class="btn btn-primary" type="button">Save changes</button>
                                    <button class="btn btn-success" type="button">Resolved</button>
                                </div>
                            </div>
                        </div>
                    </div>

