<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BaseModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function getDatas($tblName, $conAry, $orderBy='') 
	{
		$this->db->from($tblName);

		if(!empty($conAry))
			$this->db->where( $conAry );
		if($orderBy !='') {
			$this->db->order_by($orderBy, 'ASC');
		}    	
		$ret = $this->db->get()->result();
		return $ret;
	}

	public function updateData($tblName, $conAry, $updateAry) 
	{
		if(!empty($updateAry)) {
			$this->db->update($tblName, $updateAry, $conAry);
		}
		return $this->db->affected_rows();
	}

	public function deleteRow($tblName,  $conArry ) 
	{
		if(!empty($conArry)) {
			$this->db->where($conArry);
			$this->db->delete($tblName);
		}
	}	

	public function deleteByField($tblName, $field, $value ) {
		$this->db->where($field, $value);
        $this->db->delete($tblName);
	}

	public function getCounts($tblName, $conAry) {
    	$this->db->from($tblName);
		if(!empty($conAry))
			$this->db->where( $conAry );
		return $this->db->count_all_results();
    }

    public function insertData($tblName, $data)
    {
        $this->db->insert($tblName, $data);
        return $this->db->insert_id();
    }

	public function getRow($tblName, $conAry) 
	{
    	$this->db->from($tblName);
    	$this->db->where($conAry);
        $query = $this->db->get();
        return $query->row();
    }

    public function setField($tblName, $field, $value, $conAry, $valueString=FALSE) {
    	$this->db->from($tblName);
		$this->db->set($field, $value, $valueString);
		$this->db->where($conAry);
		$this->db->update();
    }
    public function getDataById($tblName, $Id)
    {
        $this->db->from($tblName);
        $this->db->where('Id',$Id);
        $query = $this->db->get();
        return $query->row();
	}

    public function fieldsData($tblName)
    {
        return $this->db->field_data($tblName);
	}	
}


