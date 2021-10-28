<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J&L Customer Management</title>
    <link rel="stylesheet" href="css/index.css?v=<?php echo time(); ?>">
    <script src="js/index.js?v=<?php echo time(); ?>"></script>
    <script src="https://kit.fontawesome.com/10720aacd2.js" crossorigin="anonymous"></script>
</head>
<body>

    <!-- PHP CODES -->
    <?php
        // Connecting to DB
        // $conn = mysqli_connect('localhost', 'root', '', 'customer_management');
        $conn = mysqli_connect('sql305.epizy.com', 'epiz_30199975', 'nAkptujDkrgyO', 'epiz_30199975_customer_management');
        if (!$conn)
            die('Could not connect: ' . mysqli_error());

        // CUSTOMER ADD
        if (isset($_POST["customer_add_form_submit"])) {
            $add1 = $_POST['customer_Fname'];
            $add2 = $_POST['customer_Mname'];
            $add3 = $_POST['customer_Lname'];
            $add4 = $_POST['customer_Suffix'];
            $add5 = $_POST['customer_Address'];
            $add6 = $_POST['customer_contact'];
            $add7 = $_POST['customer_Total'];
            $add8 = $_POST['standing'];

            $conn->query("INSERT INTO customer(Fname, Mname, Lname, Suffix, Address, ContactNo, TotalOrders, Standing) VALUES ('$add1', '$add2', '$add3', '$add4', '$add5', '$add6', '$add7', '$add8')");
            
        }
        // CUSTOMER UPDATE
        if (isset($_POST["customer_update_form_submit"])) {
            $add1 = $_POST['update_Fname'];
            $add2 = $_POST['update_Mname'];
            $add3 = $_POST['update_Lname'];
            $add4 = $_POST['update_Suffix'];
            $add5 = $_POST['update_Address'];
            $add6 = $_POST['update_contact'];
            $add7 = $_POST['update_Total'];
            $add8 = $_POST['updade_standing'];
            $add9 = $_POST['CustNo'];

            $conn->query("UPDATE customer SET Fname = '$add1', Mname = '$add2', Lname = '$add3', Suffix = '$add4', Address = '$add5', ContactNo = '$add6', TotalOrders = '$add7', Standing = '$add8' WHERE CustNo = '$add9'");
            
        }
    ?>

    <!-- FORMS -->
    <div id="forms_container" style="display: none;">

        <!-- CUSTOMER ADD FORM -->
        <div id="customer_add_form" class="forms" style="display: none;">
            <div class="close_button" onclick="closer('customer_add_form')">
                <i class="fas fa-times-circle"></i>
            </div>
            <section class="header_section">
                <h1>Customer</h1>
                <h4>Add Form</h4>
            </section>
            <section class="form_section">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <section>
                        <input type="text" placeholder="First Name" class="form_inputs" name="customer_Fname" required>
                        <input type="text" placeholder="Middle Name" class="form_inputs" name="customer_Mname"><br>
                        <input type="text" placeholder="Last Name" class="form_inputs" name="customer_Lname" required>
                        <input type="text" placeholder="Suffix" class="form_inputs" name="customer_Suffix">
                    </section>
                    <section>
                        <input type="text" placeholder="Address" style="width: 100%;" class="form_inputs" name="customer_Address" required>
                    </section>
                    <section>
                        <input type="number" placeholder="Phone Number" class="form_inputs" name="customer_contact" required>
                        <input type="number" placeholder="Total Orders" class="form_inputs" name="customer_Total" required>
                    </section>
                    <section class="standings">
                        <div>
                            <span>Bad</span><br><input type="radio" name="standing" id="standing1" value="bad" required>
                        </div>
                        <div>
                            <span>Average</span><br><input type="radio" name="standing" id="standing1" value="average">
                        </div>
                        <div>
                            <span>Good</span><br><input type="radio" name="standing" id="standing1" value="good">
                        </div>
                        <div>
                            <span>Very Good</span><br><input type="radio" name="standing" id="standing1" value="very good">
                        </div>
                        
                        
                    </section>
                    <section id="submit_section">
                        <!-- <div class="submit">Add</div> -->
                        <input type="submit" value="Add" class="submit button" name="customer_add_form_submit">
                    </section>

                    
                </form>
            </section>
        </div>

        <!-- CUSTOMER UPDATE FORM -->
        <div id="customer_update_form" class="forms" style="display: none;">
            <div class="close_button" onclick="closer('customer_update_form')">
                <i class="fas fa-times-circle"></i>
            </div>
            <section class="header_section">
                <h1>Customer</h1>
                <h4>Update Form</h4>
            </section>
            <section class="form_section">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <section>
                        <input type="number" name="CustNo" class="form_inputs2" style="display: none;">
                        <input type="text" placeholder="First Name" class="form_inputs2" name="update_Fname" required>
                        <input type="text" placeholder="Middle Name" class="form_inputs2" name="update_Mname"><br>
                        <input type="text" placeholder="Last Name" class="form_inputs2" name="update_Lname" required>
                        <input type="text" placeholder="Suffix" class="form_inputs2" name="update_Suffix">
                    </section>
                    <section>
                        <input type="text" placeholder="Address" style="width: 100%;" class="form_inputs2" name="update_Address" required>
                    </section>
                    <section>
                        <input type="number" placeholder="Phone Number" class="form_inputs2" name="update_contact" required>
                        <input type="number" placeholder="Total Orders" class="form_inputs2" name="update_Total" required>
                    </section>
                    <section class="standings2 form_inputs2">
                        <div>
                            <span>Bad</span><br><input type="radio" name="updade_standing" class="standing1" value="bad" required>
                        </div>
                        <div>
                            <span>Average</span><br><input type="radio" name="updade_standing" class="standing1" value="average">
                        </div>
                        <div>
                            <span>Good</span><br><input type="radio" name="updade_standing" class="standing1" value="good">
                        </div>
                        <div>
                            <span>Very Good</span><br><input type="radio" name="updade_standing" class="standing1" value="very good">
                        </div>
                        
                        
                    </section>
                    <section id="submit_section">
                        <!-- <div class="submit">Add</div> -->
                        <input type="submit" value="Update" class="submit button" name="customer_update_form_submit">
                        <input type="submit" value="Delete" class="delete button" name="customer_update_form_delete">
                    </section>
                </form>
            </section>
        </div>

    </div>

    <!-- WRAPPER -->
    <div class="wrapper">
        <div class="side_bar">
            <section class="logo_section">
                <img src="Resources/logo.png" alt="Logo">
            </section>
            <section class="buttons_section">
                <button class="side_button active">Customers</button>
                <button class="side_button">Orders</button>
                <button class="side_button">Reward Rules</button>
            </section>
        </div>

        <!-- CUSTOMER PANEL -->
        <div class="content_panel" id="customer_panel">
            <section class="buttons_section">
                <button class="panel_button" onclick="popup('customer_add_form')">Add</button>
                <input type="text" id="customer_search" placeholder="Search Name..." class="search" onkeyup="search()">
            </section>
            <section class="table_section">
                <table id="customers_table">
                    <tr>
                        <th style="width: 7%;">Cust No.</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Suffix</th>
                        <th>Total Orders</th>
                        <th>Standing</th>
                    </tr>
                    <!-- PHP Codes for table -->
                    <?php
                        $sql = "SELECT * FROM customer";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $i = 0;
                            while ($row = $result->fetch_assoc()) {
                                echo '<tr onclick = "edit(this, ' . "'customer'" . ')"><td>' . $row['CustNo'] . '</td><td>' .  $row["Fname"] . '</td><td>' . $row["Mname"] . '</td><td>' . $row["Lname"] . '</td><td>' . $row["Suffix"] . '</td><td style="display: none;">' . $row["Address"] . '</td><td style="display: none;">' . $row["ContactNo"] . '</td><td>' . $row["TotalOrders"] . '</td><td>' . $row["Standing"] . '</td></tr>';
                                $i++;
                            }
                        }
                    ?>
                </table>
            </section>
        </div>
    </div>
</body>
</html>