$('#submitButton').click(function(){
    $("#submitButton").attr("disabled", true);
    var myEnv = $("#environmentSelector option:selected").text();
                var automation = ["Automation"];
    
                var l1_feature_restarts=["L1 Restart YSL"];
                var l1_ycc=["L1 Restart YCC"];
                var l1_feature_restarts_wealth=["L1 Restart Wealth"];
                var l1_feature_stable=["L1 Stable SAAS"];
                var nextgen=[ "PFM 3.0 Regular" , "PFM 3.0 Backup" , "NextGen Channel" , "NextGen Timely" , "PFM 3.0 SAML"];
                var nextgenFL_jboss10=["Fincheck QA"];
                var BCTS=["Sense QA"];
                var ssb=["SSB"];
                var PSD2=["PSD QA"];
                var wells_fargo_jboss10=["Wells Fargo(Infra)"];
                var PVT1=["PVT1"];
                var PVT2=["PVT2"];
                var PVT3=["PVT3"];
                var PVT4=["PVT4"];
    
                var auto_platform=["Auto NPR"];
                var autosit=["Auto SIT"];
                var l2_release=["L2 Environment"];
                var l3_environment=["L3 Environment"];
                var MR_Mainline=["MainLine"];
                var MR_Prodlike=["ProdLike"];
                var SIT_Wealth=["Wealth SIT"];

                var automation_mainline=["Auto Main"];
                var MR_stabilization=["STAB"];
                var MR_Weekly=["MR Weekly"];
                var hercules=["Hercules"];

                var CIT=["CIT"];
                var CIT_YSL=["CIT YSL"];
                var DIT=["DIT","DIT FL"];
                var l2_weeklynpr=["DIT Doc"];
                var Dev_Performance=["DEV Performance"];
                var devops=["DevOps"];

                var l2_yi=["YI L2"];
                var l1_yi=["YI L1"];
                if (automation.includes(myEnv))
                     var env = "automation";
                else if (l1_feature_restarts.includes(myEnv))
                     var env = "l1-feature-restarts";
                else if (l1_ycc.includes(myEnv))
                     var env = "l1-ycc";
                else if (l1_feature_restarts_wealth.includes(myEnv))
                     var env = "l1-feature-restarts-wealth";
                else if (l1_feature_stable.includes(myEnv))
                     var env = "l1-feature-stable";
                else if (nextgen.includes(myEnv))
                      var env = "nextgen";
                else if (nextgenFL_jboss10.includes(myEnv))
                      var env = "nextgenFL_jboss10";
                else if (BCTS.includes(myEnv))
                      var env = "BCTS";
                else if (ssb.includes(myEnv))
                        var env = "ssb";
                else if (PSD2.includes(myEnv))
                      var env = "PSD2";
                else if (wells_fargo_jboss10.includes(myEnv))
                      var env = "wells_fargo-jboss10";
                else if (PVT1.includes(myEnv))
                      var env = "PVT1";
                else if (PVT2.includes(myEnv))
                      var env = "PVT2";
                else if (PVT3.includes(myEnv))
                      var env = "PVT3";
                else if (PVT4.includes(myEnv))
                       var env = "PVT4";
                else if (auto_platform.includes(myEnv))
                      var env = "auto_platform";
                else if (autosit.includes(myEnv))
                      var env = "autosit";
                else if (l2_release.includes(myEnv))
                      var env = "l2-release";
                else if (l3_environment.includes(myEnv))
                      var env = "l3-environment";
                else if (MR_Mainline.includes(myEnv))
                      var env = "MR-Mainline";
                else if (MR_Prodlike.includes(myEnv))
                       var env = "MR-Prodlike";
                else if (SIT_Wealth.includes(myEnv))
                       var env = "SIT_Wealth";
                else if (automation_mainline.includes(myEnv))
                        var env = "automation-mainline";
                else if (MR_stabilization.includes(myEnv))
                        var env = "MR-stabilization";
                else if (MR_Weekly.includes(myEnv))
                        var env = "MR-weekly";
                else if (hercules.includes(myEnv))
                        var env = "hercules";
                else if (CIT.includes(myEnv))
                        var env = "CIT";
                else if (CIT_YSL.includes(myEnv))
                        var env = "CIT_YSL";
                else if (DIT.includes(myEnv))
                        var env = "DIT";
                else if (l2_weeklynpr.includes(myEnv))
                        var env = "l2-weeklynpr";
                else if (Dev_Performance.includes(myEnv))
                        var env = "Dev_Performance";
                else if (devops.includes(myEnv))
                        var env = "devops";
                else if (l2_yi.includes(myEnv))
                        var env = "l2-yi";
                else if (l1_yi.includes(myEnv))
                        var env = "l1-yi";
    var component = $("#ComponentList option:selected").val();
    var instance= $("#componentSelector option:selected").val();
    var build = $("#build").val();
    var user = $("#user").val();
    $.ajax
    ({ 
        url: 'backend/request.php',
        data: {component:component,env:env,build:build,instance:instance,user:user},
        type: 'post',
        success: function(result)
        {
            $('#progress').fadeIn(700, function() 
            {

                progress(result);
            });
        }
    });
});


$('#viewStatusButton').click(function(){
    $("#viewStatusButton").attr("disabled", true);
    
    var component = $("#ComponentList option:selected").val();
    var buildID = $("#buildID").val();
    var user = $("#user").val();
   // var refreshIntervalId = setInterval(function()
     //   {
    $.ajax
    ({ 
        url: 'backend/request.php?component='+component+'&buildID='+buildID,
        type: 'get',
        success: function(result)
        {
            
         var result=JSON.parse(result);
         
         if(result.building == false )
                {
                    if(result.result == "SUCCESS")
                    {
                        alert("Build Completed... Result:" + result.result);
                        //clearInterval(refreshIntervalId);
                    }
                    else
                    {
                        alert("Build Completed... Result:" + result.result + "View Console to monitor failed Build!!");
                        //clearInterval(refreshIntervalId);
                    }
                }    
		else
                {
                    alert("Still Building!!! Press OK to continue");
                }
        }
    });

         //};,900);
                                  $("#viewStatusButton").attr("disabled", false);      
                                    });


$('#consoleButton').click(function(){
    $("#consoleButton").attr("disabled", true);
    var component = $("#ComponentList option:selected").val();
    var buildID = $("#buildID").val();
    $.ajax
    ({ 
        url: 'backend/request.php?component='+component+'&buildID='+buildID,
        type: 'put',
        success: function(result)
        { 
        //result = result.replace(/\n/g,"%0D%0A");     
        var result = encodeURI(result);
        var url = "console/viewConsole.php?result=" + result;
        $(location).attr('href',url);
        }
    });
    
});

$("#update").click (function()  {
		var component = $("#ComponentList option:selected").val();
		var uri = 'http://192.168.211.238:2456/update?component='+component ; 
        $.ajax({
            url: uri,
            type: 'POST'
        
        }).success(function () {
      
           
                 //reload
                
            
               location.reload();
            
        }).error(function (message) {
            
               //reload
		location.reload();
            
        })
       })   

$("#updateCmp").click (function()  {
        var environment = $("#environmentSelector option:selected").val();
        var uri = 'http://192.168.211.238:9001/updateDeployments?env='+environment ; 
        $.ajax({
            url: uri,
            type: 'POST'
        
        }).success(function (message, text, jqXHR) {
      
           
                 //reload
                
            
               location.reload();
            
        }).error(function (message) {
            
               //reload
        location.reload();
            
        })
       })  