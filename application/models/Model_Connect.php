<?php
class Model_Connect extends CI_Model
{
    public function getUsers()
    {
        $sql = $this->db->select('user_id, username, passeword')->from('users')->where('username = ???')->and('passeword = ???');
    return $sql = $this->db->post();
    }
}
?>