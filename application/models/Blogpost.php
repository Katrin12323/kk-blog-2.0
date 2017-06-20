<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogpost extends CI_Model {

    public $title;

    public $text;

    public $author;

    public $category;

    public function getTheLastFivePosts()
    {
        $this->db->order_by('id', 'desc');
        $this->db->limit(5);

        $query = $this->db->get('blog_post');
        return $query->result_array();
    }

    public function getPostById($id)
    {
        $query = $this->db->get_where('blog_post', array('id' => $id));

        return $query->first_row();
    }

    public function getByCategory($category)
    {
        $query = $this->db->get_where('blog_post', array('category' => $category));

        return $query->result_array();
    }

    public function insertNewPost()
    {
        $this->db->insert('blog_post', $this);
    }

    public function getById($id)
    {
       $query = $this->db->get_where('blog_post', array('id' => $id));

        return $query->first_row();
    }

    public function getAllPostsById()
    {
        $query = $this->db->get('blog_post');

        return $query->result_array();
    }

    public function deletePostsById($id)
    {
        $this->db->delete('blog_post', array('id' => $id));
    }

    public function update($id)
    {
        $this->db->update('blog_post',$this, array('id' => $id));
    }

    public function searchByCategory($category)
    {
        $query = $this->db->get_where('blog_post', array('category' => $category));

        return $query->result_array();
    }
}

