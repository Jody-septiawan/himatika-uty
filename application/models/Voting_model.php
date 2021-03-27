<?php

class Voting_model extends CI_Model
{
    public function CekSession($id)
    {
        if (!$id) {
            return redirect('evoting/login');
        } else {
            return 0;
        }
    }
}
