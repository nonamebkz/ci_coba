<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_blog', 'mb');
    }

    public function index()
    {
        $data['listdata'] = $this->mb->getBlog();
        $this->load->view('blog/layout/header');
        $this->load->view('blog/index', $data);
        $this->load->view('blog/layout/footer');
    }

    public function add()
    {
        $this->load->view('blog/layout/header');
        $this->load->view('blog/add');
        $this->load->view('blog/layout/footer');
    }

    public function submit()
    {
        $result = $this->mb->submit();
        $this->do_upload();

        if ($result) {
            $this->session->set_flashdata('sukses', 'data berhasil disimpan');
        } else {
            $this->session->set_flashdata('gagal', 'data gagal di simpan');
        }
        redirect(base_url('blog/index'));
    }

    public function edit($id)
    {
        $data['databyid'] = $this->mb->getDataById($id);
        $this->load->view('blog/layout/header');
        $this->load->view('blog/edit', $data);
        $this->load->view('blog/layout/footer');
    }
    public function update()
    {
        $result = $this->mb->update();
        if ($result) {
            $this->session->set_flashdata('sukses', 'data berhasil diubah');
        } else {
            $this->session->set_flashdata('gagal', 'data gagal di diubah');
        }
        redirect(base_url('blog/index'));
    }

    public function delete($id)
    {
        $result = $this->mb->delete($id);
        if ($result) {
            $this->session->set_flashdata('sukses', 'data berhasil dihapus');
        } else {
            $this->session->set_flashdata('gagal', 'data gagal di dihapus');
        }
        redirect(base_url('blog/index'));
    }
    public function do_upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 10000;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('blog/add', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());
        }
    }

}

/* End of file Blog.php */
