<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Http\Requests\StorecategoryRequest;
use App\Http\Requests\UpdatecategoryRequest;
use App\Trait\ImageTrait;
class CategoryController extends Controller
{
    use ImageTrait;

   

    /**
     *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=category::orderBy('id')->get();
        return view('back.admin.superCategories')->with('categories',$category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecategoryRequest $request)
    {
        
       
        
        $category = new category();
        $category->name=$request->name;
        $category->image = $request->hasFile('img')? $this->saveImage($request->img, 'img/category'): "default.png";
        if($category->save())
            return redirect()->route('admin.category.index')->with(['successAdd'=>'done']);
        return back()->with(['errorAdd'=>'error']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecategoryRequest  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecategoryRequest $request,  $id)
    {
        $category = category::findOrFail($id);
        if(!$category){
            return redirect()->back()->with(['errorEditService'=>'لا تستطيع التعديل']);
        }else{
            if($request->hasFile('img')){
                $this->pic_remove($id); 
                $category->image = $this->saveImage($request->img, 'img/category');
            }
            $category->update($request->except(['_token', 'img']));
            if($category->save())
                return redirect()->route('admin.category.index')->with(['successEdit'=>'تم التعديل بنجاح']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($categories_id)
    {
        $category = Category::find($categories_id);
        if(!$category)
        return response()->view('Front.errors.404', []);
        $category->is_active *= -1;
        if($category->save())
            return back();
    }
}
