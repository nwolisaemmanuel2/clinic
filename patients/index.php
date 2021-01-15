<?php include "../layouts/header.php"; ?>



<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Patients</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <button class="text-decoration-none btn btn-primary btn-sm mt-1 mb-2" data-toggle="modal" data-target="#addPatient">
                <span class="fas fa-user-astronaut"></span>
                Add A New Patient
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-sm" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>Phone</th>
                        <th>Sex</th>
                        <th>Amount</th>
                        <th>Address</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>Phone</th>
                        <th>Sex</th>
                        <th>Amount</th>
                        <th>Address</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <tr>
                        <td>Tiger</td>
                        <td>Woods</td>
                        <td>28</td>
                        <td>03323342423</td>
                        <td>Male</td>
                        <td>40</td>
                        <td>Adum Kumasi</td>
                        <td><a class="btn btn-primary btn-sm" href=""><span class="fas fa-edit"></span></a></td>
                        <td><a class="btn btn-danger btn-sm" href=""><span class="fas fa-pencil-alt"></span></a></td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->





<!--  Modal for adding Patient-->
<div class="modal fade" id="addPatient" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="myModalLabel" aria-hidden="true">
    <br><br>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel"><i class="fas fa-user-astronaut"></i><span class="text-primary"> Add New Patient</span></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">X</span>
                </button>
            </div>
            <div class="modal-body">


                <!-- ./Form -->
                <form action="" method="post" class="myform">

                    <div class="modal-body">

                        <div class="row">
                            <div class="form-group  col-md-4">
                                <label for="firstName">First Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </div>
                                    <input class="form-control" minlength="3" autocomplete="off" required="required" name="firstName" type="text" value="" id="firstName">
                                </div>
                            </div>
                            <div class="form-group  col-md-4">
                                <label for="lastName">Last Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </div>
                                    <input class="form-control" minlength="3" autocomplete="off" required="required" name="lastName" type="text" value="" id="lastName">
                                </div>
                            </div>
                            <div class="form-group  col-md-4">
                                <label for="tel">Phone</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="fas fa-phone"></span>
                                        </div>
                                    </div>
                                    <input class="form-control" name="tel" autocomplete="off" type="number" value="" id="tel">
                                </div>
                            </div>
                            <div class="form-group  col-md-4">
                                <label for="age">Age</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text font-weight-bold">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                                    <input class="form-control" required="required" min="0" name="age" autocomplete="off" type="number" id="age">
                                </div>
                            </div>

                            <div class="form-group  col-md-4">
                                <label for="sex">Sex</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text font-weight-bold">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                                    <select name="sex" id="sex" class="form-control" required>
                                        <option value=""></option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group  col-md-4">
                                <label for="amount">Amount</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                           <b>₵</b>
                                        </div>
                                    </div>
                                    <input type="number" class="form-control" step="0.01" name="amount" id="amount" required autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group  col-md-12">
                                <label for="address">Address</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="fas fa-address-card"></span>
                                        </div>
                                    </div>
                                    <textarea name="address" class="form-control" id="address" cols="10" rows="4"></textarea>
                                </div>
                            </div>



                            <div class="col-md-12 text-right">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <input class="btn btn-primary mybtn" type="submit" value="Save">
                            </div>
                        </div>

                    </div>

                </form> <!-- ./Form -->



            </div>

        </div>

    </div>
</div>








<?php include "../layouts/footer.php"; ?>
