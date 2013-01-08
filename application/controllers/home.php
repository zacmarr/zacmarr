<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Home extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->check_isvalidated();
    }
    
    public function index(){

        echo 'Congratulations, you are logged in.';
        
        
        var_dump($this->session->userdata);
       
          $this->load->view('update_view');
          $this->load->view('employee_view');
		  
		  ;
		   
		  
          
       
    }
    
    private function check_isvalidated(){
        if(! $this->session->userdata('validated')){
            redirect('login');
        }
    }
     public function do_logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
                                                                                                                     
   function search(){
       
       $limit=20;
       $emp_no = $this->input->get('emp_no');
       $birth_date = $this->input->get('birth_date');
       $last_name = $this->input->get('last_name');
       $first_name = $this->input->get('first_name');
       
       $this->load->model('employee_model');
       $data['query'] = $this->employee_model->search($emp_no,$birth_date,$last_name,$first_name,$limit);
       $this->load->view('employee_view', $data);
   }    
   public function add_post(){
       
       $this->load->view('add_employee');
       
   }  
   
   public function add_main(){
       
       $emp_no = $this->input->post('emp_no');
       $birth_date = $this->input->post('birth_date');
       $first_name = $this->input->post('first_name');
       $last_name = $this->input->post('last_name');
       $gender = $this->input->post('gender');
       $hire_date = $this->input->post('hire_date');
       
       $from_date = $this->input->post('from_date');
       $to_date = $this->input->post('to_date');
       $dept_no = $this->input->post('$dept_no');
       
       $salary = $this->input->post('salary');
       
       
       $this->load->model('employee_model');
       $this->employee_model->add($emp_no,$birth_date,$first_name,$last_name,$gender,$hire_date,$dept_no);
       $this->load->view('success');
       
   }
   
   public function delete_post(){
       
       $this->load->view('delete_view');
   }
   
    public function delete_main(){
       
      $emp_no = $this->input->post('emp_no');
      
      $this->load->model('employee_model');
      $this->employee_model->delete($emp_no);
      $this->load->view('success');
      
   }
   
    public function update_post(){
       
       $this->load->view('update_view');
   }
   
    public function update_main(){
       
      $emp_no = $this->input->post('emp_no');
     $salary = $this->input->post('salary');
      
      $this->load->model('employee_model');
      $this->employee_model->update($emp_no);
      $this->load->view('success');
      
   }
   
             
 }
 ?>