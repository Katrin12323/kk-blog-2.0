<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function index()
    {
        $data['baseUrl'] = base_url();

        $this->load->model('blogpost');

        $data['blogposts'] = $this->blogpost->getTheLastFivePosts();

        $this->twig->display('blog/welcome_page/welcomePage', $data);
    }

    public function post($id) {

        $data['baseUrl'] = base_url();

        $this->load->model('blogpost');

        $data['post'] = $this->blogpost->getPostById($id);

        $this->twig->display('blog/post', $data);
    }

    public function category($category)
    {
        $data['baseUrl'] = base_url();
        $this->load->model('blogpost');

        $data['category'] = $this->blogpost->getByCategory($category);

        $this->twig->display('blog/sortByCategory', $data);

    }
}