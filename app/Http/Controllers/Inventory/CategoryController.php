<?php

namespace App\Http\Controllers\Inventory;

use App\Helpers\Alert;
use App\http\controllers\Controller;
use App\Modules\Inventory\Entity\category;

class CategoryController extends Controller
{
    public function Add()
    {
        return view("inventory.category.add");
    }
    public function Addpost()
    {
        $name = request("name");
        $code = request("code");
        $category = new category();
        $category->name = $name;
        $category->code = $code;
        $category->save();
        return redirect("/inventory/category");
    }
    public function Index()
    {
        $data = Category::all();
        return view("inventory.category.index", [
            'categoryList' => $data
        ]);
    }
    public function Edit()
    {
        $id = request("categoryid");
        $category = category::find($id);

        return view("inventory.category.edit", [
            'category' => $category
        ]);
    }
    public function Editpost()
    {
        $id = request("id");
        $name = request('name');
        $code = request('code');

        $category = Category::find($id);
        $category->name = $name;
        $category->code = $code;
        $category->save();
        return redirect("/inventory/category");
    }
    public function Delete()
    {
        $id = request('categoryId');
        $category = Category::find($id);
        $category->delete();
        Alert::SetSuccessMessage("Category deleted");
        return redirect("/inventory/category");
    }
}
