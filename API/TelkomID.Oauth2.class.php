<?php 
define('SERVER_URL','http://sandbox.appprime.net'); define('TELKOMID_OAUTH2_AUTHORIZE_URL', SERVER_URL.'/TelkomID_OAuth2/oauth/authorize'); define('TELKOMID_OAUTH2_TOKEN_URL', SERVER_URL.'/TelkomID_OAuth2/oauth/token'); define('TELKOMID_OAUTH2_LOGOUT_URL', SERVER_URL.'/TelkomID_OAuth2/user/logout'); define('TELKOMID_OAUTH2_RESOURCE_USER_PROFILE_PUBLIC_JSON_URL', SERVER_URL.'/TelkomID_OAuth2/resources/user_profile/public/json'); define('TELKOMID_OAUTH2_RESOURCE_USER_PROFILE_PRIVATE_JSON_URL', SERVER_URL.'/TelkomID_OAuth2/resources/user_profile/private/json'); define('TELKOMID_OAUTH2_RESOURCE_USER_SERVICES_PUBLIC_JSON_URL', SERVER_URL.'/TelkomID_OAuth2/resources/user_services/public/json'); define('TELKOMID_OAUTH2_RESOURCE_USER_SERVICES_PRIVATE_JSON_URL', SERVER_URL.'/TelkomID_OAuth2/resources/user_services/private/json'); class TemanDev {/** public var*/var $client_id;var $client_secret;var $redirect_uri;var $loginURL;var $logoutURL;/** private var */var $access_token;var $scope;var $code; /** constructor */function __construct($config=NULL) { if ($config){ $this->client_id = $config['client_id'];
			$this->client_secret = $config['client_secret'];
			$this->redirect_uri = $config['redirect_uri'];
			if (isset($config['scope'])) {
                            $this->scope = $config['scope'];
                        }
                        if (isset($config['code'])) {
                            $this->code = $config['code'];
                        }
        }
	}
 
	function getLoginURL(){
		$params = array(
			'client_id' => $this->client_id,
			'response_type' => "code",
			'redirect_uri' => $this->redirect_uri,
                        'scope' => $this->scope
		);
 
		$this->setParam($params);
		$this->loginURL = TELKOMID_OAUTH2_AUTHORIZE_URL . '?' . http_build_query($this->params);
 
		return $this->loginURL;
	}
	
	function getAccessToken(){
            if (!isset($this->access_token)) {
                $param = "code=" . $this->code . ", redirect_uri=" . $this->redirect_uri . ", client_id=" . $this->client_id . ", client_secret=" . $this->client_secret . ", grant_type=authorization_code";
                $curl = curl_init(TELKOMID_OAUTH2_TOKEN_URL);
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $param);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                $auth = curl_exec($curl);
                curl_close($curl);
                $secret = json_decode($auth);
                return $this->access_token = $secret->access_token;
            } else {
                return $this->access_token;
            }
    }
	
	function setAccessToken($token){
		return $this->access_token = $token;
	}
	
	function getUserProfile($state="public"){	
		if ($state == "public"){
			$url = TELKOMID_OAUTH2_RESOURCE_USER_PROFILE_PUBLIC_JSON_URL;
		}elseif ($state == "private"){
			$url = TELKOMID_OAUTH2_RESOURCE_USER_PROFILE_PRIVATE_JSON_URL;
		}
		$curl = curl_init($url);
		curl_setopt( $curl, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $this->access_token));
		curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1);
		$resource=json_decode(curl_exec($curl));
		curl_close($curl);
		return $resource;
	}
	
	function getUserServices($state="public"){	
		if ($state == "public"){
			$url = TELKOMID_OAUTH2_RESOURCE_USER_SERVICES_PUBLIC_JSON_URL;
		}elseif ($state == "private"){
			$url = TELKOMID_OAUTH2_RESOURCE_USER_SERVICES_PRIVATE_JSON_URL;
		}
		$curl = curl_init($url);
		curl_setopt( $curl, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $this->access_token));
		curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1);
		$resource=json_decode(curl_exec($curl));
		curl_close($curl);
		return $resource;
	}
	
	function setClientID($key){
		$this->client_id=$key;
	}
	
	function getClientID(){
		return $this->client_id;
	}
	
	function setClientSecret($key){
		$this->client_secret=$key;
	}
	
	function getClientSecret(){
		return $this->client_secret;
	}
		
	function setDebugResponseFormat($format){
            if ($format == "JSON" || $format == "ARRAY") {
                $this->debugResponseFormat = $format;
            }
    }
	
	function setParam($param){
		$this->params = $param;
	}	
}
?>