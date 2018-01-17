


<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
    $("button").click(function(){
        $("#nothing").toggle(100);
    });
    });
    </script>


     <script>
   /* $(document).ready(function(){
    $("h1").mouseenter(function(){
       alert("You are on heading");
    });
    });
*/
     </script>
     
     <script>
   /* $(document).ready(function(){
    $("p").dblclick(function(){
        $(this).hide();
    });
    });*/
    </script>
    <!-- <script>
        function validateForm() 
        {
        var x = document.getElementById('uname').value;
        var y = document.getElementById('pwd').value;
        if (x == "" || y == "") 
        {
        alert("Login entities must be filled out");
        return false;
        }
        }
     </script> -->

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script>

         
          $(document).ready(function(){
          $("#myform").submit(function(e){
        
        var x = $("#uname").val();
        var y = $("#pwd").val();
       // alert(x);
        //alert(y);
          if(x==""||y=="")
          {
            alert("Please enter username and password to login");
            e.preventDefault();
          }

          else
          {
          var req = $.get("process.php", {id: x,passwordg: y} , function(data){
            
            
           alert(data);
            var z = data;
            alert(z);
            
            if($.trim(z) == "Login successful")
                      {                  
                            alert(z);  
                            document.getElementById("myform").submit();
                            return true;
                      }
             
               

                     
            

                     
        });
      
        }

return false;
    });
           

});

            
          
      
                                    
                                    //var z=data;
                                    
                                   /* if($.trim(z) == "Login successful")
                                     {
                                   alert(z);
                                  // document.getElementById("myform").submit();
                                   }*/


             
          /*  $("#btn").click(function(){
                       $.post("process.php" ,
                              {
                                username:  x,
                                password1: y
                              },
                              function(data, status){
                                    alert("Data: " + data + "\nStatus: " + status);
                            });
            }); */
       








     </script>  








     <script>
       /* var z="rt";
         function check()
     {
         var xhttp;
         var str = document.getElementById('uname').value;
         var str1 = document.getElementById('pwd').value;
         if ((str.length == 0) || (str1.length == 0))
          { 
            //document.getElementById("notify").innerHTML = "Please enter E-mail or password to login";
            alert("Please enter E-mail or password to login");
            return false;
          }
         xhttp = new XMLHttpRequest();
         var queryString = "?username="+str+"&password="+str1;

         xhttp.open("GET", "process.php" +queryString, true);

         xhttp.send(null); 
         
        xhttp.onreadystatechange = function()
         {
                    if (this.readyState == 4 && this.status == 200)
                {
                          document.getElementById("notify").innerHTML = this.responseText;
                          var ss = this.responseText;
                          z= ss;
                          alert(z);
                          if($.trim(z) == "Login successful")
                      {
                                   alert(z);
                                   document.getElementById("myform").submit();
                                   return true;

                      }
              
              
                }
         
          };
           //document.write(z + "y");

        return false;
  
          
     }*/



     </script>

    
<style>
body {
    background-color: mediumseagreen;
}

h1 {
    color: black;
    text-align: center;
    font-size: 60px;

}

#form{
    font-family: verdana;
    font-size: 20px;
    background-color: lightgray;
    border-style: solid;
    background-position: center;
    width:25%;
    text-align: center;
    border-width: 5px;
    padding: 70px;
    margin: auto; 
}

#div1
{
    margin: auto;
    background-color: lightgray;
    width: 25%;
    text-align: center;
    background-position: center;
    border-style: solid;
    padding :70px;
}

input[type=submit] {
    width: 100px;
    height: 35px;
    border-style: solid;
     border-width: 5px;
}

</style>

<title>Login Page</title>
</head>
<body>


	<hr style="margin-top: 50px">
    <h1>LOGIN SCREEN</h1>
	<div id = "form" >
       
        <form name ="forms" id ="myform" action="profile.php" method ="post">
            
            	<label>User Name</label>
            	<input type="text" id="uname" name="user" minlength="6" maxlength="12" />
              
                <br>
                <br>
            	<label>Password</label>
            	<input type="password" id="pwd" name="pwd" minlength="6" maxlength="12" />
                <br>

                <br>
            	<input type="submit" class="btn" id="btn" value="Login">
                <br>
                  <br>
                  Not Registered?
                <a href="registerpage.php">Register</a>
                <br>
                <h4>Use your Username as Username</h4>
                <span id ="notify"></span>
                <span id ="check"></span>
        </form>
   
    </div>
    <br>
    <div id="div1">
        <button>Click me to toggle below line</button>
                <br>
                <br>
               <p id="nothing"> Nothing is Impossible.</p> 
               
    </div>
    

     

</body>
</html>