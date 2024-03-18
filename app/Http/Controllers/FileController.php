<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        if (\auth('api')->check()) {
            $user = \auth('api')->user();
            $files = $user->posts;

            $results = [];

            foreach ($files as $file) {
                $result = [
                    'title' => $file->title,
                    'content' => $file->content,
                    'creator_name' => null
                ];
                $userCreator = $file->user;
                if ($userCreator) {
                    $result['creator_name'] = $userCreator->name;
                }

                $results[] = $result;
            }

            return response()->json([
                'data' => $results,
            ], 200);
        } else {
            return response()->json([
                'message' => 'کاربر وارد سیستم نشده است.',
            ], 401);
        }
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!auth('api')->check()) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $validatedData = $this->validate(request(), [
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:1000'],
        ]);
        $validatedData = array_merge($validatedData, ['creator' => \auth('api')->id()]);
        try {
            $post = Post::create($validatedData);
            return response()->json($post, 201);
        } catch (\Exception $e) {
            return response()->json(['message' => '$e'], 500);
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public
    function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public
    function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public
    function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public
    function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public
    function destroy(string $id)
    {
        //
    }


}
