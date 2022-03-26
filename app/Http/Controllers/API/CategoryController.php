<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;
use Validator;
class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
    }
      public function store(Request $request)
    {
        $request->validate([
            'counsel' => 'required'
        ]);

        $category = Category::create($request->all());

        return response()->json([
            'message' => 'Great success! New category created',
            'category' => $category
        ]);
    }


     public function show(Category $category)
    {
        return $category;
    }

    public function update(Request $request,Category $category)
    {
        $request->validate([
           'counsel'       => 'nullable'
        ]);

        $category->update($request->all());

        return response()->json([
            'message' => 'Great success! category updated',
            'category' => $category
        ]);
    }
    
    public function destroy(Category $category)
    {
        $category->delete();

        return response()->json([
            'message' => 'Successfully deleted category!'
        ]);

    }

}
