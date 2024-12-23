<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row" style="padding-left:10px;padding-right:10px;">
                                <h6 class="m-0 font-weight-bold text-primary" style="align-self:center;">Personal Staff</h6>
                                <div style="margin-left:auto;">
                                    <a href="#" class="btn btn-primary btn-icon-split" data-bs-toggle="modal" data-bs-target="#PersonalStaff">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-id-badge"></i>
                                        </span>
                                        <span class="text">Add Personal Staff</span>
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
                                            <th>Name</th>
                                            <th>Service</th>
                                            <th>Mobile Number</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Unit Number</th>
                                            <th>Name</th>
                                            <th>Service</th>
                                            <th>Mobile Number</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>A 1001</td>
                                            <td>Mrs Amisha Yadhav</td>
                                            <td>Maid</td>
                                            <td>9167815634</td>
                                            <td>
                                                <a href="#" class="btn btn-info btn-circle btn-sm" data-bs-toggle="modal" data-bs-target="#PersonalStaff">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger btn-circle btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>A 1001</td>
                                            <td>Mrs Menaka Raman</td>
                                            <td>Maid</td>
                                            <td>9167825351</td>
                                            <td>
                                                <a href="#" class="btn btn-info btn-circle btn-sm" data-bs-toggle="modal" data-bs-target="#PersonalStaff">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger btn-circle btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>A 1001</td>
                                            <td>Mr Arun Jadhav</td>
                                            <td>Cleaner</td>
                                            <td>9969825989</td>
                                            <td>
                                                <a href="#" class="btn btn-info btn-circle btn-sm" data-bs-toggle="modal" data-bs-target="#PersonalStaff">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger btn-circle btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Member Modal -->
                    <div class="modal fade" id="PersonalStaff" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title m-0 font-weight-bold" id="exampleModalScrollableTitle">Add Personal Staff</h5>
                                    <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h6 class="m-0 font-weight-bold text-primary" style="align-self:center;">Personal Staff Details</h6>

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
                                                        <label class="small mb-1" for="inputPersonalStaffName">Personal Staff Name</label>
                                                        <input class="form-control" id="inputPersonalStaffName" type="text" placeholder="Enter Personal Staff Name" value="" />
                                                    </div>

                                                    <!-- Form Group (last name)-->
                                                    <div class="col-md-2">
                                                        <label class="small mb-1" for="inputAge">Age</label>
                                                        <input class="form-control" id="inputAge" type="text" placeholder="Enter Personal Staff Age" value="" />
                                                    </div>

                                                    <!-- Form Group (last name)-->
                                                    <div class="col-md-2">
                                                        <label class="small mb-1" for="inputGender">Gender</label>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-check col-md-4">
                                                                    <input class="form-check-input" id="Male" type="radio" name="Gender" checked="" />
                                                                    <label class="form-check-label" for="Male">Male</label>
                                                                </div>
                                                                <div class="form-check col-md-4">
                                                                    <input class="form-check-input" id="Female" type="radio" name="Gender" />
                                                                    <label class="form-check-label" for="Female">Female</label>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-check col-md-4">
                                                                    <input class="form-check-input" id="Other" type="radio" name="Gender" />
                                                                    <label class="form-check-label" for="Other">Other</label>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="row gx-3 mb-3">
                                                    <!-- Form Group (first name)-->
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="inputAadharCardNumber">Aadhar Card Number</label>
                                                        <input class="form-control" id="inputAadharCardNumber" type="text" placeholder="Enter Aadhar Card Number" value="" />
                                                    </div>

                                                    <!-- Form Group (first name)-->
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="inputPhoneNumber">Phone Number</label>
                                                        <input class="form-control" id="inputPhoneNumber" type="text" placeholder="Enter Telephone Number" value="" />
                                                    </div>

                                                    <!-- Form Group (first name)-->
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="inputService">Service</label>
                                                        <input class="form-control" id="inputService" type="text" placeholder="Enter Service Provided" value="" />
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
                                                            <th>File</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Document</th>
                                                            <th>Status</th>
                                                            <th>File</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        <tr>
                                                            <td>Personal Staff Aadhar Card</td>
                                                            <td>Pending</td>
                                                            <td>
                                                                <input type="file" id="myFile" name="filename">
                                                            </td>
                                                            <td>
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
