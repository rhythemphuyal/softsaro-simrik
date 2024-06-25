<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Services\BannerServices\BannerService;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct(
        protected BannerService $bannerService
    ) {
    }
    public function index()
    {
        $banners = $this->bannerService->index();
        // dd($banners);
        return view('admin.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->bannerService->create($request->all());

        return redirect()->route('banner.index')->with('popsuccess', 'Banner Successfully store');
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
        $banners = $this->bannerService->edit($id);
        // dd($banners);
        return view('admin.banner.edit', compact('banners'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = $this->bannerService->update($request->all(), $id);

        return redirect()->route('banner.index')->with('popsuccess', 'Banner Successfully Edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->bannerService->delete($id);

        return redirect()->route('banner.index')->with('popsuccess', 'Banner Successfully Deleted');
    }
}
