<html>
<body>
<script language="JavaScript"  src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>

<script>
window.onload = function()  {
    $(document).ready(function () {


                     $.ajax
                    ({ 
                        url: 'passphrase.php',
                        type: 'post',
                    success: function(result)
                    { 
           
                    
                     var passphrase = prompt("Please enter the admin passphrase", "<passphrase>");
                    
                    if (passphrase == result) 
                    {
                            var url = "http://192.168.57.26:10380/";
                            $(location).attr('href',url);
                    } 
                    else {
                            alert("Wrong Phrase!!! Enter Again!!");
                            location.reload();

                                }
                    }
                        });
                    

                    
                 	

})
           
};
</script>

</body>
</html>
