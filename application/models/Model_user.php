<?php
  class Model_users extends CI_Model {
  
    public $table = 'tbl_user';
 
    public function cekAkun($username, $password)
    {
     
      $this->db->where('username', $username);
      $this->db->where('active', '1');
      
     
      $query = $this->db->get($this->table)->row();
      
    
      if (!$query) return false;
      
      $hash = $query->password;
      
      
      if (!password_verify($password, $hash)) return false;
 
     
      return $query;        
    }
 }