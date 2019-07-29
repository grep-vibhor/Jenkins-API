<?php
include_once('functions.php');
include_once('../config/config.php');

if($_REQUEST["component"] == "moneycenter")
    $Url= "http://192.168.57.26:10380/job/BE_COMPONENT_DEPLOYMENT_SDP_ONLY/";
elseif($_REQUEST["component"] == "appscenter")
    $Url= "http://192.168.57.26:10380/job/BE_COMPONENT_DEPLOYMENT_SDP_ONLY/";
else
    $Url= "http://192.168.57.26:10380/job/JBOSS_10_BE_DEPLOYMENT_SDP/";

//This Url will be made as per the value of componment from $_POST['component']
//$Url= "http://192.168.57.26:10380/job/api-job/";

if ($_SERVER['REQUEST_METHOD'] === "POST"){
    // Building the jenkins job
    $component=$_POST["component"];
    $env=$_POST["env"];
    $build=$_POST["build"];
    $instance=$_POST["instance"];
    $user=$_POST["user"];
    $arr=explode('_',$instance);
    $ip=$arr[0];
    $inst=$arr[1];
    $Url = $Url."buildWithParameters/api/json?pretty=true&COMPONENT=".$component."&ENVIRONMENT=".$env."&BUILD=".$build."&IP=".$ip."&INSTANCE=".$inst."&USER=".$user;
    $ReturnData = buildJobWithParams($Url, $userToken);
    preg_match("!\r\n(?:Location|URI): *(.*?) *\r\n!", $ReturnData, $matches);
    $ReturnData = $matches[1];
    sleep(10);
    $returnData = getJobUrl($ReturnData, $userToken);
    echo json_encode($returnData,true);
    //echo $ReturnData;
}
 elseif ($_SERVER['REQUEST_METHOD'] === "GET"){
        if (isset($_GET)){
            $buildID = $_GET["buildID"];
            $Url=$Url.$buildID;
            $returnData = getJobStatus($Url, $userToken);
            //echo json_encode($returnData);
            echo json_encode($returnData,true);
                            
                          }

    
}
  elseif ($_SERVER['REQUEST_METHOD'] === "PUT"){
            $buildID = $_REQUEST["buildID"];
            $Url=$Url.$buildID;
            $returnData = getConsole($Url, $userToken);
            //echo json_encode($returnData);
            echo $returnData;
      }
