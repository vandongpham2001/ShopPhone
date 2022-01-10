<?php

namespace App\Http\Services\Category;

use App\Models\Category;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class CategoryService
{
    public function getParent(){
        return Category::where('parent_id', 0)->get();
    }
//    public function get($parent_id=1){
//        return Category::
//        when($parent_id==0, function ($query) use ($parent_id){
//            $query->where('parent_id',$parent_id);
//        })
//            ->get();
//    }

    public function show(){
        return Category::select('name', 'id')->orderBy('id')->get();
    }

    public function getAll(){
        return Category::orderby('id')->paginate(25);
    }
    public function create($request)
    {
        try {
            Category::create([
                'name'=>(string) $request->input('name'),
                'description'=>(string) $request->input('description'),
                'image'=>(string) $request->input('image'),
                'status'=>(string) $request->input('active'),
                'slug'=>Str::slug($request->input('name'), '-'),
                'parent_id'=>(string) $request->input('parent_id')
            ]);
            Session::flash('success', 'Tạo danh mục thành công');
        }
        catch (\Exception $err)
        {
            Session::flash('error', $err->getMessage());
            return false;
        }
        return true;
    }

    public function update($request, $category) : bool
    {
//        $category->fill($request->input());
//        $category->save();
        if ($request->input('parent_id')!=$category->id){
            $category->parent_id=(int) $request->input('parent_id');
        }
        $category->name=(string) $request->input('name');
        $category->description=(string) $request->input('description');
        $category->image=(string) $request->input('image');
        $category->status=(string) $request->input('active');
        $category->save();
        Session::flash('success', 'Cập nhật danh mục thành công');
        return true;
    }

    public function destroy($request){
        $id=(int) $request->input('id');
        $category=Category::where('id', $id)->first();
        if ($category){
            return Category::where('id', $id)->orWhere('parent_id', $id)->delete();
        }
        return false;
    }

    public function getId($id)
    {
        return Category::where('id', $id)->where('status', 1)->firstOrFail();
    }
}
