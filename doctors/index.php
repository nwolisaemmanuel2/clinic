<?php include "../layouts/header.php"; ?>



<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Doctor Center</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <button class="text-decoration-none btn btn-primary btn-sm mt-1 mb-2">
                <span class="fas fa-user-astronaut"></span>
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-sm" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>OPD</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>Phone</th>
                        <th>Sex</th>
                        <th>Address</th>
                        <th>Treat</th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    include('../dbconnect.php');
                    $result = $db->prepare("SELECT * FROM patient ORDER BY id DESC");
                    $result->execute();
                    for($i=0; $row = $result->fetch(); $i++){
                    ?>

                        <tr>
                            <td>MC<?php echo $row['id']; ?></td>
                            <td><?php echo $row['firstName']; ?></td>
                            <td><?php echo $row['lastName']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                            <td><?php echo $row['tel']; ?></td>
                            <td><?php echo $row['sex']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="../treatment/index.php?id=<?php echo $row['id']; ?>">
                                    <span class="fas fa-stethoscope"></span>
                                </a>
                            </td>
                        </tr>



                        <?php } ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


<?php include "../layouts/footer.php"; ?>
