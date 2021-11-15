<?php

namespace App\Http\Controllers\Ebook;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ebook\Ebook;
use App\Models\Ebook\Ecover;
use Exception;
use Carbon\Carbon;
//use CloudinaryLabs\CloudinaryLaravel\MediaAlly;
use App\Traits\Generics;
use App\Traits\EbookHandler;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use RealRashid\SweetAlert\Facades\Alert;

class EbookController extends Controller
{

    use Generics, EbookHandler;

    function __construct(Ecover $ecover){
        $this->ecover = $ecover;
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ebookCreator(){
        return view('front.pages.ebook.ebookCreator');
    }

    public function returnedArticle(){
        $result = Session::get('result');

        return view('front.pages.ebook.articlesHoldPage', compact('result'));
    }

    public function ebookByArticleSelected(Request $request){
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

        Session::put('selectedArticles', $selectedArticles);
        return redirect()->route('ebookPageEditor');
    }

    public function ebookPageEditor(){

        $fonts_family = collect($this->fetchFontFamily())->all();

        $selectedArticles = Session::get('selectedArticles');

        $dfyChapters = [];

        $ecoverList = $this->ecover->getAllEcover([
            ['status', 'true'],
            ['created_by', 1],
        ]);

        $view = [
            'selectedArticles'=>$selectedArticles,
            'fonts_family'=>$fonts_family,
            'dfyChapters'=>$dfyChapters,
            'ecoverList'=>$ecoverList,
        ];

        return view('front.pages.ebook.eBookPDFCreate', $view);
    }

    public function returnedUrlArticle(){

        $url_articles = Session::get('url_articles');

        return view('front.pages.ebook.urlArticleHolder', compact('url_articles'));
    }

    public function ebookUploadInterface(){

        $ebookFileUrl = Session::get('ebookFileUrl');
        $ebookTitle = Session::get('ebookTitle');
        $ecoverList = $this->ecover->getAllEcover([
            ['status', 'true'],
            ['created_by', 1],
        ]);


        $view = [
            'ebookFileUrl'=>$ebookFileUrl,
            'ebookTitle'=>$ebookTitle,
            'ecoverList'=>$ecoverList,
        ];

        return view('front.pages.ebook.uploadEbook', $view);
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
        } else {

            $result = collect($this->fetchArticles($data['keywords']))->random($data['collect'])->all();

            Session::put('result', $result);

            return redirect()->route('article-result');
        }
    }

    public function saveEbook(Request $request){
        $data = $request->all();

        $rules = array(
            'ebook_title' => 'required',
            'ebook_author' => 'required',
        );
        $messages = [
            'ebook_title.required' => '* This field is required',
            'ebook_author.required' => '* This field is required',
        ];
        // validate against inputs frm d form
        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }else{

        }

    }

    public function fetchArticleFromUrl(Request $request){
        $data = $request->all();
        $rules = array(
            'site_url' => 'required',
        );
        $messages = [
            'site_url.required' => '* This field is required',
        ];
        // validate against inputs frm d form
        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }else{

            $result = collect($this->fetchArticlesFromUrl($data['site_url']))->all();

            Session::put('url_articles', $result);

            return redirect()->route('returnedUrlArticle');

        }
    }

    public function articleUploads(Request $request){
        $data = $request->all();
        $rules = array(
            'ebook_title' => 'required',
        );
        $messages = [
            'ebook_title.required' => '* This field is required',
        ];
        // validate against inputs frm d form ebook_file
        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }else{

            $thumbnailUrl = 'default.jpg';
            // addind the image to cloudinary
            if ($request->hasFile('ebook_file')) {

                // Uploading an image file to cloudinary
                $thumbnailUrl = Cloudinary::upload($request->file('ebook_file')->getRealPath(), [
                    'folder' => 'uploads',
                ])->getSecurePath();
            }

            Session::put('ebookFileUrl', $thumbnailUrl);
            Session::put('ebookTitle', $data['ebook_title']);

            return redirect()->route('ebookUploadInterface');

        }
    }

    public function saveUploadedEbook(Request $request){
        $data = $request->all();

        $rules = array(
            'ebook_title' => 'required',
            'ebook_author' => 'required',
        );
        $messages = [
            'ebook_title.required' => '* This field is required',
            'ebook_author.required' => '* This field is required',
        ];
        // validate against inputs frm d form
        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }else{

            $ebook = new Ebook();
            $ebook->unique_id = $this->createUniqueId('ebooks ', 'unique_id');
            $ebook->title = $data['ebook_title'];
            $ebook->author_name = $data['ebook_author'];
            $ebook->cover_image = $data['ebook_cover_image'];
            $ebook->description = $data['ebook_cover_image'];
            $ebook->summary = $data['ebook_cover_image'];
            $ebook->save();

            return back()->with('success', 'Ebook Was Created Successfully!');
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
