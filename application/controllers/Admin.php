<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index()
    {
        $data['action'] = 'saveNewPost';
        $data['button'] = 'save';
        $this->twig->display('admin/adminForm', $data);
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
    public function listPost()
    {
        $this->load->model('blogpost');

        $data['allPosts'] = $this->blogpost->getAllPostsById();

        $this->twig->display('admin/allPosts',$data);
    }

    public function deletePosts($id)
    {
        $this->load->model('blogpost');

        $this->blogpost->deletePostsById($id);

        $data['allPosts'] = $this->blogpost->getAllPostsById();

        $this->twig->display('admin/allPosts',$data);
    }

    public function updateForm($id)
    {
        $this->load->model('blogpost');
        $data['action'] = 'updatePost';
        $data['button'] = 'update';
        $data['post'] = $this->blogpost->getById($id);
        $data['id'] = $id;

        $this->twig->display('admin/adminForm', $data);
    }

    public function updatePost($id)
    {
        $this->load->model('blogpost');

        $this->blogpost->title = $this->input->post('title');
        $this->blogpost->text = $this->input->post('text');
        $this->blogpost->author = $this->input->post('author');
        $this->blogpost->category = $this->input->post('category');

        $this->blogpost->update($id);

        $data['allPosts'] = $this->blogpost->getAllPostsById();

        $this->twig->display('admin/allPosts', $data);
    }

    public function search()
    {
        $this->load->model('blogpost');

        $category = $this->input->post('category');

        $data['category'] = $category;

        if($category) {
            $data['allPosts'] = $this->blogpost->searchByCategory($category);
        } else {
            $data['allPosts'] = array();

        }

        $this->twig->display('admin/allPosts', $data);
    }
}