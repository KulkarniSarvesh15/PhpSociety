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
                                                    <div class="col-md-4">
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
                                                    <div class="col-md-2">
                                                        <label class="small mb-1" for="inputVehicalName">Parking Plot</label>
                                                        <input class="form-control" id="inputVehicalName" type="text" placeholder="Enter Parking Plot Number" value="" disabled />
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
                                                            <td>Vehical Registration Papers</td>
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
                                                            <td>RC Book</td>
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
                                                            <td>License</td>
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
