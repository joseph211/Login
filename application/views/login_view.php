<!DOCTYPE html>

<html lan="en">

<head>
<title>Login Form</title>
 <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>

<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">


</head>

<body>
<div id="main">
<div id="login">
<h2><img     src="<?php echo base_url('img/i.png');?>" width="100px" height="100px"></h2>
<hr/>
  <form action="<?php echo site_url('login/auth');?>" method="post">
<?php echo $this->session->flashdata('msg');?><br />
<label>UserName :</label>
<input type="email" name="email" id="name" required autofocus placeholder="Enter Email"/ ><br /><br />

<label>Password :</label>
<input type="password" name="password" id="password" placeholder="Enter Password"/ required autofocus ><br/><br />

<input type="submit" value=" Login " name="submit"/><br />
<label class="form-check-label">
<input type="checkbox"  name="remember"> Remember me
 </label><br />



</form>
</div>
</div>
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>