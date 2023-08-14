<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$cmp['p']  = $this->publicmodel->component();
		$this->load->view('gym',$cmp);
	}
	public function payment()
	{
		$this->load->view('payment');
	}
	public function shop()
	{
		$this->load->view('a');
	}
	public function signup()
	{
		$this->load->view('signup');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function home()
	{
		$this->load->view('home');
	}
	public function admin(){
		$this->load->view('admin');
	}
	public function adminprofile(){
		$this->load->view('adminprofile');
	}
	public function myprofile_from_signup()
	{
		$sessi = $this->session->userdata('usersession');
		$sessio = $sessi['name'];
		$abc['g'] = $this->publicmodel->fetchdata($sessio);
		$this->load->view('myprofile_from_signup',$abc);
	}
	public function logout(){
		$this->session->unset_userdata('sessionuser');
		return redirect('Welcome/index');
	}
	
	public function insertdata()
	{
		$array=array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'age' => $this->input->post('age'),
			'hgt' => $this->input->post('hgt'),
			'wgt' => $this->input->post('wgt'),
			'psw' => $this->input->post('psw'),
		);
		$this->publicmodel->insert($array);
		$sess=array('name'=>$array['name']);
		$this->session->set_userdata('usersession',$sess);
		$cmp['p']  = $this->publicmodel->component();
		$this->load->view('home_from_signup',$cmp);
	}
	public function checklogin(){
		$array=array(
			'name' => $this->input->post('name'),
			'psw' => $this->input->post('psw')
		);
		$session=array('name'=>$array['name']);
		if($array = $this->publicmodel->login($array)){
			$this->session->set_userdata('sessionuser',$session);
			$dat['i'] = $this->publicmodel->fetchdata1($session);
			$this->load->view('home_from_login',$dat);
		}
		else{
			echo "incorrect details";
		}
	}
	public function checkadminlogin(){
		$array=array(
			'name' => $this->input->post('name'),
			'psw' => $this->input->post('psw')
		);
		$session=array('name'=>$array['name']);
		if($array = $this->publicmodel->adminlogin($array)){
			$this->session->set_userdata('adminsession',$session);
			$nm = $this->session->userdata('adminsession');
			$admindata['b'] = $this->publicmodel->fetchdata2($nm);
			$this->load->view('adminprofile',$admindata);
		}
		else{
			echo '<script>alert("incorrect details");</script>';
			redirect("Welcome/admin");
		}
	}
	public function fetchuserdata(){
		$data['o']=$this->publicmodel->fetchuserdata();
		$this->load->view('adminprofile',$data);

	}
	public function purchase(){
		$dfg = $this->session->userdata('usersession');
		$pay = array(
			'email' => $this->input->post('email'),
			'adr' => $this->input->post('adr'),
			'city' => $this->input->post('city'),
			'state' => $this->input->post('state'),
			'zip' => $this->input->post('zip'),
			'membership' => $this->input->post('membership'),
			'cname' => $this->input->post('cname'),
			'ccnumb' => $this->input->post('ccnumb'),
			'expmonth' => $this->input->post('expmonth'),
			'expyear' => $this->input->post('expyear'),
			'cvv' => $this->input->post('cvv')
		);
		$this->publicmodel->insertpay($pay,$dfg['name']);
		return redirect("Welcome/myprofile_from_signup");
	}
	public function chngeabout(){
		$arr = array(
			'upd' => $this->input->post('update')
		);
		$this->publicmodel->updateabout($arr);
		$admindata['b'] = $this->publicmodel->fetchdata2($nm);
		$this->load->view('adminprofile',$admindata);
	}
	public function chngefranchise(){
		$arr = array(
			'upd' => $this->input->post('update')
		);
		$this->publicmodel->updatefranchise($arr);
		$nm=$this->session->userdata('adminsession');
		$admindata['b'] = $this->publicmodel->fetchdata2($nm);
		$this->load->view('adminprofile',$admindata);
	}
	public function chngemachines(){
		$arr = array(
			'upd' => $this->input->post('update')
		);
		$this->publicmodel->updatemachines($arr);
		$nm=$this->session->userdata('adminsession');
		$admindata['b'] = $this->publicmodel->fetchdata2($nm);
		$this->load->view('adminprofile',$admindata);
	}
	public function chngeupcomingcentres(){
		$arr = array(
			'upd' => $this->input->post('update')
		);
		$this->publicmodel->updateupcomingcentres($arr);
		$nm=$this->session->userdata('adminsession');
		$admindata['b'] = $this->publicmodel->fetchdata2($nm);
		$this->load->view('adminprofile',$admindata);
	}
	public function chngehappyclients(){
		$arr = array(
			'upd' => $this->input->post('update')
		);
		$this->publicmodel->updatehappyclients($arr);
		$nm=$this->session->userdata('adminsession');
		$admindata['b'] = $this->publicmodel->fetchdata2($nm);
		$this->load->view('adminprofile',$admindata);
	}
	public function chngeprice1(){
		$arr = array(
			'upd' => $this->input->post('update')
		);
		$this->publicmodel->updateprice1($arr);
		$nm=$this->session->userdata('adminsession');
		$admindata['b'] = $this->publicmodel->fetchdata2($nm);
		$this->load->view('adminprofile',$admindata);
	}
	public function chngeprice2(){
		$arr = array(
			'upd' => $this->input->post('update')
		);
		$this->publicmodel->updateprice2($arr);
		$nm=$this->session->userdata('adminsession');
		$admindata['b'] = $this->publicmodel->fetchdata2($nm);
		$this->load->view('adminprofile',$admindata);
	}
	public function adminlogout(){
		$this->session_>unset_userdata('adminsession');
		return redirect('gym');
	}
	public function contact(){
		$aar = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'sub' => $this->input->post('sub'),
			'msg'   => $this->input->post('msg')
		);
		$this->publicmodel->coninsert($aar);
		return redirect("Welcome/index");
	}
	public function contact2(){
		$aar = array(
			'msg'   => $this->input->post('msg')
		);
		$sess = $this->session->userdata('sessionuser');
		$this->publicmodel->coninsert2($aar,$sess);
		$dat['i'] = $this->publicmodel->fetchdata1($sess);
		$this->load->view('home_from_login',$dat);
		
	}
	public function updatename(){
		$array = array(
			'name' => $this->input->post('name')
		);
		$sess = $this->session->userdata('sessionuser');
		$this->session->unset_userdata('sessionuser');
		$this->publicmodel->updatename($array,$sess);
		$this->session->set_userdata('sessionuser',$array);
		$dat['i'] = $this->publicmodel->fetchdata1($array);
		$this->load->view('home_from_login',$dat);
	}
	public function updateage(){
		$array = array(
			'age' => $this->input->post('name')
		);
		$sess = $this->session->userdata('sessionuser');
		$this->publicmodel->updateage($array,$sess);
		$dat['i'] = $this->publicmodel->fetchupdateddata2($array,$sess);
		$this->load->view('home_from_login',$dat);
	}
	public function updatehgt(){
		$array = array(
			'hgt' => $this->input->post('name')
		);
		$sess = $this->session->userdata('sessionuser');
		$this->publicmodel->updatehgt($array,$sess);
		$dat['i'] = $this->publicmodel->fetchupdateddata($array,$sess);
		$this->load->view('home_from_login',$dat);
	}
	public function updatewgt(){
		$array = array(
			'wgt' => $this->input->post('name')
		);
		$sess = $this->session->userdata('sessionuser');
		$this->publicmodel->updatewgt($array,$sess);
		$dat['i'] = $this->publicmodel->fetchupdateddata3($array,$sess);
		$this->load->view('home_from_login',$dat);
	}
	public function updateadr(){
		$array = array(
			'adr' => $this->input->post('name')
		);
		$sess = $this->session->userdata('sessionuser');
		$this->publicmodel->updateadr($array,$sess);
		$dat['i'] = $this->publicmodel->fetchupdateddata4($array,$sess);
		$this->load->view('home_from_login',$dat);
	}
	public function updatecity(){
		$array = array(
			'city' => $this->input->post('name')
		);
		$sess = $this->session->userdata('sessionuser');
		$this->publicmodel->updatecity($array,$sess);
		$dat['i'] = $this->publicmodel->fetchupdateddata5($array,$sess);
		$this->load->view('home_from_login',$dat);
	}
	public function updatestate(){
		$array = array(
			'state' => $this->input->post('name')
		);
		$sess = $this->session->userdata('sessionuser');
		$this->publicmodel->updatestate($array,$sess);
		$dat['i'] = $this->publicmodel->fetchupdateddata6($array,$sess);
		$this->load->view('home_from_login',$dat);
	}
	public function updatezip(){
		$array = array(
			'zip' => $this->input->post('name')
		);
		$sess = $this->session->userdata('sessionuser');
		$this->publicmodel->updatezip($array,$sess);
		$dat['i'] = $this->publicmodel->fetchupdateddata7($array,$sess);
		$this->load->view('home_from_login',$dat);
	}
	public function updatepsw(){
		$array = array(
			'psw' => $this->input->post('name')
		);
		$sess = $this->session->userdata('sessionuser');
		$this->publicmodel->updatepsw($array,$sess);
		$dat['i'] = $this->publicmodel->fetchdata1($array);
		$this->load->view('home_from_login',$dat);
	}
	public function updateadminname(){
		$array = array(
			'name' => $this->input->post('name')
		);
		$sess = $this->session->userdata('adminsession');
		$this->session->unset_userdata('adminsession');
		$this->publicmodel->updateadminname($array,$sess);
		$this->session->set_userdata('adminsession',$array);
		$dat['b'] = $this->publicmodel->fetchdata2($array);
		$this->load->view('adminprofile',$dat);

	}
	public function updateadminpsw(){
		$array = array(
			'psw' => $this->input->post('name')
		);
		$sess = $this->session->userdata('adminsession');
		$this->publicmodel->updateadminpsw($array,$sess);
		$dat['b'] = $this->publicmodel->fetchdata2($sess);
		$this->load->view('adminprofile',$dat);

	}

}
?>


