<?php

class Usermodel{
    private $db;

public function __construct($db)
{
    

    $this->db=$db;


}

public function select()
{
    return $this->db->get('usersadmin');
}
public function selectById($id)
{  return $this->db->where('id', $id)->getOne('usersadmin');
}
public function adduser($data){

    return $this->db->insert('usersadmin',$data);
}
public function updateUser($id, $data) {
    $this->db->where('id', $id);
    return $this->db->update('usersadmin', $data);
}
 
public function deleteUser($id) {
    $this->db->where('id', $id);
    return $this->db->delete('usersadmin');
}
}
?>