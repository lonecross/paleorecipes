<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paleo Shit</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
    <body>
<!-- Wrap all page content here -->
    <div id="wrap">
	
<script type="text/javascript">

function loadrecipe()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("recipe").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","loadrecipe.php",false);
xmlhttp.send();
}

function loadsaying()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("saying").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","loadsaying.php",false);
xmlhttp.send();
}

function loadnew(){
loadsaying();
loadrecipe();
}


</script>
  <center>
<span id="saying">
<script type="text/javascript">
loadsaying();
</script>

</span>
<span id="recipe">
<script type="text/javascript">
loadrecipe();
</script>
</span>

  <form name="eqip">
  <button type="button" onclick="loadnew()" class="btn" id="bored"><font size=6>More Paleo Shit</font></button>
  </form><br><br>
 


</center>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

	
</div><!-- end wrap -->

<div id="footer"><div class="container"><font size=1><center>
This is a footer.  It is quite sticky.
</center></font>      
</div>
    </div>
  </body>
</html>

