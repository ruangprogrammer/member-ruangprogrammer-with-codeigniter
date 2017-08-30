<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Download_model extends CI_Model{
    public $table = 'download';
    public $id = 'download_id';
    public $code = 'download_code';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }


    function get_by_code($code)
    {
        $this->db->where($this->code, $code);
        return $this->db->get($this->table)->row();
    }



}