<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cofounder extends CI_Controller{
  public function index()
  {
    $this->load->helper('url');
    $this->load->view("client_header");
    $this->load->view("index");
    $this->load->view("client_footer");
  }
	public function client_login()
  {
    $f=2;
    $this->load->helper('url');
   $this->load->view("client_header");
    $this->load->view("client_login");
  $this->load->view("client_footer");
  if(isset($_POST['submit']))
  {
     $this->load->model("Startupm");

    $f=$this->Startupm->login();

  }
  if($f==1)
  {
    
    //  $this->load->library('Admin.php');
    // $this->Admin->index();
    //$base=base_url()."index.php/Admin/index";
    $this->load->helper('url');
    $url= site_url("Admin/index");
    // echo $base;

header('Location:'.$url);
    // include(APPPATH.'controllers\Admin.php'); 
    // $adm =  new Admin();
    // $adm->index();
  }
  else if($f==0)
  {
    echo "login failed";
  }

  }
	public function startupreg()
	{ 
     
    $this->load->helper('url');
   $this->load->view("client_header");
    $this->load->view("startup_reg");
  $this->load->view("client_footer");
    if(isset($_POST['submit']))
    {
     
    $this->load->model("Startupm");

    $this->Startupm->startup();
    
  }

   // $this->load->view("client_footer");

	}
 //  public function startreg()
 //  { 
 //     $this->load->helper('form');
 // $this->load->helper('url');
 //   $this->load->view("client_header");
 //    $this->load->view("mentor_reg");
 //    $this->load->view("client_footer");
 //    if(isset($_POST['submit']))
 //    {
     
 //    $this->load->model("Startupm");

 //    $this->Startupm->mentor();
    
 //  }

 //  }
	public function valid()
	{
		$email=$_POST['email'];
		$this->load->model("Startupm");
		$this->Startupm->selectemail($email);
		
	}
  public function mentorreg()
  {
    $this->load->library('email'); 
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->view("client_header");
    $this->load->view("mentor_reg");
    $this->load->view("client_footer");
    if(isset($_POST['submit']))
    {
     
      $this->load->model("Startupm");
      $this->Startupm->mentor();
    }

  }
	public function testimonial()
	{ 
    $this->load->view("client_header");
		$this->load->view("testimonial");
	  if(isset($_POST['submit']))
    {
     
      $this->load->model("Startupm");
      $this->Startupm->testmonialreg();
    
    }
    $this->load->view("client_footer");
  }
    //auto co
   public function searchcity()
  {

    $this->load->model('Startupm');
    if (isset($_GET['term'])){
      $q = strtolower($_GET['term']);
      $this->Startupm->searchcity($q);
    }
  }
public function ggg()
  { 

$this->load->view("frm_link");
  }
	


///freelancer
//   public function Login()
//  {
//   $this->load->view('client_header');
//   $this->load->view('frm_login');
  

//     $f=2;
//     $this->load->helper('url');
//    //$this->load->view("client_header");
//     //$this->load->view("client_login");
//   $this->load->view("client_footer");
//   if(isset($_POST['submit']))
//   {
//      $this->load->model('Cfmodel');
//   $f=$this->Cfmodel->login();
  

//   }
//   if($f==1)
//   {
//     echo "string";
// //     //  $this->load->library('Admin.php');
// //     // $this->Admin->index();
// //     //$base=base_url()."index.php/Admin/index";
//     $this->load->helper('url');
//    $url= site_url("Cofounder/freelancer");
// //     // echo $base;

//  header('Location:'.$url);
// //     // include(APPPATH.'controllers\Admin.php'); 
//     // $adm =  new Admin();
//     // $adm->index();
//   }
//   else if($f==0)
//   {
//     echo "login failed";
//   }

//   }
 
 public  function freelancer()//function to insert freelancer details
 {
  $this->load->helper('url');
  $this->load->helper('form');
  $this->load->view('client_header');
  $this->load->view('frm_freelancer');
  $this->load->view('client_footer');
  $this->load->model('Cfmodel');
  $this->Cfmodel->frlncinsert();  
 }
 public function company()//store company details
 {
   $this->load->view('client_header');
  $this->load->view('frm_company');
   $this->load->view('client_footer');
  $this->load->model('Cfmodel');
  $this->Cfmodel->companyinsert();
 }
 public function frequest()//insert freelancer request
 {
  $this->load->view('client_header');
  $this->load->view('frm_frequest');
  $this->load->model('Cfmodel');
  $this->Cfmodel->frequestinsert();
 }
 public function mail()//check email exist
 {
  //$this->load->view('testview');
  $this->load->model('Cfmodel');
  $this->Cfmodel->emailcheck();
 }
 public function freelancesearch()//search freelancer based on location
 {
  $this->load->model('Cfmodel');
  $data['h']=$this->Cfmodel->frelncsearch();
  $this->load->view('frmV_search',$data);
 }
 public function payment()
 {
  $this->load->view('testpay');
 }
 public function succes()
 {
  $this->load->view('success');
 }
 public function failure()
 {
  $this->load->view('failure');
 }
 public function frequestdetails()//freelance need by company
 {
   $this->load->database();
   $this->load->model('Cfmodel');
   $dat['h']=$this->Cfmodel->frlncrequestdetails();
   $this->load->view('frmV_companyfrlncrqst',$dat);
 }
 public function companydetails()// show the details of company
 {
    $this->load->database();
    $this->load->model('Cfmodel');
    $dat['h']=$this->Cfmodel->selectcompany();
    $this->load->view('frmV_viewcompany',$dat);
 }
 public function fdetails()// function to select the details of freelancer
    {
      
          $this->load->database();
          $this->load->model('Cfmodel');
          $dat['h']=$this->Cfmodel->aselectfreelance();
          $this->load->view('frmV_viewfreelancer',$dat);      
    }
  public function fedit($id) //function to edit the freelancer details
  {
          $this->load->model('Cfmodel');
        if($data['a']=$this->Cfmodel->feditng($id))
           {
            $this->load->view('frmV_freelancedit',$data);
           }
            else
            { 
              echo "err";
            }
          }
public function fupdate($id)// function to update the freelancer details
        {
          $this->load->model('Cfmodel');
            
              $this->Cfmodel->fupdatng($id);
              redirect('Cfcontroler/fdetails');
        } 
        public function auto()
        {
          $this->load->view('auto');
        }
  public function searchc()//search course;
  {
    $this->load->model('Cfmodel');
    if (isset($_GET['term'])){
      $q = strtolower($_GET['term']);
      $this->Cfmodel->searchng($q);
    }
  }
  public function searchdistrict()//search district;
  {
    $this->load->model('Cfmodel');
    if (isset($_GET['term'])){
      $q = strtolower($_GET['term']);
      $this->Cfmodel->searchdist($q);
    }
  }
  public function searchstream()//search stream;
  {
    $this->load->model('Cfmodel');
    if (isset($_GET['term'])){
      $q = strtolower($_GET['term']);
      $this->Cfmodel->searchstrm($q);
    }
  }
  /*public function csearch()
  {
      $this->load->view('auto');
     if(isset($_GET['course'])){
    $re=$this->Cfmodel->search($_GET['course']);
       if(count($re > 0))
       {
        foreach ($re as $c) {
           $dat[]=$c->Coursename;
          echo json_encode($dat);
            }
           } 
       }*/


}


?>