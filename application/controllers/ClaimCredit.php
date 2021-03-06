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

        $header_data['page_title'] = "Claim Credit Page";
        $data['memberId'] = $this->getMemberId();

        $this->load->view('header', $header_data);
        $this->load->view('claimCredit', $data);
        $this->load->view('footer');
    }

    public function save_claimCredit_visit(){
        $this->db->insert('claim_credit_visit',array('user_id'=>$this->input->post('user_id'),'date_time'=>date('Y-m-d H:i:s')));
        echo ($this->db->affected_rows() != 1) ? 'false' : 'true';
    }

    private function getMemberId()
    {
        $user_id = $this->session->userdata('cid');

        $this->db->select('identifier_id');
        $this->db->where('cust_id', $user_id);
        $response = $this->db->get('customer_master');

        $memberId = $response->result()[0]->identifier_id;

        $memberId = str_replace("cco\\", "", $memberId);
        return $memberId;
    }
}
