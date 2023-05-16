<?php

namespace App\Http\Controllers;

use App\Models\Mension;
use Illuminate\Http\Request;

/**
 * Class MensionController
 * @package App\Http\Controllers
 */
class MensionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mensions = Mension::paginate();

        return view('mension.index', compact('mensions'))
            ->with('i', (request()->input('page', 1) - 1) * $mensions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mension = new Mension();
        return view('mension.create', compact('mension'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Mension::$rules);

        $mension = Mension::create($request->all());

        return redirect()->route('mension.index')
            ->with('success', 'Mension created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mension = Mension::find($id);

        return view('mension.show', compact('mension'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mension = Mension::find($id);

        return view('mension.edit', compact('mension'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Mension $mension
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mension $mension)
    {
        request()->validate(Mension::$rules);

        $mension->update($request->all());

        return redirect()->route('mension.index')
            ->with('success', 'Mension updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mension = Mension::find($id)->delete();

        return redirect()->route('mension.index')
            ->with('success', 'Mension deleted successfully');
    }
}
