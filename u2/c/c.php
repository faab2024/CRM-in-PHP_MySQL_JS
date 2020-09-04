
<?PHP
$dbc="../c/connection.php";
$nav="../c/nav/nav.php";

$ft="../c/nav/end.php";
$PExcel="../m/PHPExcel/IOFactory.php";
$composer_json="../c/scripts/composer.json";
$composer_lock="../c/scripts/composer.lock";
$helper_json="../c/scripts/helper.json";
$multiselect_core_js="../c/scripts/multiselect.core.js";
$multiselect_js="../c/scripts/multiselect.js";
$multiselect_min_js="../c/scripts/multiselect.min.js";
$email="../v2/email.php";
$leads="../v/leads.php";
$contacts="../m/mcontacts.php";
$contactscomp1="../m/contacts_comp1.php";
$contactscomp2="../m/contacts_comp2.php";
$addcontact = "../m/addcontact.php";
$footer ="../c/footer.php";
$header ="../c/header.php";
$login = "../c/login.php";
$head="../c/head.php";
$alead="../m/alead.php";
$aemail="../m/aemail.php";
$aecamp="../m/aecamp.php";
$aegroup="../m/aegroup.php";
$ailead="../m/ailead.php";
$acontacts="../m/acontacts.php";
$index= "../c/header.php";
$home_contents_title1="<center><h1>Reports </h1><br><h3>Recent Contacts Sent</h3>";
$home_contents_title2=" <h3>Registered Clients</h3>";
$home_center_align="</center>";
$logout="<a href='../v1/logout.php'>Sign Out</a>";
$home="<a href='../v/home.php?title=Home' class='w3-bar-item w3-button w3-padding'><b>Home</b></a>";  
$clead='../v/lead.php';

$ilead='../v/ilead.php';
$ccamp='../v/create_campaign.php';
$ecamp='../v/email_camp.php';
$leads="<a href='../v/leads.php?title=Leads&item1=Create Lead&l=$clead&item2=Import Leads&li=$ilead' class='w3-bar-item w3-button w3-padding'><b>Leads</b></a>";
$ileads="<a href='../v/ilead.php' class='w3-bar-item w3-button w3-padding'>Import Leads</a>";
$lead="<a href='../v/lead.php' class='w3-bar-item w3-button w3-padding'>Create Lead</a>";
$campaign="<a href='../v/campaigns.php?title=Campaigns&item1=Create Campaign&l=$ccamp&item2=Emails&li=$ecamp' class='w3-bar-item w3-button w3-padding'><b>Campaigns</b></a>";

$icontacts='../v/icontacts.php';
$contact='../v/contact.php';
$contacts="<a href='../v/contacts.php?title=Contacts&item1=Create Contact&l=$contact&item2=Import Contacts&li=$icontacts' class='w3-bar-item w3-button w3-padding'><b>Contacts</b></a>";

$coppt='../v/create_oppt.php';
$ioppt='../v/import_oppt.php';
$opportunities="<a href='../v/opportunities.php?title=Opportunities&l=$coppt&item1=Create Opportunity&item2=Import Opportunity&li=$ioppt&' class='w3-bar-item w3-button w3-padding'><b>Opportunities</b></a>";




$email_reports="<a href='../v/email_rep.php' class='w3-bar-item w3-button w3-padding'><b>Automation</b></a>";
$email="<a href='../v/email.php' class='w3-bar-item w3-button w3-padding'>Send Emails</a>";
$email_camp="<a href='../v/email_camp.php' class='w3-bar-item w3-button w3-padding'><b>Campaigns</b></a>";
$email_group="<a href='../v/email_group.php' class='w3-bar-item w3-button w3-padding'>Email Group</a>";
$sms_reports="<a href='/v/sms_rep.php' class='w3-bar-item w3-button w3-padding'><b>SMS REPORTS</b></a>";
$sms="<a href='../v/sms.php' class='w3-bar-item w3-button w3-padding'>Send SMS</a>";
$sms_camp="<a href='../v/sms.php' class='w3-bar-item w3-button w3-padding'>SMS Campaign</a>";
$sms_group="<a href='../v/sms.php' class='w3-bar-item w3-button w3-padding'>SMS Group</a>";
$reports="<a href='../v/reports.php?title=Reports&item1=Campaigns Reports&item2=Operation Reports' class='w3-bar-item w3-button w3-padding'><b>Reports</b></a>";
$automation="<a href='../v/automation.php?title=Automation&item1=Send Email&item2=Email Automation' class='w3-bar-item w3-button w3-padding'><b>Automation</b></a>";


$contacts_ov="/m/contacts_overview.php";
$camp_ov='../m/camp_overview.php';
$leads_ov='../m/leads_overview.php';
$automation_ov='../m/automation_overview.php';
$pipeline='../m/pipeline.php';
$tasks='../m/tasks.php';
$list='../v/list.php';
?>