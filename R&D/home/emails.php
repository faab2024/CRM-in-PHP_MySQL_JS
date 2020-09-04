<?PHP include_once('nav.php'); ?>
<?php
if(!isset($_SESSION['valid'])) {
	header('Location: /spages/login.php');
}
?>

<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 350px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: inline;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: inline;}
</style>
   
<?php 
function sanitize_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

foreach($_POST['email'] as $to_email){
    
    $to_email;
    
}

//$to_email = $_POST['email'];
//$checked_count = count($_POST['check_list']);
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = $_POST['sender'];
//check if the email address is invalid $secure_check
//$secure_check = sanitize_my_email($to_email);
//if ($secure_check == false) {
 //   echo "";
//} else { //send email 
//    mail($to_email, $subject, $message, $headers);
    echo $to_email;
//}
?>



  <div style="margin-top:48px">
 
    <br>
    <form action=""  method="post">
      
      <p><input class="w3-input w3-border" type="text" placeholder="From" required name="sender" value="<?PHP  echo $_SESSION['valid'];?>"></p>
      
      <div class="dropdown">
       <button onclick="myFunction()" class="dropbtn">Select All Emails To Target</button>
       <div id="myDropdown" class="dropdown-content">
        <?PHP
      include_once("connection.php");
  //  $res = mysqli_query($mysqli, "SELECT email FROM lead WHERE id=".$_SESSION['id']." ORDER BY date_reg DESC ");
     $res = mysqli_query($mysqli, "SELECT email FROM people ORDER BY date_reg DESC ");
    while($row =mysqli_fetch_array($res)) {
    }
     ?>
      
      <ul name='email[]' >
          <li ><input type="checkbox" name="email[]"/>Working</li>
        <li ><input type="checkbox" name="email[]"/>Hinking</li>
      </ul>
       
      
       
              
     
    
     
     
     </div>
     
     </div>
           <br></br>
                 <br></br>
      <br></br>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="CC:" required name="cc"></p>
      <p><input class="textarea" type="textarea" placeholder="Message..." required name="message"></p>
     </p>
     
      
      <p>
        <button class="btn" type="submit">
          <i class="fa fa-paper-plane"></i> SEND 
        </button>
      </p>
    </form>
    
  </div>
  <script>

function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>
<?PHP include_once('footer.php'); ?>