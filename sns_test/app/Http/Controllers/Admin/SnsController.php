<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Posts;
use Auth;

use Illuminate\Support\Facades\Log;

class SnsController extends Controller
{
    public function init()
    {
        $posts = \DB::table('posts')->select('posts.id', 'posts.user_id', 'posts.body', 'posts.created_at', 'users.name')
            ->join('users', 'posts.user_id', 'users.id')
            ->where('posts.deleted_at', '=', null)
            ->orderBy('posts.created_at','desc')
            ->get();
        return view('admin.sns.home', ['posts' => $posts]);
    }

    public function create(Request $request)
    {
        $this->validate($request, Posts::$rules);
        $sns = new Posts;
        $form = $request->all();

        unset($form['_token']);

        $sns->fill($form);
        $sns['user_id'] = Auth::id();
        $sns->save();

        return redirect('admin/sns/home');
    }

    public function delete(Request $request)
    {
        $id = $request->input("id");
        $target = Posts::find($id);
        $target->delete();
        return redirect('admin/sns/home');
    }
}
