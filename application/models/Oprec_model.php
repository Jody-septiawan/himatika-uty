<?php

class Oprec_model extends CI_Model
{
    public function SearchOprec($nim)
    {
        return $this->db->get_where('oprec', ['nim' => $nim])->result_array();
    }
}
