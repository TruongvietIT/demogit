<?php

namespace App\Http\Controllers;

use App\Book_Room;
use App\Http\Requests\ChangePassRequest;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use DB;
use App\Room;
use Auth;
use App\Comment;
use Hash;

class PageController extends Controller
{
    public function dashboard()
    {
        $posts = DB::table('posts')->orderBy('id','DESC')->take(6)->get();
        $rooms = DB::table('rooms')->orderBy('id','DESC')->take(9)->get();
        return view('frontend.pages.home', compact('rooms','posts'));
    }

    public function detailRoom($id)
    {
//        ->select('users.name as userName', 'conversation_messages.*', 'user_avatars.name as avatarName', 'user_avatars.filetype')


        $comments = DB::table('comments')
            ->select('comments.*', 'users.id', 'users.name as user_name', 'rooms.id')
            ->join('users', 'comments.id_user', '=', 'users.id')
            ->join('rooms', 'comments.id_room', '=', 'rooms.id')
            ->where('rooms.id', $id)
            ->get();

        $room  = Room::find($id);
        $posts = DB::table('posts')->orderBy('id','DESC')->paginate(8);
        return view('frontend.pages.detail_room', compact('room','comments','posts'));
    }

    public function detailPost($id)
    {
        $post = Post::find($id);
        return view('frontend.pages.detail_post', compact('post'));

    }

    public function listPost()
    {
        $posts = DB::table('posts')->orderBy('id','DESC')->paginate(9);
        return view('frontend.pages.list_post', compact('posts'));
    }

    public function listRoom()
    {
        $rooms = DB::table('rooms')->orderBy('id','DESC')->paginate(9);
        return view('frontend.pages.list_room', compact('rooms'));
    }

    public function infoAccount()
    {
        $account = DB::table('users')->where('id', '=', Auth::user()->id)->first();

        return view('frontend.pages.account_information', compact('account'));

    }

    public function postChangePass(ChangePassRequest $request)
    {
        if(Auth::Check()) {
            $current_password = Auth::User()->password;
            $request_data = $request->All();

            if(Hash::check($request_data['password_old'], $current_password)){
                $user_id = Auth::User()->id;
                $obj_user = User::find($user_id);
                $obj_user->password = Hash::make($request_data['password_new']);
                $obj_user->save();
                return redirect()->route('login')->with('success', 'Bạn đã đổi mật khẩu thành công');
            }
            else{
                return redirect()->back()->withErrors(['Mật khẩu cũ không chính xác']);
            }
        }

        return redirect()->route('login');

    }

    public function listBookRoom()
    {
        $data = DB::table('book_rooms')
            ->select('book_rooms.*','book_rooms.id as id_book_room','rooms.*')
            ->join('rooms', 'book_rooms.id_room', '=', 'rooms.id')
        ->where('id_user', '=', Auth::user()->id)->get();

        return view('frontend.pages.list_book_room', compact('data'));
    }

    public function postSearch(Request $request)
    {
        $key = $request->key;

        $data = DB::table('rooms') ->where('name', 'LIKE', "%{$key}%")->paginate(6);
        return view('frontend.pages.search', compact('data'));

    }

    public function cancelRoom($id)
    {
        $book_room = Book_Room::find($id);

        $book_room->delete();
        return redirect()->back();
    }
}
