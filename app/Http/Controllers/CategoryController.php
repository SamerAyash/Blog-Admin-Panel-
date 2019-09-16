<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class CategoryController extends Controller
{
    //----------------------create--------------------------
    public function create(){
        return view('category.create');
    }
    //-----------------------index---------------------------
    public function index(Request $request){
        $categories=category::where([]);
        if ($request->has('name') && $request->input('name') != null){
            $categories=$categories->orwhere('name','like','%'.$request->input('name').'%');
        }
        if ($request->has('lang') && $request->input('lang') != '-1'){
            $categories=$categories->orwhere('lang','=',$request->input('lang'));
        }

        $categories=$categories->paginate('10');
        return view('category.index',compact('categories'));
    }
    //--------------------------store------------------------
    public function store(Request $request){
        //validation
        $request->validate($this->rules(),$this->messages());
       // $this->validate($request,$this->rules(),$this->messages());

        //-----------------------------------------------------
        //save in database
        $category =new category();
        $category->name=$request->input('name');
        $category->lang=$request->input('lang');
        $category->image=parent::uploadImage($request->file('category_image'));
        $category->save();
         return redirect()->route('category.index')->with('success','Category saved successfully');

    }
    //----------------------------------------------------
    private function rules($id=null){
        $rules= [
            'lang'=>'required|in:En,Ar'
        ];
        if($id){
           $rules['name']='required|min:3|unique:categories,name,'.$id;
            $rules['category_image']='mimes:jpeg,png';
        }else{
            $rules['name']='required|min:3|unique:categories,name';
            $rules['category_image']='required|mimes:jpeg,png';
        }
        return $rules;
    }
    //----------------------------------------------------
    private function messages(){
        return [
            'name.required'=>'Name is required',
            'category_image.required'=>'image is required',
            'lang.required'=>'Language is required',
            'name.min'=>'Name length is short ,it must be more than 3 characters long',
            'name.unique'=>'Name already exists',
            'category_image.mimes'=>'Invalid image',
            'lang.in'=>'Select the language En or Ar'
        ];
    }
    //----------------------------------------------------

//***********--------------------------Edit---------------
    public function edit($id){
            try{
                $category=category::findOrfail($id);
                return view('category.edit',compact('category'));
            }
            catch (ModelNotFoundException $exception){
                return redirect()->route('category.index')->with('error','Category not found');
            }
    }
    public function update(Request $request,$id){
        try{

            $category=category::findOrfail($id);
            $request->validate($this->rules($id),$this->messages());
            if ($request->hasFile('category_image')){
                $imagePath=parent::uploadImage($request->file('category_image'));
                if(File::exists(public_path($category->image))){
                    File::delete(public_path($category->image));
                }
                $category->image= $imagePath;
            }
            $category->name=$request->input('name');
            $category->lang=$request->input('lang');
            $category->update();
            return redirect()->route('category.index')->with('success','Category Courses update successfully');
        }catch (ModelNotFoundException $exception){
            return redirect()->route('category.index')->with('error','Category not found');
        }
    }
    public function destroy($id){
        try{
            $category=category::findOrfail($id);
            $category->delete();
            return redirect()->back()->with('success',"Category $category->name deleted successfully");
        }catch (ModelNotFoundException $exception){
            return redirect()->back()->with('error','Category not found');
        }
    }
    public function hasOne(){
        dd(category::findOrfail(10)->book()->get());
    }

}