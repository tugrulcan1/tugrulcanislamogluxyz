<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Housing;
use App\Models\HousingStatus;
use App\Models\Menu;
use App\Models\Project;
use App\Models\StandOutUser;
use Illuminate\Http\Request;
use App\Models\Blog;



class HomeController extends Controller
{
    public function index()
    {
      
        $blogs = Blog::orderBy("id" , "desc")->get();
       
        return view('client.home.index', compact('blogs'));
    }
}