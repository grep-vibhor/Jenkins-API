<script>
function fillComponentList(){
$(document).ready(function(){
	$("#environmentSelector").change(function(){

	var selectedEnv = $("#environmentSelector option:selected").text();

        var componentlist = document.getElementById('componentSelector');
        var cmp=null;
	
        var automation_Env = ["Automation"];
	
	var l1_feature_restarts_Env=["L1 Restart YSL"];
	var l1_ycc_Env=["L1 Restart YCC"];
	var l1_feature_restarts_wealth_Env=["L1 Restart Wealth"];
	var l1_feature_stable_Env=["L1 Stable SAAS"];
	var nextGen_Env=[ "PFM 3.0 Regular" , "PFM 3.0 Backup" , "NextGen Channel" , "NextGen Timely" , "PFM 3.0 SAML"];
	var nextgenFL_jboss10_Env=["Fincheck QA"];
	var BCTS_Env=["Sense QA"];
	var ssb_Env=["SSB"];
	var PSD2_Env=["PSD QA"];
	var wells_fargo_jboss10_Env=["Wells Fargo(Infra)"];
	var PVT1_Env=["PVT1"];
	var PVT2_Env=["PVT2"];
	var PVT3_Env=["PVT3"];
	var PVT4_Env=["PVT4"];
	
	var auto_platform_Env=["Auto NPR"];
	var autosit_Env=["Auto SIT"];
	var l2_release_Env=["L2 Environment"];
	var l3_environment_Env=["L3 Environment"];
	var MR_Mainline_Env=["MainLine"];
	var MR_Prodlike_Env=["ProdLike"];
	var SIT_Wealth_Env=["Wealth SIT"];

	var automation_mainline_Env=["Auto Main"];
	var MR_stabilization_Env=["STAB"];
	var MR_Weekly_Env=["MR Weekly"];
	var hercules_Env=["Hercules"];

	var CIT_Env=["CIT"];
	var CIT_YSL_Env=["CIT YSL"];
	var DIT_Env=["DIT","DIT FL"];
	var l2_weeklynpr_Env=["DIT Doc"];
	var Dev_Performance_Env=["DEV Performance"];
	var devops_Env=["DevOps"];

	var l2_yi_Env=["YI L2"];
	var l1_yi_Env=["YI L1"];


	if (selectedEnv == "Select")
              
  	{

             
   		$('#componentSelector').empty();
                  
   		componentlist.innerHTML = "Please Select Env";
         
  	}

        else if (automation_Env.includes(selectedEnv))
         {      
                $('#componentSelector').empty();

                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);
                
                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='automation' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>

                }
    
        else if (l1_feature_restarts_Env.includes(selectedEnv))
                {
                $('#componentSelector').empty();

                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);

                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='l1-feature-restarts' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>
                }

        else if (l1_ycc_Env.includes(selectedEnv))
                {
                $('#componentSelector').empty();

                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);

                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='l1-ycc' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>
                }

        else if (l1_feature_restarts_wealth_Env.includes(selectedEnv))
                {
                $('#componentSelector').empty();

                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);

                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='l1-feature-restarts-wealth' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>
                }

        else if (l1_feature_stable_Env.includes(selectedEnv))
                {
                $('#componentSelector').empty();


                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);

                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='l1-feature-stable' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>
                }


        

 	else if (nextGen_Env.includes(selectedEnv))
         {      
                $('#componentSelector').empty();

                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);

                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='nextgen' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>

                }



                else if (nextgenFL_jboss10_Env.includes(selectedEnv))
         {      
                $('#componentSelector').empty();

                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);

                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='nextgenFL_jboss10' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>

                }



		else if (BCTS_Env.includes(selectedEnv))
                {
                $('#componentSelector').empty();

                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);

                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='BCTS' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>
                }

		   else if (ssb_Env.includes(selectedEnv))
                {
                $('#componentSelector').empty();

                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);

                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='ssb' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>
                }


		else if (PSD2_Env.includes(selectedEnv))
                {
                $('#componentSelector').empty();

                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);

                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='PSD2' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>
                }
		  

		  
		  else if (wells_fargo_jboss10_Env.includes(selectedEnv))
                {
                $('#componentSelector').empty();

                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);

                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='wells_fargo-jboss10' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>
                }


		   else if (PVT1_Env.includes(selectedEnv))
                {
                $('#componentSelector').empty();


                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);

                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='PVT1' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>
                }

      	    else if (PVT2_Env.includes(selectedEnv))
                {
                $('#componentSelector').empty();

                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);

                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='PVT2' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>
                }

		   else if (PVT3_Env.includes(selectedEnv))
                {
                $('#componentSelector').empty();


                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);

                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='PVT3' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>
                }

		   else if (PVT4_Env.includes(selectedEnv))
                {
                $('#componentSelector').empty();

                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);

                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='PVT4' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>
                }

            else if (auto_platform_Env.includes(selectedEnv))
                {
                $('#componentSelector').empty();

                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);
                
                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='auto_platform' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>
                }


                else if (autosit_Env.includes(selectedEnv))
                {
                $('#componentSelector').empty();

                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);
                
                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='autosit' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>
                }
                else if (l2_release_Env.includes(selectedEnv))
                {
                $('#componentSelector').empty();

                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);
                
                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='l2-release' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>
                }

                else if (l3_environment_Env.includes(selectedEnv))
                {
                $('#componentSelector').empty();

                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);
                
                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='l3-environment' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>
                }

                else if (MR_Mainline_Env.includes(selectedEnv))
                {
                $('#componentSelector').empty();

                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);
                
                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='MR-Mainline' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>
                }

                else if (MR_Prodlike_Env.includes(selectedEnv))
                {
                $('#componentSelector').empty();

                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);
                
                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='MR-Prodlike' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>
                }

                else if (SIT_Wealth_Env.includes(selectedEnv))
                {
                $('#componentSelector').empty();

                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);
                
                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='SIT_Wealth' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>
                }

                else if (automation_mainline_Env.includes(selectedEnv))
                {
                $('#componentSelector').empty();

                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);
                
                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='automation-mainline' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>
                }

                else if (MR_stabilization_Env.includes(selectedEnv))
                {
                $('#componentSelector').empty();

                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);
                
                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='MR-stabilization' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>
                }

                 else if (MR_Weekly_Env.includes(selectedEnv))
                {
                $('#componentSelector').empty();

                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);
                
                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='MR-Weekly' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>
                }


                else if (hercules_Env.includes(selectedEnv))
                {
                $('#componentSelector').empty();

                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);
                
                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='hercules' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>
                }



                else if (CIT_Env.includes(selectedEnv))
                {
                $('#componentSelector').empty();

                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);
                
                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='CIT' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>
                }

                else if (CIT_YSL_Env.includes(selectedEnv))
                {
                $('#componentSelector').empty();

                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);
                
                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='CIT_YSL' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>
                }

                else if (DIT_Env.includes(selectedEnv))
                {
                $('#componentSelector').empty();
                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);
                
                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='DIT' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>
                }

                else if (l2_weeklynpr_Env.includes(selectedEnv))
                {
                $('#componentSelector').empty();

                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);
                
                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='l2-weeklynpr' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>
                }

                else if (Dev_Performance_Env.includes(selectedEnv))
                {
                $('#componentSelector').empty();

                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);
                
                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='Dev_Performance' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>
                }


                else if (l2_yi_Env.includes(selectedEnv))
                {
                $('#componentSelector').empty();

                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);
                
                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='l2-yi' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>
                }

                else if (l1_yi_Env.includes(selectedEnv))
                {
                $('#componentSelector').empty();
                
                cmp = document.createElement('option');
                cmp.value = "Select";
                cmp.innerHTML = "Select";
                componentlist.appendChild(cmp);
                
                <?php
                        $mysqli = new mysqli("localhost","root","qadeploy@123","portal");
                $sqlSelect="SELECT component FROM components where env='l1-yi' ";
                $result = $mysqli -> query ($sqlSelect);

                while ($row = mysqli_fetch_array($result))  {

                           echo "cmp = document.createElement('option');";
                           echo "cmp.value = " . "\"". $row['component'] . "\";";
                        echo "cmp.innerHTML = " . "\"" . $row['component'] . "\";" ;
                        echo "componentlist.appendChild(cmp);";

                        }
                ?>
                }





                    


	})
			$('environmentSelector').trigger('change');
	})
}
</script>
