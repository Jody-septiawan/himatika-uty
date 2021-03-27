<?php

class Admin_model extends CI_Model
{
    public function CekSession($id)
    {
        if (!$id) {
            return redirect('admin/login');
        } else {
            return 0;
        }
    }
}
