<?php
    Class modelsistem extends CI_Model{

        public function simpanDb(){    
            $config['upload_path'] = '.assets';
            $config['allowed_types'] = 'jpg|png|gif';
            $config['max_size'] = '2048000';
            $config['file_name'] = url_title($this->input->post('gambar'));
            $filename = $this->upload->file_name;
            $this->upload->initialize($config);
            $this->upload->do_upload('gambar');
            $data = $this->upload->data();
    
            $data = array(
                'id_user' => '',
                'nik' => $this->input->post('nike'),
                'nama' => $this->input->post('namae'),
                'username' => $this->input->post('user'),
                'password' => $this->input->post('pass'),
                'telpon' => $this->input->post('telp')
            );
    
            $this->db->insert('masyarakatt', $data);
            header("Location:".base_url().'Homeboard/regis');
        }
////////hapuss
            public function hapus_data($where, $table){
                $this->db->where($where);
                $this->db->delete($table);
            }
/////edit
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($id_user, $data)
    {
        $this->db->set($data);
        $this->db->where('id_user', $id_user);
        $this->db->update('masyarakatt');
    }


///////////////
        public function cek_login($table,$where){
            return $this->db->get_where($table,$where);
        }
/////////
        public function get_user(){
            $data = $this->db->get('masyarakatt');
            return $data->result();
        }

        public function count_user(){
            $data = $this->db->get('masyarakatt');
            return $data->num_rows();
        }
}

    
?>