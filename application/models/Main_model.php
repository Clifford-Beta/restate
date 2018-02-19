<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Clifford Beta
 * this model is mainly for helping repetitive functions
 * @property CI_DB_active_record $db
 */

class Main_model extends CI_Model {

	function __construct()
    {
     parent::__construct();

    }

function fast_login($email,$password, $phone=null){
		$this->db->select('	username ,
							email,
							phone,
							id,
							')->from('user');
        $this->db->where('email',$email);
		$this->db->where('password',sha1($password));


        $query = $this->db->get();
        
		if($query->num_rows()>0){
            // var_dump($query->result());
			return $query->result();

			}else{ return NULL;}



        }

function insert($table,$form_data,$pk_name = NULL){
		//insert into any table
		$t=time();
		$form_data["create_time"] = date("Y-m-d H:i:s",$t);
		$this->db->insert($table,$form_data);
		if($this->db->affected_rows() == 1){
			$result['inserted_id'] = $this->db->insert_id($pk_name);
			$result['respond'] = true;
			return $result;

			}
			else return False;
		}
	function update($table_name,$update_data,$check){
		// update values in any table

		$this->db->where($check);
		$this->db->update($table_name,$update_data);


		if($this->db->affected_rows() == 1){
			//$result['inserted_id'] = $this->db->insert_id($pk_name);
			// $result['respond'] = true;
			return true;

			}
			else{ return False;}

		}





    }

    ?>