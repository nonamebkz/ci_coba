<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_blog extends CI_Model
{

    public function getBlog()
    {
        $query = $this->db->get('data');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function submit()
    {
        
        $field = array(
            'nama' => $this->input->post('txt_nama'),
            'alamat' => $this->input->post('txt_alamat'),
            'picture' => $this->input->post('image')
        );
        echo $field;
        die();
        $this->db->insert('data', $field);
        if ($this->db->affected_rows() > 0) {
                 return true;
        } else {
            return false;
        }
    }
    public function getDataById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('data');
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }
    public function update()
    {
        $id = $this->input->post('txt_id');
        $field = array(
            'nama' => $this->input->post('txt_nama'),
            'alamat' => $this->input->post('txt_alamat')
        );
        $this->db->where('id', $id);
        $this->db->update('data', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function delete($id)
    {
        $this->db->where('id', $id);        
        $this->db->delete('data');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }

    }
}

/* End of file Model_blog.php */
