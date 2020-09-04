<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: /spages/login.php');
}
?>
	    <!-- Button to trigger modal -->
    <a class="btn btn-primary" href="#myModal" data-toggle="modal">Click Here To Add</a>
	<br>
	<br>
	<br>
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel">Add</h3>
    </div>
    <div class="modal-body">
	
                         

	
					<form method="post" action="add.php"  enctype="multipart/form-data">
					<table class="table1">
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Name</label></td>
							<td width="30"></td>
							<td><input id="" name="name" placeholder="Name" type="text" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Phone</label></td>
							<td width="30"></td>
							<td><input id="" name="phone" placeholder="Phone" type="text"required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Email</label></td>
							<td width="30"></td>
							<td><input id="" name="email" placeholder="Email" type="text"required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Address</label></td>
							<td width="30"></td>
							<td><input id="" name="location" placeholder="Location" type="text" required  /></td>
						</tr>
					
							<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Website</label></td>
							<td width="30"></td>
							<td><input id="" name="website" placeholder="Website" type="text"required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Business Name</label></td>
							<td width="30"></td>
							<td><input id="" name="business_name" placeholder="Business Name" type="text"required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Lead Status</label></td>
							<td width="30"></td>
							<td><input id="" name="lead_status" placeholder="Lead Status" type="text" required  /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Business Industry</label></td>
							<td width="30"></td>
							<td><input id="" name="business_industry" placeholder="Business Industry" type="text"required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Lead Score</label></td>
							<td width="30"></td>
							<td><input id="" name="lead_score" placeholder="Lead Score" type="text" required  /></td>
						</tr>
					</table>
					
	
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Add</button>
    </div>
	

					</form>
    </div>			