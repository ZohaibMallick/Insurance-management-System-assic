
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
      
         <title>Insurance Management System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="shortcut icon" href="https://www.policybazaar.com/favicon.ico">
  <link rel="shortcut icon" href="https://www.policybazaar.com/favicon.ico">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
         <style type="text/css">
            body
            {
                background: url(../sunset.png);
                background-repeat: no-repeat;
                background-size: 100% 34%;
            }
            
        </style>
    </head>
    <body class="sb-nav-fixed">
        
        <?php include 'sidebar.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 text-white">Insurance Apporval</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active text-white">Dashboard</li>
                        </ol>
                

        <div class="card mb-4">
                            <div class="card-title text-center">
                                <br>
                                User Policy Approval
                                   
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Customer Name</th>
                                            <th>Policy name</th>
                                            <th>Type</th>
                                            <th>Amount</th>
                                            <th>Tenure</th>
                                            <th>Sart Date</th>
                                            <th>View</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Customer Name</th>
                                            <th>Policy name</th>
                                            <th>Type</th>
                                            <th>Amount</th>
                                            <th>Tenure</th>
                                            <th>Sart Date</th>
                                            <th>View</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            include '../db.php';
                        
                        $sql = "SELECT * FROM insurance_ap_tbl";
                        $result = mysqli_query($con,$sql);
                        while($row = mysqli_fetch_assoc($result))
                        {
                            ?>
                            <tr>
                                <td><?php echo $row['uname'] ?> </td>
                                <td><?php echo $row['pname'] ?>  </td>
                                <td><?php echo $row['type'] ?></td>
                                <td><?php echo $row['amount'] ?></td>
                                <td><?php echo $row['tenure'] ?></td>
                                <td><?php echo $row['sdate'] ?></td>
                                <td><?php echo $row['status'] ?></td>
                                <td> <a href="insurance-view.php?id=<?php echo $row['id']; ?>" style="text-decoration: none;"  >View</a></td>
                                <td>
                                    <div class="row">
                                        <div class="col-lg-6">
                                             <a href="insurance-approve.php?id=<?php echo $row['id']; ?>" style="text-decoration: none;" class="btn btn-danger" >Approve</a>
                                           
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="insurance-reject.php?id=<?php echo $row['id']; ?>" style="text-decoration: none;" class="btn btn-danger">Reject</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php
                        }

                       
                        
                      
                    ?>
                                    </tbody>
                                </table>
                            </div>
        

                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; insurance bazar 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
