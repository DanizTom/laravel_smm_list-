<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Content;
use App\Models\Faq;
use App\Models\Image;
use App\Models\UserWallet;
use App\Models\Menu;
use App\Models\User;
use App\Models\Message;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Material;
use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
{

    public static function menuList(){
        return Menu::where('parent_id','=',0)->with('children')->where('status','=','True')->get();
    }

    public static function getSetting(){
        return $setting = Setting::first();
    }

    public function index(){
        // $menu=Menu::where('parent_id','=',0)->where('slug','=','home')->where('status','=','True')->first();
         $setting = Setting::first();
        // $slider = Content::where('type','=','Slider')->where('menu_id','=',$menu->id)->where('status','=','True')->get();
        // $announcement = Content::where('type','=','Announcement')->where('status','=','True')->get();
        // $news = Content::where('type','=','News')->where('status','=','True')->get();
        // $materials = Material::all();
        $data = [
             'setting'=>$setting,
            // 'slider'=>$slider,
            // 'announcement'=>$announcement,
            // 'news'=>$news,
            // 'materials'=>$materials
        ];
        return view('home.index', $data);
    }
    public function panels(){
        $setting = Setting::first();
        $newpanels=Content::orderByDesc('created_at')->take(6)->get();
        $activepanels=Content::orderByDesc('servicenum')->take(4)->get();
        $panels=Content::orderByDesc('created_at')->paginate(6);
        $data = [
             'setting'=>$setting,
             'panels'=>$panels,
             'newpanels'=>$newpanels,
             'activepanels'=>$activepanels
           
        ];
        return view('home.index_panel', $data);
    }
    public function platforms(){
        // $menu=Menu::where('parent_id','=',0)->where('slug','=','home')->where('status','=','True')->first();
        $setting = Setting::first();
        // $slider = Content::where('type','=','Slider')->where('menu_id','=',$menu->id)->where('status','=','True')->get();
        // $announcement = Content::where('type','=','Announcement')->where('status','=','True')->get();
        // $news = Content::where('type','=','News')->where('status','=','True')->get();
        // $materials = Material::all();
        $data = [
            'setting'=>$setting,
            // 'slider'=>$slider,
            // 'announcement'=>$announcement,
            // 'news'=>$news,
            // 'materials'=>$materials
        ];
        return view('home.index_platform', $data);
    }
    public function search(Request $request){
        $setting = Setting::first();
        $query='';
        $sort='';
        $query = $request->input('q');
        $sort = $request->input('sort');
        $newpanels=Content::orderByDesc('created_at')->take(6)->get();
        $activepanels=Content::orderByDesc('servicenum')->take(4)->get();
        $panels=Content::orderByDesc('created_at')->paginate(15);
        $products = Content::where('title', 'like', "%{$query}%")->orderByDesc('servicenum')->get();

        if($query!='')
            {

                    if($sort=='rate_top'){
                        $products = Content::where('title', 'like', "%{$query}%")->orderBy('commendnum')->get();
                    }
                    if($sort=='rate'){
                        $products = Content::where('title', 'like', "%{$query}%")->orderByDesc('commendnum')->get();

                    }
                    if($sort=='min'){
                        $products = Content::where('title', 'like', "%{$query}%")->orderBy('servicenum')->get();

                    }
                    if($sort=='max'){
                        $products = Content::where('title', 'like', "%{$query}%")->orderByDesc('servicenum')->get();

                    }
            
                }
        else{
            $products =[];
        }

        $num=count($products);
               
        $data = [
             'setting'=>$setting,
             'panels'=>$panels,
             'newpanels'=>$newpanels,
             'activepanels'=>$activepanels,
             'products'=>$products,
             'query'=>$query,
             'sort'=>$sort,
             'num'=>$num
             
           
        ];
        
        return view('home.index_search', $data);
    }


    public function contact(){
        // $menu=Menu::where('parent_id','=',0)->where('slug','=','home')->where('status','=','True')->first();
         $setting = Setting::first();
        // $slider = Content::where('type','=','Slider')->where('menu_id','=',$menu->id)->where('status','=','True')->get();
        // $announcement = Content::where('type','=','Announcement')->where('status','=','True')->get();
        // $news = Content::where('type','=','News')->where('status','=','True')->get();
        // $materials = Material::all();
        $data = [
             'setting'=>$setting,
            // 'slider'=>$slider,
            // 'announcement'=>$announcement,
            // 'news'=>$news,
            // 'materials'=>$materials
        ];
        return view('home.contact', $data);
    }

    public function dashboard(){
        // $menu=Menu::where('parent_id','=',0)->where('slug','=','home')->where('status','=','True')->first();
         $setting = Setting::first();
        // $slider = Content::where('type','=','Slider')->where('menu_id','=',$menu->id)->where('status','=','True')->get();
        // $announcement = Content::where('type','=','Announcement')->where('status','=','True')->get();
        // $news = Content::where('type','=','News')->where('status','=','True')->get();
        // $materials = Material::all();
        $data = [
             'setting'=>$setting,
            // 'slider'=>$slider,
            // 'announcement'=>$announcement,
            // 'news'=>$news,
            // 'materials'=>$materials
        ];
        return view('home.index_dash', $data);
    }
    public function userpanels(){
        // $menu=Menu::where('parent_id','=',0)->where('slug','=','home')->where('status','=','True')->first();
         $setting = Setting::first();
        // $slider = Content::where('type','=','Slider')->where('menu_id','=',$menu->id)->where('status','=','True')->get();
        // $announcement = Content::where('type','=','Announcement')->where('status','=','True')->get();
        // $news = Content::where('type','=','News')->where('status','=','True')->get();
        // $materials = Material::all();
        $data = [
             'setting'=>$setting,
            // 'slider'=>$slider,
            // 'announcement'=>$announcement,
            // 'news'=>$news,
            // 'materials'=>$materials
        ];
        return view('home.index_smm', $data);
    }
    public function userfinance(){
        // $menu=Menu::where('parent_id','=',0)->where('slug','=','home')->where('status','=','True')->first();
         $setting = Setting::first();
         
         $balance=Auth::user()->UserWallet->wallet_balance;

        // $slider = Content::where('type','=','Slider')->where('menu_id','=',$menu->id)->where('status','=','True')->get();
        // $announcement = Content::where('type','=','Announcement')->where('status','=','True')->get();
        // $news = Content::where('type','=','News')->where('status','=','True')->get();
        // $materials = Material::all();
        $data = [
             'setting'=>$setting,
             'balance'=>$balance,
            // 'announcement'=>$announcement,
            // 'news'=>$news,
            // 'materials'=>$materials
        ];
        return view('home.index_finance', $data);
    }
    public function useraccount(){
        // $menu=Menu::where('parent_id','=',0)->where('slug','=','home')->where('status','=','True')->first();
         $setting = Setting::first();
        // $slider = Content::where('type','=','Slider')->where('menu_id','=',$menu->id)->where('status','=','True')->get();
        // $announcement = Content::where('type','=','Announcement')->where('status','=','True')->get();
        // $news = Content::where('type','=','News')->where('status','=','True')->get();
        // $materials = Material::all();
        $data = [
             'setting'=>$setting,
            // 'slider'=>$slider,
            // 'announcement'=>$announcement,
            // 'news'=>$news,
            // 'materials'=>$materials
        ];
        return view('home.index_account', $data);
    }

    public function onedetail($name){
        // $menu=Menu::where('parent_id','=',0)->where('slug','=','home')->where('status','=','True')->first();
         $setting = Setting::first();
         $panels=Content::orderByDesc('created_at')->where('title','=',$name)->first();
         $activepanels=Content::orderByDesc('servicenum')->take(4)->get();
   
        $data = [
             'setting'=>$setting,
             'panel'=>$panels,
             'activepanels'=>$activepanels
        ];
        return view('home.onedetail', $data);
    }


    public function addnewpanel(){
        // $menu=Menu::where('parent_id','=',0)->where('slug','=','home')->where('status','=','True')->first();
         $setting = Setting::first();
        // $slider = Content::where('type','=','Slider')->where('menu_id','=',$menu->id)->where('status','=','True')->get();
        // $announcement = Content::where('type','=','Announcement')->where('status','=','True')->get();
        // $news = Content::where('type','=','News')->where('status','=','True')->get();
        // $materials = Material::all();
        $data = [
             'setting'=>$setting,
            // 'slider'=>$slider,
            // 'announcement'=>$announcement,
            // 'news'=>$news,
            // 'materials'=>$materials
        ];
        return view('home.add_new_smm', $data);
    }



    public function addpanel(Request $request)
    {

        
        $content = new Content();
        $content->menu_id = 7;
        $content->user_id = Auth::id();
        $content->title = $request->input('panel_title');
        $content->detail = $request->input('panel_url');
        $content->description = $request->input('panel_api_url');
        $content->keywords = $request->input('panel_api_key');
        // $content->type = $request->input('type');
        // if($content->type == 'Announcement' or $content->type == 'News'){
        //     $content->menu_id = 0;
        // }
        // $content->keywords = $request->input('keywords');
        // $content->description = $request->input('description');
        // $content->detail = $request->input('detail');
        // if($request->file('image')!=null) {
        //     $content->image = Storage::putFile('images', $request->file('image'));
        // }
        // $content->slug = $request->input('slug');

        // $userRoles = Auth::user()->roles->pluck('name');
        // if($userRoles->contains('admin')) {
        //     $content->status = 'True';
        // }else{
        //     $content->status = 'False';
        // }

        $content->save();

        return redirect()->route('panels');
    }


 

    public function login(){
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {

        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                
                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        } else {
            return view('admin.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $setting = Setting::first();
        return redirect('/');
    }
}
