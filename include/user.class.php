<?php

class User extends ApiClient {
    
    public function register($req){
        $this->set_path("/customer/site/".$this->api_token."/register.json");
        $result = $this->perform($req, "POST");
        return $result;
    }
    
    public function login($email, $password){
        $this->set_path("/customer/site/".$this->api_token."/login.json");
        $result = $this->perform(array(
            "email" => $email,
            "pass" => $password
        ), "POST");
        return $result;
    } 

    public function logout(){
		session_destroy();
	}

	public function is_logged_in(){
		if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true){
			return true;
		}
	}
    
    public function getUserDetails($token){
        $this->set_path("/customer/site/".$this->api_token."/token/".$token."/edit.json");
        $result = $this->perform("GET");
        return $result;
    }
    
    public function setUserDetails($token, $req){
        $this->set_path("/customer/site/".$this->api_token."/token/".$token."/edit.json");
        $result = $this->perform($req, "POST");
        return $result;
    }
    
    public function getLotteries($params){
        $this->set_path("/lotteries/site/".$this->api_token."/".$params."/list.json");
        $result = $this->perform("GET");
        return $result;
    }
    
    function isValidEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    
    function isValidPassword($password, $min_len = 8, $max_len = 50, $req_digit = 1, $req_lower = 1, $req_upper = 1, $req_symbol = 1) {
        $regex = "/^";
        if ($req_digit == 1) { $regex .= "(?=.*\d)"; }              // Match at least 1 digit
        if ($req_lower == 1) { $regex .= "(?=.*[a-z])"; }           // Match at least 1 lowercase letter
        if ($req_upper == 1) { $regex .= "(?=.*[A-Z])"; }           // Match at least 1 uppercase letter
        if ($req_symbol == 1) { $regex .= "(?=.*[^a-zA-Z\d])"; }    // Match at least 1 character that is none of the above
        $regex .= ".{" . $min_len . "," . $max_len . "}$/";

        if (preg_match($regex, $password))
            return true;
    }

}
    
?>