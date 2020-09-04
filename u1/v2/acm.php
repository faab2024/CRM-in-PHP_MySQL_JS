<?php

// Set up an object instance using our PHP API wrapper.
define("ACTIVECAMPAIGN_URL", "https://academyshare.api-us1.com");
define("ACTIVECAMPAIGN_API_KEY", "ee9fbc19f49dc78431db010995d7c6846ede752d08411d42dab1c137675630b5cb4fa906");
require_once("../activecampaign-api-php/includes/ActiveCampaign.class.php");
$ac = new ActiveCampaign(ACTIVECAMPAIGN_URL, ACTIVECAMPAIGN_API_KEY);

$response = $ac->api("automation/contact/view?contact_id=4976&automation=3");

echo "<pre>";
print_r($response);
echo "</pre>";?>