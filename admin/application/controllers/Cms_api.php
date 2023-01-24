<?php
ini_set("memory_limit", "256M");
defined('BASEPATH') or exit('No direct script access allowed');

class Cms_api extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Africa/Lagos');
		$this->load->model('BaseModel');
	}
	
	public function sendEmail($from, $to, $subject, $message)
	{
        $this->load->library('email');
        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) {
            return  true;
        } else {
			//show_error($this->email->print_debugger());
			return  false;
        }		
	}

	public function reply($status, $message, $data)
	{
		$result = array('status' => $status, 'message' => $message, 'data' => $data);
		echo json_encode($result);
	}

	public function update_location()
	{
		$devId = $this->input->post('devid');
		$lat = $this->input->post('lat');
		$lng = $this->input->post('lng');
		$row = $this->BaseModel->getRow('tbl_location', ['user_id' => $devId]);
		if($row == null){
			$this->BaseModel->insertData('tbl_location', ['user_id' => $devId, 'lat'=>$lat, 'lng'=> $lng]);
		}else{
			$this->BaseModel->updateData('tbl_location', ['user_id' => $devId], ['lat'=>$lat, 'lng'=> $lng]);
		}
		$this->reply(200, 'ok', null);
	}

	public function locations()
	{
		$rows = $this->BaseModel->getDatas('tbl_location', null);
		$this->reply(200, 'ok', $rows);
	}

}
