<?php

namespace App\Http\Controllers\Ecover;

use App\Http\Controllers\Controller;
use App\Models\Ebook\Ecover;
use App\Models\Ebook\Dimension;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;
use Carbon\Carbon;
//use CloudinaryLabs\CloudinaryLaravel\MediaAlly;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use App\Traits\Generics;
use RealRashid\SweetAlert\Facades\Alert;
use PDF;

class EcoverController extends Controller
{
    use Generics;

    function __construct(Dimension $dimension, Ecover $ecover)
    {
        $this->dimension = $dimension;
        $this->ecover = $ecover;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ecoverCreator()
    {

        //get list of the available ecovers
        $ecovers = $this->ecover->getAllEcover([
            ['status', 'true'],
        ]);
        // foreach ($ecover as $each_ecover) {
        //     $each_ecover->createdBy;
        //     $each_ecover->dimensions;
        // }

        // $data = [
        //     'ecover' => $ecover,
        // ];
        return view('front.pages.ecover.ecoverCreator', compact('ecovers'));
        //return view('front.pages.ecover.ecoverCreator', $data);
    }

    public function editorPage()
    {
        return view('front.pages.ecover.editor');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ecoverCreatorPost(Request $request)
    {
        $data = $request->all();
        //var_dump(openssl_get_cert_locations());

        $rules = array(
            'title' => 'required|string',
        );
        $messages = [
            'title.required' => '* This field is required',
            'title.string'   => 'Invalid Characters',
        ];
        // validate against inputs frm d form
        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        } else {

            // geting the dimension details to insert the id into the Ecover model
            $type_id = $this->dimension->getSingleDimension([
                ['type', $data['type_value']],
            ]);

            if ($type_id != null) {

                $thumbnailUrl = 'default.jpg';
                // addind the image to cloudinary
                if ($request->hasFile('thumbnail')) {

                    // Uploading an image file to cloudinary and resizing the image to a resolution specified by the dimension parameters with one line of code
                    $thumbnailUrl = Cloudinary::upload($request->file('thumbnail')->getRealPath(), [
                        'folder' => 'uploads',
                        'transformation' => [
                            'width' => $type_id->width,
                            'height' => $type_id->height
                        ]
                    ])->getSecurePath();
                }

                $ecover = new Ecover();
                $ecover->unique_id = $this->createUniqueId('ecovers', 'unique_id');
                $ecover->title = $data['title'];
                $ecover->dimension_id = $type_id->id;
                $ecover->created_by = 1;
                $ecover->thumbnail = $thumbnailUrl;
                $ecover->save();

                Alert::success('Ecover Created Successfully', '');
                return back();
            }
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
