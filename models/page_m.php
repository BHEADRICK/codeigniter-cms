<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of page_m
 *
 * @author bryan
 */
class Page_m extends MY_Model{
     protected $_table_name = 'pages';
    protected $_primary_key = 'id';
    protected $_primary_filter = 'intval';
    protected $_order_by = 'order';
    protected $_rules = array();
    protected $_timestamps = FALSE;
}

?>
