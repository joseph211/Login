<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
     
     <link href="<?php echo base_url('assets/css/mdb/css/bootstrap.css');?>" rel="stylesheet"> 

        <link href="<?php echo base_url('assets/css/mdb/css/bootstrap.css');?>" rel="stylesheet"> 
           <link href="<?php echo base_url('assets/css/mdb/css/mdb.min.css');?>" rel="stylesheet"> 
  </head>
  <body>
    
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
  <a class="navbar-brand" href="#"><img     src="<?php echo base_url('img/i.png');?>" width="40px" height="60px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    	<!--ACCESS MENUS FOR ADMIN-->
                <?php if($this->session->userdata('level')==='1'):?>
                  <li class="nav-item active"><a class="nav-link" href="<?php echo base_url('index.php/page');?>">Dashboard <span class="sr-only">(current)</span></a></li>
                  

      
      
      
      <!--ACCESS MENUS FOR STAFF-->
                <?php elseif($this->session->userdata('level')==='2'):?>
                  <li class="nav-item active"><a class="nav-link" href="<?php echo base_url('index.php/page');?>">Dashboard <span class="sr-only">(current)</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Pages</a></li>
                  
                <!--ACCESS MENUS FOR Student-->
                <?php else:?>
                  <li class="nav-item active"><a class="nav-link" href="#">Dashboard</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Posts</a></li>
                <?php endif;?>
              </ul>
     
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
    	<li class="nav-item">
        <p class="nav-link " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $this->session->userdata('username');?>
        </p>
    	
    </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-item" href="<?php echo site_url('login/logout');?>"> Sign Out </a>
                </li>
              </ul>
            </div>
     
  </div>
</nav>
    
  
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>