<?php
                                      
class Employee_model extends CI_Model{
           
    function __construct(){
        parent::__construct();
        $this->load->database();
        
    }
    
  function search($emp_no,$birth_date,$last_name,$first_name,$limit){
                   
            $this->db->select('*')
            ->from('employees')
            ->join('dept_emp','employees.emp_no = dept_emp.emp_no')
            ->join('titles','dept_emp.emp_no = titles.emp_no')
            ->where('titles.to_date', '9999-01-01');
            $this->db->limit($limit);
           
            if(!empty($emp_no)) {

        $this->db->where('employees.emp_no',$emp_no);

                }
                
                   if(!empty($birth_date)) {

        $this->db->where('employees.birth_date',$birth_date);

                }
				      if(!empty($first_name)) {

        $this->db->where('employees.first_name',$first_name);

                }
                
                  if(!empty($last_name)) {

        $this->db->where('employees.last_name',$last_name);

                }
                
                $query = $this->db->get();
                return $query->result();   
  }  
  
     public function add($emp_no,$birth_date,$first_name,$last_name,$gender,$hire_date,$dept_no) {
      
      $this->db->set('emp_no',$emp_no);
      $this->db->set('birth_date',$birth_date);
      $this->db->set('first_name',$first_name);
      $this->db->set('last_name',$last_name);
      $this->db->set('gender',$gender);
      $this->db->set('hire_date',$hire_date);
      
      $query = $this->db->insert('employees');
      
      
      $this->db->set('emp_no',$emp_no);
     $this->db->set('from_date',$from_date);
     $this->db->set('to_date',$to_date);
      $this->db->set('dept_no',$dept_no);
      
      $query = $this->db->insert('dept_emp');
      
      
    $this->db->set('emp_no',$emp_no);
   $this->db->set('salary',$salary);
      
    $query = $this->db->insert('salaries');
      
  } 
  
  public function delete($emp_no){
      
       $this->db->set('emp_no',$emp_no);
       $this->db->delete('employees', array('emp_no' => $emp_no));
      
      
  }
    public function update($emp_no){
        
        $data = array(
        'emp_no' => $emp_no
       	
        );
       
       $this->db->where('emp_no',$emp_no);
       $this->db->update('employees', $data);
      
      
  }
   
    }
    
    ?>