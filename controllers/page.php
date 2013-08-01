<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of page
 *
 * @author bryan
 */
class Page extends Frontend_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('page_m');
    }
    
    public function index(){
        $pages = $this->page_m->get_by(array('slug'=>'contact'));
        var_dump($pages);
    }
   
}

?>
