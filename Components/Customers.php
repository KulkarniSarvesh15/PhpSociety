<!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row" style="padding-left:10px;padding-right:10px;">
                                <h6 class="m-0 font-weight-bold text-primary" style="align-self:center;">Customers</h6>
                                <div style="margin-left:auto;">
                                    <a href="#" class="btn btn-primary btn-icon-split" data-bs-toggle="modal" data-bs-target="#MemberRegistration">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-user-plus"></i>
                                        </span>
                                        <span class="text">Customer Registration</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Society ID</th>
                                            <th>Society Name</th>
                                            <th>Society Registration</th>
                                            <th>Society PAN Number</th>
                                            <th>Total Units</th>
                                            <th>Total Members</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Society ID</th>
                                            <th>Society Name</th>
                                            <th>Society Registration</th>
                                            <th>Society PAN Number</th>
                                            <th>Total Units</th>
                                            <th>Total Members</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mumbai Heights</td>
                                            <td>SA10156</td>
                                            <td>MH1569756</td>
                                            <td>110</td>
                                            <td>101</td>
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

                    <!-- Member Modal -->
                    <div class="modal fade" id="MemberRegistration" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title m-0 font-weight-bold" id="exampleModalScrollableTitle">Customer Registration</h5>
                                    <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h6 class="m-0 font-weight-bold text-primary" style="align-self:center;">Customer Details</h6>

                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="row gx-3 mb-3">
                                                    <!-- Form Group (first name)-->
                                                    <div class="col-md-2">
                                                        <label class="small mb-1" for="inputSocietyID">Society ID</label>
                                                        <input class="form-control" id="inputSocietyID" type="text" placeholder="1" value="1" disabled />
                                                    </div>

                                                    <!-- Form Group (last name)-->
                                                    <div class="col-md-6">
                                                        <label class="small mb-1" for="inputSocietyName">Society Name</label>
                                                        <input class="form-control" id="inputSocietyName" type="text" placeholder="Enter Society Name" value="" />
                                                    </div>

                                                    <!-- Form Group (last name)-->
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="inputSocietyRegistrationNumber">Society Registration Number</label>
                                                        <input class="form-control" id="inputSocietyRegistrationNumber" type="text" placeholder="Enter Society Registration" value="" />
                                                    </div>

                                                </div>
                                                <div class="row gx-3 mb-3">
                                                    <!-- Form Group (first name)-->
                                                    <div class="col-md-6">
                                                        <label class="small mb-1" for="inputAddress1">Society Address 1</label>
                                                        <input class="form-control" id="inputAddress1" type="text" placeholder="Enter Plot Number" value="" />
                                                    </div>

                                                    <!-- Form Group (first name)-->
                                                    <div class="col-md-6">
                                                        <label class="small mb-1" for="inputAddress2">Society Address 2</label>
                                                        <input class="form-control" id="inputAddress2" type="text" placeholder="Enter Street Name" value="" />
                                                    </div>
                                                </div>
                                                <div class="row gx-3 mb-3">
                                                    <!-- Form Group (first name)-->
                                                    <div class="col-md-6">
                                                        <label class="small mb-1" for="inputAddress3">Society Address 3</label>
                                                        <input class="form-control" id="inputAddress3" type="text" placeholder="Enter Locality" value="" />
                                                    </div>

                                                    <!-- Form Group (first name)-->
                                                    <div class="col-md-3">
                                                        <label class="small mb-1" for="inputLandmark">Landmark</label>
                                                        <input class="form-control" id="inputLandmark" type="text" placeholder="Enter Landmark" value="" />
                                                    </div>

                                                    <!-- Form Group (first name)-->
                                                    <div class="col-md-3">
                                                        <label class="small mb-1" for="inputPinCode">Pin Code</label>
                                                        <input class="form-control" id="inputPinCode" type="text" placeholder="Enter Pin Code" value="" />
                                                    </div>
                                                </div>
                                                <div class="row gx-3 mb-3">
                                                    <!-- Form Group (first name)-->
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="inputCountry">Country</label>
                                                        <select class="form-control" id="inputCountry" onchange="Country();">
                                                            <option value="Select">Select Country</option>
                                                            <?php
                                                                while($country_row=mysqli_fetch_assoc($country_result)){
                                                            ?>
                                                                <option value="<?php echo $country_row['Id'] ?>"><?php echo $country_row['CountryName'] ?></option>
                                                            <?php
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    
                                                    <!-- Form Group (first name)-->
                                                    <div class="col-md-4" id="State">
                                                        <label class="small mb-1" for="inputState">State</label>
                                                        <select class="form-control" id="inputState"></select>
                                                    </div>

                                                    <!-- Form Group (first name)-->
                                                    <div class="col-md-4" id="City">
                                                        <label class="small mb-1" for="inputCity">City</label>
                                                        <select class="form-control" id="inputCity"></select>
                                                    </div>

                                                </div>
                                                <div class="row gx-3 mb-3">
                                                    <!-- Form Group (last name)-->
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="inputSocietyGSTINNumber">Society GSTIN Number</label>
                                                        <input class="form-control" id="inputSocietyGSTINNumber" type="text" placeholder="Enter Society GSTIN" value="" />
                                                    </div>

                                                    <!-- Form Group (last name)-->
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="inputSocietyPANNumber">Society PAN Number</label>
                                                        <input class="form-control" id="inputSocietyPANNumber" type="text" placeholder="Enter Society PAN" value="" />
                                                    </div>

                                                    <!-- Form Group (last name)-->
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="inputSocietyType">Society Type</label>
                                                        <select class="form-control" id="inputSocietyType">
                                                            <option>Co-operative Housing</option>
                                                            <option>Govenment</option>
                                                            <option>MHADA</option>
                                                            <option>Other</option>
                                                        </select>
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

                </div>
                <!-- /.container-fluid -->
