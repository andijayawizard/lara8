<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostCategory;

class PostCategoryController extends Controller
{
    public function index() {
        $cat=PostCategory::latest()->paginate(5);
        return view('post-categories.index', compact('cat'))->with('i', (request()->input('page', 1)-1)*5);
    }
    public function create() {
        return view('post-categories.create');
    }
    public function store(Request $req) {
        $req->validate([
            'name'=>'required'
        ]);
        PostCategory::create($req->all());
        return redirect()->route('post-categories.index');
    }
}
