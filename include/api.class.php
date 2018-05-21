<?php
class ApiClient
{
    protected $api_token;    
    private $api_host;
    private $api_prefix;  

    public function __construct($api_host, $api_token, $api_prefix){
        $this->api_host = $api_host;
        $this->api_token = $api_token;
        $this->api_prefix = $api_prefix;
        $this->api_path = NULL;        
    }

    public function build_query($req){
        $post_data = http_build_query($req);
        $headers = [];
        $headers[] = 'User-Agent: SomeBot';
        return array('post_data' => $post_data, 'headers' => $headers);
    }
    
    public function perform($args=Null, $req_type='GET'){
        
        if (!$args)
            $args=[];
                
        $data = $this->build_query($args);
        
        if ($req_type == 'GET'){
            $ch = curl_init($this->api_host.$this->api_path);
        }
        
        if ($req_type == 'POST'){
            $ch = curl_init($this->api_host.$this->api_path);
            curl_setopt_array($ch, array(
                CURLOPT_POST => 1,
                CURLOPT_POSTFIELDS => $data['post_data']
            ));
        }
        
        curl_setopt_array($ch, array(
            CURLOPT_HTTPHEADER => $data['headers'],
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_RETURNTRANSFER => 1
        ));
        
        $result = json_decode(curl_exec($ch),true);
        curl_close($ch);
        return $result;
    }
    
    public function set_path($path){
        $this->api_path = $this->api_prefix.$path;
        return;
    }
}
