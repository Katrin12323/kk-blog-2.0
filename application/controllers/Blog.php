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

    public function category($category, $page)
    {
        $data['baseUrl'] = base_url();
        $this->load->model('blogpost');
        $this->load->library('pagination');

        $config['base_url'] = 'http://localhost/kk-blog-2.0/index.php/Blog/category/' . $category . "/";
        $config['total_rows'] = $this->blogpost->countCategory($category);
        $config['per_page'] = 2;
        $config['uri_segment'] = 2;
        $config['use_page_numbers'] = TRUE;
        $config['cur_tag_open'] = '<a href="#" class="activePage">';
        $config['cur_tag_close'] = '</a>';
        $config["cur_page"] = $page;

        $this->pagination->initialize($config);


        $data['category'] = $this->blogpost->getByCategory($category, $page);
        $data['pagination'] = $this->pagination->create_links();

        $this->twig->display('blog/sortByCategory', $data);

    }
}