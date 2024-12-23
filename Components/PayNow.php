<!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Payment Summary</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="row no-gutters align-items-center userdetails20">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                            Unit Number
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">B 1001</div>

                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-building fa-2x text-gray-300"></i>
                                    </div>
                                </div>

                                <div class="row no-gutters align-items-center userdetails40">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Unit Owner
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            Mr Mangesh Kulkarni
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>

                                <div class="row no-gutters align-items-center userdetails20">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                            Maintainance Due
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">₹5,415</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-coins fa-2x text-gray-300"></i>
                                    </div>
                                </div>

                                <div class="row no-gutters align-items-center userdetails20">
                                    <a href="#" class="btn btn-primary btn-icon-split lift" data-bs-toggle="modal" data-bs-target="#Payment" style="margin:auto;">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-coins"></i>
                                        </span>
                                        <span class="text">Pay Now</span>
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
                                <h6 class="m-0 font-weight-bold text-primary" style="align-self:center;">Payment History</h6>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Unit Number</th>
                                            <th>Payee Name</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Receipt</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Unit Number</th>
                                            <th>Payee Name</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Receipt</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>B 1001</td>
                                            <td>Mr Mangesh Kulkarni</td>
                                            <td>03/08/2021</td>
                                            <td>₹6531.00</td>
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
                    <div class="modal fade" id="Payment" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title m-0 font-weight-bold" id="exampleModalScrollableTitle">Maintainance Payment</h5>
                                    <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h6 class="m-0 font-weight-bold text-primary" style="align-self:center;">Unit Details</h6>

                                        </div>
                                        <div class="card-body">
                                            <form id="UnitDetails" action="" method="POST">
                                                <div class="row gx-3 mb-3">
                                                    <!-- Form Group (first name)-->
                                                    <div class="col-md-8">
                                                        <label class="small mb-1" for="UnitDetails">Unit Details</label>
                                                        <select class="form-control" id="UnitDetails" name="UnitDetails">
                                                            <option value=""></option>
                                                            <option value="A101">A101 - Mr Ripal Patel</option>
                                                            <option value="A102">A102 - Mr Nandi Kumar</option>
                                                            <option value="A103">A103 - Mrs Nilima Jain</option>
                                                        </select>
                                                    </div>


                                                    <!-- Form Group (last name)-->
                                                    <div class="col-md-2" id="DueDateRefresh">
                                                        <label class="small mb-1" for="inputDOB">Due Date </label>
                                                        <h5 id="DueDate" style="font-size:1.2rem;padding-top:0.375rem;font-weight:600;">N/A</h5>
                                                    </div>

                                                    <!-- Form Group (last name)-->
                                                    <div class="col-md-2" id="DueAmountRefresh">
                                                        <label class="small mb-1" for="inputDOB">Due Amount (INR)</label>
                                                        <h5 id="DueAmount" style="font-size:1.2rem;padding-top:0.375rem;font-weight:600;">N/A</h5>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h6 class="m-0 font-weight-bold text-primary" style="align-self:center;">Payment Details</h6>
                                        </div>
                                        <div class="card-body">
                                            <form id="Payment Details" action="" method="POST">
                                                <div class="row gx-3 mb-3">
                                                    
                                                    <!-- Form Group (last name)-->
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="PayMode">Payment Mode</label>
                                                        <select class="form-control" id="PayMode" name="PayMode">
                                                            <option value=""></option>
                                                            <option value="Cash">Cash</option>
                                                            <option value="Cheque">Cheque</option>
                                                            <option value="NEFT">NEFT - Internet Banking</option>
                                                        </select>
                                                    </div>

                                                    <!-- Form Group (last name)-->
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="PayRefNumber">Payment Reference Number</label>
                                                        <input class="form-control" id="PayRefNumber" type="text" placeholder="Enter Payment Reference Number" value="" />
                                                    </div>

                                                    <!-- Form Group (last name)-->
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="AmountPaid">Amount Paid (INR)</label>
                                                        <input class="form-control" id="AmountPaid" type="text" placeholder="Enter Amount Paid" value="" />
                                                    </div>

                                                </div>
                                                <div class="row gx-3 mb-3">
                                                    
                                                    <!-- Form Group (last name)-->
                                                    <div class="col-md-12">
                                                        <div class="mb-0">
                                                            <label class="small mb-1" for="exampleFormControlTextarea1">Payment Description</label>
                                                            <textarea class="form-control" id="PaymentDescription" rows="3"></textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                                    <button class="btn btn-primary" id="MemberRegistrationSave" type="button" onclick="MemberRegistrationSubmit()" disabled>Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->
