<?php
include_once('config/config.php');
include_once('config/fillComponentList.php');//contains fillComponentList function
$Version = trim(file_get_contents('backend/version'));

include('session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: index.php"); // Redirecting To Home Page 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel="shortcut icon" href="lib/favicon.png"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="lib/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="lib/css/style.css">
<style>
ul{
    background-color:#eee;
    cursor: pointer;

}
li{
    padding: 12px;

}


#logoutButton {
    margin-left: 500px;
    display: block;
    width: 115px;
    height: 40px;
    background: #4E9CAF;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: white;
    font-weight: bold;
}
</style>


</head>
<body>
<div class="container" style="padding-top: 20px">
    <div class="col-md-12">
        <div class="row">

                <div class="form-group">
                <h4 class="col-sm-2 control-label">User :</h4>
                <div class="col-sm-2">
                    <input type="text" id="user" class="form-control" style="width: 500px;" placeholder="<?php echo $login_session;?>"  value="<?php echo $login_session;?>" disabled>
                    </input>
                </div>
            </div>
            <br><br>


            <div class="form-group">
                <h4 class="col-sm-2 control-label">Portfolio :</h4>
                <div class="col-sm-2">
                    <select id="portfolioSelector" class="form-control" style="width: 500px;">
			<option value="Select">Select</option>
			<option value="Automation">Automation</option>
 			<option value="Portfolios">Portfolios</option>
			
 			<option value="SIT">SIT</option>
 			<option value="SUST">SUST</option>
 			<option value="DEV Environment">DEV Environment</option>
 			<option value="DevPortal">DevPortal</option>
                    </select>
                </div>

                </div>
            <br><br>
	    <div class="form-group">
                <h4 class="col-sm-2 control-label">Environment :</h4>
                <div class="col-sm-2">
                    <select id="environmentSelector" class="form-control" style="width: 500px;"><option>Select</option></select>

                </div>
            </div><br>
            <br>


           
        </div>
        <hr>
	
	<div class="form-group">
                <h4 class="col-sm-2 control-label">Full Component :</h4>
                <div class="col-sm-2">
                    <select id="componentSelector" class="form-control" style="width: 500px;display:inline-block;">">
			<option value="Select">Select</option>
                    </select><button class="btn btn-primary" style="display: inline-block;" id="updateCmp">Refresh</button>
                </div>

                </div>
		<br>
		<br>
        <br>
        <br>
		
	<div class="form-group">
                <h4 class="col-sm-2 control-label">ComponentSelected</h4>
                <div class="col-sm-2">
		<select disabled id="ComponentList" name="component" class="form-control" style="width: 500px;">
		<option value="alerts">alerts</option>
        <option value="ngyccapp">ngyccapp</option>
        <option value="wealthngyccapp">wealthngyccapp</option>
        <option value="configtool">configtool</option>
        <option value="dag">dag</option>
		<option value="dc">dc</option>
		<option value="dcservlets">dcservlets</option>
        <option value="dapgatherer">dapgatherer</option>
		<option value="newsdk">newsdk</option>
        <option value="ngyccservices">ngyccservices</option>
		<option value="payitallpaymon">payitallpaymon</option>
		<option value="paymentengine">paymentengine</option>
		<option value="restserver">restserver</option>
		<option value="ubd">ubd</option>
		<option value="ycc">ycc</option>
		<option value="ytask">ytask</option>
		<option value="ysl">ysl</option>
		<option value="messagingservice">messagingservice</option>
		<option value="moneycenter">moneycenter</option>
		<option value="appscenter">appscenter</option>
		<option value="nodefinapp">nodefinapp</option>
		<option value="oauthclient">oauthclient</option>
        <option value="wealthngyccservices">wealthngyccservices</option>
		</select>
                </div>
	</div>
		<br>
		<br>

                <h4 class="col-sm-2 control-label">Build :</h4>
                <div class="col-sm-2" style="width: 600px">
                    
                    <input type="text" type="search" name="build" id="build" class="form-control" placeholder="Enter Build Name and if you can't find your build then click REFRESH" style="width: 500px;display:inline-block;"><button class="btn btn-primary" style="display: inline-block;" id="update">Refresh</button>
                <div id="buildList" class="form-control" style="width: 500px;border: none;"></div>

		</div>
		<br>
		<br>
		<br>
		<br>
        <div class="form-group">
            <div class="row">
                <button class="btn btn-primary submitButton" id="submitButton">Submit and Trigger Job</button>
                <button class="btn btn-info" id="viewStatusButton" disabled="true">View Job Status</button>
                <button class="btn btn-info" id="consoleButton" disabled="true">View Console Output</button>
            </div>
        </div>
    </div>
</div>
<a href="logout.php" id="logoutButton">Log Out</a>
<br><br>

<div class="progress" id="progress">
    <div class="progress-bar" id="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:0%">
    Triggering......
    </div>
</div>
<input type='hidden' id='buildID'>
<div class="modal fade" id="connectingModalId" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <p class="text-center">Establishing connection with <strong>Jenkins Server</strong></p>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="noConnectionModalId" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header modal-header-danger">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span>&times;</span>
                </button>
                <h4 class="modal-title"><strong>No Connection</strong></h4>
            </div>
            <div class="modal-body text-center">
                <span>Make sure your connection tunnel with port <strong>2800</strong> to <strong>Jenkins</strong> is working and then try again.</span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="importJSONModalId" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span>&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" language="javascript" src="lib/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" language="javascript" src="lib/js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="lib/js/functions.js"></script>
<script type="text/javascript" language="javascript" src="lib/js/triggers.js"></script>





<script>
    $(document).ready(function () {
        $('#connectingModalId').modal('show');

        $.ajax({
            url: 'http://192.168.57.26:10380',
            type: 'GET',
            beforeSend: function (xhr){
            xhr.setRequestHeader('Authorization', "Basic " + btoa("ksahoo" + ":" + "119d9c2e4f01fea3546e799c9f3dd36375"));
        }
        }).success(function (message, text, jqXHR) {
            $('#connectingModalId').modal('hide');
            if (jqXHR.status === 200) {
                 alert("You are connected to Jenkins Server: Proceed");
                autofillBuildList();	
                FillEnvSelectorList();
                fillComponentList();
            } else {
                $('#noConnectionModalId').modal('show');
            }
        }).error(function (message) {
            if (message.statusText === 'error') {
                $('#connectingModalId').modal('hide');
                $('#noConnectionModalId').modal('show');
            }
        })
    })
   
</script>






</body>
</html>
