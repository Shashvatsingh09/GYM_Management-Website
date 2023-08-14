<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class publicmodel extends CI_Model {
	protected $data = 'signup';
	protected $database = 'admin';
	protected $compdata = 'gym';
	public function insert($array){
		$this->db->insert('signup',$array);
		return true;
	}
	public function insertpay($array,$dfg){
		$this->db->set('email','adr','city','state','zip','membership','cname','ccnumb','expmonth','expyear','cvv');
		$this->db->where('name', $dfg);
		$query = $this->db->update('signup',$array);
		return true;
	}
	public function login($array){
		$query = $this->db->select('*')->where($array)->get($this->data);
		if($query->num_rows()>0) {
			return $query->result();

		}else{
			return false;
		}
	}
	public function adminlogin($array){
		$query = $this->db->select('*')->where($array)->get($this->database);
		if($query->num_rows()>0) {
			return $query->result();

		}else{
			return false;
		}
	}
	public function fetchdata1($sess){
	
		$query = $this->db->select('*')->where('name',$sess['name'])->get($this->data);	
		
		return $query;
	}
	public function fetchdata($sess){
		$query = $this->db->select('*')->where('name',$sess)->get($this->data);
		return $query;
	}
	public function update($arr,$qwe){
		$this->db->set('name');
		$this->db->where('name', $qwe['name']);
		$query = $this->db->update('signup',$arr);
		return true;
	}
	public function fetchdata2($arr){
		$query = $this->db->select('*')->where('name',$arr['name'])->get($this->database);
		return $query;
	}
	public function fetchuserdata(){
		$query=$this->db->select('*')->get($this->data);
		return $query;
	}
	public function component(){
		$query=$this->db->select('*')->get($this->compdata);
		return $query;
	}
	public function updateabout($arr){
		$this->db->set('about',$arr['upd']);
		$query = $this->db->update('gym');
	}
	public function updatefranchise($arr){
		$this->db->set('franchise',$arr['upd']);
		$query = $this->db->update('gym');
	}
	public function updatemachines($arr){
		$this->db->set('machines',$arr['upd']);
		$query = $this->db->update('gym');
	}
	public function updateupcomingcentres($arr){
		$this->db->set('upcoming_centres',$arr['upd']);
		$query = $this->db->update('gym');
	}
	public function updatehappyclients($arr){
		$this->db->set('happy_clients',$arr['upd']);
		$query = $this->db->update('gym');
	}
	public function updateprice1($arr){
		$this->db->set('price1',$arr['upd']);
		$query = $this->db->update('gym');
	}
	public function updateprice2($arr){
		$this->db->set('price2',$arr['upd']);
		$query = $this->db->update('gym');
	}
	public function coninsert($aar){
		$this->db->insert('contact',$aar);
		return true;
	}
	public function coninsert2($aar,$sess){
		$this->db->set('contact',$aar['msg']);
		$this->db->where('name',$sess['name']);
		$query = $this->db->update('signup');
		return true;
	}
	public function updatename($arr,$sess){
		$this->db->set('name',$arr['name']);
		$this->db->where('name',$sess['name']);
		$query = $this->db->update('signup');
	}
	public function updateage($arr,$sess){
		$this->db->set('age',$arr['age']);
		$this->db->where('name',$sess['name']);
		$query = $this->db->update('signup');
	}
	public function updatehgt($arr,$sess){
		$this->db->set('hgt',$arr['hgt']);
		$this->db->where('name',$sess['name']);
		$query = $this->db->update('signup');
	}
	public function updatewgt($arr,$sess){
		$this->db->set('wgt',$arr['wgt']);
		$this->db->where('name',$sess['name']);
		$query = $this->db->update('signup');
	}
	public function updateadr($arr,$sess){
		$this->db->set('adr',$arr['adr']);
		$this->db->where('name',$sess['name']);
		$query = $this->db->update('signup');
	}
	public function updatecity($arr,$sess){
		$this->db->set('city',$arr['city']);
		$this->db->where('name',$sess['name']);
		$query = $this->db->update('signup');
	}
	public function updatestate($arr,$sess){
		$this->db->set('state',$arr['state']);
		$this->db->where('name',$sess['name']);
		$query = $this->db->update('signup');
	}
	public function updatezip($arr,$sess){
		$this->db->set('zip',$arr['zip']);
		$this->db->where('name',$sess['name']);
		$query = $this->db->update('signup');
	}
	public function updatepsw($arr,$sess){
		$this->db->set('psw',$arr['psw']);
		$this->db->where('name',$sess['name']);
		$query = $this->db->update('signup');
	}
	public function updateadminname($arr,$sess){
		$this->db->set('name',$arr['name']);
		$this->db->where('name',$sess['name']);
		$query = $this->db->update('admin');
	}
	public function updateadminpsw($arr,$sess){
		$this->db->set('psw',$arr['psw']);
		$this->db->where('name',$sess['name']);
		$query = $this->db->update('admin');
	}
	public function fetchupdateddata($arr,$sess){
		$this->db->select('*');
		$this->db->where('name',$sess['name']);
		$this->db->where('hgt',$arr['hgt']);
		$query = $this->db->get($this->data);
		return $query;

	}
	public function fetchupdateddata2($arr,$sess){
		$this->db->select('*');
		$this->db->where('name',$sess['name']);
		$this->db->where('age',$arr['age']);
		$query = $this->db->get($this->data);
		return $query;

	}
	public function fetchupdateddata3($arr,$sess){
		$this->db->select('*');
		$this->db->where('name',$sess['name']);
		$this->db->where('wgt',$arr['wgt']);
		$query = $this->db->get($this->data);
		return $query;

	}
	public function fetchupdateddata4($arr,$sess){
		$this->db->select('*');
		$this->db->where('name',$sess['name']);
		$this->db->where('adr',$arr['adr']);
		$query = $this->db->get($this->data);	
		return $query;

	}
	public function fetchupdateddata5($arr,$sess){
		$this->db->select('*');
		$this->db->where('name',$sess['name']);
		$this->db->where('city',$arr['city']);
		$query = $this->db->get($this->data);
		return $query;

	}
	public function fetchupdateddata6($arr,$sess){
		$this->db->select('*');
		$this->db->where('name',$sess['name']);
		$this->db->where('state',$arr['state']);
		$query = $this->db->get($this->data);
		return $query;

	}
		public function fetchupdateddata7($arr,$sess){
		$this->db->select('*');
		$this->db->where('name',$sess['name']);
		$this->db->where('zip',$arr['zip']);
		$query = $this->db->get($this->data);
		return $query;

	}

}
?>