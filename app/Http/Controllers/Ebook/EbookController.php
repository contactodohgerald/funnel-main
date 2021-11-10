<?php

namespace App\Http\Controllers\Ebook;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ebook\Ebook;
use Exception;
use Carbon\Carbon;
use CloudinaryLabs\CloudinaryLaravel\MediaAlly;
use App\Traits\Generics;
use App\Traits\EbookHandler;
use Illuminate\Support\Facades\Validator;

class EbookController extends Controller
{

    use Generics, EbookHandler, MediaAlly;

    function __construct(){
      
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ebookCreator()
    {
        return view('front.pages.ebook.ebookCreator');
    } 
    
    public function returnedArticle(Request $request){

        $session_value = $request->session()->pull('result', 'default');

        $view = [
            'session_value'=>$session_value,
        ];

        return view('front.pages.ebook.articlesHoldPage', $view);
    }

       /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pullArticlesForView(Request $request){

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
        }else{
            $result = $this->fetchArticles($data['keywords'], $data['collect'], $data['collect']);

           // session()->flash('result', $result); // Store it as flash data.

            session(['result' => $result]); // Store it in a session.

            return redirect('/article-result');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
