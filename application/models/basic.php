<?php
class Helloworld_model extends Model {
 
    function Helloworld_model()
    {
        parent::Model();
    }
     
    function getData()
        {
            $query = $this->db->get('data');
             
            if ($query->num_rows() > 0)
            {

            }else{
                return $query->result();
            }
        }
 
}

private static function CURL($url, $post = null, $retries = 3) {
        $curl = curl_init($url);
        $result = false;

        if (is_resource($curl) === true)
        {
            curl_setopt($curl, CURLOPT_FAILONERROR, true);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

            curl_setopt($curl, CURLOPT_USERPWD, "web:WebStuff!");

            if (isset($post) === true)
            {
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, (is_array($post) === true) ? http_build_query($post, '', '&') : $post);
            }

            while (($result === false) && (--$retries > 0))
            {
                $result = curl_exec($curl);
            }

            curl_close($curl);
        }

        return $result;
    }
?>