<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {


	public function index()
	{
		$data['la'] = $this->db->query("SELECT * FROM lokasi_ccan_fulfillment GROUP BY sid DESC LIMIT 5");
        $data['lr'] = $this->db->query("SELECT * FROM lokasi_ccan_assurance GROUP BY sid DESC LIMIT 5");
        $data['le'] = $this->db->query("SELECT * FROM lokasi_eos GROUP BY sid DESC LIMIT 5");
		$data['bp'] = $this->db->query("SELECT * FROM berita GROUP BY dibaca DESC LIMIT 3");
		$data['bt'] = $this->db->query("SELECT * FROM berita GROUP BY id_berita DESC LIMIT 3");
		$this->template->load('front-end/_template','front-end/_home',$data);
	}

	public function berita()
	{
		$data['bp'] = $this->db->query("SELECT * FROM berita GROUP BY dibaca DESC LIMIT 5");
		$data['bt'] = $this->db->query("SELECT * FROM berita GROUP BY id_berita DESC LIMIT 5");
		$data['ab'] = $this->db->query("SELECT * FROM berita GROUP BY id_berita DESC");
		$this->template->load('front-end/_template','front-end/_berita',$data);
	}

	public function beritadetail($id)
	{
		$data['bp'] = $this->db->query("SELECT * FROM berita GROUP BY dibaca DESC LIMIT 5");
		$data['bt'] = $this->db->query("SELECT * FROM berita GROUP BY id_berita DESC LIMIT 5");
		$b = $this->db->get_where("berita",array("id_berita"=>$id))->row_array();
		$dibaca = $b['dibaca'];
		$this->db->update('berita',array('dibaca'=>$dibaca + 1),array("id_berita"=>$id));
		$data['bo'] = $this->db->get_where("berita",array("id_berita"=>$id))->row_array();
		$this->template->load('front-end/_template','front-end/_berita_detail',$data);
	}

	public function profil()
	{
		$data['bp'] = $this->db->query("SELECT * FROM berita GROUP BY dibaca DESC LIMIT 5");
		$data['bt'] = $this->db->query("SELECT * FROM berita GROUP BY id_berita DESC LIMIT 5");
		$data['p'] = $this->db->get_where("profil",array("id_profil"=>1))->row_array();
		$this->template->load('front-end/_template','front-end/_profil',$data);
	}

    public function input_ccan_fulfillment()
    {
        if(isset($_POST['input'])) {
            $data = array(
                'sid' 		=> $this->input->post('sid'),
                'kategori' 	=> $this->input->post('kategori'),
                'no_order' 	=> $this->input->post('no_order'),
                'nama_odp' 	=> $this->input->post('nama_odp'),
                'port' 	    => $this->input->post('port'),
                'sn_ont' 	=> $this->input->post('sn_ont'),
                'alamat' 	=> $this->input->post('alamat'),
                'latittude' => $this->input->post('latittude'),
                'longitude' => $this->input->post('longitude'),
                'keterangan'=> $this->input->post('keterangan'),
            );
            $this->db->insert('validasi_ccan_fulfillment',$data);
            redirect('web/input_ccan_fulfillment');
        }else{
            $data['v'] = $this->db->get('validasi_ccan_fulfillment');
            $data['k'] = $this->db->get('kategori');
            $this->template->load('front-end/_template','front-end/_input_ccan_fulfillment',$data);
        }
    }

	public function lokasi_ccan_fulfillment()
	{
		$data['la'] = $this->db->get("lokasi_ccan_fulfillment");
		$this->template->load('front-end/_template','front-end/_lokasi_ccan_fulfillment',$data);
	}

    public function lokasi_ccan_assurance()
    {
        $data['lr'] = $this->db->get("lokasi_ccan_assurance");
        $this->template->load('front-end/_template','front-end/_lokasi_ccan_assurance',$data);
    }

    public function lokasi_eos()
    {
        $data['le'] = $this->db->get("lokasi_eos");
        $this->template->load('front-end/_template','front-end/_lokasi_eos',$data);
    }

	public function direction()
	{
		if(isset($_POST['cari'])) {
			$data = array(
				'saddr' => $_POST['asal'],
				'daddr' => $_POST['tujuan'],
				'l'		=> $this->db->query("SELECT * FROM lokasi_ccan_fulfillment GROUP BY sid DESC LIMIT 5"),
				);
            $this->template->load('front-end/_template','front-end/_direction_v',$data);
        }else{
        	$data['l'] = $this->db->query("SELECT * FROM lokasi_ccan_fulfillment GROUP BY sid DESC LIMIT 5");
			$this->template->load('front-end/_template','front-end/_direction',$data);
        }
	}

	public function lokasi_ccan_fulfillment_one($id)
	{
		$data['lo'] = $this->db->get_where("lokasi_ccan_fulfillment",array("id"=>$id))->row_array();
		$this->template->load('front-end/_template','front-end/_lokasi_ccan_fulfillment_one',$data);
	}

    public function lokasi_ccan_assurance_one($id)
    {
        $data['lr'] = $this->db->get_where("lokasi_ccan_assurance",array("id"=>$id))->row_array();
        $this->template->load('front-end/_template','front-end/_lokasi_ccan_assurance_one',$data);
    }

    public function lokasi_eos_one($id)
    {
        $data['le'] = $this->db->get_where("lokasi_eos",array("id"=>$id))->row_array();
        $this->template->load('front-end/_template','front-end/_lokasi_eos_one',$data);
    }

	public function komentar()
	{
		if(isset($_POST['kirim'])) {
			$data = array(
				'nama' 		=> $this->input->post('nama'),
				'email' 	=> $this->input->post('email'),
				'website' 	=> $this->input->post('website'),
				'komentar' 	=> $this->input->post('komentar'),
				);
			$this->db->insert('komentar',$data);
			redirect('web/komentar');
        }else{
			$data['bp'] = $this->db->query("SELECT * FROM berita GROUP BY dibaca DESC LIMIT 3");
			$data['bt'] = $this->db->query("SELECT * FROM berita GROUP BY id_berita DESC LIMIT 3");
        	$data['k'] = $this->db->query("SELECT * FROM komentar GROUP BY id_komentar DESC LIMIT 5");
			$this->template->load('front-end/_template','front-end/_komentar',$data);
        }
	}
}
