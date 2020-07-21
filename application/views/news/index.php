 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom styles -->
     <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <body>
<div class="row grow w-100">
    <div class="col-12  py-3">
        Home<hr>
    </div>
    <div class="col-4  py-3">
      
      <h2 class="text-left">MANAGE</h2><hr>
      <!--ACCESS MENUS FOR ADMIN-->
       <?php if($this->session->userdata('level')==='1'):?>
          <a class="nav-link" href="<?php echo base_url('index.php/insert_ctrl');?>">Announcements</a>
                <a class="nav-link" href="#">Projects Sessions</a>
                 <a class="nav-link" href="#">Previous Projects</a>
                <a class="nav-link" href="#">Project Proposals</a>
                  <a class="nav-link" href="#">Project Reports</a>
                    
                 <a class="nav-link" href="#">Attendance Reports</a>
                 <a class="nav-link" href="#">Students Results</a>  


         <!--ACCESS MENUS FOR STAFF-->
                <?php elseif($this->session->userdata('level')==='2'):?>
                   <a class="nav-link" href="<?php echo base_url('index.php/insert_ctrl');?>">Project Ideas</a>
                <a class="nav-link" href="#">Projects Proposals</a>
                 <a class="nav-link" href="#">Project Reports</a>
                <a class="nav-link" href="#">Attendances</a>
                  <a class="nav-link" href="#">Oral Presentation Evaluation</a>
                  <a class="nav-link" href="#">Reports Marking</a>
                  <a class="nav-link" href="#">Students Performance</a>
               <?php endif;?>
    </div>
    <div class="main col-8  h-100 py-3">
      <div class="bg-warning">
        <h4>WELCOME</h4>
        <p>Project Management System(PMS) is the web-based system for the Modern electronic way of managing undergraduate final year projects</p>
        </div>
        
          <h2><?php echo $title; ?></h2>
<?php foreach ($announcement as $news_item): ?>
  
      <h3><?php echo $news_item['title']; ?></h3>
       <div class="main">
          
                <?php echo $news_item['publishDate']; ?>
            </div>
    
      <p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">more</a></p>



<?php endforeach; ?>
        </p> 
        </div>
</div>

</div>





</div>
</body>
