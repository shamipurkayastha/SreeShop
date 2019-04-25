<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB ;
use App\http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();

class CategoryController extends Controller
{
    public function index()
    {
    	return view('admin.add_category');
    }

    	public function all_category()
    	{
              
             $all_category_info=DB::table('tbl_category')->get();
              $manage_category=view('admin.all_category')
                     ->with('all_category_info',$all_category_info);
               return view('admin_layout')
                     ->with('admin.all_category',$manage_category);

            //return view('admin.all_category');
    	}
    	public function save_category(Request $request)
    	{
    			   $data=array();
    				$data['category_id']=$request->category_id;
    				$data['category_name']=$request->category_name;
                    $data['category_description']=$request->category_description;
                    $data['publication_status']=$request->publication_status;
    				

                    DB::table('tbl_category')->insert($data);
                    Session::put('messsage','Category added successfuly !! ');
                    return Redirect::to('/add_category');
    	}

        public function unactive_category($category_id)
        {
                DB::table('tbl_category')
                ->where('category_id',$category_id)
                ->update(['publication_status' => 0]);
                Session::put('messsage','Category unactive successfuly !! ');
                return Redirect::to('/all_category');
        }
          public function active_category($category_id)
        {
                DB::table('tbl_category')
                ->where('category_id',$category_id)
                ->update(['publication_status' => 1]);
                Session::put('messsage','Category active successfuly !! ');
                return Redirect::to('/all_category');
        }
        public function edit_category($category_id)
        {
            $category_info=DB::table('tbl_category')
               ->where('category_id',$category_id)
               ->first();

                $category_info=view('admin.edit_category')
                     ->with('category_info',$category_info);
               return view('admin_layout')
                     ->with('admin.edit_category',$category_info);

        }
        public function update_category(Request $request,$category_id)
        {
            $data=array();
            $data['category_name']=$request->category_name;
            $data['category_description']=$request->category_description;

            DB::table('tbl_category')
              ->where('category_id',$category_id)
              ->update($data);

              Session::get('messsage','Category update successfully !!');
              return Redirect::to('/all_category');

        }
        public function delete_category($category_id)
        {
            DB::table('tbl_category')
                ->where('category_id',$category_id)
                ->delete();
                Session::get('message','Category Delete successfully !!');
                return Redirect::to('all_category');
        }

}
