<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\SmartPhone;

class SmartphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $smartPhones = SmartPhone::all();
        return view('Smartphone.index',compact('smartPhones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Smartphone.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'modelname' => 'required',
            'manufacturer' => 'required',
            'barcode' => 'required',
            'price' => 'required',
        ]);
        SmartPhone::create($request->all());
        return redirect()->route('Smartphone.index')
            ->with('success','Smartphone created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $smartPhones= SmartPhone::find($id);
        return view('Smartphone.show',compact('smartPhones'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $smartPhones = SmartPhone::find($id);
        return view('Smartphone.edit',compact('smartPhones'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'modelname' => 'required|min:1|max:40',
            'manufacturer' => 'required|min:1|max:40',
            'barcode' => 'required|min:13|max:13',
            'price' => 'required',
        ]);
        SmartPhone::find($id)->update($request->all());
        return redirect()->route('Smartphone.index')
            ->with('success','Smartphone updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SmartPhone::find($id)->delete();
        return redirect()->route('Smartphone.index')
            ->with('success','Smartphone deleted successfully');
    }
}
