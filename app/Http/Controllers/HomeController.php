<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use App\Models\Category;
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
        $category = CategoryTranslation::join('categories', 'categories.id', '=', 'category_translations.category_id')
            ->where('locale', $locale)->where('parent', 0)
            ->select('category_translations.*')->orderBy('categories.view', 'asc')->get();
        return view('pages.contact', [
            'category'=>$category,
        ]);
    }

    public function category($slug)
    {
        $locale = App::currentLocale();
        $category = CategoryTranslation::join('categories', 'categories.id', '=', 'category_translations.category_id')
            ->where('locale', $locale)->where('parent', 0)
            ->select('category_translations.*')->orderBy('categories.view', 'asc')->get();
        // end

        $data = CategoryTranslation::join('categories', 'categories.id', '=', 'category_translations.category_id')
            ->select('category_translations.*')
            ->where('slug', $slug)
            ->where('locale', $locale)->first();

        // cat_array
        $cat_array = [$data["id"]];
        $cates = CategoryTranslation::where('parent', $data["id"])->get();
        foreach ($cates as $key => $cate) {
            $cat_array[] = $cate->id;
        }
        // cat_array

        if ($data->category->sort_by == 'Product') {
            $post = PostTranslation::whereIn('category_tras_id', $cat_array)
                ->where('locale', $locale)
                ->orderBy('id', 'desc')->paginate(18);
            return view('pages.category', compact(
                'category',
                'data',
                'post'
            ));
        }elseif($data->category->sort_by == 'News'){
            $post = PostTranslation::whereIn('category_tras_id', $cat_array)
                ->where('locale', $locale)
                ->orderBy('id', 'desc')->paginate(7);
            return view('pages.news', compact(
                'category',
                'data',
                'post',
            ));
        }
    }

    public function post($catslug, $slug)
    {
        $locale = App::currentLocale();
        $category = CategoryTranslation::join('categories', 'categories.id', '=', 'category_translations.category_id')
            ->where('locale', $locale)->where('parent', 0)
            ->select('category_translations.*')->orderBy('categories.view', 'asc')->get(); //menu
        $post = PostTranslation::join('posts', 'posts.id', '=', 'post_translations.post_id')
            ->where('locale', $locale)
            ->select('post_translations.*')
            ->where('posts.slug', $slug)
            ->first();
        $related_post = PostTranslation::join('posts', 'posts.id', '=', 'post_translations.post_id')
            ->where('category_tras_id', $post->category_tras_id)
            ->where('locale', $locale)
            ->get();
        if ($post->post->sort_by == 'Product') {
            $images = Images::where('post_id', $post->post->id)->get();
            $section = SectionTranslation::where('locale', $locale)->where('post_id', $post->post->id)->orderBy('view', 'asc')->get();
            return view('pages.project', compact(
                'category',
                'post',
                'images',
                'section',
                'catslug',
                'related_post',
            ));
        }elseif ($post->post->sort_by == 'News') {
            return view('pages.post', compact(
                'category',
                'post',
            ));
        }
        
    }
}
