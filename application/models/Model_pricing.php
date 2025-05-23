<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pricing extends CI_Model 
{
    public function all_pricing()
    {
        $query = $this->db->query("SELECT * FROM tbl_pricing_table WHERE lang_id=? ORDER BY id ASC", [$_SESSION['sess_lang_id']]);
        return $query->result_array();
    }

    public function get_pricing_by_type($type = null)
    {
        if ($type) {
            $query = $this->db->query(
                "SELECT * FROM tbl_pricing_table WHERE lang_id=? AND type=? ORDER BY id ASC",
                [$_SESSION['sess_lang_id'], $type]
            );
        } else {
            $query = $this->db->query(
                "SELECT * FROM tbl_pricing_table WHERE lang_id=? ORDER BY id ASC",
                [$_SESSION['sess_lang_id']]
            );
        }

        return $query->result_array();
    }
}