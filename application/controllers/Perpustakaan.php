<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perpustakaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('perpus');
    }

    function index()
    {
        $this->perpus->cek();
    }
}
?>