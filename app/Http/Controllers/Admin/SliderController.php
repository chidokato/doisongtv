<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

use Image;
use File;

use App\Models\Slider;
use App\Models\SliderTranslation;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locale = Session::get('locale');
        $data = SliderTranslation::where('locale', $locale)->orderBy('id', 'DESC')->get();
        return view('admin.slider.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $slider = new Slider();
        $slider->user_id = Auth::User()->id;

        // thêm ảnh
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            while(file_exists("data/home/".$filename)){$filename = rand(0,99)."_".$filename;}
            $file->move('data/home', $filename);
            $slider->img = $filename;
        }
        // thêm ảnh

        $slider->fill([
          'en' => [
            'heading1' => $data['heading1:en'],
            'heading2' => $data['heading2:en'],
            'text1' => $data['text1:en'],
            'text2' => $data['text2:en'],
            'link' => $data['link:en'],
          ],
          'vi' => [
            'heading1' => $data['heading1:vi'],
            'heading2' => $data['heading2:vi'],
            'text1' => $data['text1:vi'],
            'text2' => $data['text2:vi'],
            'link' => $data['link:vi'],   
          ],
          'cn' => [
            'heading1' => $data['heading1:cn'],
            'heading2' => $data['heading2:cn'],
            'text1' => $data['text1:cn'],
            'text2' => $data['text2:cn'],
            'link' => $data['link:cn'],   
          ]
        ]);

        $slider->save();
        return redirect('admin/slider')->with('Success','Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $locale = Session::get('locale');
        $data = Slider::find($id);
        // $SliderTranslation = SliderTranslation::where('locale', $locale)->orderBy('category_id', 'DESC')->get();
        return view('admin.slider.edit')->with(compact('data', 'locale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $Slider = Slider::find($id);
        
        $Slider->fill([
          'en' => [
            'heading1' => $data['heading1:en'],
            'heading2' => $data['heading2:en'],
            'text1' => $data['text1:en'],
            'text2' => $data['text2:en'],
            'link' => $data['link:en'],
          ],
          'vi' => [
            'heading1' => $data['heading1:vi'],
            'heading2' => $data['heading2:vi'],
            'text1' => $data['text1:vi'],
            'text2' => $data['text2:vi'],
            'link' => $data['link:vi'],   
          ],
          'cn' => [
            'heading1' => $data['heading1:cn'],
            'heading2' => $data['heading2:cn'],
            'text1' => $data['text1:cn'],
            'text2' => $data['text2:cn'],
            'link' => $data['link:cn'],   
          ]
        ]);
        // thêm ảnh
        if ($request->hasFile('img')) {
            if(File::exists('data/home/'.$Slider->img)) { File::delete('data/home/'.$Slider->img);} // xóa ảnh cũ
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            while(file_exists("data/home/".$filename)){$filename = rand(0,99)."_".$filename;}
            $file->move('data/home', $filename);
            $Slider->img = $filename;
        }
        // thêm ảnh
        $Slider->save();
        
        return redirect()->back()->with('Success','Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $SliderTranslation = SliderTranslation::where('Slider_id', $id)->get();
        foreach ($SliderTranslation as $key => $value) {
            SliderTranslation::find($value->id)->delete();
        }
        $Slider = Slider::find($id);
        if(File::exists('data/home/'.$Slider->img)) { File::delete('data/home/'.$Slider->img);} // xóa ảnh cũ
        $Slider->delete();
        return redirect()->back()->with('Success','Success');
    }
}
