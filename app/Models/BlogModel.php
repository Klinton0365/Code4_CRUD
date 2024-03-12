<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model{
    protected $table = 'code_red';
    protected $allowFields=['title','description'];

    public function getBlogs(){
        return $this->findAll();
        //return $this->orderBy('id','DESC')->findAll();
    } 

    // public function getBlogs(){
    //     $result = $this->findAll();
    //     print_r($this->db->getLastQuery());  // Uncomment this line
    //     return $result;
    // }

    public function createBlog($data){
        return $this->insert($data);
    }

    public function viewBlog($id){
        return $this->where('id',$id)->first();
    }
}

?>