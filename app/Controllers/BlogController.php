<?php

namespace App\Controllers;

use App\Models\BlogModel;

class BlogController extends BaseController
{
    public function index()//: string
    {
        // $model = new BlogModel();
        // //$model = model(BlogModel::class);
        //  $data['blog']=$model->getBlogs();
        // // print_r($data); 
        
        $model = new BlogModel();
        $data['blogs'] = $model->getBlogs();
        return view('blog',$data);
    }
        //$blogs=$model->createBlog($data);


    // public function store(){
    //         $data=[
    //             'title'=>$this->request->getVar('title'),
    //             'description'=>$this->request->getVar('description')
    //         ];
    //         $model = new BlogModel();
    //         $blogs=$model->createBlog($data);

    //         if($blogs){
    //             //Success
    //             return redirect('/');
    //         }
    //         else{
    //             //Errror
    //             return redirect('/');
    //         }
    //     }
        
    //     public function viewBlog($id){
    //         $model=new BlogModel();

    //         $res = $model-> viewModel($id);
    //         print_r($res);
    //     }
}

?>