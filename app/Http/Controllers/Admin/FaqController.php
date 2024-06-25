<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;
use App\Services\FaqService\FaqService;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */


     public function __construct(
        protected FaqService $FaqService
      ) {
      }

    public function index()
    {
        //


        $data = $this->FaqService->index();
        return view('admin.faq.index',compact('data'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.Faq.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $this->FaqService->create($request->all());
        return redirect()->route('faq.index')->with('popsuccess','Type Successfully store');

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


        $datas = $this->FaqService->edit($id);
        return view('admin.faq.edit',compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $this->FaqService->update( $request->all() , $id);
        return redirect()->route('faq.index')->with('popsuccess','Faq Successfully Edited');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $this->FaqService->delete($id);
        return redirect()->back()->with('success', 'Faq deleted successfully');

    }
}
