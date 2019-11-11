<?php

namespace App\Http\Controllers;

use App\Http\Requests\DangNhapRequest;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Newstype;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller

{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index_home()
    {
        $posts = Post::where('publish' , true)->paginate(9);
        return view('blog.home.home',compact('posts'));
    }
    public function index_news(){
        $news = Newstype::find('3')->post()->paginate(9);
        return view('blog.home.news',compact('news'));
    }
    public function index_sport(){
        $sport = Newstype::find('1')->post()->paginate(9);
        return view('blog.home.sport',compact('sport'));
    }
    public function index_music(){
        $music = Newstype::find('2')->post()->paginate(9);
        return view('blog.home.music',compact('music'));
    }
    public function index_heathy(){
        $heathy = Newstype::find('4')->post()->paginate(9);
        return view('blog.home.heathy',compact('heathy'));
    }
    public function getdangnhap(){
        return view('blog.member.dangnhap');
    }
    public function postdangnhap(DangNhapRequest $request){
        $arr = array(
            'name'=>$request->your_name,
            'password'=>$request->your_pass
        );
        if (Auth::attempt($arr)){
            // $user = Auth::user();
            // if ($user->admin == 1){
            //     return redirect('manager');
            // }
            // else{
            //     return redirect('employee');
            // }
            return 'dang nhap thanh cong';
        }
        else{
            return view('blog.member.dangnhap',["error"=>'Tên đăng nhập hoặc mật khẩu đã sai']);
        }
    }
    public function getdangky(){
        return view('blog.member.dangky');
    }
    public function postdangky(){

    }


}
