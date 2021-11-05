<?php

require('fpdf/fpdf.php');


class PDF extends FPDF
{
	/* Page header */
	function Header()
	{
		/* Logo */
		$this->Image('media/logo.png',10,6,30);

	}
}

$con = mysql_connect("localhost","root","");
mysql_select_db("awaisdatabase", $con);
$result = mysql_query("select count(1) FROM invoice");
$row = mysql_fetch_array($result);
$total= $row[0];
++$total;
$invoicenumber = str_pad($total, 7, "0", STR_PAD_LEFT);

	


if(isset($_POST['submit'])){

$fname=$_POST['fName'];
$lname=$_POST['lName'];
$class =$_POST['class'];
$fees =$_POST['fees'];
$id =$_POST['id'];
$dt = date('Y-m-d');
$pdf = new PDF('P','mm','A4');
$pdf->SetFont('Arial','B',20);
$pdf->AddPage();



$studentPhp = array("Receipt"=>$invoicenumber,"Fees"=>$fees, "Bank"=>"Bank Alfalah", "Account"=>"0306-1006267237","Branch"=>"Ltd Branch Qasimabad","Issue Date"=>$dt,"Student Id"=>$id,
"StudentName"=>$fname+$lname,"Class"=>$class,"DueDate"=>"","After due"=>"You have to pay 50 rupees","Cashier's Sign"=>"","Depositor Sign"=>"");


$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

$pdf->Cell(50 ,10,'',0,1);

$pdf->SetFont('Arial','B',10);
/*Heading Of the table*/
$pdf->Image('media/logo.png',75,6,30);
$pdf->Image('media/logo.png',75,6,30);
$pdf->Image('media/logo.png',160,6,30);




$pdf->Cell(65 ,6,'Student Copy',1,0,'C');
$pdf->Cell(65 ,6,'Bank Copy',1,0,'C');
$pdf->Cell(65,6,'Institute Copy',1,0,'C');
$pdf->ln(5);


/*Heading Of the table end*/
$pdf->SetFont('Arial','',10);
foreach($studentPhp  as $x => $x_value)  {
	
    $pdf->Cell(65 ,6,$x.":".$x_value,1,0);
    $pdf->Cell(65 ,6,$x.":".$x_value,1,0);
    $pdf->Cell(65 ,6,$x.":".$x_value,1,0);
    $pdf->ln(5);
}

$pdf->Output();



$conn = new mysqli("localhost", "root", "", "awaisdatabase");
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql="INSERT INTO invoice VALUES('','$fname','$lname','$class','$fees','$dt')";
  
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
     

    }else{
        echo "Error";
    }
  }




?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin</title>

    <!-- Bootstrap -->
    


    <link href="img/favicon.png" rel="icon">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/animated.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    



  
  <style>

    .navbar{
      background-color:black !important;
    }
  </style>

</head>
<body>
    <div id="wrapper">
    <?php require_once('includeCode/header.php');?>



        <div class="container-fluid body-section">
            <div class="row">
            <?php require_once('includeCode/sidebar.php');?>

                
                <div class="col-md-9">
              
                 
                    
                    <form method="post" class="text-white" enctype="multipart/form-data">
                        <div class="row">

                        <div class="form-group col-md-3">
                                <label>Student Id</label>
                                <input type="text" name="id" class="form-control form-control-sm">
                            </div>
                          
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
                                <label>Class</label>
                                <input type="text" name="class" class="form-control form-control-sm">

                            </div>
                            <div class="form-group col-md-3">
                                <label>Fees</label>
                                <input type="text" name="fees" class="form-control form-control-sm">

                            </div>

                          

                           
                        </div>
                       
                        <div class="row m-5">
                            <button type="submit" name="submit" class="btn btn-primary  shadow" style="margin-left:450px; padding-right:40px; padding-left:40px;">Generate Challan </button>

                        </div>




                    </form>


                
</div>