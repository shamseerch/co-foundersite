<?php
/**
* 
*/
class Startupm extends CI_Model
{
    //insertion to db tbl_reg& tbl_startup
    public function startup()
    {
    // {var_dump($_POST);

        $data = array(
	               'reg_name' => $_POST['name'],
	               'reg_email' =>  $_POST['email'],
	               'reg_mobile_no' => $_POST['mobile'],
	               'reg_alternate_mobile_no' =>  $_POST['amobile'],
	               'reg_password'=>md5($_POST['pass']),
	               'reg_mode' =>  'startup registration',
	               'reg_status'=> 0
        	       );
        $value=$this->db->insert('tbl_reg',$data);
        
        if($value==1)
        {
 			$this->db->select('reg_id');
        	$query = $this->db->get_where('tbl_reg', array('reg_email' => $_POST['email']));
        	$reg=$query->result();
        	$id=$reg[0]->reg_id;
        	$this->load->helper('date');
        	$dat = array(
	                       'start_up_reg_id' => $id,
	                       'start_up_address' =>  $_POST['address'],
	                       'start_up_city' => $_POST['city'],
	                       'start_up_no_of_people' =>  $_POST['count'],
                            'start_up_current_level' =>  $_POST['level'],
                            'start_up_idea'=> $_POST['idea'],
                            'start_up_idea_desc'=>$_POST['idea_desc'] ,
                            'start_up_additional_comments'=> $_POST['comment'],
                            'start_up_reg_date'=>date("y-m-d"),
    
                            );
            $this->db->insert('tbl_start_up_reg',$dat);
        } 
    }
    public function selectemail($email)
    {
        $this->db->select('reg_id');
        $query = $this->db->get_where('tbl_reg',array('reg_email' => $email));
        if($query->result())
        {
            $reg=$query->result();
        	$id=$reg[0]->reg_id;
            echo $id;
       }
    }
    //insertion to db tbl_reg& tbl_mentor
    public function mentor()
    {
      //resume upload
        $resume="";
        $config['upload_path']   = './upload/startup/mentor_resume'; 
        $config['allowed_types'] = 'doc|docx|pdf'; 
         
        $this->load->library('upload', $config);
        if ( $this->upload->do_upload('userfile')) {
            $data = array('upload_data' => $this->upload->data());
            $resume="upload/startup/mentor_resume/".$this->upload->data('file_name');
        }
       $data = array(
                    'reg_name' => $_POST['name'],
                    'reg_email' =>  $_POST['email'],
                    'reg_mobile_no' => $_POST['mobile'],
                    'reg_alternate_mobile_no' =>  $_POST['amobile'],
                    'reg_password'=>md5($_POST['pass']),
                    'reg_mode' =>  'startup mentor',
                    'reg_status'=> 0
                    );
        $value=$this->db->insert('tbl_reg',$data);
        if($value==1)
        {

            $this->db->select('reg_id');
            $query = $this->db->get_where('tbl_reg', array('reg_email' => $_POST['email']));
            $reg=$query->result();
            $id=$reg[0]->reg_id;
            $this->load->helper('date');
             $dat = array(
                            'mentor_reg_id' => $id,
                            'mentor_gender' =>  $_POST['gender'],
                            'mentor_address' =>  $_POST['address'],
                            'mentor_area_of_expertise' => $_POST['expertise'],
                            'mentor_name_of_the_company' =>  $_POST['company'],
                            'mentor_designation' =>  $_POST['designation'],
                            'mentor_resume'=>$resume
    
                            );
             $k=$this->db->insert('tbl_mentor_reg',$dat);
                if($k==1)
                {
                    ?>
                    <script>
                    set_flashdata("Thank you!"+"Your Registration success . We will contact you very soon!");
                    </script>
                <?php
                   /*the mail sending part
                    $from_email = "hr@cofounderonline.com"; 
                    $to_email = $_POST['email']; 
                   //Load email library 
                    $this->load->library('email'); 
                    $this->email->from($from_email, 'Your Name'); 
                    $this->email->to($to_email);
                    $this->email->subject('Confirmation mail from CoFounder');
                    $this->email->message('Testing the email class'); 
                    //Send mail 
                    if($this->email->send()) 
                        $this->session->set_flashdata("email_sent","Email sent successfully."); 
                    else 
                        $this->session->set_flashdata("email_sent","Error in sending Email."); */
                    
                 //return $id;
                }
            } 

    }
    //insertion to db tbl_testmonial
    public function testmonialreg()
    {
        $data = array(
                        'testimonial_name' =>  $_POST['name'],
                        'testimonial_email' =>  $_POST['email'],
                        'testimonial_mobile_no' => $_POST['mobile'],
                        'testimonial_office_name' =>  $_POST['company'],
                        'testimonial_current_location' =>  $_POST['locatin'],    
                        'testimonial_feedback'=> $_POST['feed'],
                        'testimonial_status'=> 0
    
                    );
        $this->db->insert('tbl_testimonial',$data);
    }
    public function login()
    {
        $f=0;
        $this->db->select('*');
            $query = $this->db->get_where('tbl_reg', array('reg_email' => $_POST['email']));

           $reg=$query->result();
           if($reg!=null)
                       {
                       
            $pass=$reg[0]->reg_password; 
            
            if($pass==md5($_POST['password']))//&&($reg[0]->reg_status==1))
            {
                if($reg[0]->reg_mode=='admin')
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

    public function select()  
    {  
         //data is retrive from tbl_reg  
        $this->db->select('tbl_start_up_reg.*,tbl_reg.*');
        $this->db->from('tbl_start_up_reg');
        $this->db->join('tbl_reg', 'tbl_start_up_reg.start_up_reg_id= tbl_reg.reg_id');
        $this->db->order_by("reg_id","desc"); 
        $query = $this->db->get();
        return $query->result();  
    } 
    //select data form mentor reg
    public function selectmentor()  
    {  
         //data is retrive from tbl_reg and mentor_reg 
        $this->db->select('tbl_mentor_reg.*,tbl_reg.*');
        $this->db->from('tbl_mentor_reg');
        $this->db->join('tbl_reg', 'tbl_mentor_reg.mentor_reg_id= tbl_reg.reg_id');
        $this->db->order_by("reg_id","desc"); 
        $query = $this->db->get();
        return $query->result();  
    } 
    //status update by admin
    public function supdate($id,$status,$cname,$sdate)
    {
        $updateData = array('reg_status' => $status);
        $this->db->where('reg_id', $id);
        $r=$this->db->update('tbl_reg', $updateData);
        if($status==2)
        {
            $this->load->helper('date');
            $Data = array('start_up_company_name' => $cname,
            'start_up_starting_date' => $sdate,
            'start_up_ending_date'=>date("y-m-d"),
            );
        $this->db->where('start_up_reg_id', $id);
        $n=$this->db->update('tbl_start_up_ reg', $Data);
        }
        else{
             $Data = array('start_up_company_name' => $cname,
            'start_up_starting_date' => $sdate
            );
        $this->db->where('start_up_reg_id', $id);
        $n=$this->db->update('tbl_start_up_reg', $Data);
        }
               if($r==1&&$n==1)
        {
        echo $r;
        }
    } 
    public function selectpay()  
    {  
        //data is retrive from tbl_reg  
        $this->db->select('tbl_payment.*,tbl_reg.*');
        $this->db->from('tbl_payment');
        $this->db->join('tbl_reg','tbl_payment.Reg_id=tbl_reg.reg_id'); 
        $this->db->where('tbl_reg.reg_mode','startup registration');
        $query = $this->db->get();
        // var_dump($query->result());
        return $query->result();  
    } 
    //insertion to db tbl_payment
    public function pay_now()  
    {
            $this->db->select('start_up_reg_id');
            $query = $this->db->get_where('tbl_start_up_reg', array('start_up_company_name' => $_POST['name']));
            $reg=$query->result();
            $id=$reg[0]->start_up_reg_id;
            $this->load->helper('date');
             $dat = array(
                            'Reg_id' => $id,
                            'p_Amount' =>  $_POST['amount'],
                            'P_currency' =>  $_POST['currency'],
                            'P_Date' => date("y-m-d"),
                            'month_of_payment'=>$_POST['month']
                            );
            $g= $this->db->insert('tbl_payment',$dat);
            // echo $g;
            // die;
    }
    public function amtupdate($id,$amount)
    {
        $updateData = array('p_Amount' => $amount);
        $this->db->where('P_id', $id);
        $r=$this->db->update('tbl_payment', $updateData);
        echo $r;

    }
    //auto complete
   public function searchcity($q)
   {
        $this->db->select('D_name');
        $this->db->like('D_name',$q);
        //$this->db->where('reg_mode','startup registration');
        $query = $this->db->get('tbl_district');
        if($query->num_rows() > 0)
        {
            foreach ($query->result_array() as $row)
            {
                $row_set[] = htmlentities(stripslashes($row['D_name'])); //build an array
            }
            echo json_encode($row_set); //format the array into json data
        }
    }
    public function searchng($q)
    {
        $this->db->select('start_up_company_name');
        $this->db->like('start_up_company_name',$q);
        //$this->db->where('reg_mode','startup registration');
        $query = $this->db->get('tbl_start_up_reg');
        if($query->num_rows() > 0)
        {
            foreach ($query->result_array() as $row)
            {
                $row_set[] = htmlentities(stripslashes($row['start_up_company_name'])); //build an array
            }
            echo json_encode($row_set); //format the array into json data
        }
    }

    public function searchcur($q)
    {
        $this->db->select('currency_code');
        $this->db->like('currency_code',$q);
        $query = $this->db->get('tbl_currency');
        if($query->num_rows() > 0)
        {
            foreach ($query->result_array() as $row)
            {
                $row_set[] = htmlentities(stripslashes($row['currency_code'])); //build an array
            }
            echo json_encode($row_set); //format the array into json data
        }
    }

    public function calc($sdate,$duration)
    {
        //$date = $sdate; 
        $stamp = strtotime($sdate); // outputs 1307708880
        $mo = intval($duration);//$monthNo = date('m',$dateValue);
        $d=date("d", $stamp); // it prints out the day only
        $y= date("Y", $stamp);
        $co= date("m", $stamp)+$mo;
        if($co>12)
        {   
            $n=$co/12;
            $co=$co%12;
            $y=$y+intval($n);
            if($co==0)
            {
                $co=12;
            }    
        }
        $date=$y."-".$co."-".$d;
        return($date);
    }
    public function calcremaing($edate)
    {
        $datetime1 = strtotime($edate);
        $datetime2 = strtotime(date('Y-m-d'));
        $secs = $datetime1 - $datetime2;//<seconds between the two times>
        $days = $secs / 86400;
        $day=intval($days);
        return($day);
    }
    public function selecttestimonial($st)
    {
        $this->db->select('*');
        $this->db->where('testimonial_status',$st);
        $query=$this->db->get('tbl_testimonial');
        return $query->result();

    }
}
?>