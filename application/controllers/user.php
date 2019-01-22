<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller
{
  public function index()
  {
    $data['konten']="home";
    $this->load->view('index',$data);
  }
  public function profil()
  {
    $data['konten']="elements";
    $this->load->view('index',$data);
  }
  public function event()
  {
    $data['konten']="event";
    $this->load->view('index',$data);
  }
  public function gallery()
  {
    $data['konten']="gallery";
    $this->load->view('index',$data);
  }
}


?>
