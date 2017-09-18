<?php
class Cfmodel extends CI_Model{

	public function frlncinsert()//to insert the details of freelancer
	{
		if(isset($_POST['submit']))
		{
                 $config['upload_path']          = './upload/';
                $config['allowed_types']        = 'gif|jpg|png|pdf|doc|docx';
                $this->load->library('upload', $config);

                if ( $this->upload->do_upload('image'))
                {
                        
              $resume=$this->upload->data('file_path').$this->upload->data('file_name');
          //$this->form_validation->set_error_delimiters('<p class="error">', '</p>');

                    //$error = array('error' => $this->upload->display_errors());

                    //$this->load->view('frmV_upload', $error);
                }
                else
                {
                  $resume="null";
                }
                if($this->upload->do_upload('adhar'))
                {
                  $adhar=$this->upload->data('file_path').$this->upload->data('file_name');
                }
                else
                {
                  $adhar="null";
                }
                if($this->upload->do_upload('photo'))
                {
                  $photo=$this->upload->data('file_path').$this->upload->data('file_name');
                }
                else
                {
                  $photo="null";
                }
                /*else
                {
                    $data = array('upload_data' => $this->upload->data());
                     
                    //$this->load->view('uploadsuccess', $data);
                }*/
        
     $data = array(
	'reg_name' => $_POST['Name'],
	'reg_email' => $_POST['Email'],
	'reg_mobile_no' => $_POST['mobile'],
	//'reg_alternate_mobile_no' =>  $_POST['amobile'],
  'reg_password'=>$_POST['password'],
	'reg_mode' =>  'freelancer',
	'reg_status'=> 0
	);
        $value=$this->db->insert('tbl_reg',$data);
        
        if($value==1)
        {
 			$this->db->select('reg_id');
        	$query = $this->db->get_where('tbl_reg', array('reg_email' => $_POST['Email']));
        	$reg=$query->result();
        	$id=$reg[0]->reg_id;
        	$this->load->helper('date');
        	$var=$this->input->post('gender');

	    $data1 = array(
	    'Registration_id'=>$id,
        'Fl_addr' => $_POST['Address'],
        'Fl_city'=>$_POST['city'],
        'Fl_dob'=>$_POST['dob'],
        'Fl_Experience'=>$_POST['Work'],
        'Fl_gender'=>$var, //$_POST['gender'],
        'Fl_course'=>$_POST['course'],
        'Fl_Stream'=>$_POST['stream'],
        'Fl_Resume_path'=>$resume,//$this->upload->data('file_path').$this->upload->data('file_name'),
        'Fl_adhar_path'=>$adhar,
        'Fl_photo_path'=>$photo,
        'Fl_Reg_Date'=> date("Y-m-d"),
        'Fl_Category'=>'not set'

        );
      /*var_dump($data1);
      die;*/
        $q=$this->db->insert('tbl_freelancer',$data1);
        if($q==1)
        {
          ?>
          <script>
            alert("Thank You!! Registration Successfull,we'll contact you soon");
          </script>
        <?php
        }
	}
}
}
   public function scourse()
    {
    	//$searchTerm = $_GET['term'];
      $searchTerm= $this->input->post('course');
       $query = $this->db->query("SELECT * FROM tbL_Course WHERE Coursename LIKE '%".$searchTerm."%'");
       foreach ($query->result_array() as $row)
        {
        $data[] = $row['Coursename'];
        }
		echo json_encode($data);
    }

    /*public function search($coursename)
    {
      $this->db->like('Coursename',$coursename,'both');
      return $this->db-get('tbL_course')->result();
      echo "string";
    }*/
    public function searchng($q) //select the course for autocomplete
  {
    $this->db->select('Coursename');
    $this->db->like('Coursename',$q);
    $query = $this->db->get('tbl_course');
    if($query->num_rows() > 0){
      foreach ($query->result_array() as $row){
        $row_set[] = htmlentities(stripslashes($row['Coursename'])); //build an array
      }
      echo json_encode($row_set); //format the array into json data
    }
  }
   public function searchstrm($q) //select the stream for autocomplete
  {
    $this->db->select('S_name');
    $this->db->like('S_name',$q);

    $query = $this->db->get('tbl_stream');
    if($query->num_rows() > 0){
      foreach ($query->result_array() as $row){
        $row_set[] = htmlentities(stripslashes($row['S_name'])); //build an array
      }
      echo json_encode($row_set); //format the array into json data
    }
  }
  public function searchdist($q) //select the district for autocomplete
  {
    $this->db->select('D_name');
    $this->db->like('D_name',$q);
    $query = $this->db->get('tbl_district');
    if($query->num_rows() > 0){
      foreach ($query->result_array() as $row){
        $row_set[] = htmlentities(stripslashes($row['D_name'])); //build an array
      }
      echo json_encode($row_set); //format the array into json data
    }
  }
    public function selectcompany()//select company details
    {
      $this->db->select('*');
        $this->db->from('tbl_fl_company');
        $this->db->join('tbl_reg', 'tbl_reg.reg_id =tbl_fl_company.registration_id');
        $query = $this->db->get();
        return $query;

    }
    public function emailcheck()
    { 
      if(isset($_POST['email']))
      {
      $this->db->select('reg_email');
      $query = $this->db->get_where('tbl_reg', array('reg_email' => $_POST['email']));
        if($query->result())
        {
          echo 1;
        }
        else
        {
            echo 0;
        }
      }
    }
    public function aselectfreelance()//select the details of freeancer 
    {
    	$this->db->select('*');
        $this->db->from('tbl_freelancer');
        $this->db->join('tbl_reg', 'tbl_reg.reg_id = tbl_freelancer.registration_id');
        $query = $this->db->get();
        return $query->result();
    }
    public function frelncsearch()//freelancer search based on location
    {
      if(isset($_POST['location']))
      {
      $this->db->select('*');
      $this->db->from('tbl_freelancer');
      $this->db->join('tbl_reg','tbl_reg.reg_id = tbl_freelancer.registration_id');
      $this->db->where(array('Fl_city'=>$_POST['location']));
      $query = $this->db->get();
      return $query;
    }
    }

    public function feditng($id) //to edit the freelance details
    {

    //return $query = $this->db->query("select * from tbl_freelancer where Registration_id='$id'");
      $this->db->select('*');
        $this->db->from('tbl_freelancer');
        $this->db->join('tbl_reg', 'tbl_reg.reg_id = tbl_freelancer.registration_id');
        $query = $this->db->get();
        return $query;
            }
      public function fupdatng($id)//update freelancer details 
      {
              $data = array(

        'Fl_Category' => $this->input->post('category'),
        
                );
                 $this->db->set($data);
                 $this->db->where('Registration_id', $id);
                $up=$this->db->update('tbl_freelancer');
                return $up;
            }
  
  public function companyinsert()//to insert the company details
  {
    if(isset($_POST['submit']))
    {
     
      $data=array(
        'reg_name'=>$_POST['name'],
        'reg_email'=>$_POST['email'],
        'reg_mode' =>'Company',
        'reg_mobile_no'=>$_POST['phone'],
        'reg_status'=>0
        );

        $val=$this->db->insert('tbl_reg',$data);
        if($val=1)
        {
          $this->db->select('reg_id');
          $q=$this->db->get_where('tbl_reg',array('reg_email'=>$_POST['email']));
          $reg=$q->result();
          $id=$reg[0]->reg_id;
          $data1=array(
            'Registration_id'=>$id,
            'Flco_name'=>$_POST['name'],
            'Flco_addr'=>$_POST['Address'],
            'Flco_industry'=>$_POST['Industry'],
            'Flco_other_service'=>$_POST['Services'],
            'Flco_reg_date'=>date("Y-m-d")
            );
          $this->db->insert('tbl_fl_company',$data1);
        }
    }
  }
  public function frlncrequestdetails()
  {
    $this->db->select('*');
    $this->db->from('tbl_freelancerequest');
    $q=$this->db->get();
    return $q;
  }
  public function frequestinsert()//to insert company request for freelancer
  {
//$id=session//after login
    if(isset($_POST['submit']))
    {
    
      $data=array(
        'Fr_skill'=>$_POST['skills'],
        'Fr_others_skill'=>$_POST['otherskills'],
        'Fr_wagehourly'=>$_POST['amount'],
        'Fr_job_description'=>$_POST['job']
        );
      $this->db->insert('tbl_freelancerequest',$data);

    }
  }
    public function login()//login code
    {
         $f=0;
        $this->db->select('*');
            $query = $this->db->get_where('tbl_reg', array('reg_email' => $_POST['email']));

           $reg=$query->result();
           if($reg!=null)
                       {
                       
            $pass=$reg[0]->reg_password; 
            
            if($pass==$_POST['password'])//&&($reg[0]->reg_status==1))
            {
                if($reg[0]->reg_mode=='freelancer')
                {
                    echo "login as admin";
                    $f=1;
                }
                else
                {
                    $f=0;
                }               
            }

        }
            return $f;
       
    }
  }
?>