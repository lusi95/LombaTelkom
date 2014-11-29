<?php require_once("./TelkomID.Oauth2.class.php"); if (isset($_GET['code'])){ $config=array( 'client_id' => 'demotemandev',
'client_secret' => 'temandev',
'redirect_uri' => 'http://localhost:7070/callback.php',
'code' => $_GET['code']
);
$temanDev = new TemanDev($config);
$temanDev->getAccessToken();
$profile=$temanDev->getUserProfile('private');
        $service=$temanDev->getUserServices('private');
print_r($profile);	
        print_r($service);	
}
?>