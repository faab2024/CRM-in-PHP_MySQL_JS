<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: /spages/login.php');
}
?>
<?php 
include ('header.php'); 
$ID=$_GET['id'];
?>
<body>


<div class="container">
<div class="hero-unit-header">
 <div class="container-con">
<!-- end banner & menunav -->

<div class="container">
<div class="row-fluid">
<div class="span12">
<div class="row-fluid">
<div class="span3"></div>
<div class="span6">


<div class="hero-unit-3">
<center>

<?php
include('db.php');
$result = $conn->prepare("SELECT * FROM leads where id='$ID'");
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$id=$row['student_id'];
?>
<form class="form-horizontal" method="post" action="edit_PDO.php<?php echo '?id='.$id; ?>"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4>Edit</h4></legend>
                                <h4>Personal Information</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Name:</label>
                                    <div class="controls">
                                        <input type="text" name="name" required value=<?php echo $row['name']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Phone:</label>
                                    <div class="controls">
                                        <input type="text" name="phone" required value=<?php echo $row['phone']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Email:</label>
                                    <div class="controls">
                                        <input type="text" name="email" required value=<?php echo $row['email']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Address:</label>
                                    <div class="controls">
                                        <input type="text" name="location" required value=<?php echo $row['location']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Business Phone:</label>
                                    <div class="controls">
                                        <input type="email" name="business_phone" required value=<?php echo $row['business_phone']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Website:</label>
                                    <div class="controls">
                                        <input type="text" name="business_phone" required value=<?php echo $row['website']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Business Name:</label>
                                    <div class="controls">
                                        <input type="text" name="business_name" required value=<?php echo $row['business_name']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Lead Status:</label>
                                    <div class="controls">
                                        <input type="text" name="lead_status" required value=<?php echo $row['lead_status']; ?>>
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label" for="inputPassword">Business Industry:</label>
                                    <div class="controls">
                                        <input type="text" name="business_industry" required value=<?php echo $row['business_industry']; ?>>
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label" for="inputPassword">Business Industry:</label>
                                    <div class="controls">
                                        <input type="text" name="lead_score" required value=<?php echo $row['lead_score']; ?>>
                                    </div>
                                </div>
								
								 <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success" style="margin-right: 65px;">Save</button>
										<a href="index.php" class="btn">Back</a>
                                    </div>
                                </div>
                            </form>
<?php } ?>
								</center>
								</center>

								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
</body>
</html>
								