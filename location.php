<?php 

  function getUserCountry() {
        $url = 'http://api.wipmania.com/jsonp?callback=?';
        $ch = curl_init();
        $headers = "Typ: phpcurl\r\n";
        $headers .= "Ver: 1.0\r\n";
        $headers .= "Connection: Close\r\n\r\n";
        $timeout = 5;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array($headers));
        $content = curl_exec($ch);
        curl_close($ch);
        echo $content;
    }