<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notebook extends CI_Controller {
    private $notes = []; // Simpan catatan dalam array

    public function index() {
        $data['notes'] = $this->notes;
        $this->load->view('notebook/index', $data);
    }

    public function tambah_catatan() {
        $catatan = $this->input->post('catatan');
        if (!empty($catatan)) {
            $this->notes[] = $catatan;
        }
        redirect('notebook');
    }
}
