<?php

namespace App\Http\Controllers\Api;
use App\Post;
use App\Category;
use App\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index(){
   //  COME RICHIAMO TUTTI I POST
   
  // $posts= Post::all();                      //per richiamare tutti i post, se ci sono relazioni NON VA BENE
  // return response()->json($posts) ;         //ritorna in formato json

  //RICHIAMO POST CON RELAZIONI
   $posts = Post::with('category', 'tags')->get();
   return response()->json($posts);
   
  
}
   //------------ESEMPIO BASE
   //     return response()->json([
   //        'name'=> 'Simone',
   //        'surname'=>'Antonelli'
   //    ]);
   

   //----------RECUPERO SECONDO ID DELLA CATEGORIA SU TUTTI I RECORD
   
   //$post= Post::all();
   //$posts_filtered= Post::where("category_id",2)-get();
   //return response()->json($posts_filtered);


   //-----------RICHIESTA DINAMICA CATEGORIA
   
   // public function index($category=null){
   //   if($category){
   //       $posts_filtered= Post::where("category_id",2)-get();
   //   }else{
   //     return response()->json($posts);
   //   }    
   //}
   
}
