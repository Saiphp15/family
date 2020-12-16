<?php 

/**
 * Class JwtAuth
 * Used for creating and validating Jwt Tokens for Vkaao APIs
 * @author Deven Gandre
 */
Class Jwtauth
{
    private $jwtHeader;
    private $jwtPayload;

    function __construct(){
        $this->jwtHeader = '{"alg":"HS256","typ":"JWT"}';
        /*$userId = (isset($_SESSION['userData']['id'])) ? $_SESSION['userData']['id'] : 0;
        $userName = (isset($_SESSION['userData']['name'])) ? $_SESSION['userData']['name'] : "Guest";*/

        $userId = 1;
        $userName = "Super Admin";

        $dateTime = new DateTime(date('Y-m-d H:i'));
        $dateTime->modify('+20 minutes');

        $payLoad = new StdClass();
        $payLoad->tokenId = rand(100000,99999999);
        $payLoad->userId = $userId;
        $payLoad->userName = $userName;
        $payLoad->validity = $dateTime->format('Y-m-d H:i');

        $this->jwtPayload = json_encode($payLoad);
    }

    /**
     * public function to generate the Jwt Access Token
     * @return string
     */
    public function GetApiAccessTokenTest(){
        /*$requestHeaders = apache_request_headers();
        echo "<pre>"; print_r($requestHeaders); exit;
        $currentRequestReferer = "NA";
        if(isset($requestHeaders['Referer'])){
            $currentRequestReferer = $requestHeaders['Referer']; //(isset($requestHeaders['Referer'])) ? $requestHeaders['Referer'] : "Invalid Token Request";
        }

        $accessToken = "";

        if (strpos($currentRequestReferer, SITE_PATH) !== false) {*/
            $accessToken = $this->generateToken($this->jwtHeader, $this->jwtPayload);
        // }
        return $accessToken;
    }
    public function GetApiAccessToken(){
        $requestHeaders = apache_request_headers();
        $currentRequestReferer = "NA";
        if(isset($requestHeaders['Referer'])){
            $currentRequestReferer = $requestHeaders['Referer']; //(isset($requestHeaders['Referer'])) ? $requestHeaders['Referer'] : "Invalid Token Request";
        }

        $accessToken = "";

        if (strpos($currentRequestReferer, SITE_PATH) !== false) {
            $accessToken = $this->generateToken($this->jwtHeader, $this->jwtPayload);
        }
        return $accessToken;
    }

    public function GetApiAccessTokenForLocal(){
        $accessToken = $this->generateToken($this->jwtHeader, $this->jwtPayload);
        return $accessToken;
    }

    /**
     * function to authorize Non-Logged In and Logged In Users
     * @return object
     */
    public function AuthorizeCommonUser(){
        $userData = $this->authorizeUser();

        $responseObject = new StdClass();

        if(($userData['is_authenticated'] == 1 || $userData['is_authenticated'] == '1') && (intval($userData['user_id']) >= 0)){
            $responseObject->isAuthorized = $userData['is_authenticated'];
            $responseObject->userId = $userData['user_id'];
            $responseObject->userName = $userData['user_name'];
        }
        else{
            $responseObject->isAuthorized = 0;
            $responseObject->userId = "-1";
            $responseObject->userName = "";   
        }
        //ToDo: Remove following lines to turn on authentication
        /*$responseObject->isAuthorized = 1;
        $responseObject->userId = 0;
        $responseObject->userName = "Guest";*/
        return $responseObject;
    }

    /**
     * function to authorize Logged In User Only
     * @return object
     */
    public function AuthorizeLoggedInUser(){
        $userData = $this->authorizeUser();
        $responseObject = new StdClass();

        if(($userData['is_authenticated'] == 1 || $userData['is_authenticated'] == '1') && (intval($userData['user_id']) >= 0)){
            $responseObject->isAuthorized = $userData['is_authenticated'];
            $responseObject->userId = $userData['user_id'];
            $responseObject->userName = $userData['user_name'];
        }
        else{
            $responseObject->isAuthorized = 0;
            $responseObject->userId = "-1";
            $responseObject->userName = "";   
        }
        //ToDo: Remove following lines to turn on authentication
        // $responseObject->isAuthorized = 1;
        // $responseObject->userId = 1;
        // $responseObject->userName = "Test API User";
        return $responseObject;
    }

    /**
     * Function for generating Jwt Access Token for current logged in user.
     * @param jwtHeader
     * @param jwtPayload
     * @return string 
     */
    private function generateToken($jwtHeader, $jwtPayload){
        $jwtSecret = $this->generateJwtSecret();
        $jwtHeaderEncoded = base64_encode($jwtHeader);
        $jwtPayloadEncoded = base64_encode($jwtPayload);
        $keyToEncode = $jwtHeaderEncoded . "." . $jwtPayloadEncoded;
        $serverHash = hash_hmac("sha256", $keyToEncode, $jwtSecret, true);
        $serverHashEncoded = base64_encode($serverHash);
        $response = $keyToEncode . "." . $serverHashEncoded;
        return $response;
    }

    /**
     * Function to generate Jwt Secret key for encrypting Payload & Header
     * @return string (Jwt Secret Key)
     */
    private function generateJwtSecret(){ 
        $userAgent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : "Generic-Ajax-Client-User";
        $dateValue = date("Ymd");
        $saltKey = "pvrmod_2016_api";
        $userAgent = strtolower(preg_replace('/[^a-zA-Z0-9-]/', '', $userAgent));
        $inputString = $userAgent . "." . $dateValue . "." . $saltKey;
        $jwtSecret = hash('sha256', $inputString);
        return $jwtSecret;
    }

    function authorizeUser(){

        $headers = apache_request_headers();
        $jwtToken = isset($headers['Authorization']) ? $headers['Authorization'] : '';
        
        $tokenData = explode(".", $jwtToken);

        $jwtHeaderRecieved = isset($tokenData[0]) ? $tokenData[0] : '';
        $jwtPayloadRecieved = isset($tokenData[1]) ? $tokenData[1] : '';

        $jwtHeader = base64_decode($jwtHeaderRecieved);
        $jwtPayload = base64_decode($jwtPayloadRecieved);

        $jwtSign = isset($tokenData[2]) ? $tokenData[2] : "secret-key-missing";
        $jwtSecret = $this->generateJwtSecret();

        $jwtHeaderEncoded = base64_encode($jwtHeader);
        $jwtPayloadEncoded = base64_encode($jwtPayload);
        $keyToEncode = $jwtHeaderEncoded . "." . $jwtPayloadEncoded;
        $serverHash = hash_hmac("sha256", $keyToEncode, $jwtSecret, true);
        $serverHashEncoded = base64_encode($serverHash);

        $response = array();

        if($jwtSign == $serverHashEncoded){
            $payloadDecoded = json_decode($jwtPayload);

            $userId = isset($payloadDecoded->userId) ? $payloadDecoded->userId : '-1';
            $userName = isset($payloadDecoded->userName) ? $payloadDecoded->userName : '';
            $validity = isset($payloadDecoded->validity) ? $payloadDecoded->validity : '';

            if($validity != ''){
                $tokenDateTime = DateTime::createFromFormat('Y-m-d H:i', $validity);
                $currentDateTime = new DateTime(date('Y-m-d H:i'));

                if($currentDateTime < $tokenDateTime){
                    $response['is_authenticated'] = 1;
                    $response['user_id'] = $userId;
                    $response['user_name'] = $userName;
                    $response['response'] = "valid_token";
                }
                else{
                    $response['is_authenticated'] = 0;
                    $response['user_id'] = 0;
                    $response['user_name'] = '';    
                    $response[''] = 'token_expired';            
                }
            }
            else{
                $response['is_authenticated'] = 0;
                $response['user_id'] = 0;
                $response['user_name'] = '';    
                $response[''] = 'invalid_token';        
            }
        }
        else{
            $response['is_authenticated'] = 0;
            $response['user_id'] = 0;
            $response['user_name'] = '';    
            $response[''] = 'invalid_token';    
        }
        return $response;
    }
}

?>