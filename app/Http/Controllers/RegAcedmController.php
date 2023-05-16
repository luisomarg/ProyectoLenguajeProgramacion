<?php

namespace App\Http\Controllers;

use App\Models\RegAcedm;
use Illuminate\Http\Request;

/**
 * Class RegAcedmController
 * @package App\Http\Controllers
 */
class RegAcedmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regAcedms = RegAcedm::paginate();

        return view('reg-acedm.index', compact('regAcedms'))
            ->with('i', (request()->input('page', 1) - 1) * $regAcedms->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regAcedm = new RegAcedm();
        return view('reg-acedm.create', compact('regAcedm'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(RegAcedm::$rules);

        $regAcedm = RegAcedm::create($request->all());

        return redirect()->route('reg-acedm.index')
            ->with('success', 'RegAcedm created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $regAcedm = RegAcedm::find($id);

        return view('reg-acedm.show', compact('regAcedm'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $regAcedm = RegAcedm::find($id);

        return view('reg-acedm.edit', compact('regAcedm'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  RegAcedm $regAcedm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegAcedm $regAcedm)
    {
        request()->validate(RegAcedm::$rules);

        $regAcedm->update($request->all());

        return redirect()->route('reg-acedm.index')
            ->with('success', 'RegAcedm updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $regAcedm = RegAcedm::find($id)->delete();

        return redirect()->route('reg-acedm.index')
            ->with('success', 'RegAcedm deleted successfully');
    }
}
