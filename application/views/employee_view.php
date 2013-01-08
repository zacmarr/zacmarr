<html>
<head><title>Search</title>
<meta charset="UTF-8">
    <style>
        * {
            font-family: Arial;
            font-size: 12px;
        }
        table {
            border-collapse: collapse;
        }
        td, th {
            border: 1px solid #666666;
            padding:  4px;
        }
        div {
            margin: 4px;
        }
        .sort_asc:after {
            content: "▲";
        }
        .sort_desc:after {
            content: "▼";
        }
    body,td,th {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
	font-size: 16px;
}
body {
	background-color: #036;
}
    </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<div = header>
  <div align="left"><strong> </strong><a href="<?php echo site_url('home/do_logout')?>"><font color="red">Logout</font></a></div>
</div>
<form action="<?php echo site_url('home/search')?>" id="searchform" method="GET" >
   
<p>Search Employee</p>
         
          <p>
            <label >Employee Number: </label>
            <input type= "text" name="emp_no">
</p>
          <p>Date of Birth :     
            <input type= "text" name="birth_date">
</p>
  <p>
            
            <label >First Name </label>
            <input type= "text" name="first_name">
 </p>
  <p>
            
            <label >Last Name</label>
<input type= "text" name="last_name">
            <input type= "submit" name="submit">
     </p>
</form>
<table width="531">  
    <thead>
    
    <th>Employee Number</th>
    <th>DoB</th>
    <th>First Name</th>
    <th>Last Name</th>    
    </thead>
    
    <tbody> 
     
    <?php foreach($query as $employee):?>
            <tr>
                <td><?php echo ($employee->emp_no); ?> </td>  
                <td><?php echo ($employee->birth_date); ?> </td>                    
                <td><?php echo ($employee->first_name); ?> </td>                    
                <td><?php echo ($employee->last_name); ?> </td>
                
             <?php endforeach; ?> 
            </tr>
                      
     </tbody>  
        
</table>        
   </body>
</html>