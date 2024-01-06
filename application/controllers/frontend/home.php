<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
    public function index(){
        $this->load->view('template/header');
        $this->load->model('frontend/EmployeeModel');
        $data['employee']=$this->EmployeeModel->getEmployee();
        $this->load->view('frontend/employee',$data);
        $this->load->view('template/footer');
    }
    public function create(){
        $this->load->view('template/header');
        $this->load->view('frontend/create');
        $this->load->view('template/footer');
    }
    public function store(){
        $this->form_validation->set_rules('first_name','First name','required');
        $this->form_validation->set_rules('last_name','Last name','required');
        $this->form_validation->set_rules('phone','phone','required');
        $this->form_validation->set_rules('email','email','required');
        if($this->form_validation->run())
        {
        $data=[
            'first_name'=> $this->input->post('first_name'),
            'last_name'=> $this->input->post('last_name'),
            'phone'=> $this->input->post('phone'),
            'email'=> $this->input->post('email')
        ];
        $this->load->model('frontend/EmployeeModel');
        $this->EmployeeModel->insertEmployee($data);
        $this->index();
        
        }
        else{
            $this->create();
        }
        
    }
    public function edit($id){
        $this->load->view('templates/header');  
        $this->load->model('frontend/EmployeeModel');
        $data['employee']=$this->EmployeeModel->editEmployee($id);
        $this->load->view('frontend/edit',$data);
        $this->load->view('templates/footer');
    }
    public function update($id){
        $this->form_validation->set_rules('first_name','First name','required');
        $this->form_validation->set_rules('last_name','Last name','required');
        $this->form_validation->set_rules('phone','phone','required');
        $this->form_validation->set_rules('email','email','required');
        if($this->form_validation->run()):
            $data=[
                'first_name'=> $this->input->post('first_name'),
                'last_name'=> $this->input->post('last_name'),
                'phone'=> $this->input->post('phone'),
                'email'=> $this->input->post('email')
            ];
            $this->load->model('frontend/EmployeeModel');
            $this->EmployeeModel->updateModel($id,$data);
            redirect(base_url('employee'));
        else:
           $this->edit($id);
        endif;
    }
    public function delete($id){
        $this->load->model('frontend/EmployeeModel');
        $this->EmployeeModel->deleteModel($id);
        redirect(base_url('employee'));
    }
}
?>

