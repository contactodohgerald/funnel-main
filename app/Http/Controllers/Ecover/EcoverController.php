<?php

namespace App\Http\Controllers\Ecover;

use App\Http\Controllers\Controller;
use App\Models\Ebook\Ecover;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EcoverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ecoverCreator()
    {
        return view('front.pages.ecover.ecoverCreator');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ecoverCreatorPost(Request $request)
    {
        $data = $request->all();

        $rules = array(
            'name' => 'required|string',
            'height'   => 'required',
            'width'   => 'required',
        );
        $messages = [
            'name.required' => '* This field is required',
            'name.string'   => 'Invalid Characters',

            'height.required' => '* This field is required',
            'width.required' => '* This field is required',
        ];


        // validate against inputs frm d form
        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        } else {

            $ecover = new Ecover();
            $ecover->title = $data['title'];
            $ecover->height = $data['height'];
            $ecover->width = $data['width'];
            $ecover->save();

            return back()->with('success', 'Ecover Created Successfully!');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
