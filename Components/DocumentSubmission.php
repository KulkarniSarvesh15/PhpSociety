<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row" style="padding-left:10px;padding-right:10px;">
                                <h6 class="m-0 font-weight-bold text-primary" style="align-self:center;">Documents Submitted</h6>
                                <div style="margin-left:auto;">
                                    <a href="#" class="btn btn-primary btn-icon-split" data-bs-toggle="modal" data-bs-target="#DocumentSubmission">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-file"></i>
                                        </span>
                                        <span class="text">Submit Documents</span>
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
                                            <th>Document</th>
                                            <th>Document Number</th>
                                            <th>Purpose</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Unit Number</th>
                                            <th>Document</th>
                                            <th>Document Number</th>
                                            <th>Purpose</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>A 1001</td>
                                            <td>Unit Agreement Papers</td>
                                            <td>UAN123458</td>
                                            <td>Office Records</td>
                                            <td>
                                                <a href="#" class="btn btn-success btn-circle btn-sm">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>A 1001</td>
                                            <td>Owners Aadhar Card</td>
                                            <td>789458692215</td>
                                            <td>Office Records</td>
                                            <td>
                                                <a href="#" class="btn btn-success btn-circle btn-sm">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>A 1001</td>
                                            <td>Personal Staff Aadhar Card</td>
                                            <td>789458692215</td>
                                            <td>Personal Staff Records</td>
                                            <td>
                                                <a href="#" class="btn btn-success btn-circle btn-sm">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>A 1001</td>
                                            <td>Personal Staff Aadhar Card</td>
                                            <td>789298341545</td>
                                            <td>Personal Staff Records</td>
                                            <td>
                                                <a href="#" class="btn btn-success btn-circle btn-sm">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>A 1001</td>
                                            <td>Personal Staff Aadhar Card</td>
                                            <td>788233128865</td>
                                            <td>Personal Staff Records</td>
                                            <td>
                                                <a href="#" class="btn btn-success btn-circle btn-sm">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>A 1001</td>
                                            <td>RC Book - 4 Wheeler</td>
                                            <td>MH023154168</td>
                                            <td>Parking Allotment</td>
                                            <td>
                                                <a href="#" class="btn btn-success btn-circle btn-sm">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Member Modal -->
                    <div class="modal fade" id="DocumentSubmission" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title m-0 font-weight-bold" id="exampleModalScrollableTitle">Add Document</h5>
                                    <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h6 class="m-0 font-weight-bold text-primary" style="align-self:center;">Document Details</h6>

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
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="inputDocumentName">Document Name</label>
                                                        <input class="form-control" id="inputDocumentName" type="text" placeholder="Enter Document Name" value="" />
                                                    </div>

                                                    <!-- Form Group (last name)-->
                                                    <div class="col-md-3">
                                                        <label class="small mb-1" for="inputDocumentNumber">Document Number</label>
                                                        <input class="form-control" id="inputDocumentNumber" type="text" placeholder="Enter Document Number" value="" />
                                                    </div>

                                                    <!-- Form Group (last name)-->
                                                    <div class="col-md-3">
                                                        <label class="small mb-1" for="inputPurpose">Purpose</label>
                                                        <input class="form-control" id="inputPurpose" type="text" placeholder="Enter Submission Purpose" value="" />
                                                    </div>
                                                </div>
                                                
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h6 class="m-0 font-weight-bold text-primary" style="align-self:center;">Document Submission</h6>

                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th>Document Name</th>
                                                            <th>Document Number</th>
                                                            <th>Purpose</th>
                                                            <th>Status</th>
                                                            <th>File</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Document Name</th>
                                                            <th>Document Number</th>
                                                            <th>Purpose</th>
                                                            <th>Status</th>
                                                            <th>File</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        <tr>
                                                            <td>Document</td>
                                                            <td>N/A</td>
                                                            <td>N/A</td>
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
