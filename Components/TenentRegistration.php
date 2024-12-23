<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row" style="padding-left:10px;padding-right:10px;">
                                <h6 class="m-0 font-weight-bold text-primary" style="align-self:center;">Tenent Agreements</h6>
                                <div style="margin-left:auto;">
                                    <a href="#" class="btn btn-primary btn-icon-split" data-bs-toggle="modal" data-bs-target="#TenentApproval">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-hands-helping"></i>
                                        </span>
                                        <span class="text">Tenent Registration</span>
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
                                            <th>Tenent Name</th>
                                            <th>Agreement Number</th>
                                            <th>Aadhar Card Number</th>
                                            <th>Mobile Number</th>
                                            <th>Start</th>
                                            <th>End</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Unit Number</th>
                                            <th>Tenent Name</th>
                                            <th>Agreement Number</th>
                                            <th>Aadhar Card Number</th>
                                            <th>Mobile Number</th>
                                            <th>Start</th>
                                            <th>End</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>A 1001</td>
                                            <td>Mr Maruti Sudesh Naik</td>
                                            <td>MH15945689</td>
                                            <td>789452105594</td>
                                            <td>9820823451</td>
                                            <td>01/01/2021</td>
                                            <td>31/12/2021</td>
                                            <td>
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
                    <div class="modal fade" id="TenentApproval" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title m-0 font-weight-bold" id="exampleModalScrollableTitle">Tenent Registration</h5>
                                    <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h6 class="m-0 font-weight-bold text-primary" style="align-self:center;">Tenent Details</h6>

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
                                                        <label class="small mb-1" for="inputTenentName">Tenent Name</label>
                                                        <input class="form-control" id="inputTenentName" type="text" placeholder="Enter Tenent Name" value="" />
                                                    </div>

                                                    <!-- Form Group (last name)-->
                                                    <div class="col-md-2">
                                                        <label class="small mb-1" for="inputAge">Age</label>
                                                        <input class="form-control" id="inputAge" type="text" placeholder="Enter Tenent Age" value="" />
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
                                                        <label class="small mb-1" for="inputPANCardNumber">PAN Card Number</label>
                                                        <input class="form-control" id="inputPANCardNumber" type="text" placeholder="Enter PAN Card Number" value="" />
                                                    </div>

                                                    <!-- Form Group (first name)-->
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="inputPhoneNumber">Phone Number</label>
                                                        <input class="form-control" id="inputPhoneNumber" type="text" placeholder="Enter Telephone Number" value="" />
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h6 class="m-0 font-weight-bold text-primary" style="align-self:center;">Tenent Agreement Details</h6>

                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="row gx-3 mb-3">

                                                    <!-- Form Group (last name)-->
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="inputTenentAgreementNumber">Tenent Agreement Number</label>
                                                        <input class="form-control" id="inputTenentAgreementNumber" type="text" placeholder="Enter Agreement Number" value="" />
                                                    </div>

                                                    <!-- Form Group (last name)-->
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="inputAgreementStartDate">Agreement Start Date</label>
                                                        <input type="text" class="form-control" id="inputAgreementStartDate" data-toggle="datepicker" placeholder="Enter Agreement Start Date" value="" >
                                                    </div>

                                                    <!-- Form Group (last name)-->
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="inputAgreementEndDate">Agreement End Date</label>
                                                        <input type="text" class="form-control" id="inputAgreementEndDate" data-toggle="datepicker" placeholder="Enter Agreement End Date" value="">
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
                                                            <td>Tenent Agreement Papers</td>
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
                                                        <tr>
                                                            <td>Police Verification Certificate</td>
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
                                                        <tr>
                                                            <td>Tenent Aadhar Card</td>
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
                                                        <tr>
                                                            <td>Tenent PAN Card</td>
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
