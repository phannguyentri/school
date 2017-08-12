<?php
  class Home extends CI_Controller {
    protected $_data;
    public function __construct(){
      parent::__construct();
      $this->_data['path'] = 'default/template';
      $this->output->cache(1440);
    }

    public function index(){
      $this->_data['loadPage'] = 'default/home/index_view';
      $this->_data['active'] = 'index';
      $this->load->view($this->_data['path'],$this->_data);
    }

    public function about(){
      $this->_data['loadPage'] = 'default/home/about_view';
      $this->_data['active'] = 'about';
      $this->load->view($this->_data['path'],$this->_data);
    }

    public function gallery(){
      $this->_data['loadPage'] = 'default/home/gallery_view';
      $this->_data['active'] = 'gallery';
      $this->load->view($this->_data['path'],$this->_data);
    }

    public function service(){
      $this->_data['loadPage'] = 'default/home/service_view';
      $this->_data['active'] = 'service';
      $this->load->view($this->_data['path'],$this->_data);
    }

    public function contact(){
      $this->_data['loadPage'] = 'default/home/contact_view';
      $this->_data['active'] = 'conract';
      $this->load->view($this->_data['path'],$this->_data);
    }
  }
