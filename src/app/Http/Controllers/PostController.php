<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Posts;

class PostController extends Controller
{
    public function index()
    {

        // Hiển thị 5 bài viết thì phân trang nhé
        $posts = Posts::where('active','1')->orderBy('created_at','desc')->paginate(5);
        $title = 'List bài viết';

        //Trả kết quả về View home.blade.php nhe
        return view('home')->withPosts($posts)->withTitle($title);
    }

    public function create(Request $request)
    {
        if($request->user()->can_post())
        {
            return view('posts.create');
        }
        else
        {
            return redirect('/')->withErrors('Bạn không đủ quyền để tạo bài viết');
        }
    }

    public function save(PostFormRequest $request)
    {
        $post = new Posts();
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->slug = str_slug($post->title);
        $post->author_id = $request->user()->id;
        if($request->has('save'))
        {
            $post->active = 0;
            $message = 'Lưu bài viết thành cong';
        }
        else
        {
            $post->active = 1;
            $message = 'Bài viết đã được up thành công';
        }
        $post->save();
        return redirect('edit/'.$post->slug)->withMessage($message);
    }


    public function show($slug)
    {
        $post = Posts::where('slug',$slug)->first();

        if($post)
        {
            if($post->active == false)
                return redirect('/')->withErrors('Không tìm thấy trang');
            $comments = $post->comments;
        }
        else
        {
            return redirect('/')->withErrors('Không tìm thấy trang');
        }
        return view('posts.show')->withPost($post)->withComments($comments);
    }

    public function edit(Request $request,$slug)
    {
        $post = Posts::where('slug',$slug)->first();
        if($post && ($request->user()->id == $post->author_id || $request->user()->is_admin()))
            return view('posts.edit')->with('post',$post);
        else
        {
            return redirect('/')->withErrors('Bạn không đủ quyền');
        }
    }


    public function update(Request $request)
    {
//
        $post_id = $request->input('post_id');
        $post = Posts::find($post_id);
        if($post && ($post->author_id == $request->user()->id || $request->user()->is_admin()))
        {
            $title = $request->input('title');
            $slug = str_slug($title);
            $duplicate = Posts::where('slug',$slug)->first();
            if($duplicate)
            {
                if($duplicate->id != $post_id)
                {
                    return redirect('edit/'.$post->slug)->withErrors('Title đã tồn tại.')->withInput();
                }
                else
                {
                    $post->slug = $slug;
                }
            }

            $post->title = $title;
            $post->body = $request->input('body');

            if($request->has('save'))
            {
                $post->active = 0;
                $message = 'Lưu bài thành công';
                $landing = 'edit/'.$post->slug;
            }
            else {
                $post->active = 1;
                $message = 'Cập nhật thành công';
                $landing = $post->slug;
            }
            $post->save();
            return redirect($landing)->withMessage($message);
        }
        else
        {
            return redirect('/')->withErrors('Bạn chưa đủ quyền');
        }
    }


    public function delete(Request $request, $id)
    {
        $post = Posts::find($id);
        if($post && ($post->author_id == $request->user()->id || $request->user()->is_admin()))
        {
            $post->delete();
            $data['message'] = 'Bài viết đã được xóa';
        }
        else
        {
            $data['errors'] = 'Bạn không đủ quyền';
        }

        return redirect('/')->with($data);
    }
}
