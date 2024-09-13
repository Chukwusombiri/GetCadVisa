<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public $blogs;

    public function __construct()
    {
        $this->blogs = Blog::orderBy('id','desc')->get();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {               
        return view('admin.blogs')->with(['blogs'=>$this->blogs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $categories = Category::all();                 
        return view('admin.addblog')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[           
            'title' => ['required','string'],
            'main_content' => ['required','string'],
            'sub_title' => ['string','nullable'],
            'sub_content' => ['string','nullable'],
            'author' => ['required','string'],            
            'author_comment'=>['string','nullable'],
            'cover_img' => ['required','image','max:1999'],    
            'category_id'=>['required','exists:App\Models\Category,id'],        
        ]);
       

        $blog =  new blog();  
        $cover_img = $request->cover_img->storePublicly('blogs','public');         
        $blog->title= $request->title;
        $blog->main_content= $request->main_content;   
        $blog->sub_title= $request->sub_title ?? '';     
        $blog->sub_content= $request->sub_content ?? '';  
        $blog->author= $request->author;          
        $blog->author_comment= $request->author_comment ?? '';
        $blog->cover_img= $cover_img;
        $blog->slug= Str::slug($request->title);
        $blog->category_id= $request->category_id;
        $blog->save();

        return redirect()->route('admin.blogs')->with('success','blog created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {       
        $blog = blog::find($id);        
        return view('admin.showblog')->with([           
            'blog' => $blog,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {                    
        $blog = blog::find($id);
        $categories = Category::all();
        return view('admin.editblog')->with([
            'blog' => $blog, 
            'categories'=>$categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $this->validate($request,[           
            'title' => ['required','string'],
            'main_content' => ['required','string'],
            'sub_title' => ['string','nullable'],
            'sub_content' => ['string','nullable'],
            'author' => ['required','string'],            
            'author_comment'=>['string','nullable'],
            'cover_img' => ['image','max:1999','nullable'],
            'category_id'=>['required','exists:App\Models\Category,id'],            
        ]);

        $blog =  blog::find($id);    

        if ($request->hasFile('cover_img')){   
            if($blog->cover_img){
                Storage::disk('public')->delete($blog->cover_img);
            }         
            $blog->cover_img = $request->cover_img->storePublicly('blogs','public');         
        }
        $blog->title= $request->title;
        $blog->main_content= $request->main_content;
        $blog->sub_title= $request->sub_title ?? '';
        $blog->sub_content= $request->sub_content ?? '';  
        $blog->author= $request->author;
        $blog->author= $request->author_comment ?? '';        
        $blog->category_id= $request->category_id;
        $blog->update();

        return redirect()->route('admin.blogs')->with('success','blog modified successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = blog::find($id);

        if($blog->cover_img !== 'blogs/noimage.jpg'){
            Storage::disk('public')->delete($blog->cover_img);
        }
        $blog->delete();

        return redirect()->route('admin.blogs')->with('success','blog deleted successfully');
    }
}
