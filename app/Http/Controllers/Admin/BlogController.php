<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\BlogServices\BlogService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct(
        protected BlogService $blogService
    ) {
    }
    public function index()
    {
        $blogs = $this->blogService->index();
        // dd($banners);
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->blogService->create($request->all());

        return redirect()->route('blogs.index')->with('popsuccess', 'Blog Successfully store');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = $this->blogService->edit($id);
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = $this->blogService->update($request->all(), $id);

        return redirect()->route('blogs.index')->with('popsuccess', 'Blog Successfully Edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->blogService->delete($id);
        return redirect()->route('blogs.index')->with('popsuccess', 'Blog Successfully Deleted');
    }
}
