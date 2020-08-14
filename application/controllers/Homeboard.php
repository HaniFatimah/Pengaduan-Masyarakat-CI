<?php
 class Homeboard extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('modelsistem');
    }
//////////
    public function regis(){
        $data['title'] = "Register";

        $data['masyarakatt'] = $this->modelsistem->get_user();
        $data['c_masyarakatt'] = $this->modelsistem->count_user();

        $this->load->view('register',$data);
    }
///////
    public function aksi_login(){
        $username = $this->input->post('user');
        $password = $this->input->post('pass');
        $where = array(
        'username' => $username,
        'password' => md5($password)
        );
        $cek=$this->modelsistem->cek_login("user",$where)->num_rows();

        if($cek >0){
            $data_session = array(
                'username' =>$username,
                'status' =>'login'
            );

            $this->session ->set_userdata($data_session);

            if($this->session->userdata('status') == 'login'){
            header("Location:".base_url().'sistem/home/'.$this->session->userdata('isername'));
            }else {
                echo "Login Gagal";
            }
        }else{
            echo "username dan password salah!";
        }
    }
///////////
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
/////biasa///////
    public function dasboardd(){
        $data['title'] = "Halaman Dashboard";
        $this->load->view('dashboard', $data);
    }

    // public function regis(){
    //     $data['title'] = "Halaman Register";
    //     $this->load->view('register', $data);
    // }

    public function loginn(){
        $data['title'] = "Halaman Login";
        $this->load->view('login', $data);
    }

    public function datamas(){
        $this->load->view('data-masyarakat');
    }

///hapus
    public function hapus($id_user){
        $where = array('id_user' => $id_user);
        $this->modelsistem->hapus_data($where, 'masyarakatt');
        redirect('Homeboard/regis');
    }
///edittt
   public function edit($id_user)
    {
        $where = array('id_user' => $id_user);
        $data['masyarakatt'] = $this->modelsistem->edit_data($where, 'masyarakatt')->result();
        $this->load->view('edit_use', $data);
    }

    public function update()
    {
        $id_user = $this->input->post('id');
        $nik = $this->input->post('nike');
		$nama = $this->input->post('namae');
		$username = $this->input->post('user');
		$password= $this->input->post('pass');
		$telpon = $this->input->post('telp');
	 
		$data = array(
            
            'nik' => $nik,
            'nama' => $nama,
			'username' => $username,
			'password' => $password,
			'telpon' => $telpon
		);
        

        $this->modelsistem->update_data($id_user, $data);
        redirect('Homeboard/regis');
    }
 //////////   
    public function simpanData(){
        $this->modelsistem->simpanDb();
    }
    

 }

?>