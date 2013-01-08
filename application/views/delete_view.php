<html>
<head><title>Search</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="<?php echo base_url();?>/css/bootstrap.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url();?>/css/table.css" type="text/css" media="screen" />
   <style type="text/css">
<!--
 #navbar ul { 
        margin: 0; 
        padding: 10px; 
        list-style-type: none; 
        text-align: center; 
        background-color: #000;
        font-family: sans-serif; 
        } 
 
#navbar ul li {  
        display: inline;
        font-family: sans-serif; 
        } 
 
#navbar ul li a {
	text-decoration: none;
	padding: .2em 5em;
	color: #093;
	background-color: #000;
	font-family: sans-serif;
        } 
 
#navbar ul li a:hover { 
        color: #000; 
        background-color: #fff;
        font-family: sans-serif; 
        }
#navbar label { 
font: 100;
color: white;
font-family: sans-serif; 
}
#Sform form { 
font: 100;
text-align: center;
color: green;
font-weight:bolder;
}
#Sform input {  
        font: 100;
        color: red;
        display:inline;
        font-weight: bolder;
        } 
   </style>

</head>
<body style="background-color: ##036;">
 <div id="header">
 <div id="navbar"> 
  <ul> 
        <li>
          <div align="left"><a href="<?php echo site_url('home/search')?>"><b>Home</b></a></div>
        </li> 
        <li>
          <div align="left"><a href="<?php echo site_url('home/add_post')?>"><b>Add Employee</b></a></div>
        </li> 
        <li>
          <div align="left"><a href="#"><b>Delete Employee</b></a></div>
        </li> 
        <li>
          <div align="left"><a href="#"><b>Update Employee</b></a></div>
        </li> 
        <li>
          <div align="left"><a href="<?php echo site_url('home/do_logout')?>"><font color="red">Logout</font></a></div>
        </li> 
  </ul> 
</div> 
 
 </div>
   <form action="<?php echo site_url('home/delete_main')?>" method="post">
 
 <div class="control-group"> 
 <label class="control-group"> Employee Number:  </label>
 <div class="controls"> <input type="text" id="emp_no" name="emp_no" value=""/></div>
 </div>
 
 <div class="controls"> <input type= "submit" name="submit"></div>
 

 
 
 </form>
 

        <br/>
        <div id="footer">
         <div id="navbar"> </div> 
        </div>       
   </body>
</html>