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
          <div align="left"><a href="<?php echo site_url('home/delete_post')?>"><b>Delete Employee</b></a></div>
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
   <form action="<?php echo site_url('home/add_main')?>" method="post">
 
 <div class="control-group"> 
 <label class="control-group"> Employee Number:  </label>
 <div class="controls"> <input type="text" id="emp_no" name="emp_no" value=""/></div>
 </div>
 
<div class="control-group"> 
<label class="control-group"> Birth Date: </label>
<div class="controls"> <input type="text" id="birth_date" name="birth_date" value=""/></div>
</div>

<div class="control-group"> 
<label class="control-group"> First Name: </label>
<div class="controls"> <input type="text" id="first_name" name="first_name" value=""/></div>
</div>

<div class="control-group"> 
<label class="control-group"> Last Name: </label>
<div class="controls"> <input type="text" id="last_name" name="last_name" value=""/></div>
</div>

<div class="control-group"> 
<label class="control-group"> Gender: </label>
<div class="controls"> <input type="text" id="gender" name="gender" value=""/></div>
</div>

<div class="control-group"> 
<label class="control-group"> Hire Date: </label>
<div class="controls"> <input type="text" id="hire_date" name="hire_date" value=""/></div>
</div>
<!--
<div class="control-group"> 
<label class="control-group"> From Date: </label>
<div class="controls"> <input type="text" id="from_date" name="from_date" value=""/></div>
</div>

<div class="control-group"> 
<label class="control-group"> To Date: </label>
<div class="controls"> <input type="text" id="to_date" name="to_date" value=""/></div>
</div>
     -->
<div class="control-group"> 
<label class="control-group"> Department No: </label>
<div class="controls"> <input type="text" id="dept_no" name="dept_no" value=""/></div>
</div>

 
 <div class="controls"> <input type= "submit" name="Add"></div>
 

 
 
 </form>
 

        <br/>
        <div id="footer">
         <div id="navbar"> 
  
</div> 
        </div>       
   </body>
</html>