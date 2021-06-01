<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ClaimCredit extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->common->set_timezone();
        header("Cache-Control: no cache");
        $login_type = $this->session->userdata('userType');
        if ($login_type != 'user') {
            redirect('login');
        }
        if ($this->session->userdata('cid') != "100028" && ($this->session->userdata('cid') != "100029")) {
            $get_user_token_details = $this->common->get_user_details($this->session->userdata('cid'));
            if ($this->session->userdata('token') != $get_user_token_details->token) {
                redirect('login');
            }
        }
//        $this->load->model('user/m_eposters', 'objeposters');
    }

    public function index(){
        $this->load->view('header');
        $this->load->view('claimCredit');
        $this->load->view('footer');
    }

    function save_claimCredit_visit(){
        $this->db->insert('claim_credit_visit',array('user_id'=>$this->input->post('user_id'),'date_time'=>date('Y-m-d H:i:s')));
        return ($this->db->affected_rows() != 1) ? false : true;
    }
}