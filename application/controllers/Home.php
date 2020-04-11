<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *document code
 */
class Home extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      $this->load->model('Modelvisit');     
  }
  // default home
	public function index()
	{

   $data['data'] = $this->Modelvisit->get_all();
  		$this->load->view('home',$data);
	}

  //view data by id
   public function viewdata($id)
  {     
      $data['data'] = $this->Modelvisit->get_by_id($id);
     $this->load->view('visit_data',$data);
       $this->add_count($id);
  }
//count data id
 function add_count($id)
    {
        // load cookie helper
        $this->load->helper('cookie');
        // this line will return the cookie which has slug name
        $check_visitor = $this->input->cookie(urldecode($id), FALSE);
        // this line will return the visitor ip address
        $ip = $this->input->ip_address();
       
        if ($check_visitor == false) {
            $cookie = array("name" => urldecode($id), "value" => "$ip", "expire" => time() + 300, "secure" => false);
            $this->input->set_cookie($cookie);
            $this->Modelvisit->update_counter(urldecode($id));
        }
    }


} // end class
