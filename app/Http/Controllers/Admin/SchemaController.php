<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Service;
use App\Models\Scheme;
use App\Services\SchemaServices\SchemaService;
use Illuminate\Http\Request;

class SchemaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(
        protected SchemaService $schemaService
    ) {
    }

    public function index()
    {
        //
        $data = Scheme::get();
        return view('admin.scheme.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $services = Service::get();

        return view('admin.scheme.create', compact("services"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->schemaService->create($request->all());
        return redirect()->route('schemes.index')->with('popsuccess', 'Schemes Successfully store');
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

        $datas = $this->schemaService->edit($id);
        return view('admin.scheme.edit', compact('datas', 'services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $this->schemaService->update($request->all(), $id);
        return redirect()->route('schemes.index')->with('popsuccess', 'Schemes Successfully Edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $this->schemaService->delete($id);
        return redirect()->back()->with('popsuccess', 'Schemes deleted successfully');
    }
}
