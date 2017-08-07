<?php
  class Home extends CI_Controller {
    protected $_data;
    public function __construct(){
      parent::__construct();
    }

    public function index(){
      $this->_data['loadPage'] = 'default/home/index_view';
      $this->load->view('default/template',$this->_data);
    }
  }
