<?php

class Blog extends CI_Controller {


    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->model('Blog_model');
    }
    public function Index()
    {
        
        $query = $this->Blog_model->getBlogs();
        $data['blogs'] = $query->result_array();
        

        $this->load->view('blog', $data);

    }

    public function detail($url)
    {
        //$query = $this->db->query("SELECT * FROM blog WHERE url = '$url'");
       $query = $this->Blog_model->getSingleBlog($url);
        $data['blog'] = $query->row_array();

        $this->load->view('detail', $data);
    }

    public function add()
    {
        $data['title'] = $this->input->get('title');
        $data['content'] = $this->input->get('content');
        print_r($data);

        $this->db->insert('blog', $data);

        $this->load->view('form_add');
    }

}