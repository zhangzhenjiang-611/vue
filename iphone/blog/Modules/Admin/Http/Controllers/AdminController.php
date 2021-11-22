<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
  //get
    public function index()
    {
        return "get";
       // return view('admin::index');
    }

    //post
 public function save()
 {
     return "post";
 }

    //put
    public function update()
    {
        return "update";

    }

    //delete
    public function delete()
    {
        return "delete";

    }

}
