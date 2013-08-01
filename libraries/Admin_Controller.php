<?php
class Admin_Controller extends MY_Controller{
    function __construct() {
        parent::__construct();
        $this->data['meta_title'] = 'My Awesome CMS Dashboard';
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('user_m');
        
        
        //login check
       $exception_urls = array('admin/user/login', 'admin/user/logout');
       if(in_array(uri_string(), $exception_urls)==FALSE){
        if($this->user_m->loggedin()==FALSE){
            
             redirect('admin/user/login', 'refresh');
       }}
    }
    
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
