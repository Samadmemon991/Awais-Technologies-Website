<?php
$conn = new mysqli('localhost', 'root', '', 'awaisschools');
$message = "";


$query = "SELECT * FROM `student`";
if (isset($_GET['grade1'])) {
    $query = "SELECT * FROM `student` WHERE `class`=1";
}
if (isset($_GET['grade2'])) {
    $query = "SELECT * FROM `student` WHERE `class`=2";
}
if (isset($_GET['grade3'])) {
    $query = "SELECT * FROM `student` WHERE `class`=3";
}
if (isset($_GET['grade4'])) {
    $query = "SELECT * FROM `student` WHERE `class`=4";
}
if (isset($_GET['grade5'])) {
    $query = "SELECT * FROM `student` WHERE `class`=5";
}
if (isset($_GET['grade6'])) {
    $query = "SELECT * FROM `student` WHERE `class`=6";
}
if (isset($_GET['grade7'])) {
    $query = "SELECT * FROM `student` WHERE `class`=7";
}
if (isset($_GET['grade8'])) {
    $query = "SELECT * FROM `student` WHERE `class`=8";
}



if (isset($_POST['class1'])) {
    echo "HELLO Class 1";
}



if (isset($_GET['action']) && $_GET['action'] == 'delete') {

    echo "HELLO";

    $query = "DELETE FROM student WHERE StudentId='" . $_GET['id'] . "'";
    $conn->query($query);
    header("Location:ViewStudents.php");
}



if (isset($_POST['submit'])) {
    echo "HELLLO";

    $StudentId = $_POST['StudentId'];

    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $dob = $_POST['DoB'] ?? "";
    $class = $_POST['class'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $doa = $_POST['DoA'];

    echo $StudentId;
    echo $fname;
    echo $lname;
    echo $dob;
    echo $class;
    echo $phone;
    echo $address;
    echo $doa;

    $query = "UPDATE student SET StudentId = '" . $StudentId . "',firstName = '" . $fname . "',
   lastName = '" . $lname . "',DoB = '" . $dob . "' ,class = '" . $class . "' ,phone = '" . $phone . "'
   ,address = '" . $address . "' ,DoA = '" . $doa . "' WHERE StudentId = '" . $_POST['StudentId'] . "' ";
    $query = $conn->query($query);
    if ($query) {
        $message = "<div class='alert alert-success'>Updated Successfully!!</div>";
        header("Refresh:1");
    } else {
        $message = "<div class='alert alert-success'>Updated Failed!!</div>";
    }
}



require_once("includeCode/top.php"); ?>

<style>
    .add {
        display: none;
    }
</style>

</head>
<!--/head-->

<body>
    <?php require_once("includeCode/header.php"); ?>

    <section id="cart_items">
        <div class="container">

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="reception.php">Reception</a></li>
                    <li class="active">Student Information</li>
                </ol>
            </div>
            <div class="container mt-5">
                <h6><?php echo $message; ?></h6>
                <div class="row">
                    <table class="table table-striped  table-condensed table-responsive table-hover text-center mt-1">
                        <thead>
                            <tr>

                                <th>Student Id</td>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Date of Birth</th>
                                <th>Class</th>
                                <th>Phone no</th>
                                <th>Date of Admission</th>
                                <th>Address</th>


                                <th class="text-center">Action</th>


                            </tr>
                        </thead>
                        <?php
                        // $query="SELECT * FROM student where `class`=2";
                        $result = $conn->query($query);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $StudentId = $row['StudentId'];

                                $fname = $row['firstName'];
                                $lname = $row['lastName'];
                                $dob = $row['DoB'] ?? "";
                                $class = $row['class'];
                                $phone = $row['phone'];
                                $address = $row['address'];
                                $doa = $row['DoA'];




                        ?>
                                <tbody>
                                    <tr>
                                        <form method="post" class="text-white" enctype="multipart/form-data">

                                            <td>

                                                <input type="text" name="StudentId" class="form-control form-control-sm" disabled value="<?php echo $StudentId  ?>">


                                            </td>
                                            <td>

                                                <input type="text" name="firstName" class="form-control form-control-sm" value="<?php echo $fname ?>" disabled>
                                            </td>
                                            <td>

                                                <input type="text" name="lastName" class="form-control form-control-sm" value="<?php echo $lname ?>" disabled>
                                            </td>


                                            </td>
                                            <td>
                                                <input type="text" name="DoB" class="form-control form-control-sm" value="<?php echo $dob ?>" disabled>
                                            </td>

                                            <td>
                                                <input type="text" name="class" class="form-control form-control-sm" value="<?php echo $class ?>" disabled>
                                            </td>


                                            <td>
                                                <input type="text" name="phone" class="form-control form-control-sm" value="<?php echo $phone ?>" disabled>
                                            </td>


                                            <td>
                                                <input type="text" name="DoA" class="form-control form-control-sm" value="<?php echo $doa ?>" disabled>
                                            </td>


                                            <td>
                                                <input type="text" name="address" class="form-control form-control-sm" value="<?php echo $address ?>" disabled>
                                            </td>







                                            <td>
                                                <div class="btn-group">
                                                    <button type="submit" name="submit" class="add" title="save" data-toggle="tooltip" style="background-color:#003153
                        "><a href="id=<?php echo $StudentId; ?>"><i class="fa fa-save"></i></a></button>


                                        </form>


                                        <a class="edit" title="Edit" data-toggle="tooltip">
                                            <i class=" text-warning fa fa-edit"></i>
                                        </a>


                                        <a href="?action=delete&id=<?php echo $StudentId; ?>" title="Delete" data-toggle="tooltip" onclick="return confirm('Are you sure you want to delete this data')">
                                            <i class="text-danger  fa fa-trash"></i></a>




                </div>
                </td>


                </tr>

                </tbody>
        <?php }
                        } ?>
        </table>


            </div>



        </div>



    </section>



    <script type="text/javascript">
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
            $(document).on("click", ".edit", function() {
                var input = $(this).parents("tr").find(
                    "input[type='text']");
                input.each(function() {
                    $(this).removeAttr('disabled');
                });
                $(this).parents("tr").find(".add, .edit").toggle();
            });



        });
    </script>
    <!--/#cart_items-->
    <?php require_once("includeCode/footer.php"); ?>