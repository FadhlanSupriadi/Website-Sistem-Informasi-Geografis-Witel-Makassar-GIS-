<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function Construct()
	{
		parent::Construct();
		$this->load->helper('login');
		cek_login();
	}

	public function index()
	{
		$this->template->load('back-end/_template','back-end/_dashboard');
	}

	public function profil()
	{
		if(isset($_POST['update'])){
			$data = array(
				'judul'			=> $this->input->post('judul'),
				'isi_profil'	=> $this->input->post('isi'),
			);
			$this->db->where('id_profil',$this->input->post('id'));
			$this->db->update('profil',$data);
			redirect('dashboard/profil');
		}else{
			$data['p'] = $this->db->get_where('profil',array('id_profil'=>1))->row_array();
			$this->template->load('back-end/_template','back-end/_profil',$data);
		}
	}

    public function validasi_ccan_fulfillment()
    {
        if(isset($_POST['simpan'])){
            $data = array(
                'sid'		=> $this->input->post('sid'),
                'kategori'	=> $this->input->post('kategori'),
                'no_order'	=> $this->input->post('no_order'),
                'nama_odp'	=> $this->input->post('nama_odp'),
                'port'		=> $this->input->post('port'),
                'sn_ont'	=> $this->input->post('sn_ont'),
                'alamat'	=> $this->input->post('alamat'),
                'latittude'	=> $this->input->post('lat'),
                'longitude'	=> $this->input->post('long'),
                'keterangan'=> $this->input->post('keterangan'),
            );
            $this->db->insert('lokasi_ccan_fulfillment',$data);
            redirect('dashboard/validasi_ccan_fulfillment');
        }elseif(isset($_POST['update'])){
            $data = array(
                'sid'		=> $this->input->post('sid'),
                'kategori'	=> $this->input->post('kategori'),
                'no_order'	=> $this->input->post('no_order'),
                'nama_odp'	=> $this->input->post('nama_odp'),
                'port'		=> $this->input->post('port'),
                'sn_ont'	=> $this->input->post('sn_ont'),
                'alamat'	=> $this->input->post('alamat'),
                'latittude'	=> $this->input->post('lat'),
                'longitude'	=> $this->input->post('long'),
                'keterangan'=> $this->input->post('keterangan'),
            );
            $this->db->where('id',$this->input->post('id'));
            $this->db->update('validasi_ccan_fulfillment',$data);
            redirect('dashboard/validasi_ccan_fulfillment');
        }else{
            $data['l'] = $this->db->get('validasi_ccan_fulfillment');
            $this->template->load('back-end/_template','back-end/_validasi_ccan_fulfillment',$data);
        }
    }

    public function validasi_ccan_fulfillment_edit($id)
    {
        $data['k'] = $this->db->get('kategori');
        $data['l'] = $this->db->get_where('validasi_ccan_fulfillment',array('id'=>$id))->row_array();
        $this->template->load('back-end/_template','back-end/_validasi_ccan_fulfillment_edit',$data);
    }

    public function validasi_ccan_fulfillment_delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('validasi_ccan_fulfillment');
        redirect('dashboard/validasi_ccan_fulfillment');
    }

	public function lokasi_ccan_fulfillment()
	{
		if(isset($_POST['simpan'])){
			$data = array(
				'sid'		=> $this->input->post('sid'),
				'kategori'	=> $this->input->post('kategori'),
				'no_order'	=> $this->input->post('no_order'),
				'nama_odp'	=> $this->input->post('nama_odp'),
                'port'		=> $this->input->post('port'),
                'sn_ont'	=> $this->input->post('sn_ont'),
                'alamat'	=> $this->input->post('alamat'),
				'latittude'	=> $this->input->post('lat'),
				'longitude'	=> $this->input->post('long'),
                'keterangan'=> $this->input->post('keterangan'),
			);
			$this->db->insert('lokasi_ccan_fulfillment',$data);
			redirect('dashboard/lokasi_ccan_fulfillment');
		}elseif(isset($_POST['update'])){
			$data = array(
                'sid'		=> $this->input->post('sid'),
                'kategori'	=> $this->input->post('kategori'),
                'no_order'	=> $this->input->post('no_order'),
                'nama_odp'	=> $this->input->post('nama_odp'),
                'port'		=> $this->input->post('port'),
                'sn_ont'	=> $this->input->post('sn_ont'),
                'alamat'	=> $this->input->post('alamat'),
                'latittude'	=> $this->input->post('lat'),
                'longitude'	=> $this->input->post('long'),
                'keterangan'=> $this->input->post('keterangan'),
			);
			$this->db->where('id',$this->input->post('id'));
			$this->db->update('lokasi_ccan_fulfillment',$data);
			redirect('dashboard/lokasi_ccan_fulfillment');
		}else{
			$data['l'] = $this->db->get('lokasi_ccan_fulfillment');
			$this->template->load('back-end/_template','back-end/_lokasi_ccan_fulfillment',$data);
		}
	}

	public function lokasi_ccan_fulfillment_tambah()
	{
		$data['k'] = $this->db->get('kategori');
		$this->template->load('back-end/_template','back-end/_lokasi_ccan_fulfillment_tambah',$data);
	}

	public function lokasi_ccan_fulfillment_edit($id)
	{
		$data['k'] = $this->db->get('kategori');
		$data['l'] = $this->db->get_where('lokasi_ccan_fulfillment',array('id'=>$id))->row_array();
		$this->template->load('back-end/_template','back-end/_lokasi_ccan_fulfillment_edit',$data);
	}

	public function lokasi_ccan_fulfillment_delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('lokasi_ccan_fulfillment');
		redirect('dashboard/lokasi_ccan_fulfillment');
	}

	public function lokasi_ccan_fulfillment_kategori()
	{
		if (isset($_POST['simpan'])) {
			if ($_FILES['gambar']['error'] <> 4) {

		        $config['upload_path'] = './uploads/icon';
		        $config['allowed_types'] = 'jpg|png|gif|bmp';
		        $this->load->library('upload', $config);
		 
		        if (!$this->upload->do_upload('gambar')) {
		            $error = array('error' => $this->upload->display_errors());
		            $this->index($error);
		        } else {
		            $hasil 	= $this->upload->data();
					$data = array(
						'nama_kategori'	=> $this->input->post('nama'),
						'keterangan'	=> $this->input->post('keterangan'),
						'ikon'			=> $hasil['file_name'],
					);
					$this->db->insert('kategori',$data);
					redirect('dashboard/lokasi_ccan_fulfillment_kategori');
				}
			} else {
				$data = array(
					'nama_kategori'	=> $this->input->post('nama'),
					'keterangan'	=> $this->input->post('keterangan'),
				);
				$this->db->insert('kategori',$data);
				redirect('dashboard/lokasi_ccan_fulfillment_kategori');
		    }
		}elseif (isset($_POST['update'])) {
			if ($_FILES['gambar']['error'] <> 4) {

		        $config['upload_path'] = './uploads/icon';
		        $config['allowed_types'] = 'jpg|png|gif|bmp';
		        $this->load->library('upload', $config);
		 
		        if (!$this->upload->do_upload('gambar')) {
		            $error = array('error' => $this->upload->display_errors());
		            $this->index($error);
		        } else {
		            $hasil 	= $this->upload->data();
					$data = array(
						'nama_kategori'	=> $this->input->post('nama'),
						'keterangan'	=> $this->input->post('keterangan'),
						'ikon'			=> $hasil['file_name'],
					);

					$id 	= $this->input->post('id');
					$query 	= $this->db->get_where('kategori',array('id'=>$id))->row_array();
	    			unlink("./uploads/icon/".$query['ikon']);

					$this->db->where('id',$id);
					$this->db->update('kategori',$data);
					redirect('dashboard/lokasi_ccan_fulfillment_kategori');
				}
			} else {
				$data = array(
					'nama_kategori'	=> $this->input->post('nama'),
					'keterangan'	=> $this->input->post('keterangan'),
				);
				$this->db->where('id',$this->input->post('id'));
				$this->db->update('kategori',$data);
				redirect('dashboard/lokasi_ccan_fulfillment_kategori');
		    }
		}else{
			$data['k'] = $this->db->get('kategori');
			$this->template->load('back-end/_template','back-end/_lokasi_ccan_fulfillment_kategori',$data);
		}
	}

	public function lokasi_ccan_fulfillment_kategori_edit($id)
	{
		$data['l'] = $this->db->get_where('kategori',array('id'=>$id))->row_array();
		$this->template->load('back-end/_template','back-end/_lokasi_ccan_fulfillment_kategori_edit',$data);
	}

	public function lokasi_ccan_fulfillment_kategori_delete($id)
	{
	    $query = $this->db->get_where('kategori',array('id'=>$id))->row_array();
	    
	    unlink("./uploads/icon/".$query['ikon']);
	    
	    $this->db->delete('kategori', array('id' => $id));
		redirect('dashboard/lokasi_ccan_fulfillment_kategori');
	}

    public function lokasi_ccan_assurance()
{
    if(isset($_POST['simpan'])){
        $data = array(
            'sid'		=> $this->input->post('sid'),
            'kategori'	=> $this->input->post('kategori'),
            'nama_node'	=> $this->input->post('nama_node'),
            'port'	    => $this->input->post('port'),
            'alamat'	=> $this->input->post('alamat'),
            'latittude'	=> $this->input->post('lat'),
            'longitude'	=> $this->input->post('long'),
            'keterangan'=> $this->input->post('keterangan'),
        );
        $this->db->insert('lokasi_ccan_assurance',$data);
        redirect('dashboard/lokasi_ccan_assurance');
    }elseif(isset($_POST['update'])){
        $data = array(
            'sid'		=> $this->input->post('sid'),
            'kategori'	=> $this->input->post('kategori'),
            'nama_node'	=> $this->input->post('nama_node'),
            'port'	    => $this->input->post('port'),
            'alamat'	=> $this->input->post('alamat'),
            'latittude'	=> $this->input->post('lat'),
            'longitude'	=> $this->input->post('long'),
            'keterangan'=> $this->input->post('keterangan')
        );
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('lokasi_ccan_assurance',$data);
        redirect('dashboard/lokasi_ccan_assurance');
    }else{
        $data['l'] = $this->db->get('lokasi_ccan_assurance');
        $this->template->load('back-end/_template','back-end/_lokasi_ccan_assurance',$data);
    }
}

    public function lokasi_ccan_assurance_tambah()
    {
        $data['k'] = $this->db->get('kategori');
        $this->template->load('back-end/_template','back-end/_lokasi_ccan_assurance_tambah',$data);
    }

    public function lokasi_ccan_assurance_edit($id)
    {
        $data['k'] = $this->db->get('kategori');
        $data['l'] = $this->db->get_where('lokasi_ccan_assurance',array('id'=>$id))->row_array();
        $this->template->load('back-end/_template','back-end/_lokasi_ccan_assurance_edit',$data);
    }

    public function lokasi_ccan_assurance_delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('lokasi_ccan_assurance');
        redirect('dashboard/lokasi_ccan_assurance');
    }

    public function lokasi_ccan_assurance_kategori()
    {
        if (isset($_POST['simpan'])) {
            if ($_FILES['gambar']['error'] <> 4) {

                $config['upload_path'] = './uploads/icon';
                $config['allowed_types'] = 'jpg|png|gif|bmp';
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('gambar')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->index($error);
                } else {
                    $hasil 	= $this->upload->data();
                    $data = array(
                        'nama_kategori'	=> $this->input->post('nama'),
                        'keterangan'	=> $this->input->post('keterangan'),
                        'ikon'			=> $hasil['file_name'],
                    );
                    $this->db->insert('kategori',$data);
                    redirect('dashboard/lokasi_ccan_assurance_kategori');
                }
            } else {
                $data = array(
                    'nama_kategori'	=> $this->input->post('nama'),
                    'keterangan'	=> $this->input->post('keterangan'),
                );
                $this->db->insert('kategori',$data);
                redirect('dashboard/lokasi_ccan_assurance_kategori');
            }
        }elseif (isset($_POST['update'])) {
            if ($_FILES['gambar']['error'] <> 4) {

                $config['upload_path'] = './uploads/icon';
                $config['allowed_types'] = 'jpg|png|gif|bmp';
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('gambar')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->index($error);
                } else {
                    $hasil 	= $this->upload->data();
                    $data = array(
                        'nama_kategori'	=> $this->input->post('nama'),
                        'keterangan'	=> $this->input->post('keterangan'),
                        'ikon'			=> $hasil['file_name'],
                    );

                    $id 	= $this->input->post('id');
                    $query 	= $this->db->get_where('kategori',array('id'=>$id))->row_array();
                    unlink("./uploads/icon/".$query['ikon']);

                    $this->db->where('id',$id);
                    $this->db->update('kategori',$data);
                    redirect('dashboard/lokasi_ccan_assurance_kategori');
                }
            } else {
                $data = array(
                    'nama_kategori'	=> $this->input->post('nama'),
                    'keterangan'	=> $this->input->post('keterangan'),
                );
                $this->db->where('id',$this->input->post('id'));
                $this->db->update('kategori',$data);
                redirect('dashboard/lokasi_ccan_assurance_kategori');
            }
        }else{
            $data['k'] = $this->db->get('kategori');
            $this->template->load('back-end/_template','back-end/_lokasi_ccan_assurance_kategori',$data);
        }
    }

    public function lokasi_ccan_assurance_kategori_edit($id)
    {
        $data['l'] = $this->db->get_where('kategori',array('id'=>$id))->row_array();
        $this->template->load('back-end/_template','back-end/_lokasi_ccan_assurance_kategori_edit',$data);
    }

    public function lokasi_ccan_assurance_kategori_delete($id)
    {
        $query = $this->db->get_where('kategori',array('id'=>$id))->row_array();

        unlink("./uploads/icon/".$query['ikon']);

        $this->db->delete('kategori', array('id' => $id));
        redirect('dashboard/lokasi_ccan_assurance_kategori');
    }

    public function lokasi_eos()
    {
        if(isset($_POST['simpan'])){
            $data = array(
                'sid'		        => $this->input->post('sid'),
                'kategori'	        => $this->input->post('kategori'),
                'nama_cc'	        => $this->input->post('nama_cc'),
                'datek_pe'	        => $this->input->post('datek_pe'),
                'datek_metro'	    => $this->input->post('datek_metro'),
                'datek_access'	    => $this->input->post('datek_access'),
                'vlan'	            => $this->input->post('vlan'),
                'bandwidth'	        => $this->input->post('bandwidth'),
                'pic_customer'	    => $this->input->post('pic_customer'),
                'tanggal_input'	    => $this->input->post('tanggal_input'),
                'tanggal_perbaikan'	=> $this->input->post('tanggal_perbaikan'),
                'alamat'	        => $this->input->post('alamat'),
                'latittude'	        => $this->input->post('lat'),
                'longitude'	        => $this->input->post('long'),
                'keterangan'        => $this->input->post('keterangan'),
            );
            $this->db->insert('lokasi_eos',$data);
            redirect('dashboard/lokasi_eos');
        }elseif(isset($_POST['update'])){
            $data = array(
                'sid'		        => $this->input->post('sid'),
                'kategori'	        => $this->input->post('kategori'),
                'nama_cc'	        => $this->input->post('nama_cc'),
                'datek_pe'	        => $this->input->post('datek_pe'),
                'datek_metro'	    => $this->input->post('datek_metro'),
                'datek_access'	    => $this->input->post('datek_access'),
                'vlan'	            => $this->input->post('vlan'),
                'bandwidth'	        => $this->input->post('bandwidth'),
                'pic_customer'	    => $this->input->post('pic_customer'),
                'tanggal_input'	    => $this->input->post('tanggal_input'),
                'tanggal_perbaikan'	=> $this->input->post('tanggal_perbaikan'),
                'alamat'	        => $this->input->post('alamat'),
                'latittude'	        => $this->input->post('lat'),
                'longitude'	        => $this->input->post('long'),
                'keterangan'        => $this->input->post('keterangan'),
            );
            $this->db->where('id',$this->input->post('id'));
            $this->db->update('lokasi_eos',$data);
            redirect('dashboard/lokasi_eos');
        }else{
            $data['l'] = $this->db->get('lokasi_eos');
            $this->template->load('back-end/_template','back-end/_lokasi_eos',$data);
        }
    }

    public function lokasi_eos_tambah()
    {
        $data['k'] = $this->db->get('kategori');
        $this->template->load('back-end/_template','back-end/_lokasi_eos_tambah',$data);
    }

    public function lokasi_eos_edit($id)
    {
        $data['k'] = $this->db->get('kategori');
        $data['l'] = $this->db->get_where('lokasi_eos',array('id'=>$id))->row_array();
        $this->template->load('back-end/_template','back-end/_lokasi_eos_edit',$data);
    }

    public function lokasi_eos_delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('lokasi_eos');
        redirect('dashboard/lokasi_eos');
    }

    public function lokasi_eos_kategori()
    {
        if (isset($_POST['simpan'])) {
            if ($_FILES['gambar']['error'] <> 4) {

                $config['upload_path'] = './uploads/icon';
                $config['allowed_types'] = 'jpg|png|gif|bmp';
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('gambar')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->index($error);
                } else {
                    $hasil 	= $this->upload->data();
                    $data = array(
                        'nama_kategori'	=> $this->input->post('nama'),
                        'keterangan'	=> $this->input->post('keterangan'),
                        'ikon'			=> $hasil['file_name'],
                    );
                    $this->db->insert('kategori',$data);
                    redirect('dashboard/lokasi_eos_kategori');
                }
            } else {
                $data = array(
                    'nama_kategori'	=> $this->input->post('nama'),
                    'keterangan'	=> $this->input->post('keterangan'),
                );
                $this->db->insert('kategori',$data);
                redirect('dashboard/lokasi_eos_kategori');
            }
        }elseif (isset($_POST['update'])) {
            if ($_FILES['gambar']['error'] <> 4) {

                $config['upload_path'] = './uploads/icon';
                $config['allowed_types'] = 'jpg|png|gif|bmp';
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('gambar')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->index($error);
                } else {
                    $hasil 	= $this->upload->data();
                    $data = array(
                        'nama_kategori'	=> $this->input->post('nama'),
                        'keterangan'	=> $this->input->post('keterangan'),
                        'ikon'			=> $hasil['file_name'],
                    );

                    $id 	= $this->input->post('id');
                    $query 	= $this->db->get_where('kategori',array('id'=>$id))->row_array();
                    unlink("./uploads/icon/".$query['ikon']);

                    $this->db->where('id',$id);
                    $this->db->update('kategori',$data);
                    redirect('dashboard/lokasi_eos_kategori');
                }
            } else {
                $data = array(
                    'nama_kategori'	=> $this->input->post('nama'),
                    'keterangan'	=> $this->input->post('keterangan'),
                );
                $this->db->where('id',$this->input->post('id'));
                $this->db->update('kategori',$data);
                redirect('dashboard/lokasi_eos_kategori');
            }
        }else{
            $data['k'] = $this->db->get('kategori');
            $this->template->load('back-end/_template','back-end/_lokasi_eos_kategori',$data);
        }
    }

    public function lokasi_eos_kategori_edit($id)
    {
        $data['l'] = $this->db->get_where('kategori',array('id'=>$id))->row_array();
        $this->template->load('back-end/_template','back-end/_lokasi_eos_kategori_edit',$data);
    }

    public function lokasi_eos_kategori_delete($id)
    {
        $query = $this->db->get_where('kategori',array('id'=>$id))->row_array();

        unlink("./uploads/icon/".$query['ikon']);

        $this->db->delete('kategori', array('id' => $id));
        redirect('dashboard/lokasi_eos_kategori');
    }

	public function berita()
	{
		if (isset($_POST['simpan'])) {
			if ($_FILES['gambar']['error'] <> 4) {

		        $config['upload_path'] = './uploads/berita';
		        $config['allowed_types'] = 'jpg|png|gif|bmp';
		        $this->load->library('upload', $config);
		 
		        if (!$this->upload->do_upload('gambar')) {
		            $error = array('error' => $this->upload->display_errors());
		            $this->index($error);
		        } else {
		            $hasil 	= $this->upload->data();
					$data = array(
						'judul'			=> $this->input->post('judul'),
						'isi_berita'	=> $this->input->post('isi'),
						'gambar'		=> $hasil['file_name'],
						'tanggal'		=> date('Y-m-d'),
						'penulis'		=> 'Admin',
						'dibaca'		=> '0',
					);
					$this->db->insert('berita',$data);
					redirect('dashboard/berita');
				}
			} else {
				$data = array(
					'judul'			=> $this->input->post('judul'),
					'isi_berita'	=> $this->input->post('isi'),
					'tanggal'		=> date('Y-m-d'),
					'penulis'		=> 'Admin',
					'dibaca'		=> '0',
				);
				$this->db->insert('berita',$data);
				redirect('dashboard/berita');
		    }
		}elseif (isset($_POST['update'])) {
			if ($_FILES['gambar']['error'] <> 4) {

		        $config['upload_path'] = './uploads/berita';
		        $config['allowed_types'] = 'jpg|png|gif|bmp';
		        $this->load->library('upload', $config);
		 
		        if (!$this->upload->do_upload('gambar')) {
		            $error = array('error' => $this->upload->display_errors());
		            $this->index($error);
		        } else {
		            $hasil 	= $this->upload->data();
					$data = array(
						'judul'			=> $this->input->post('judul'),
						'isi_berita'	=> $this->input->post('isi'),
						'gambar'		=> $hasil['file_name'],
					);

					$id 	= $this->input->post('id');
					$query 	= $this->db->get_where('berita',array('id_berita'=>$id))->row_array();
	    			unlink("./uploads/berita/".$query['gambar']);

					$this->db->where('id_berita',$id);
					$this->db->update('berita',$data);
					redirect('dashboard/berita');
				}
			} else {
				$data = array(
					'judul'			=> $this->input->post('judul'),
					'isi_berita'	=> $this->input->post('isi'),
				);
				$this->db->where('id_berita',$this->input->post('id'));
				$this->db->update('berita',$data);
				redirect('dashboard/berita');
		    }
		}else{
			$data['b'] = $this->db->get('berita');
			$this->template->load('back-end/_template','back-end/_berita',$data);
		}
	}

	public function berita_tambah()
	{
		$this->template->load('back-end/_template','back-end/_berita_tambah');
	}

	public function berita_edit($id)
	{
		$data['b'] = $this->db->get_where('berita',array('id_berita'=>$id))->row_array();
		$this->template->load('back-end/_template','back-end/_berita_edit',$data);
	}

	public function berita_delete($id)
	{
	    $r = $this->db->get_where('berita',array('id_berita'=>$id))->row_array();
	    
	    unlink("./uploads/berita/".$r['gambar']);
	    
	    $this->db->delete('berita', array('id_berita' => $id));
		redirect('dashboard/berita');
	}

	public function komentar()
	{
		$data['k'] = $this->db->get('komentar');
		$this->template->load('back-end/_template','back-end/_komentar',$data);
	}

	public function komentar_delete($id)
	{
		$this->db->where('id_komentar',$id);
		$this->db->delete('komentar');
		redirect('dashboard/komentar');
	}
}
