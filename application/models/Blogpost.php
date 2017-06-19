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
}
