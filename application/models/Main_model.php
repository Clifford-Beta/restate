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

    function suggestions(){

        $query = $this->db->query('select house_name as name from house
                                    union
                                    select land_lr as name
                                     from land
                                     UNION 
                                     select space_name as name
                                     from space
                                      ');

        if ($query->num_rows()>0){
            return $query->result();
        }
        else {return NULL;}

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

		function get_specific($table_name,$rule=NULL){
		//select a particular field from a table based on status
		$this->db->select('*')->from($table_name);
		if($rule != NULL){$this->db->where($rule);}
		// $this->db->where('status',1);
		$query = $this->db->get();
		if ($query->num_rows()>0){
			return $query->result();
			}
		else {return NULL;}
		}

		function get_many_hse($rule=NULL, $limit=NULL){
		//select a particular field from a table based on status
		$this->db->select('idhouse as id, house_name as name, house_location as location, house_description as description,
		house_area as area, house_price as price, house_bedroom as bedroom, house_bath as bathroom, 
		house_garage as garage, house_image as image, house_status as status, user.username as owner, user.email as email, house.status as active')->from('house')->join('user','user.id = house_owner');
		if($rule != NULL){$this->db->where($rule);}
		if($limit != NULL){$this->db->limit($limit);}
//		 $this->db->where('status',1);
		$this->db->order_by('house.create_time', 'DESC');
		$query = $this->db->get();
		if ($query->num_rows()>0){
			return $query->result_array();
			}
		else {return NULL;}
		}
    function get_sr_hse($rule=NULL, $limit=NULL){
        //select a particular field from a table based on status
        $this->db->select('idhouse as id, house_name as name, house_location as location, house_description as description,
		house_area as area, house_price as price, house_bedroom as bedroom, house_bath as bathroom, 
		house_garage as garage, house_image as image, house_status as status, user.username as owner, user.email as email, house.status as active')->from('house')->join('user','user.id = house_owner');
        if($rule != NULL){$this->db->like($rule);}
        if($limit != NULL){$this->db->limit($limit);}
//		 $this->db->where('status',1);
        $this->db->order_by('house.create_time', 'DESC');
        $query = $this->db->get();
        if ($query->num_rows()>0){
            return $query->result_array();
        }
        else {return NULL;}
    }

		function get_many_lnd($rule=NULL, $limit=NULL){
		//select a particular field from a table based on status
		$this->db->select('land_id as id,land_lr as name,  land_location as location, land_description as description,
		land_area as area, land_price as price, land_image as image, user.username as owner, user.email as email,land.status as active')->from('land')->join('user','user.id = land_owner');
		if($rule != NULL){$this->db->where($rule);}
		if($limit != NULL){$this->db->limit($limit);}
		// $this->db->where('status',1);
		$this->db->order_by('land.create_time', 'DESC');
		$query = $this->db->get();
		if ($query->num_rows()>0){
			return $query->result_array();
			}
		else {return NULL;}
		}

    function get_many_spc($rule=NULL, $limit=NULL){
        //select a particular field from a table based on status
        $this->db->select('idspace as id,space_name as name,  space_location as location, space_description as description,
		space_area as area, space_price as price, space_image as image, user.username as owner, user.email as email, space.status as active')->from('space')->join('user','user.id = space_owner');
        if($rule != NULL){$this->db->where($rule);}
        if($limit != NULL){$this->db->limit($limit);}
        // $this->db->where('status',1);
        $this->db->order_by('space.create_time', 'DESC');
        $query = $this->db->get();
        if ($query->num_rows()>0){
            return $query->result_array();
        }
        else {return NULL;}
    }



    }

    ?>