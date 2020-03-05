<?php

function host_dir($file){
           
        if($file[0] == "/"){
            $s = explode("/",$file);
            if(empty($s[0])){
                unset($s[0]);
            }
            if(empty($s[1])){
                unset($s[1]);
            }
            //print_r($s);
            $s = implode("/",$s);
            $file = $s;
        }
        else if($file[0] == "\\"){
            $s = explode("\\",$file);
            unset($s[0]);
            $s = implode("\\",$s);
            $file = $s;
        }
        $http = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http'; 
        $server = $_SERVER['SERVER_NAME']; 
         $host = $http."://".$server."/siddique/so_plush/admin/$file";
       //  return $host = $http."://".$server."/abrar/photographer-web/$file";

       return $host = $http."://".$server."/wedding_planet/$file";
        // $host = $http."://".$server."/raheel/vendroid24Sept19/vendroid/";

    }

function api_host_dir($file){
           
        if($file[0] == "/"){
            $s = explode("/",$file);
            if(empty($s[0])){
                unset($s[0]);
            }
            if(empty($s[1])){
                unset($s[1]);
            }
            //print_r($s);
            $s = implode("/",$s);
            $file = $s;
        }
        else if($file[0] == "\\"){
            $s = explode("\\",$file);
            unset($s[0]);
            $s = implode("\\",$s);
            $file = $s;
        }
        $http = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http'; 
        $server = $_SERVER['SERVER_NAME']; 
         $host = $http."://".$server."/siddique/so_plush/admin/$file";
   //     "http://www.hnhtechsolutions.com/waqarkhan/wedding_planet/api/$file";
        return $host = "http://localhost/wedding_planet/api/$file";

      //   return $host =$http."://mobileappstore.co.uk/abrar/api/$file";

        // $host = $http."://".$server."/raheel/vendroid24Sept19/vendroid/";

    }
    function curl_host_dir($file){
           
        if($file[0] == "/"){
            $s = explode("/",$file);
            if(empty($s[0])){
                unset($s[0]);
            }
            if(empty($s[1])){
                unset($s[1]);
            }
            //print_r($s);
            $s = implode("/",$s);
            $file = $s;
        }
        else if($file[0] == "\\"){
            $s = explode("\\",$file);
            unset($s[0]);
            $s = implode("\\",$s);
            $file = $s;
        }
        $http = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http'; 
        $server = $_SERVER['SERVER_NAME']; 
         $host = $http."://".$server."/siddique/so_plush/admin/$file";
        
        return $host = "http://localhost/wedding_planet/curl/$file";

      //   return $host =$http."://mobileappstore.co.uk/abrar/api/$file";

        // $host = $http."://".$server."/raheel/vendroid24Sept19/vendroid/";

    }




?>