<?php
    include_once "./library/OAuthStore.php";
    include_once "./library/OAuthRequester.php";
     
    define("CONSUMER_KEY", "YOUR CONSUMER KEY");
    define("CONSUMER_SECRET", "YOUR CONSUMER SECRET");
    define("OAUTH_HOST", "http://sandbox.appprime.net");
    define("REQUEST_TOKEN_URL", OAUTH_HOST."/TemanDev/rest/RequestToken/");
    define("ACCESS_TOKEN_URL", OAUTH_HOST."/TemanDev/rest/AccessToken/");
     
    //  Init the OAuthStore
    $options = array(
    'consumer_key' =&gt; CONSUMER_KEY,
    'consumer_secret' =&gt; CONSUMER_SECRET,
    'server_uri' =&gt; OAUTH_HOST,
    'request_token_uri' =&gt; REQUEST_TOKEN_URL,
    'access_token_uri' =&gt; ACCESS_TOKEN_URL
    );
    // Note: do not use "Session" storage in production. Prefer a database storage, such as MySQL.
    OAuthStore::instance("Session", $options);
     
    try
    {
            //  STEP 1:  If we do not have an OAuth token yet, go get one
            $getAuthTokenParams = null;
            // get a request token
            echo 'fetch request token..';
            $tokenResultParams = OAuthRequester::requestRequestToken(CONSUMER_KEY, 0, $getAuthTokenParams);
    echo '
    request token = '.$tokenResultParams["token"];
            echo '
    ';
            //  STEP 2:  Get an access token
            try {
                OAuthRequester::requestAccessToken(CONSUMER_KEY, $tokenResultParams["token"], 0, 'POST');
            }
            catch (OAuthException2 $e)
            {
                var_dump($e);
                return;
            }        
     
            // make the docs request.
            $urlAPI = OAUTH_HOST.'/TemanDev/rest/sendEmail/';
            $opt = array(CURLOPT_HTTPHEADER=&gt;array('Content-Type: application/json'));
            $body = '{"sendEmail":{"to":"edwi.wahid.sutama@gmail.com","subject":"TEST","content":"Tes send email"}}';        
            $request = new OAuthRequester($urlAPI,'POST',$tokenResultParams,$body);
            echo 'execute api..
    ';
            $result = $request-&gt;doRequest(0,$opt);
            if ($result['code'] == 200) {
                    echo $result['body'];
            }
            else {
                    echo 'Error: '.$result['code'];
            }
    }
    catch(OAuthException2 $e) {
    echo "OAuthException:  " . $e-&gt;getMessage();
    var_dump($e);
    }
?>