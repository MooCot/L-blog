<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
		{

				$posts_count = Post::all()->count();
				$categories_count = Category::all()->count();
				$users_count = User::role('user')->count();

				return view('admin.home.index', [
					'posts_count' => $posts_count, 
					'categories_count' => $categories_count, 
					'users_count' => $users_count, 
				]);
		}
}
