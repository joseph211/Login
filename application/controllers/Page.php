<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('news_model');
    $this->load->helper('url_helper');
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
  }
 
  public function index(){
    $data['announcement'] = $this->news_model->get_news();
         $data['title'] = 'Announcements <hr style= "align:left">';
    //Allowing acceses to admin onl ?>
        <?php
      if($this->session->userdata('level')==='1'){

         

     
          $this->load->view('dashboard_view',$data);
          $this->load->view('news/index', $data);
          $this->load->view('templates/footer');
      }else{
          echo "Access Denied";
      }
    }
     function view($slug = NULL)
        {

        $data['news_item'] = $this->news_model->get_news($slug);

          if (empty($data['news_item']))
        {
                show_404();
        }

        $data['title'] = $data['news_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer');
        
        }
 
  
 
  function staff(){
    //Allowing accceses to staff only
    if($this->session->userdata('level')==='2'){
      $this->load->view('dashboard_view');
    }else{
        echo "Access Denied";
    }
  }
 
  function author(){
    //Allowing akses to author only
    if($this->session->userdata('level')==='3'){
      $this->load->view('dashboard_view');
    }else{
        echo "Access Denied";
    }
  }
 
}