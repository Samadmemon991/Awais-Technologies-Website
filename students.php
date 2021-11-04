<?php require_once('includeCode/top.php');?>
<?php
$conn=new mysqli('localhost','root','','awaisschools');
$error="";
if(isset($_POST['submit'])){

    $fname=$_POST['fName'];
    $lname=$_POST['lName'];
   $dob =$_POST['doB'];
   $class =$_POST['class'];
   $phone =$_POST['phone'];
   $address =$_POST['address'];

  
    if($fname!="" && $lname!="" && $dob!="" && $class!="" && $phone!="" && $address!=""){
      $q="INSERT INTO student VALUES('', '$fname' ,  '$lname' , '$dob', '$class' , '$phone', '$address', CURRENT_DATE())";
      $conn->query($q);
      $error.="<div class=' alert alert-success'>Student Information Has Been Added Sucessfully!</div>";
    }else{
        $error.="<div class=' alert alert-danger'>All fields are required!!</div>";
 
    }
    






}
?>

</head>

<body>
    <div id="wrapper">
        <?php require_once('includeCode/header.php');?>


        <div class="container-fluid body-section">
            <div class="row">
                <?php require_once('includeCode/sidebar.php');?>
                <div class="col-md-9">

                    <h1><span class="text-danger"><?php echo $error;?></span></h1>
                    
                    <form method="post" class="text-white" enctype="multipart/form-data">
                        <div class="row">
                          
                            <div class="form-group col-md-3">
                                <label>First Name</label>
                                <input type="text" name="fName" class="form-control form-control-sm">
                            </div>

                            <div class="form-group col-md-3">
                                <label>Last Name</label>
                                <input type="text" name="lName" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-3">
                                <label>Date of Birth</label>
                                <input type="text" name="doB" class="form-control form-control-sm">

                            </div>

                            
                            <div class="form-group col-md-3">
                                <label>Class</label>
                                <input type="text" name="class" class="form-control form-control-sm">


                            </div>

                            <div class="form-group col-md-3">
                                <label>Phone no</label>
                                <input type="text" name="phone" class="form-control form-control-sm">


                            </div>
                        </div>
                        <div class="row">
                      

                        <div class="form-group col-md-6">
                                <label>Address: </label>
                                <input type="text" name="address" class="form-control form-control-sm">

                            </div>

                            
                         
                        </div>
                        <div class="row m-5">
                            <button type="submit" name="submit" class="btn btn-primary  shadow" style="margin-left:450px; padding-right:40px; padding-left:40px;">Add Student </button>

                        </div>




                    </form>


                
</div>
            
            <script>
            $(".custom-file-input").on("change", function() {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
            </script>


            <?php require_once('includeCode/footer.php');?>