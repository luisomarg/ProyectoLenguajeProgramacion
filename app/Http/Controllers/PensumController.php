<?php

namespace App\Http\Controllers;

use App\Models\Pensum;
use Illuminate\Http\Request;

/**
 * Class PensumController
 * @package App\Http\Controllers
 */
class PensumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pensums = Pensum::paginate();

        return view('pensum.index', compact('pensums'))
            ->with('i', (request()->input('page', 1) - 1) * $pensums->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pensum = new Pensum();
        return view('pensum.create', compact('pensum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Pensum::$rules);

        $pensum = Pensum::create($request->all());

        return redirect()->route('pensums.index')
            ->with('success', 'Pensum created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pensum = Pensum::find($id);

        return view('pensum.show', compact('pensum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pensum = Pensum::find($id);

        return view('pensum.edit', compact('pensum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Pensum $pensum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pensum $pensum)
    {
        request()->validate(Pensum::$rules);

        $pensum->update($request->all());

        return redirect()->route('pensums.index')
            ->with('success', 'Pensum updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pensum = Pensum::find($id)->delete();

        return redirect()->route('pensums.index')
            ->with('success', 'Pensum deleted successfully');
    }
}
