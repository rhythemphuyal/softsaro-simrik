<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Gallery;
use App\Services\GalleryService\GalleryService;
use Illuminate\Http\Request;

class GallerySectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct(
        protected GalleryService $galleryService
    ) {
    }

    public function index()
    {
        //

        $data = $this->galleryService->index();
        return view('admin.gallery.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->galleryService->create($request->all());

        return redirect()->route('gallerysection.index')->with('popsuccess',"Successfully created");
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
    public function edit(string $id)
    {
        //
        $data= $this->galleryService->edit($id);

        return view('admin.gallery.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $this->galleryService->update($request->all(),$id);

        return redirect()->route('gallerysection.index')->with('popsuccess','Gallery Successfully Edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $this->galleryService->delete($id);
        return redirect()->back()->with('popsuccess',"Successfully deleted");
    }
}
