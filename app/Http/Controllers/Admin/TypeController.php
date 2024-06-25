<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Service;
use App\Models\Scheme;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Services\TypeServices\TypeService;


class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(
        protected TypeService $typeService
    ) {
    }

    public function index()
    {
        //

        $data = Type::get();
        return view('admin.type.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $service = Service::get();
        $scheme = Scheme::get();


        return view('admin.type.create', compact("scheme", "service"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $this->typeService->create($request->all());
        return redirect()->route('type.index')->with('popsuccess', 'Schemes Successfully store');
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
        $services = Service::get();

        $datas = $this->typeService->edit($id);
        return view('admin.type.edit', compact('datas', 'services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $this->typeService->update($request->all(), $id);
        return redirect()->route('schemes.index')->with('popsuccess', 'Schemes Successfully Edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $this->typeService->delete($id);
        return redirect()->back()->with('success', 'Schemes deleted successfully');
    }
}
