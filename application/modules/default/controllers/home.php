<?php
header('Access-Control-Allow-Origin: *');
  class Home extends DefaultController{
    public function __construct(){
      parent::__construct();
    }

    public function index(){
      $this->_data['loadPage'] = 'home/index_view';
      $this->load->view($this->_data['path'],$this->_data);
    }
  }

 ?>
