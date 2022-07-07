
<html>
<head>
    <title>Online</title>
    <link rel="stylesheet" href="style.css">
	
</head>
<body>

<?php
//including the database connection file
include_once("config.php");
if(isset($_POST['Submit'])) {    
    $fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
    $lname = mysqli_real_escape_string($mysqli, $_POST['lname']);
	$gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
	$marital = mysqli_real_escape_string($mysqli, $_POST['marital']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);  
	$address = mysqli_real_escape_string($mysqli, $_POST['address']);
    $abtype = mysqli_real_escape_string($mysqli, $_POST['abtype']);
    $contact = mysqli_real_escape_string($mysqli, $_POST['contact']);
	$atype = mysqli_real_escape_string($mysqli, $_POST['atype']);
	$branch = mysqli_real_escape_string($mysqli, $_POST['branch']);
	$ctype = mysqli_real_escape_string($mysqli, $_POST['ctype']);
    $income = mysqli_real_escape_string($mysqli, $_POST['income']);
    $doc1 = mysqli_real_escape_string($mysqli, $_POST['doc1']);
    $doc2 = mysqli_real_escape_string($mysqli, $_POST['doc2']);
	$doc3 = mysqli_real_escape_string($mysqli, $_POST['doc3']);
    $service = mysqli_real_escape_string($mysqli, $_POST['service']);
    $demat = mysqli_real_escape_string($mysqli, $_POST['demat']);
    $locker = mysqli_real_escape_string($mysqli, $_POST['locker']);
	
    // checking empty fields
    if(empty($fname) || empty($lname) ||  empty($gender) || empty($marital) || empty($email) || empty($address) || empty($atype) || empty($contact) || empty($abtype) || empty($branch) || empty($ctype) || empty($income) || empty($doc1) || empty($doc2) || empty($doc3) || empty($service) || empty($demat) || empty($locker) ){
        if(empty($fname)) {
            echo "<font color='red'> First Name field is empty.</font><br/>";
        }
		if(empty($lname)) {
            echo "<font color='red'>Last Name filed is empty.</font><br/>";
        }
		if(empty($gender)) {
            echo "<font color='red'>Gender is not Ticked.</font><br/>";
        }  
		if(empty($abtype)) {
            echo "<font color='red'>Reserved date not entered.</font><br/>";
        }       
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        } 
		if(empty($address)) {
            echo "<font color='red'>Permanet address field is empty.</font><br/>";
        } 
        if(empty($contact)) {
            echo "<font color='red'>Pnone number empty.</font><br/>";
        }
        if(empty($marital)) {
            echo "<font color='red'>Date of Check in not   entered.</font><br/>";
        }
		if(empty($atype)) {
            echo "<font color='red'>Type of Room field is empty.</font><br/>";
        } 
		if(empty($branch)) {
            echo "<font color='red'> Id not  submitted</font><br/>";
        }
		if(empty($ctype)) {
            echo "<font color='red'> Paayment not seleced.</font><br/>";
        } 
        if(empty($income)) {
            echo "<font color='red'> Check IN time nOt seleced.</font><br/>";
        } 
        if(empty($doc1)) {
            echo "<font color='red'> Room NO not seleced.</font><br/>";
        } 
        if(empty($doc2)) {
            echo "<font color='red'>Date of Check in not   entered.</font><br/>";
        }
		if(empty($doc3)) {
            echo "<font color='red'>Type of Room field is empty.</font><br/>";
        } 
		if(empty($demat)) {
            echo "<font color='red'> Id not  submitted</font><br/>";
        }
		if(empty($locker)) {
            echo "<font color='red'> Paayment not seleced.</font><br/>";
        } 
        if(empty($service)) {
            echo "<font color='red'> Check IN time nOt seleced.</font><br/>";
        } 
        
		
		    
    } 
    else {             
        $result = mysqli_query($mysqli, "INSERT INTO account (fname,lname,gender,email,address,marital,abtype,atype,contact,branch,ctype,income,doc1,doc2,doc3,service,demat,locker)
                               VALUES('$fname','$lname','$gender','$email','$address','$marital','$abtype','$atype','$contact','$branch','$ctype','$income','$doc1','$doc2','$doc3','$service','$demat','$locker')");
        if (!$result) die ("Insertion failed: " . mysqli_error($mysqli));
        echo"<font color='black' size='25px'> Congratulations ! You have successefully opened account. we will msg soon To verify you Signature.";
        echo"<br><br><a href='read.php'> View Result </a>";
    }
}
?>

</body>
</html>