<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Str;
use Image;
use File;

use App\Models\Setting;
use App\Models\SettingTranslation;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function index()
    {
        $locale = Session::get('locale');
        $setting = SettingTranslation::get();
        $data = SettingTranslation::where('locale', $locale)->first();
        $id = Setting::where('id','1')->first();
        return view('admin.setting.index', compact('setting', 'data', 'id'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        // dd($data);
        $setting = Setting::find($id);
        $filename = $setting->img;
        $favicon = $setting->favicon;
        // thêm ảnh
        if ($request->hasFile('img')) {
            if(File::exists('data/home/'.$setting->img)) { File::delete('data/home/'.$setting->img);} // xóa ảnh cũ
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            while(file_exists("data/home/".$filename)){$filename = rand(0,99)."_".$filename;}
            $file->move('data/home', $filename);
        }

        if ($request->hasFile('favicon')) {
            if(File::exists('data/home/'.$setting->favicon)) { File::delete('data/home/'.$setting->favicon);} // xóa ảnh cũ
            $file = $request->file('favicon');
            $favicon = $file->getClientOriginalName();
            while(file_exists("data/home/".$favicon)){$favicon = rand(0,99)."_".$favicon;}
            $file->move('data/home', $favicon);
        }
        // thêm ảnh

        $setting->fill([
            'en' => [
                'name' => $data['name:en'],
                'address' => $data['address:en'],
                'title' => $data['title:en'],
                'description' => $data['description:en'],
                'hotline' => $data['hotline'],
                'email' => $data['email'],
                'facebook' => $data['facebook'],
                'youtube' => $data['youtube'],
                'maps' => $data['maps'],
                'img' => $filename,
                'favicon' => $favicon,
            ],
            'vi' => [
                'name' => $data['name:vi'],
                'address' => $data['address:vi'],
                'title' => $data['title:vi'],
                'description' => $data['description:vi'],
                'hotline' => $data['hotline'],
                'email' => $data['email'],
                'facebook' => $data['facebook'],
                'youtube' => $data['youtube'],
                'maps' => $data['maps'],
                'img' => $filename,
                'favicon' => $favicon,
            ],
            'cn' => [
                'name' => $data['name:cn'],
                'address' => $data['address:cn'],
                'title' => $data['title:cn'],
                'description' => $data['description:cn'],
                'hotline' => $data['hotline'],
                'email' => $data['email'],
                'facebook' => $data['facebook'],
                'youtube' => $data['youtube'],
                'maps' => $data['maps'],
                'img' => $filename,
                'favicon' => $favicon,
            ]
        ]);
        $setting->save();

        return redirect()->back();
    }
    
}
