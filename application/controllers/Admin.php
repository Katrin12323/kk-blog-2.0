<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index()
    {
        $this->twig->display('admin/adminForm');
    }

public function saveNewPost()
{
    $this->load->model('blogpost');

    $this->blogpost->title = $this->input->post('title');
    $this->blogpost->text = $this->input->post('text');
    $this->blogpost->author = $this->input->post('author');
    $this->blogpost->category = $this->input->post('category');

    $this->blogpost->insertNewPost();

    $this->twig->display('admin/afterInsertForm');
}
}