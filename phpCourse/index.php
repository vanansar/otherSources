<?php
session_start();
if(isset($_SESSION['admin_id']))
{
  header("Location:index.php");
}	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Clientele a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- css files -->
<!--<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />-->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/team.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/portfolio.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/progressbar.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css files -->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css">
<!-- /fonts -->
<!-- js files -->
<script src="js/modernizr.custom.js"></script>  
<script src="js/jquery-2.2.4.js"></script>

<script src="js/jquery.validate.js"></script>

<style>
#foot
{
	top:850px;
	position:relative;
}


</style>

 
<link rel="stylesheet" href="data_tables/bootstrap.min.css" />  
           <script src="data_tables/jquery.dataTables.min.js"></script>  
           <script src="data_tables/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="data_tables/dataTables.bootstrap.min.css" />  
<!--new_style   -->


<link rel="stylesheet" href="new_style/themes/alertify.core.css" />
	<link rel="stylesheet" href="new_style/themes/alertify.default.css" id="toggleCSS" />
<style>
		/*.alertify-log-custom {
			background: blue;
		}*/
	</style>


	<script src="new_style/lib/alertify.min.js"></script>
	


<script>
function reset () {
			$("#toggleCSS").attr("href", "new_style/themes/alertify.default.css");
			alertify.set({
				labels : {
					ok     : "OK",
					cancel : "Cancel"
				},
				delay : 5000,
				buttonReverse : false,
				buttonFocus   : "ok"
			});
		}
		
		
		
		</script>
        
        <script type="text/javascript">
function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("profile-image-upload").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };
</script>

<script>

function search_item()
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
    document.getElementById("mydiv").innerHTML=xmlhttp.responseText;
    }
  }
 value=document.getElementById("search_box").value;
 if(value=="")
 {
	location.reload();
 }

xmlhttp.open("GET","search_action.php?key="+value,true);
xmlhttp.send();
}

function search_file()
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
    document.getElementById("mydivfileman").innerHTML=xmlhttp.responseText;
    }
  }
 value=document.getElementById("search_boxfil").value;
 if(value=="")
 {
	location.reload();
 }

xmlhttp.open("GET","search_filaction.php?key="+value,true);
xmlhttp.send();
}


function search_fileman()
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
    document.getElementById("mydivfileman").innerHTML=xmlhttp.responseText;
    }
  }
 value=document.getElementById("search_boxfilman").value;
 if(value=="")
 {
	location.reload();
 }

xmlhttp.open("GET","search_filmanaction.php?key="+value,true);
xmlhttp.send();
}

function search_manager()
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
    document.getElementById("mydiv1").innerHTML=xmlhttp.responseText;
    }
  }
 value=document.getElementById("search_box1").value;
xmlhttp.open("GET","search_action1.php?key="+value,true);
xmlhttp.send();
}
</script>
        <!-- Pagination -->
        
        
        	<style type="text/css">
	

	.show {
	color: blue;
	margin: 5px 0;
	padding: 3px 5px;
	cursor: pointer;
	font: 15px/19px Arial,Helvetica,sans-serif;
	}
	.show a {
	text-decoration: none;
	}
	.show:hover {
	text-decoration: underline;
	}


	ul.setPaginate li.setPage{
	padding:15px 10px;
	font-size:14px;
	color:#FFF;
	}

	ul.setPaginate{
	margin:0px;
	padding:0px;
	height:100%;
	overflow:hidden;
	font:12px 'Tahoma';
	list-style-type:none;	
	}  

	ul.setPaginate li.dot{padding: 3px 0;}

	ul.setPaginate li{
	float:left;
	margin:0px;
	padding:0px;
	margin-left:5px;
	}



	ul.setPaginate li a
	{
	background: none repeat scroll 0 0 #ffffff;
	border: 1px solid #cccccc;
	color: #999999;
	display: inline-block;
	font: 15px/25px Arial,Helvetica,sans-serif;
	margin: 5px 3px 0 0;
	padding: 0 5px;
	text-align: center;
	text-decoration: none;
	}	

	ul.setPaginate li a:hover,
	ul.setPaginate li a.current_page
	{
	background: none repeat scroll 0 0 #0d92e1;
	border: 1px solid #000000;
	color: #ffffff;
	text-decoration: none;
	}

	ul.setPaginate li a{
	color:black;
	display:block;
	text-decoration:none;
	padding:5px 8px;
	text-decoration: none;
	}

	</style>
	    
        
        
        

<script>

$(document).ready(function(){
	
	
	
	$("#manager_form").validate({


rules: {
	
	fname: {
	
   required:true,
   lettersonly: true
   
   },
   
   
	lname: {
	
   required:true,
   lettersonly: true
   
   },
   
   age: {
	
   required:true,
   number: true
   
   },
   
   address: {
	
   required:true
   
   },
   
    state: {
	
   required:true
   
   },
   
    city: {
	
   required:true
   
   },
   
   country: {
	
   required:true
   
   },
   
   gen: {
	
   required:true
   
   
   },
   
   phone: {
	
   required:true,
   number: true,
   minlength: 10
   
   },


   email_id: {
   
   email:true,
   required:true
   },
   
    password: {
	
   required:true,
   minlength: 8,
   mypassword: true
   
   },
   
    conpassword: {
	
   required:true,
   equalTo: "#pass"
   
   }
   
   }, messages: {
	   
	   
	            fname: {
	   
				required: "* First Name is Mandatory"
				
				},
				
				lname: {
	   
				required: "* Last Name is Mandatory"
				
				},
				
				 age: {
	   
				required: "* Age is Mandatory"
				},
				
				address: {
	   
				required: "* Address is Mandatory"
				},
				
				state: {
	   
				required: "* State is Mandatory"
				},
				
				city: {
	   
				required: "* City is Mandatory"
				},
				
				country: {
	   
				required: "* Country is Mandatory"
				},
				
				gen: {
	   
				required: "* Gender is Mandatory"
				},
				
				phone: {
	   
				required: "* Phone is Mandatory"
				},
				
               email_id: {
	   
	            email: "* Enter the valid Email",
				required: "* Email is Mandatory"
				},
				
				password: {
	   
				required: "* Password is Mandatory"
				},
				
				conpassword: {
	   
				required: "* Confirm Password is Mandatory"
				
				}
          
}



});

jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-z]+$/i.test(value);
}, "Letters only please"); 


$.validator.addMethod('mypassword', function(value, element) {
        return this.optional(element) || (value.match(/[a-zA-Z]/) && value.match(/[0-9]/));
    },
    'Password must contain at least one numeric and one alphabetic character.');


//Change Password Validation

$("#chg_pass").validate({



rules: {
	
	
   old_pass: {
	
   required:true,
 
   
   },
   
   new_pass: {
	
   required:true,
   minlength: 8,
   mypassword: true
 
   
   },
   
    txt_Password: {
	
   required:true,
   equalTo: "#new_pass"
 
   
   }
  
   
   }, messages: {
	   
	   
	            old_pass: {
	   
				required: "*Old Password is Mandatory"
				
				},
				
				 new_pass: {
	   
				required: "*New Password is Mandatory",
				
				},
				
				txt_Password: {
	
                required: "*Confirm Password is Mandatory"
   
                }
				
			
}



});



$.validator.addMethod('mypassword', function(value, element) {
        return this.optional(element) || (value.match(/[a-zA-Z]/) && value.match(/[0-9]/));
    },
    'Password must contain at least one numeric and one alphabetic character.');
	
	
	
	//update profile
	
	$("#up_prof").validate({



rules: {
	
	 nme: {
		   
   required:true,
   lettersonly: true
 
   },
   
    age: {
	   
   required:true,
   number:true
 
   
   },
   
    state: {
	   
   required:true,
   lettersonly: true
 
   
   },
   
   city: {
	   
   required:true,
   lettersonly: true
 
   
   },
   
    address: {
	   
   required:true
  
   },
   
   phone: {
	   
   required:true,
   number:true,
   minlength: 10
 
   
   },
	
	
   email_id: {
	   
   email:true,
   required:true
 
   
   }
  
   
   }, messages: {
	   
	   
	   nme: {
	   
				required: "*Name is Mandatory"
				
				},
				
				age: {
	   
				required: "*Age is Mandatory"
				
				},
				
				state: {
	   
				required: "*State is Mandatory"
				
				},
				
				city: {
	   
				required: "*City is Mandatory"
				
				},
				
				address: {
	   
				required: "*Address is Mandatory"
				
				},
				
				phone: {
	   
				required: "*Address is Mandatory"
				
				},
	   
	            email_id: {
	   
	            email: "* Enter the valid Email",
				required: "*Email Id  is Mandatory"
				
				}
				
			
}



});
	
	
jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-z]+$/i.test(value);
}, "Letters only please"); 



	
	
	
	$("#userpic").change(function ()
    {
      var videoTypePattern=new RegExp("video");
      var imageTypePattern=new RegExp("image");
      file=this.files[0];
      if(videoTypePattern.test(file.type))
      {
        fileUrl=URL.createObjectURL(file);
        $("#mediaDiv").html("<video id='vid' controls height='300px' width='600px'></video>");
        $("#vid").prop("src",fileUrl);

      }
      else if(imageTypePattern.test(file.type))
      {
        fileUrl=URL.createObjectURL(file);
        $("#mediaDiv").html("<img id='img' height='300px' width='600px'></img>");
        $("#img").prop("src",fileUrl);
      }
    });


$('#pop').click( function() {			
			loadPopupBox();
		});
		
		
		$('#popupBoxClose').click( function() {			
			unloadPopupBox();
		});

		function unloadPopupBox() {	
		
		// TO Unload the Popupbox
			$('#pop_cont').fadeOut("slow");
			$("#container").css({ // this is just for style		
				"opacity": "1"  
			}); 
		}	
		
		function loadPopupBox() {
			
			var a=$("#pop").text();
			// To Load the Popupbox
			$('#pop_cont').fadeIn("fast");
			$("#container").css({ // this is just for style*
				 
			}); 
			

		}
		
		$("#showHide").click(function() {
		if ($("#txt_Password").attr("type")=="password") {
			$("#txt_Password").attr("type", "text");
		} else {
			$("#txt_Password").attr("type", "password");
		}
	})
	
	$("#shownewHide").click(function() {
		if ($("#new_pass").attr("type")=="password") {
			$("#new_pass").attr("type", "text");
		} else {
			$("#new_pass").attr("type", "password");
		}
	})
	
	$("#showoldHide").click(function() {
		if ($("#old_pass").attr("type")=="password") {
			$("#old_pass").attr("type", "text");
		} else {
			$("#old_pass").attr("type", "password");
		}
	})
	
	//image upload
	
	$('#profile-image').on('click', function() {
    $('#profile-image-upload').click();
});








});

</script>








<style>
		/* popup_box DIV-Styles*/
#pop_cont { 
	display:none; /* Hide the DIV */
	position:fixed;  
	_position:absolute; /* hack for internet explorer 6 */  
	height:200px;  
	width:600px;  
	background:#FFFFFF;  
	left: 300px;
	top: 150px;
	z-index:100; /* Layering ( on-top of others), if you have lots of layers: I just maximized, you can change it yourself */
	margin-left: 15px;  
	
	/* additional features, can be omitted */
	border:2px solid #FF00FF;  	
	padding:15px;  
	font-size:15px;  
	-moz-box-shadow: 0 0 5px #000000;
	-webkit-box-shadow: 0 0 5px #000000;
	box-shadow: 0 0 5px #000000;
	
}

#container {
	background: #d2d2d2; /*Sample*/
	width:100%;
	position:relative;
	height:100%;
}

a{  
cursor: pointer;  
text-decoration:none;  
} 

/* This is for the positioning of the Close Link */
#popupBoxClose {
	font-size:20px;  
	line-height:15px;  
	right:5px;  
	top:5px;  
	position:absolute;  
	color:#6fa5e2;  
	font-weight:500;  	
}

img:hover {
    width: 300px;
}


</style>






<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<!-- js for banner -->
<script src="js/index.js"></script>
<!-- js for banner -->
<!-- js for skill section -->
<script src="js/progressbar.js"></script>
<script>
    // Display the progress bar calling progressbar.js
	$('.progressbarPhp').progressBar({
		shadow : true,
		percentage : false,
		animation : true,
		animateTarget : true,
		barColor : "rgb(51,122,183)",
	});
	//Menu
	$(".spinDown").click(function() {
		var target = $(this).data("target");
		var scrollFix = -80;
		target = "#" + target;
		$("html,body").animate({
			scrollTop : $(target).offset().top + scrollFix
		}, 1000);
		return false;
	});
</script>
<!-- /js for skill section -->
<!-- js for portfolio section -->
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpGridGallery.js"></script>
<script>
	new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
</script>
<!-- js for portfolio section -->
<!-- js for smooth scrolling -->
<!-- Jquery Validate.js  -->

<script>
$(document).ready(function(){
	
	
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 900, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
    });
  });
})



</script>


<script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>
<!-- /js for sliding animations -->
<!-- js for back to top -->
<script src="js/main.js"></script>


<style>

label.error {

          color:red;
		  display:inline-flexbox;
		  position: absolute;
		  }
		  
		  
</style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!-- navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php" style="margin-top:-20px; color:#20B2AA"><h1>AD-SECURE</h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#slider">Home</a></li>
                <li><a href="#add_manager">Add Managers</a></li>
				<li><a href="#view_file">View Users</a></li>
				<li><a href="#download">View Managers</a></li>
			<!--<li><a href="#change_password1">View Files</a></li>-->
				<li><a href="#change_password">Change Password</a></li>
                <li><a href="#profile">View Files</a></li>
				<li><a href="log_out.php">Sign Out</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    

<!-- /about section -->
<!-- /navigation -->
<!-- banner section -->
<section  class="content">


	<ul class="slider-wrapper" style="background-image: url(images/banner3.jpg)">
		<li class="current-slide">
			<div id="container">
<div id="pop_cont" style="overflow:auto; border-color:#000;">
<center><h3 style="color: #06F">Enter the Secret Key</h3></center>


</div>
</div>


		</li>
		
		
	</ul>
	<div class="slider-shadow"></div>
	<ul id="control-buttons" class="control-buttons"></ul>
</section>
<!-- /banner section -->
<!-- about section -->


<section class="our-skills slideanim" id="view_file">
	<!--<h3 class="text-center slideanim">Registration Form</h3>-->
 
	<div class="container">
    <div class="navi">
<center><h2 style="color:#FFF">View Users</h2></center><br />

<div class="form-group has-feedback">
 
  <label style="color: #FFF">Enter the User Id:</label>&nbsp;&nbsp;<input type="text" id="search_box" style="font-weight:bold" onkeyup="search_item()" class="input-lg " placeholder="Username" />
    <i style="color: #FFF" class="glyphicon glyphicon-search feedback"></i>
</div><br /><br /><br /><br />
<div class="table-responsive" style="background-color:white;" id="mydiv">
  <table id="employee_data" style="color:black;"  class="table table-bordered">
  <thead>
    <tr style="color: #0CF">
	<th>User Id</th>
    <th>Name</th>
    <th>Age</th>
    <th>State</th>
    <th>City</th>
    <th>Address</th>
    <th>Gender</th>
    <th>Phone</th>
    <th>Email Id</th>
    <th>Profile Picture</th>
    </tr>
	</thead>
                          <?php
							require('../connection.php');
							include_once "function.php";
							
							if(isset($_GET["page"]))
							$page = (int)$_GET["page"];
							else
							$page = 1;

							$setLimit = 4;
							$pageLimit = ($page * $setLimit) - $setLimit;



$uid=$_SESSION['admin_id'];
$res="select * from tb_user order by user_id asc LIMIT ".$pageLimit." , ".$setLimit;

$result=$con->query($res);
$count=$result->num_rows;

if($count>0){

while($row=$result->fetch_assoc()){

$user_id=$row['user_id'];
$name=$row['Name'];
$age=$row['Age'];
$state=$row['State'];
$city=$row['City'];
$address=$row['Address'];
$gender=$row['Gender'];
$phone=$row['Phone'];
$email_id=$row['Email_id'];
$profile_pic=$row['profile_pic'];
?> 

<tr>
<td><?php echo $user_id;  ?></td>
<td><?php echo $name;  ?></td>
<td><?php echo $age;  ?></td>
<td><?php echo $state;  ?></td>
<td><?php echo $city;  ?></td>
<td><?php echo $address;  ?></td>
<td><?php echo $gender;  ?></td>
<td><?php echo $phone;  ?></td>
<td><?php echo $email_id;  ?></td>

<td><img src="<?php echo "../userpic/".$profile_pic ?>" class="img-responsive" width="50" height="50" id="im" /></td>

</tr>

<?php
}
}
else{
	
echo "No Results..";	
}
?>	
      </table>   
</div>	  
      <?php
					
				
	// Call the Pagination Function to load Pagination.

	//echo displayPaginationBelow($setLimit,$page);
	?> </div>
    </div>
                
</section>

<!-- service section -->
<section class="our-services" id="download">
	
	<div class="container">
    <div class="navi">
<center><h2 style="color: #000">View Managers</h2></center><br />

<div class="form-group has-feedback">
 
    <!--<label style="color: #000">Enter the Manager Id:</label>&nbsp;&nbsp;<input type="text" id="search_box1" style="font-weight:bold" onkeyup="search_manager()" class="input-lg " placeholder="Username" />
    <i style="color: #FFF" class="glyphicon glyphicon-search feedback"></i>-->
</div><br /><br /><br /><br />
<div class="table-responsive">
  <table id="employee_data1" style="background-color:black"  class="table table-bordered">
  <thead>
    <tr style="color: #0CF">
	<th>Manager Id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Age</th>
    <th>State</th>
    <th>Country</th>
    <th>City</th>
    <th>Address</th>
    <th>Email Id</th>
    <th>Phone</th>
    <th>Gender</th>
    </tr>
	</thead>
                          <?php
							require('../connection.php');
							include_once "function.php";
							
							if(isset($_GET["page"]))
	                $page = (int)$_GET["page"];
	                else
	                $page = 1;

	                $setLimit = 4;
	                $pageLimit = ($page * $setLimit) - $setLimit;



$uid=$_SESSION['admin_id'];
$res="select * from tb_manager";

$result=$con->query($res);
$count=$result->num_rows;

if($count>0){

while($row=$result->fetch_assoc()){
	
$manager_id=$row['manager_id'];
$name=$row['First_Name'];
$lname=$row['Last_Name'];
$age=$row['Age'];
$state=$row['State'];
$country=$row['Country'];
$city=$row['City'];
$address=$row['Address'];
$email_id=$row['Email_Id'];
$phone=$row['Phone'];
$gender=$row['Gender'];
?> 

<tr style="color: #FFF ">
<td><?php echo $manager_id;  ?></td>
<td><?php echo $name;  ?></td>
<td><?php echo $lname;  ?></td>
<td><?php echo $age;  ?></td>
<td><?php echo $state;  ?></td>
<td><?php echo $country;  ?></td>
<td><?php echo $city;  ?></td>
<td><?php echo $address;  ?></td>
<td><?php echo $email_id;  ?></td>
<td><?php echo $phone;  ?></td>
<td><?php echo $gender;  ?></td>

</tr>

<?php
}
}
else{
	
echo "No Results..";	
}
?>	
      </table>   
</div>	  
      <?php
					
				
	// Call the Pagination Function to load Pagination.

	//echo displayPaginationBelow($setLimit,$page);
	?> </div>
    </div>
  	
</section>
<!-- /service section -->

<!-- portfolio section -->
<section class="our-portfolio slideanim" id="change_password">
	<h3 class="text-center slideanim">Change Password</h3>
	<!--<p class="text-center slideanim">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
	<div class="container">
		<div id="grid-gallery" class="grid-gallery">
       

<form action="password_action.php" id="chg_pass" method="post">
					<div class="row">
						<div class="col-sm-12 ">
							<center><label style="color:#FFF">Old Password:</label><input class="input-lg" style="font-weight:bold" id="old_pass" name="old_pass"  type="password"><i style="color:#FFF" id="showoldHide" class="glyphicon glyphicon-eye-open"></i>
        
						</div>
					</div><br>
					<div class="row">
						<div class="col-sm-12 ">
							<center><label style="color:#FFF">New Password:</label><input class="input-lg" style="font-weight:bold" id="new_pass" name="new_pass"  type="password"><i style="color:#FFF" id="shownewHide" class="glyphicon glyphicon-eye-open"></i>
        
						</div>
					</div><br>
                    
                    <div class="row">
						<div class="col-sm-12 ">
							<center><label style="color:#FFF">Confirm Password:</label><input class="input-lg" style="font-weight:bold" id="txt_Password" name="txt_Password"  type="password"><i style="color:#FFF" id="showHide" class="glyphicon glyphicon-eye-open"></i>
		</span></center>
						</div>
					</div><br /><br />
                    <div class="row">
						<div class="col-sm-12 ">
					<center><input type="submit" class="btn btn-primary" value="Change Password"></center><br>
                    
                    </div>
                    </div>
                    				</form>	
			
		</div>	
	</div>
</section>	
<!-- portfolio section -->

<section class="our-services" id="add_manager">
	
	<div class="container">
    <div class="navi">

<div class="form-group has-feedback">
 
    <center>
 <h3 style="color: #000">Registration Form</h3><br /><br />
    <form id="manager_form" action="managerreg_action.php" method="post">
  
  
					<label style="color: #000">First Name:</label>
                    <div class="row">
						<div class="col-sm-12 form-group">
							<input class="input-lg" id="fname" style="font-weight:bold" name="fname" placeholder="Name" type="text" >
						</div>
					</div>
                    
                    
                    <label style="color: #000">Last Name:</label>
                    <div class="row">
						<div class="col-sm-12 form-group">
							<input class="input-lg" id="lname" style="font-weight:bold" name="lname" placeholder="Name" type="text" >
						</div>
					</div>
                    
                    <label style="color: #000">Age:</label>
					<div class="row">
						<div class="col-sm-12 form-group">
							<input class="input-lg" id="age" name="age" style="font-weight:bold" placeholder="Age" type="text" >
						</div>
					</div>
                    
                    <label style="color: #000">Address:</label>
                    <div class="row">
						<div class="col-sm-12 form-group">
					<textarea class="input-lg" id="address" name="address" style="font-weight:bold" placeholder="Address" rows="5"></textarea><br><br>
					</div>
					</div>
                    
                    <label style="color: #000">State:</label>
					<div class="row email-bar">
						<div class="col-sm-12 form-group">
							<input class="input-lg" id="state" name="state" style="font-weight:bold" placeholder="State" type="text" >
						</div>
					</div>
					
					<label style="color: #000"style="color:#FFF">City:</label>
					<div class="row email-bar">
						<div class="col-sm-12 form-group slideanim">
							<input class="input-lg" id="city" name="city" style="font-weight:bold" placeholder="City" type="text" >
						</div>
					</div>
                    
                    <label style="color: #000">Country:</label>
					<div class="row email-bar">
						<div class="col-sm-12 form-group">
							<input class="input-lg" id="country" name="country" style="font-weight:bold" placeholder="Country" type="text" >
						</div>
					</div><br />
					
					<label style="color: #000">Male:</label>
                    <div class="row email-bar" style="color:#FFF">
						<div class="col-sm-12 form-group">
							<input class="input-lg" id="male" value="Male" name="gen" style="font-weight:bold"  type="radio" ><br>
						</div>
					</div>
                    
                    <label style="color: #000"style="color:#FFF">Female:</label>
                    <div class="row email-bar" style="color:#FFF">
						<div class="col-sm-12 form-group slideanim">
							<input class="input-lg" id="female" value="Female" style="font-weight:bold" name="gen"  type="radio" >
						</div>
					</div><br />
					
                    <label style="color: #000">Phone:</label>
                    <div class="row email-bar">
						<div class="col-sm-12 form-group">
							<input class="input-lg" id="phone" style="font-weight:bold" name="phone" placeholder="Phone" type="text" >
						</div>
					</div>
                    
                    <label style="color: #000">Email Id:</label>
                    <div class="row email-bar">
						<div class="col-sm-12 form-group">
							<input class="input-lg" id="email_id" style="font-weight:bold" name="email_id" placeholder="Email Id" type="text" >
						</div>
					</div>
                    
                    <label style="color: #000">Password:</label>
                    <div class="row email-bar">
						<div class="col-sm-12 form-group">
							<input class="input-lg" id="pass" style="font-weight:bold" maxlength="15" name="password" placeholder="Password" type="password" >
						</div>
					</div>
                    
                    
                     <label style="color: #000">Confirm Password:</label>
                    <div class="row email-bar">
						<div class="col-sm-12 form-group">
							<input class="input-lg" id="conpassword" style="font-weight:bold" name="conpassword" placeholder="Confirm Password" type="password" >
						</div>
					</div><br />
					
					<div class="row email-bar">
						<div class="col-sm-12 form-group">
							<button class="btn  btn-danger btn-lg" type="submit">Sign Up</button>
						</div>
					</div>
				</form>
                </center> </div>
    </div>
  	
</section>

<!-- team section -->
<section class="our-team" id="profile">
	<h3 class="text-center slideanim">View Files</h3>
	<div class="container">
		<div class="main">
        
            <?php
			require('../connection.php');
			
			/*function decryptIt( $q ) {
	
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return( $qDecoded );
}*/
			
			//$user_id=$_SESSION['user_id'];
			
			$result=$con->query("select * from sent_file");
			
			$count=$result->num_rows;
		
			if($count>0)
			{
				?>
				 <label style="color: black">Enter the User Id:</label>&nbsp;&nbsp;<input type="text" id="search_boxfil" style="font-weight:bold" onkeyup="search_file()" class="input-lg " placeholder="Username" />
    <i style="color: black" class="glyphicon glyphicon-search feedback"></i> &nbsp;&nbsp;<label style="color: black">Enter the Manager Id:</label>&nbsp;&nbsp;<input type="text" id="search_boxfilman" style="font-weight:bold" onkeyup="search_fileman()" class="input-lg " placeholder="Username" />
    <i style="color: black" class="glyphicon glyphicon-search feedback"></i>
				<div class="table-responsive" id="mydivfileman">
                <table id="employee_data2" style="background-color:black"  class="table table-bordered">
				<thead>
    <tr style="color: #0CF">
    <th>Description</th>
    <th>Video_file</th>
    <th>Manager Id</th>
    <th>User Id</th>
    </tr>
           </thead>     
                
                <?php
				
				while($row=$result->fetch_assoc())
				{
					
					
				
				$description=$row['description'];
				$video_file=$row['video_file'];
				//$file = decryptIt($video_file);
				$manager_id=$row['manager_id'];
				$user_id=$row['user_id'];
				
			
			?>
            <tr style="color: #FFF ">
<td><?php echo $description;  ?></td>
<td><a href="download_file.php?file=<?php echo $video_file;    ?>"><video src="../manager/video_file/<?php echo $video_file;  ?>"  controls width="200" height="200"></video></a></td>
<td><?php echo $manager_id;  ?></td>
<td><?php echo $user_id;  ?></td>

</tr>

                <!--<div class="mask">
                    <h4>Johnny Cage</h4>
						<ul class="social-icons1">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
                    <a href="#" class="info">Founder</a>
                </div>-->
                <?php
			}
			}
			else{
			    echo "No Results";
			}
			?>
         </table>
</div>
            
        </div>
	</div>
</section>
<!-- /team section -->


<!-- service section -->

<!-- Footer Section -->


<br /><br /><br><br />

<!--<section class="footer" id="foot">
	<div class="container">
		<div class="copyright">
			<p>&copy; 2016 Clientele. All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts </a></p>
		</div>
	</div>
</section>-->
<!-- /Footer Section -->
<!-- back to top -->
<a href="#0" class="cd-top">Top</a>
<!-- /js files -->
<script>  
 $(document).ready(function(){ 


      $('#employee_data').DataTable();  
	  $('#employee_data1').DataTable(); 
	  $('#employee_data2').DataTable(); 
 });  
  
 </script>
 <section class="footer">
	<div class="container">
		<div class="copyright">
			<p>&copy; 2019 AD-SECURE. All Rights Reserved | Design by <a href="http://www.girafficinfoworld.com/"> Giraffic Info World </a></p>
		</div>
	</div>
</section>
</body>
</html>
<?php

if(isset($_REQUEST['result']))
{

if($_REQUEST['result']=='success')
{
   echo "<script>reset();
alertify.alert('Registration Successfully');</script>";	
}
}


if(isset($_REQUEST['result']))
{

if($_REQUEST['result']=='already')
{
   echo "<script>reset();
alertify.alert('Email Id already exist');</script>";	
}
}


if(isset($_REQUEST['result']))
{

if($_REQUEST['result']=='failed')
{
   echo "<script>reset();
alertify.alert('Registration Failed..Please Try Again later..');</script>";	
}
}

if(isset($_REQUEST['result']))
{

if($_REQUEST['result']=='logfail')
{
   echo "<script>reset();
alertify.alert('Please Try Again Later..');</script>";	
}
}

if(isset($_REQUEST['result']))
{

if($_REQUEST['result']=='chgsucess')
{
   echo "<script>reset();
alertify.alert('Changed the Password Successfully..');</script>";	
}
}

if(isset($_REQUEST['result']))
{

if($_REQUEST['result']=='chgfail')
{
   echo "<script>reset();
alertify.alert('Please try again later or please enter the correct old password..');</script>";	
}
}

if(isset($_REQUEST['result']))
{

if($_REQUEST['result']=='prof_success')
{
   echo "<script>reset();
alertify.alert('Change the Profile Picture Successfully..');</script>";	
}
}


if(isset($_REQUEST['result']))
{

if($_REQUEST['result']=='upsuccess')
{
   echo "<script>reset();
alertify.alert('Update the Profile Successfully..');</script>";	
}
}

if(isset($_REQUEST['result']))
{

if($_REQUEST['result']=='upfailed')
{
   echo "<script>reset();
alertify.alert('Update the Profile Failed..Please Try again later');</script>";	
}
}






if(isset($_REQUEST['result']))
{

if($_REQUEST['result']=='manager_success')
{
   echo "<script>reset();
alertify.alert('Registration Successfully');</script>";	
}
}


if(isset($_REQUEST['result']))
{

if($_REQUEST['result']=='manager_already')
{
   echo "<script>reset();
alertify.alert('Email Id already exist');</script>";	
}
}


if(isset($_REQUEST['result']))
{

if($_REQUEST['result']=='manager_failed')
{
   echo "<script>reset();
alertify.alert('Registration Failed..Please Try Again later..');</script>";	
}
}


if(isset($_REQUEST['result']))
{

if($_REQUEST['result']=='chgsucess')
{
   echo "<script>reset();
alertify.alert('Changed the Password Successfully..');</script>";	
}
}

if(isset($_REQUEST['result']))
{

if($_REQUEST['result']=='chgfail')
{
   echo "<script>reset();
alertify.alert('Please try again later or please enter the correct old password..');</script>";	
}
}


?>