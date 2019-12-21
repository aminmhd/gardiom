<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class PostsController extends Controller
{
    public function create()
    {
        return view('panel.index');
    }

    public function form()
    {
        return view('panel.post.post')->with(['post_create' => 'active', '']);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tittle' => 'required',
            'fileItem' => 'required|image|max:2048',
        ], [
            'tittle.required' => ' input tittle is empty.',
            'fileItem.required' => 'fileItem is not choose',
        ]);

        $file_name = str::random(5) . '-' . $request->file('fileItem')->getClientOriginalName();
        $request->file('fileItem')->move(public_path('images'), $file_name);
        $form_create = [
            'post_tittle' => $request->input('tittle'),
            'post_content' => 'this field is empty',
            'post_img' => $file_name,
        ];
        $file_create_store = Post::create($form_create);
        if ($file_create_store instanceof Post) {
            return redirect()->Route('admin.post')->with(['success' => 'form submited']);
        }
    }

    public function list()
    {
        $data_of_database = Post::all();
        return view('panel.post.list', compact('data_of_database'))->with(['post_list' => 'active']);
    }

    public function delete($post_id)
    {
        if ($post_id && ctype_digit($post_id)) {
            $destroy_post = Post::find($post_id);
            if ($destroy_post instanceof Post) {
                $destroy_post->delete();
                return redirect()->Route('admin.list')->with(['success' => 'this field deleted']);
            }
        }

    }

    public function edit($post_id)
    {
        $edit_form = Post::find($post_id);
        if ($edit_form && $edit_form instanceof Post) {
            return view('panel.post.post', compact('edit_form'));
        }
    }

    public function update(Request $request, $post_id)
    {
        $this->validate($request, [
            'tittle' => 'required',
            'fileItem' => 'required|image|max:2048',
        ], [
            'tittle.required' => ' input tittle is empty.',
            'fileItem.required' => 'fileItem is not choose',
        ]);

        $edit_file_name = str::random(5) . '-' . $request->file('fileItem')->getClientOriginalName();
        $edit_file_name = str_replace(" ", "", $edit_file_name);
        $edit_form_create = [
            'post_tittle' => $request->input('tittle'),
            'post_content' => $request->input('explain'),
            'post_img' => $edit_file_name,
        ];

        if ($post_id && ctype_digit($post_id)) {
            $update_database = Post::find($post_id);
            if ($update_database && $update_database instanceof Post) {
                $update_database->update($edit_form_create);
                return redirect()->Route('admin.list')->with(['success' => 'form Updated ...']);
            }
        }
    }


}
