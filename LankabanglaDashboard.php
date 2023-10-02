<!DOCTYPE html>
<html lang="en">

<head>
   

<meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>LankaBangla</title> 
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <a href="registration-form"></a>

   

<style>

.DataTable-container {



   

    display: flex;
            align-items: center;
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            


}

#customButton {
            
    
    padding: 8px 15px;
            border: none;
            border-radius: 3px;
            background-color: #3498db;
            color: #fff;
           
            margin-left: 5px;

            
          


           
       
        }


      


</style>




</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">LankaBangla</a> <!-- Modified brand name to 'LankaBangla' -->
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
    </nav>




    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>

            </nav>


            <div id="layoutSidenav">
                <div id="layoutSidenav_nav">
                    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                        <div class="sb-sidenav-menu">
                            <div class="nav">
                                <div class="sb-sidenav-menu-heading">Core</div>
                                <a class="nav-link" href="index.html">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Dashboard
                                </a>


                               
                                <a class="nav-link" href="Customeraccount.php"> <!-- Added customer account Form link -->

                                    <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
                                    Customer Account

                                </a>


    <div class="sub-menu">
        <a class="nav-link sub-link" href="Firstaccountholder.php">First Account Holder</a>
        <a class="nav-link sub-link" href="Jointaccountholder.php">Joint Account Holder</a>
        <a class="nav-link sub-link" href="Authorizedpersoninformation.php">Authorized Person Information</a>
    </div>



    <a class="nav-link" href="Barchart.html"> <!-- Added Registration Form link -->
                                    <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
                                    Graph

                                </a>

                                <a class="nav-link" href="BOaccount.php"> <!-- Added Registration Form link -->
                                    <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
                                    BO Account

                                </a>



<div class="sub-menu">
<a class="nav-link sub-link" href="BOaccountFirstapplicant.php">BOaccount First applicant</a>
<a class="nav-link sub-link" href="BOaccountJointapplicant.php">BOaccount Joint applicant</a>
</div>



<!-- Powerofattorney Form  -->

<a class="nav-link" href="Powerofattorney.php"> 
    

<div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
Powerofattorney

</a>




<!-- Nominee Form  -->

<a class="nav-link" href="Nominee.php"> 
    

<div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
Nominee

</a>








                            </div>
                    </nav>
                </div>


            </div>
            </div>

            </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>


                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">
                                        <i class="fas fa-shopping-cart"></i> <!-- Added shopping cart icon -->
                                        New Orders
                                      

                                            

                                        </span>



                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">

                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">
                                        <i class="fas fa-dollar-sign"></i> <!-- Added dollar sign icon -->
                                        Total Income
                                        
                                           


                                        </span>

                                    </div>



                                    <div class="card-footer d-flex align-items-center justify-content-between">

                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">
                                        <i class="fas fa-credit-card"></i> <!-- Added credit card icon -->
                                        Total Expense
                                        


                                        </span>

                                    </div>


                                    <div class="card-footer d-flex align-items-center justify-content-between">

                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">
                                        <i class="fas fa-users"></i> <!-- Added users icon -->
                                        New User


                                       




                                        </span>


                                    </div>


                                    <div class="card-footer d-flex align-items-center justify-content-between">

                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>



        

                        <!DOCTYPE html>
<html>
<head>
    <!-- Include necessary CSS and JavaScript libraries -->
    <!-- ... -->
</head>
<body>
   

<div class="DataTable-container">
    <div class="DataTable-header">
        <i class="fas fa-table me-1"></i>
        DataTable
    </div>
    <br>
    <br>
    <form method="post">
        <select id="tableSelect" name="tableSelect">
            <option value="jointaccountholder">Joint Account Holder Table</option>
            <option value="firstaccountholder">First Account Holder Table</option>
            <option value="authorizedpersoninformation">Authorized Person Information Table</option>
            <option value="boaccountfirstapplicant">BOaccount First applicant</option>
            <option value="boaccountjointapplicant">BOaccount Joint applicant</option>
            <option value="nominee">Nominee</option>
            
        </select>
        <button id="customButton" type="submit" name="confirmButton">Confirm</button>
    </form>
</div>

<div class="card-body">
    <table id="datatablesSimple" class="display">
        <thead>
            <tr>
                <th>Title</th>
                <th>Name</th>
                <th>Father's Name</th>
                <th>Mother's Name</th>
                <th>Present Address</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>E-tin</th>
                <th>NID</th>
                <th>Date of Birth</th>
                <th>Occupation</th>
                <th>Gender</th>
                <th>Nationality</th>
                <th>Residency</th>
                <th>Declaration</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['confirmButton']) && isset($_POST['tableSelect'])) {
            // Establish database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "lankabangla";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Get the selected table from the dropdown
            $selectedTable = $_POST['tableSelect'];

            // Query to fetch data from the selected table
            $sql = "SELECT * FROM $selectedTable";

            // Execute the query and display data
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$row['title']}</td>";
                    echo "<td>{$row['name']}</td>";
                    echo "<td>{$row['fatherName']}</td>";
                    echo "<td>{$row['motherName']}</td>";
                    echo "<td>{$row['presentAddress']}</td>";
                    echo "<td>{$row['mobile']}</td>";
                    echo "<td>{$row['email']}</td>";
                    echo "<td>{$row['etin']}</td>";
                    echo "<td>{$row['nid']}</td>";
                    echo "<td>{$row['dateofbirth']}</td>";
                    echo "<td>{$row['occupation']}</td>";
                    echo "<td>{$row['gender']}</td>";
                    echo "<td>{$row['nationality']}</td>";
                    echo "<td>{$row['residency']}</td>";
                    echo "<td>{$row['declaration']}</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='16'>No entries found.</td></tr>";
            }

            // Close the database connection
            $conn->close();
        }
        ?>
        </tbody>
    </table>
</div>




                       


















                          



















                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">


                            <div class="text-muted text-center py-3">
                                <img src="LankaBangla.jpg" alt="LankaBangla Logo" height="38" width="90">

                                <b> Copyright&copy; 2023 </b>
                            </div>

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


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                crossorigin="anonymous"></script>
            <script src="js/scripts.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
                crossorigin="anonymous"></script>
            <script src="assets/demo/chart-area-demo.js"></script>
            <script src="assets/demo/chart-bar-demo.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
                crossorigin="anonymous"></script>
            <script src="js/datatables-simple-demo.js"></script>



</body>

</html>