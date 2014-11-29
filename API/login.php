<?php   
	// 	include library Telkom Id AppPrime 
	require_once("TelkomID.Oauth2.class.php"); 

	// inisialisasi konfigurasi 
	$config = array('client_id' => 'YOUR CLIENT ID',
    'client_secret' => 'YOUR CLIENT SECRET',
    'redirect_uri' => 'YOUR REDIRECT URI',
    'scope' => 'scope_read'
);
 
// pembuatan class handler AppPrime
$temanDev = new TemanDev($config);
 
?>

<!--Menampilkan URL Login -->
<a href="<?php echo $temanDev->getLoginURL()?>">
              <!--Menampilkan tombol Sign in with Telkom ID-->
<img src="http://sandbox.appprime.net/TelkomID_OAuth2/images/TConnect-button.png" alt="" />
</a>