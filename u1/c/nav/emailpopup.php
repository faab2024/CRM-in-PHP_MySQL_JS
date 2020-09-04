<?PHP include("../c/v.php");?>
 
               
               

 
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Email Automation</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  
    <div class="container">
      <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'sendemail')">Send Emails</button>
  <button class="tablinks" onclick="openCity(event, 'emailgroup')">Send To Group</button>
  <button class="tablinks" onclick="openCity(event, 'emailtemplate')">Create Email Template</button>
  <button class="tablinks" onclick="openCity(event, 'emailcampaign')">Start Email Campaign</button>
</div>

<div id="sendemail" class="tabcontent">
<?PHP echo $email;?>
</div>

<div id="emailgroup" class="tabcontent">
   <?PHP echo $email_group;?>
  
</div>

<div id="emailtemplate" class="tabcontent">
  
</div>
<div id="emailcampaign" class="tabcontent">
   <?PHP echo $email_camp;?>
</div>
      </div>
    </div>
  

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
