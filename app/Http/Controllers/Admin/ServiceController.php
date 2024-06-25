<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceRequest;
use App\Services\BannerServices\BannerService;
use App\Services\ServiceServices\ServiceService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct(
        protected ServiceService $serviceService
      ) {
      }
    public function index()
    {
        $services = $this->serviceService->index();
        // dd($banners);
        return view('admin.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $this->serviceService->create($request->all());

        return redirect()->route('service.index')->with('popsuccess','Service Successfully store');
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
        $services = $this->serviceService->edit($id);
        // dd($banners);
        return view('admin.service.edit',compact('services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = $this->serviceService->update($request->all(), $id);

        return redirect()->route('service.index')->with('popsuccess','Service Successfully Edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->serviceService->delete($id);

        return redirect()->route('service.index')->with('popsuccess','Service Successfully Deleted');
    }
}
