<?php
/**
 *document code
 */
class Modelvisit extends CI_Model
{

//view all data
 public function get_all()
  {
    $this->db->select('*');
      $this->db->from('users');    
      $query = $this->db->get();
      return $query->result();
  }

//get by id user
  public function get_by_id($id)
  {
      $this->db->from('users');
      $this->db->where('id',$id);
      $query = $this->db->get();
      return $query->row();
  } 

   function update_counter($id)
    {
   
         //return current article views
        $this->db->where('id', urldecode($id));
        $this->db->select('visit'); $count = $this->db->get('users')->row();
        // then increase by one
        /*if (empty($count)) {
           redirect();
        }*/
        $this->db->where('id', urldecode($id));
        $this->db->set('visit', ($count->visit + 1));
        $this->db->update('users');   
          
       
        
    }

}
