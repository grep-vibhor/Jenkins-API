
document.getElementById("componentSelector").onchange = function() {fillComponent()};

function fillComponent() {
    var valueToGrep = document.getElementById("componentSelector").value;
    var i =valueToGrep.lastIndexOf("_");
    var newVal=valueToGrep.substr(i+1,valueToGrep.length-1);

  if(newVal == "ngycc")
  {
      document.getElementById("ComponentList").value = "ngyccapp";
      document.getElementById("ComponentList").text() = "ngyccapp";
  }
  else if(newVal == "wealthngycc")

  {
      document.getElementById("ComponentList").value = "wealthngyccapp";
      document.getElementById("ComponentList").text() = "wealthngyccapp";
  }
  else 
  {
 
      document.getElementById("ComponentList").value = newVal;
      document.getElementById("ComponentList").text() = newVal;
  }
}



function autofillBuildList(){
$(document).ready(function(){
        $('#build').keyup(function(){
                var query = $(this).val();
                var component = $("#ComponentList option:selected").val();
                if(query != '')
                {
                        $.ajax({
                                url: "config/search.php",
                                method: "POST",
                                data: {component:component,query:query},
                                success: function(data)
                                {

                                        $('#buildList').fadeIn();
                                        $('#buildList').html(data);

                                }
                        });
                }
        });
            $(document).on('click','li', function(){
                $('#build').val($(this).text());
                $('#buildList').fadeOut();

        });
});
}




function FillEnvSelectorList(){
    $(document).ready(function(){
    $("#portfolioSelector").change(function(){
        var selectedPortfolio = $("#portfolioSelector option:selected").val();
    var list1 = document.getElementById('environmentSelector');
    
    var Automation_Env = ["Select","Automation"];
    var Portfolios_Env = ["Select","L1 Restart YSL","L1 Restart YCC","L1 Restart Wealth","L1 Stable SAAS","PFM 3.0 Regular","PFM 3.0 Backup","NextGen Channel","NextGen Timely", "PFM 3.0 SAML","Fincheck QA","SSB","Sense QA","PSD QA","Wells Fargo(Infra)","PVT1","PVT2","PVT3","PVT4"];
    var SIT_Env=["Select","Auto NPR","Auto SIT","L2 Environment","L3 Environment","MainLine","ProdLike","Wealth SIT"];
    var SUST_Env=["Select","Auto Main","STAB","MR Weekly","Hercules"];
    var DEV_Environment=["Select","CIT","CIT YSL","DIT","DIT Doc","DIT FL","Fincheck DEV","DEV Performance","DevOps"];
    var DevPortal=["Select","YI L2","YI L1"];
    var opt=null;
    if (selectedPortfolio == "Select")
        {
            
        $('#environmentSelector').empty();
            list1.innerHTML = "Please Select Portfolio";
        }
        else if (selectedPortfolio == "Automation")
        {
            
        $('#environmentSelector').empty();
            for(i = 0; i<Automation_Env.length; i++) { 

               opt = document.createElement('option');
                   opt.value = Automation_Env[i];
                opt.innerHTML = Automation_Env[i];
                list1.appendChild(opt);
                               }
        }
    else if (selectedPortfolio == "Portfolios")
        {
        $('#environmentSelector').empty();
            for(i=0;i<Portfolios_Env.length;i++)
            {
                opt=document.createElement('option');
                opt.value = Portfolios_Env[i];
                opt.innerHTML=Portfolios_Env[i];
                list1.appendChild(opt);
            }
        }
    else if (selectedPortfolio == "SIT")
        {
        $('#environmentSelector').empty();
            for(i=0;i<SIT_Env.length;i++)
            {
                opt=document.createElement('option');
                opt.value = SIT_Env[i];
                opt.innerHTML=SIT_Env[i];
                list1.appendChild(opt);
            }
        }
    else if (selectedPortfolio == "SUST")
        {
        $('#environmentSelector').empty();
            for(i=0;i<SUST_Env.length;i++)
            {
                opt=document.createElement('option');
                opt.value = SUST_Env[i];
                opt.innerHTML=SUST_Env[i];
                list1.appendChild(opt);
            }
        }
    else if (selectedPortfolio == "DEV Environment")
        {
        $('#environmentSelector').empty();
            for(i=0;i<DEV_Environment.length;i++)
            {
                opt=document.createElement('option');
                opt.value = DEV_Environment[i];
                opt.innerHTML=DEV_Environment[i];
                list1.appendChild(opt);
            }
        }
    else if (selectedPortfolio == "DevPortal")
        {
        $('#environmentSelector').empty();
            for(i=0;i<DevPortal.length;i++)
            {
                opt=document.createElement('option');
                opt.value = DevPortal[i];
                opt.innerHTML=DevPortal[i];
                list1.appendChild(opt);
            }
        }

    });
    $('#environmentSelector').trigger('change');
});
}

function progress(result){
    var result=JSON.parse(result);
    var buildID = result.executable.url.split("/").slice(-2)[0];
    document.getElementById('buildID').value= buildID;
    //http://192.168.57.26:10380/job/api-job/79/
    var refreshIntervalId = setInterval(function()
        {
                var a=document.getElementById("progress-bar").style.width;
                res=0;
                var res = a.substr(0,(a.length) - 1);
                res=eval(res) + 10;
                document.getElementById("progress-bar").style.width = res + "%";
                document.getElementById("progress-bar").innerHTML = "Triggering Your Build #" + buildID;
                if(eval(res)>90)
                {
                    document.getElementById("progress-bar").innerHTML = "Build #"+buildID + " Triggered Successfully!! Click on View Status to monitor..";
                    clearInterval(refreshIntervalId);
                    $('#viewStatusButton').removeAttr("disabled");
                    $('#consoleButton').removeAttr("disabled");
                }


        },5000

    );


}

/*


function validateForm (){
    var elems = $('input[name*=image_tag]'),
        emptyTags = 0;

    $.each(elems, function (key, item) {
        if ($(item).val().length <= 0){
            if ($(item).parent().prev().children().hasClass('btn-primary')){
                $(item).tooltip('show');
                emptyTags++
            }
        }
    });

    if (emptyTags === 0){
        var btns = $('button[name*=short]');

        $.each(btns, function (key, item) {
            if ($(item).hasClass('btn-primary')) {
                $(item).parent().next().next().next().find('span').addClass('glyphicon-spin');
                $(item).parent().next().next().next().find('a').removeClass('btn-default');
                $(item).parent().next().next().next().find('a').addClass('btn-warning');
            }
        });
        return true;
    } else {
        return false;
    }
}
*/





















