<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use App\Models\Category;
use App\Models\Post;
use App\Models\Setting;

// $locale = App::currentLocale();

class HomeController extends Controller
{
    function __construct()
    {
        $setting = Setting::find('1');
        $category = Category::where('parent', 0)->get();
        view()->share( [
            'setting'=>$setting,
            'category'=>$category,
        ]);
    }

    public function index()
    {
        return view('pages.home');
    }

    public function about()
    {
        $locale = App::currentLocale();
        $category = CategoryTranslation::join('categories', 'categories.id', '=', 'category_translations.category_id')
            ->where('locale', $locale)->where('parent', 0)
            ->select('category_translations.*')->orderBy('categories.view', 'asc')->get();
        return view('pages.about', compact(
            'category',
        ));
    }

    public function contact()
    {
        $locale = App::currentLocale();
        $category = Category::where('parent', 0)
            ->select('category_translations.*')->orderBy('categories.view', 'asc')->get();
        return view('pages.contact', [
            'category'=>$category,
        ]);
    }

    public function category($slug)
    {
        $data = Category::where('slug', $slug)->first();
        // cat_array
        $cat_array = [$data["id"]];
        $cates = Category::where('parent', $data["id"])->get();
        foreach ($cates as $key => $cate) {
            $cat_array[] = $cate->id;
        }
        // cat_array

        if ($data->sort_by == 'News') {
            $post = Post::whereIn('category_id', $cat_array)->orderBy('id', 'desc')->paginate(18);
            return view('pages.news', compact(
                'data',
                'post'
            ));
        }
    }

    public function post($catslug, $slug)
    {
        $post = Post::where('posts.slug', $slug)->first();
        $related_post = Post::where('category_id', $post->category_id)->get();
        if ($post->sort_by == 'Product') {
            return view('pages.project', compact(
                'post',
                'related_post',
            ));
        }elseif ($post->sort_by == 'News') {
            return view('pages.post', compact(
                'post',
                'related_post',
            ));
        }
        
    }
}
