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
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class EbookController extends Controller
{

    use Generics, EbookHandler, MediaAlly;

    function __construct()
    { }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ebookCreator()
    {
        return view('front.pages.ebook.ebookCreator');
    }

    public function returnedArticle()
    {
        $result = Session::get('result');

        return view('front.pages.ebook.articlesHoldPage', compact('result'));
    }

    public function ebookByArticleSelected(Request $request)
    {
        $data = $request->all();
        foreach ($data['articleChecked'] as $key => $val) {
            if (!empty($val)) {

                $selectedArticles[] = [
                    'title' => $data['title'][$key],
                    'description' => $data['description'][$key],
                    'author' => $data['author'][$key],
                ];
            }
        }

        // echo "<pre>";
        // print_r($selectedArticles);
        // die;
        Session::put('selectedArticles', $selectedArticles);
        return redirect()->route('ebookPageEditor');
    }

    public function ebookPageEditor()
    {
        $selectedArticles = Session::get('selectedArticles');
        return view('front.pages.ebook.ebookPageEditor', compact('selectedArticles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pullArticlesForView(Request $request)
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
            $api_key = '3c84276a0d254cac86b008ab30918286';
            $query = $data['keywords'];
            $page_size = $data['collect'];
            $page = $data['collect'];

            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $api_key,
            ])->get('https://newsapi.org/v2/everything', [
                'q' => $query,
                'sortBy' => 'popularity',
                'apiKey' => $api_key,
                // 'page_size' => $page_size,
                // 'page' => $page,
            ]);
            $decoded_response = json_decode($response, true);
            $result = collect($decoded_response['articles'])->random(10)->all();
            //return $result = $this->fetchArticles($data['keywords'], $data['collect'], $data['collect']);

            //return redirect()->route('route.name', [$param]);
            Session::put('result', $result);
            return redirect()->route('article-result');
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
