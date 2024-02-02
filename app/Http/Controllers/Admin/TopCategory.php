<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\Request;

class TopCategory extends Controller
{
    // add top category
    public function addTopCategory($id){
        $category =  Category::findOrFail($id);
        $category->update(['top_category' => true]);
        noty()->addInfo( 'Added Top Category Successfully');
        return redirect()->back();
    }
    // remove top category
    public function removeTopCategory($id){
        $category =  Category::findOrFail($id);
        $category->update(['top_category' => false]);
        noty()->addInfo( 'Remove Top Category');
        return redirect()->back();
    }
}
