<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Csr;
use App\Services\CsrServices\CsrService;
use Illuminate\Http\Request;

class CsrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(
        protected CsrService $CsrService
      ) {
      }

    public function index()
    {
        //

        $data=Csr::get();
        return view('admin.csr.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('admin.csr.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->CsrService->create($request->all());
        return redirect()->route('csr.index')->with('popsuccess','Csr Successfully store');


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
       $datas= $this->CsrService->edit($id);
        return view('admin.csr.edit', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $this->CsrService->update($request->all() , $id);
        return redirect()->route('csr.index')->with('popsuccess','Csr Successfully Edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $this->CsrService->delete($id);
        return redirect()->back()->with('success', 'Csr deleted successfully');
    }
}
