<?php

//function buildJob($data, $url, $userToken){
    function buildJob($url, $userToken){
    //$url = $url."buildWithParameters/api/json?pretty=true";
    $url = $url."build";
    $headers = array("Jenkins-Crumb: 3b12ebd0cc6097ab62eb93a17f7cff3e");
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_USERPWD, $userToken);
   // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $result = curl_exec($ch);
    $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    $header = substr($result, 0, $header_size);
    curl_close($ch);
    return $header;
}

function getJobUrl ($url, $userToken){
    $url = $url."api/json?pretty=true&tree=executable[url]";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    //curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_USERPWD, $userToken);
    $result = curl_exec($ch);
    curl_close($ch);
    $res = json_decode($result);
    return $res;
}

function getJobStatus ($url, $userToken){
    $url = $url."/api/json?pretty=true&tree=timestamp,executor,number,duration,estimatedDuration,result,building";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_USERPWD, $userToken);
    $result = curl_exec($ch);
    curl_close($ch);
    $result = json_decode($result);
    return $result;
}

function getConsole ($url, $userToken){
    $url = $url."/consoleText";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_USERPWD, $userToken);
    $result = curl_exec($ch);
    curl_close($ch);
    //$result = json_decode($result);
    //return $res->result;
    return $result;
}

function buildJobWithParams($url, $userToken){
    $headers = array("Jenkins-Crumb: 3b12ebd0cc6097ab62eb93a17f7cff3e");
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_USERPWD, $userToken);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}