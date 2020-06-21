<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script language="javascript">
<!--//
/*This Script allows people to enter by using a form that asks for a
UserID and Password*/
function pasuser(form) {
if (form.id.value=="admin") { 
if (form.pass.value=="admin") {              
window.open('admin1.php')
} else {
alert("Invalid Password")
}
} else {  alert("Invalid UserID")
}
}
//-->
</script>
<style>
body {
    background-color: lightblue;
}

p {
    color: blue;
    text-align: center;
     font-size: 50px;
     font-family: ALGERIAN ;
}
form {
 margin: 2;
 width: 570px;
 float:right;
 form-align:left;
 padding: 1em 2em;
 border: 1px dotted red;

}

.column {
   
    float: left;
    width: 50%;
    padding: 10px;
    height: 300px;
}


.row:after {
    content: "";
    display: table;
    clear: both;
}
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 32%;
}

</style>
</head>
<body>
<img style="float: left;" src="stu.png" width="305px"><p style="float: left; margin-left: 80px;margin-right: 60px;">Alumni Management System </p><img style="float: right;"src="smiling.jpg" width="300px" height="200px"></img>
<br/>
<br/>
<br/>
<br/>
<br/>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#"><h4>Home</h4></a></li>
      <li><a href="#"><h4>&ensp;Why Alumni?</h4></a></li>
	<li><a href="#"><h4>&ensp;Contact</h4></a></li>
     <li><a href="#"><h4>&ensp;Feedback</h4></a></li>

    <li><a href="#"><h4>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</h4></a></li>
	<li><a href="#"><h4>Login</h4></a></li>
    </ul>
  </div>
</nav>
<div class="row">
  <div class="column">
<center><h1><font color="blue"><b><i>Welcome to Alumni Management Website!</b></i></h1></center><br/>
<h4>
<font color="blue">
&ensp; Alumnee helps institutes strategically build and manage their alumni network,bu facilitating &ensp;engagement, community-building, networking,communications and giving back,with alumnee,your alumni data can be centralized and combined with ahost of exciting front-end member modules and time-saving, back-end administration tools.<br/>

So stop wasting resources on placemeal and uncoordinated efforts, and start creating value for your alumni community and your institute TODAY!<br/>

Alumni are the reflection of the colleg reputation to outside world. Their Management helps in keeping them in conatact for life-long association.<br/>
 This system provides ionterface for all relevant details concerning alumi.The system is LAN based for providing complete secured authority to college authority.
  </div>
  <div class="column">
    <center>
<form name="login">
<H2 align="center"><u>Admin Login</u></H2>

<div id="login-box-name" style="margin-top:20px;">
Username:
</div><div id="login-box-field"">
  <input name="id" class="form-login" title="Username" value="" size="30" maxlength="2048" /></div>
<div id="login-box-name">
Password:
</div><div id="login-box-field"><input name="pass" type="password" class="form-login" title="Password" value="" size="30" maxlength="2048" /></div>
<br />
<span class="login-box-options"><input type="checkbox" name="1" value="1"> Remember Me <a href="#" style="margin-left:30px;">Forgot password?</a></span><br/>
<button type="insert"onClick="pasuser(this.form)"name=value>Login</button>
<br />
<br />
</div>
<center>


</form>
</body>
 
</html>




</body>
</html>
