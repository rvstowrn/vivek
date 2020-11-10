<?php

    $encryption_key = "z0qcdf0GkjXLk7gwVBuBf1kezf6eRLtI";
    $iv = "583B6F1D3919CEA3";
    
    function pad($data, $size)
    {
        $length = $size - strlen($data) % $size;
        return $data . str_repeat(chr($length), $length);
    }

    function unpad($data)
    {
        return substr($data, 0, -ord($data[strlen($data) - 1]));
    }

    function encrypt($plaintext)
    {
        global $encryption_key,$iv;
        return openssl_encrypt(pad($plaintext, 16),'AES-256-CBC',$encryption_key,0,$iv);
    }

    function decrypt($cipher)
    {
        global $encryption_key,$iv;
        return unpad(openssl_decrypt($cipher,'AES-256-CBC',$encryption_key,0,$iv));
    }
    
?>