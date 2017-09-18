<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
  
//admin part
public function index()
  {

 $this->load->helper('url');
    $this->load->view('admin_header');
   // $this->load->view('admin_index');
$this->load->view('admin_footer');
}
public function requst_admin()
{
  $this->load->helper('url');
    $this->load->view('admin_header');
   

  $this->load->model("Startupm");
  //storing data from select to data[]
  $data['query'] = $this->Startupm->select();
  $this->load->view('startup_request', $data);
  //calling more details
  if(isset($_POST['more']))
    {
      $id=$_POST['id'];
      $this->db->select('duration_period');
            $query = $this->db->get('tbl_duration');
            $dur=$query->result();
      for($i=0;$i<count($data['query']);$i++)
      {

        if($data['query'][$i]->reg_id==$id)
         {
          $dat['reg_id']=$data['query'][$i]->reg_id;
          $dat['amob']=$data['query'][$i]->reg_alternate_mobile_no;
          $dat['address']=$data['query'][$i]->start_up_address;
          $dat['count']=$data['query'][$i]->start_up_no_of_people;
          $dat['level']=$data['query'][$i]->start_up_current_level;
          $dat['idea']=$data['query'][$i]->start_up_idea;
          $dat['desc']=$data['query'][$i]->start_up_idea_desc;
          $dat['comment']=$data['query'][$i]->start_up_additional_comments;
          $dat['duration']=$dur[0]->duration_period;
          $dat['sdate']=$data['query'][$i]->start_up_starting_date;
          $dat['edate']=$this->Startupm->calc($dat['sdate'],$dat['duration']);
          $dat['remaing_days']=$this->Startupm->calcremaing($dat['edate']);



      }
      }
      // print_r($data['query']->0;
     // $dat['query'] = $data[query]->;
      $this->load->view('startup_more_request', $dat);
    }
   $this->load->view('admin_footer');
  }
  public function status_admin()
  {
    $this->load->view('admin_header');
    $this->load->model("Startupm");
    $data['query'] = $this->Startupm->select();
    $this->load->view('startup_status',$data);

   $this->load->view('admin_footer');

  }
  public function status_update()
  {
    $id=$_POST['btn_id'];
    $status=$_POST['status'];
    $cname=$_POST['cname'];
    $sdate=$_POST['sdate'];
    $this->load->model("Startupm");
    $this->Startupm->supdate($id,$status,$cname,$sdate);

  }
  public function payment_admin()
  {
    $this->load->view('admin_header');
    $this->load->model("Startupm");
    $data['query'] = $this->Startupm->selectpay();

    $this->load->view('startup_payment',$data);
    $this->load->view('admin_footer');
       //  $this->Startupm->supdate($id,$status);
    //$this->load->view('admin_footer');
  }
  public function pay_admin()
  {
    $this->load->view('admin_header');
   

    $this->load->view('startup_pay');
    if(isset($_POST['submit']))
        { 

          //$this->load->view('header');
    
          $this->load->model("Startupm");
          $this->Startupm->pay_now();
          $data['query'] = $this->Startupm->selectpay();
          $this->load->view('startup_payment',$data);
        }

       //  $this->Startupm->supdate($id,$status);
      
   // $this->load->view('admin_footer');
  
  }

 
  public function amount_edit()
  {
    $id=$_POST['bn_id'];
    $amount=$_POST['amount'];
    $this->load->model("Startupm");
    $this->Startupm->amtupdate($id,$amount);

  }

//auto complete namw
  public function searchc()
  {

    $this->load->model('Startupm');
    if (isset($_GET['term'])){
      $q = strtolower($_GET['term']);
      $this->Startupm->searchng($q);
    }
  }
    //
     public function search_currency()
  {

    $this->load->model('Startupm');
    if (isset($_GET['term'])){
      $q = strtolower($_GET['term']);
      $this->Startupm->searchcur($q);
    }
  }
  public function duration_admin()
  {
       $this->load->view('admin_header');
       $this->load->view("startup_duration");
    if(isset($_POST['submit']))
    {
     
     $Data = array('duration_period' => $_POST['duration']);
        $this->db->where('duration_id', 1);
        $this->db->update('tbl_duration', $Data);
    
  }   
  $this->load->view('admin_footer');
  }
   public function testimonial_admin()
  {
       $this->load->view('admin_header');
       $this->load->model('Startupm');
       $st=0;
       $data['query'] = $this->Startupm->selecttestimonial($st);
       $this->load->view("startup_testimonial",$data);
    if(isset($_POST['submit']))
    {
       $Data = array('testimonial_status' => $_POST['status']);
        $this->db->where('testimonial_id',$_POST['id'] );
        $this->db->update('tbl_testimonial', $Data);

     
    }
    $this->load->view('admin_footer'); 
  }
  public function testimonial_view_admin()
  {
       $this->load->view('admin_header');
       $this->load->model('Startupm');
       $st=1;
       $data['query'] = $this->Startupm->selecttestimonial($st);
       $this->load->view("startup_testimonial_view",$data);
    if(isset($_POST['submit']))
    {
       $Data = array('testimonial_status' => $_POST['status']);
        $this->db->where('testimonial_id',$_POST['id'] );
        $this->db->update('tbl_testimonial', $Data);

     
    }
    $this->load->view('admin_footer');
  }
   public function mentor_startup(){
     $this->load->helper('url');
    $this->load->view('admin_header');
     $this->load->model('Startupm');
      $data['query'] = $this->Startupm->selectmentor();
  $this->load->view('startup_mentor', $data);
 if(isset($_POST['more']))
    {
      $id=$_POST['id'];
      for($i=0;$i<count($data['query']);$i++)
      {

        if($data['query'][$i]->reg_id==$id)
         {
          $dat['reg_id']=$data['query'][$i]->reg_id;
          $dat['amob']=$data['query'][$i]->reg_alternate_mobile_no;
          $dat['address']=$data['query'][$i]->mentor_address;
          $dat['company']=$data['query'][$i]->mentor_name_of_the_company;
          $dat['designation']=$data['query'][$i]->mentor_designation;
          $dat['resume']=$data['query'][$i]->mentor_resume;
          $dat['area']=$data['query'][$i]->mentor_area_of_expertise;
          $dat['gender']=$data['query'][$i]->mentor_gender;
        }
      }

      $this->load->view('startup_mentor_details', $dat);

    
  


    }  

    $this->load->view('admin_footer');
   }
   
  //////////////////////////////
  public function test()
  {
    $this->load->helper('url');
    $this->load->view('admin_header');
    // $this->load->view('admin_index');
    $this->load->view('admin_footer');
    
  }
  



public function fdetails()// function to select the details of freelancer
    {
      
          $this->load->database();
          $this->load->model('Cfmodel');
          $dat['h']=$this->Cfmodel->aselectfreelance();
          //print_r($dat['h']);
          $this->load->view('admin_header');
          $this->load->view('frm_viewfreelancer',$dat); 
          $this->load->view('admin_footer');     
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
              redirect('Admin/fdetails');
        } 
    public function companydetails()// show the details of company
   {
    $this->load->database();
    $this->load->model('Cfmodel');
    $dat['h']=$this->Cfmodel->selectcompany();
    $this->load->view('admin_header');
    $this->load->view('frm_viewcompany',$dat);
    $this->load->view('admin_footer');
   }
   public function frequestdetails()//freelance need by company
 {
   $this->load->database();
   $this->load->model('Cfmodel');
   $dat['h']=$this->Cfmodel->frlncrequestdetails();
    $this->load->view('admin_header');
   $this->load->view('frm_viewcompanyrequest',$dat);
   $this->load->view('admin_footer');
 }

 }
 ?>