<?php

namespace App\Http\Controllers\Ebook;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Traits\Generics;
use App\Traits\EbookHandler;
use App\Models\Ebook\Ebook;
use App\Models\Ebook\Ecover;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use RealRashid\SweetAlert\Facades\Alert;

class ArticleEbookController extends Controller
{
    function __construct(Ecover $ecover)
    {
        $this->ecover = $ecover;
    }

    use Generics, EbookHandler;

    public function pullArticles(Request $request)
    {
        $data = $request->all();

        $rules = array(
            'keywords' => 'required|string',
            'repository' => 'required',
            'match' => 'required',
            'collect' => 'required',
        );
        $messages = [
            'keywords.required' => '* This field is required',
            'keywords.string'   => 'Invalid Characters',

            'repository.required' => '* This field is required',
            'match.required' => '* This field is required',
            'collect.required' => '* This field is required',
        ];
        // validate against inputs frm d form
        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        } else {

            $result = collect($this->fetchArticles($data['keywords']))->random($data['collect'])->all();

            Session::put('result', $result);
            Session::put('keywords', $data['keywords']);

            return redirect()->route('returnedArticle');
        }
    }

    public function returnedArticle()
    {
        $result = Session::get('result');
        $keywords = Session::get('keywords');

        return view('front.pages.ebook.returnedArticle', compact('result', 'keywords'));
    }

    //post request from returnedArticle pg
    public function articleSelected(Request $request)
    {
        $data = $request->all();

        if (!isset($data['articleChecked'])) {
            Alert::success('Please select article', '');
            return back();
        }

        foreach ($data['articleChecked'] as $key => $val) {
            if (!empty($val)) {

                $selectedArticles[] = [
                    'title' => $data['title'][$key],
                    'description' => $data['description'][$key],
                    'author' => $data['author'][$key],
                ];
            }
        }

        Session::put('selectedArticles', $selectedArticles);
        return redirect()->route('eBookPDFCreate');
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
