<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Toko_data');
        $this->load->model('Produk_data');
	}

	public function Toko()
	{
        if ($foto_toko=''){}else{
            $config['upload_path'] = './Image';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload',$config);
            if (!$this->upload->do_upload('foto_toko')){
                $error = $this->upload->display_errors();
                echo $error;
            }else{
                $user_id = $this->input->post('user_id');
                $foto_toko = $this->upload->data('file_name');
                $nama_toko = $this->input->post('nama_toko');
                $tanggal = date("Y-m-d");

                $folder_path = './Image/' . $nama_toko;
                if (!is_dir($folder_path)) {
                    mkdir($folder_path, 0777, true);
                }

                // Memindahkan file ke folder yang sesuai
                $file_path = $this->upload->data('full_path');
                $new_file_path = $folder_path . '/' . $foto_toko;
                rename($file_path, $new_file_path);
            }
            $data  = Array(
                'user_id' => $user_id,
                'foto_toko' => $foto_toko,
                'nama_toko' => $nama_toko,
                'tanggal' => $tanggal,
            );
            $this->Toko_data->AddData($data);
            redirect('Toko/Dashboard');
        }
	}

    public function produk()
    {
        if ($foto_toko=''){}else{
            $config['upload_path'] = './Image/'.$nama_toko;
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload',$config);
            if (!$this->upload->do_upload('foto_toko')){
                $error = $this->upload->display_errors();
                echo $error;
            }else{
                $toko_id = $this->input->post('toko_id');
                $nama_barang = $this->input->post('nama_barang');
                $deskripsi = $this->input->post('deskripsi');
                $harga_barang = $this->input->post('harga_barang');
                $jumlah_barang = $this->input->post('jumlah_barang');

                $folder_path = './Image/' . $nama_toko;
                if (!is_dir($folder_path)) {
                    mkdir($folder_path, 0777, true);
                }

                // Memindahkan file ke folder yang sesuai
                $file_path = $this->upload->data('full_path');
                $new_file_path = $folder_path . '/' . $foto_toko;
                rename($file_path, $new_file_path);
            }
            $data = Array(
                'toko_id' => $toko_id,
                'nama_barang' => $nama_barang,
                'deskripsi' => $deskripsi,
                'harga_barang' => $harga_barang,
                'jumlah_barang' => $jumlah_barang,
            );
            $this->Produk_data->AddData($data);
            redirect('toko/Produk');
        }
    }

}  