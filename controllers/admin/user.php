<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author bryan
 */
class User extends Admin_Controller{
    public function __construct() {
        parent::__construct();
    }
public function login(){
    $dashboard = 'admin/dashboard';
    $this->user_m->loggedin()==FALSE || redirect($dashboard);
    $rules = $this->user_m->rules;
    $this->form_validation->set_rules($rules);
    if($this->form_validation->run() ==TRUE){
        //LOGIN
       if( $this->user_m->login()==TRUE){
           redirect($dashboard);
       }else{
           $this->session->set_flashdata('error', 'That username/password combination does not exist');
           redirect('admin/user/login', 'refresh');
       }
    }
    $this->data['subview'] = 'admin/user/login';
    $this->load->view('admin/_layout_modal', $this->data);
}

public function logout(){
    $this->user_m->logout();
    redirect('admin/user/login');
}


}

?>
