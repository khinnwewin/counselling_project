<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;
use App\User;
use App\Http\Requests\Backend\CategoryRequest;
Use Alert;
Use Auth;
class CategoryController extends Controller
{
   
    public function index(Request $request)
    {

         $categories = Category::paginate(25);
         return view('admin.category.index', compact('categories'));
       
    }
    
    public function create()
    {
        $users=User::where('usertype', '=', 'Counseller')->get();
        return view('admin.category.create', compact('users'));
    }

   
    public function store(CategoryRequest $request)
    {

        Category::create($request->all());
        Alert::success('Success', 'Successfully Created Category');
        return redirect(route('category.index'));
        
    }

    public function show($id)
    {
        //
    }

  
    
    public function edit($id)
    {
        $category = Category::find($id);
        $users=User::where('usertype', '=', 'Counseller')->get();
        if(empty($category)) {
            Alert::error('Error', 'Category Not Found');
            return redirect(route('category.index'));
        }
        return view('admin.category.edit', compact('category','users'));
    }

   
    public function update(CategoryRequest $request, $id)
    {
        $categories = Category::find($id);
        if(empty($categories)) {
            Alert::error('Error', 'Category Not Found');
            return redirect(route('category.index'));
        }
        $data = $request->all();
        $categories->update($data);
        Alert::success('Success', 'Successfully Updated Category');
        return redirect(route('category.index'));
    }

   
    public function destroy($id)
    {
        $categories = Category::find($id);
        if(empty($categories)) {
            Alert::error('Error', 'Category Not Found');
            return redirect(route('category.index'));
        }
        $categories->delete();
        Alert::success('Success', 'Successfully deleted category');
        return redirect(route('category.index'));
    }
}

