<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>

<head>    
    <title>Jotorres Login Screen | Welcome </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
body,td,th {
	font-family: Verdana, Geneva, sans-serif;
}
</style>
</head>
<body bgcolor="#003366">
    <div id='login_form'>
    <?php if (!empty($msg)) {
        echo $msg;
    } ?>
        <form action="<?php echo site_url('login/process') ?>" method='post' name='process'>
          <p><strong>Welcome to the HR Management System</strong></p>
          <p>&nbsp;</p>
          <p>Please enter your username and password
          </p>
          <div align="center"><br />
              
            </div>
            <label for='username'>
              <div align="center"></div>
            </label>
            <div align="center">Username
              <input type='text' name='username' id='username' size='25' />
              <br />
              
            </div>
            <label for='password'>
              <div align="center"></div>
            </label>
            <div align="center">
              <p>Password
                <input type='password' name='password' id='password' size='32' />
                <br />                            
              </p>
              <p>&nbsp;</p>
              <p>
                <input type='Submit' value='Login' />
              </p>
          </div>
        </form>
    </div>
    <div align="center"></div>
</body>
</html>