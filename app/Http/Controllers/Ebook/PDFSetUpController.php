<?php

namespace App\Http\Controllers\Ebook;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Traits\Generics;
use App\Traits\EbookHandler;
use App\Models\Ebook\Ebook;
use App\Models\Ebook\EbookArticleAttribute;
use App\Models\Ebook\Ecover;
use App\Models\EbookHeaderOrFooterSetting;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use PDF;

class PDFSetUpController extends Controller
{
    function __construct(Ecover $ecover)
    {
        $this->ecover = $ecover;
    }

    use Generics, EbookHandler;

    //setUpPage. from here we regenerate PDF
    public function eBookPDFCreate()
    {
        // $data = ['title' => 'lorem'];
        // $pdf = PDF::loadView('front.pages.ebook.ebookPDF', $data);

        // // download PDF file with download method
        // $pdf->download('pdf_file.pdf');

        // return;



        //to be used in setUpPage
        $keywords = Session::get('keywords');

        //$fonts_family = collect($this->fetchFontFamily())->all();
        $selectedArticles = Session::get('selectedArticles');

        $dfyChapters = [];

        $ecoverList = $this->ecover->getAllEcover([
            ['status', 'true'],
            ['created_by', 1],
        ]);

        $view = [
            'selectedArticles' => $selectedArticles,
            //'fonts_family' => $fonts_family,
            'dfyChapters' => $dfyChapters,
            'ecoverList' => $ecoverList,
            'keywords' => $keywords
        ];

        return view('front.pages.ebook.eBookPDFCreate', $view);
    }

    //after clicking regenerate btn
    public function regenerateEbook(Request $request)
    {
        $data = $request->all();

        $rules = array(
            'title' => 'required',
            'ebook_author' => 'required',
        );
        $messages = [
            'title.required' => '* This field is required',
            'ebook_author.required' => '* This field is required',
        ];
        // validate against inputs frm d form
        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        } else {
            $ebook = new Ebook();
            // $ebook->unique_id = $this->createUniqueId('ebooks ', 'unique_id');
            $ebook->unique_id = Str::random(10);
            $ebook->created_by = 1;

            $ebook->title = $data['title'];
            $ebook->ebook_author = $data['ebook_author'];
            $ebook->cover_image = $data['cover_image'];
            $ebook->body_font_family = $data['body_font_family'] ? $data['body_font_family'] : null;
            $ebook->body_font_size = $data['body_font_size'] ? $data['body_font_size'] : null;
            $ebook->dark_mode = isset($data['dark_mode']) ? 'true' : 'false';

            $ebook->page_numbering = $data['page_numbering']; //in_header or in_footer
            $ebook->numbering_format = $data['numbering_format']; //[page], -[page]-, Page [page], Page [page] of [topage]

            $ebook->header_text = isset($data['header_text']) ? $data['header_text'] : null;
            $ebook->header_text_link = isset($data['header_text_link']) ? $data['header_text_link'] : null;
            $ebook->header_text_align = $data['header_text_align'] ? $data['header_text_align'] : null;
            $ebook->header_text_color = $data['header_text_color'] ? $data['header_text_color'] : null;
            $ebook->header_font_size = isset($data['header_font_size']) ? $data['header_font_size'] : null;
            $ebook->header_font_family = isset($data['header_font_family']) ? $data['header_font_family'] : null;

            $ebook->footer_text = isset($data['footer_text']) ? $data['footer_text'] : null;
            $ebook->footer_text_link = isset($data['footer_text_link']) ? $data['footer_text_link'] : null;
            $ebook->footer_text_align = $data['footer_text_align'] ? $data['footer_text_align'] : null;
            $ebook->footer_text_color = $data['footer_text_color'] ? $data['footer_text_color'] : null;
            $ebook->footer_font_size = isset($data['footer_font_size']) ? $data['footer_font_size'] : null;
            $ebook->footer_font_family = isset($data['footer_font_family']) ? $data['footer_font_family'] : null;

            $ebook->title_text_align = $data['title_text_align'] ? $data['title_text_align'] : null;
            $ebook->title_text_color = $data['title_text_color'] ? $data['title_text_color'] : null;
            $ebook->title_font_size = $data['title_font_size'] ? $data['title_font_size'] : null;

            $ebook->subheader_text = $data['subheader_text'] ? $data['subheader_text'] : null;
            $ebook->subheader_text_link = $data['subheader_text_link'] ? $data['subheader_text_link'] : null;
            $ebook->subheader_text_align = $data['subheader_text_align'] ? $data['subheader_text_align'] : null;
            $ebook->subheader_text_color = $data['subheader_text_color'] ? $data['subheader_text_color'] : null;
            $ebook->subheader_font_size = $data['subheader_font_size'] ? $data['subheader_font_size'] : null;
            $ebook->subheader_font_family = $data['subheader_font_family'] ? $data['subheader_font_family'] : null;

            $ebook->description = $data['description'] ? $data['description'] : null;
            $ebook->summary = $data['summary'] ? $data['summary'] : null;
            $ebook->save();

            ///
            foreach ($data['articleTitle'] as $key => $val) {
                if (!empty($val)) {

                    //used in pdf
                    $articleData[] = [
                        'title' => $val,
                        'description' => $data['articleDescription'][$key],
                    ];

                    $ebookArticleAttribute = new EbookArticleAttribute();
                    //$ebookArticleAttribute->unique_id = $this->createUniqueId('ebook_article_attributes ', 'unique_id');
                    $ebookArticleAttribute->unique_id = Str::random(10);
                    $ebookArticleAttribute->created_by = 1;

                    $ebookArticleAttribute->article_title = $val;
                    $ebookArticleAttribute->article_description = $data['articleDescription'][$key];
                    $ebookArticleAttribute->ebook_id = $ebook->id;
                    $ebookArticleAttribute->save();
                }
            }

            //used in pdf
            $idata = [
                'title' => $data['title'],
                'ebook_author' => $data['ebook_author'],
                'cover_image' => $data['cover_image'],
                'body_font_family' => $data['body_font_family'] ? $data['body_font_family'] : '',
                'body_font_size' => $data['body_font_size'] ? $data['body_font_size'] : '',
                'dark_mode' => isset($data['dark_mode']) ? $data['dark_mode'] : '',

                'page_numbering' => $data['page_numbering'], //in_header or in_footer
                'numbering_format' => $data['numbering_format'], //[page], -[page]-, Page [page], Page [page] of [topage]

                'header_text' => isset($data['header_text']) ? $data['header_text'] : '',
                'header_text_link' => isset($data['header_text_link']) ? $data['header_text_link'] : '',
                'header_text_align' => $data['header_text_align'] ? $data['header_text_align'] : '',
                'header_text_color' => $data['header_text_color'] ? $data['header_text_color'] : '',
                'header_font_size' => isset($data['header_font_size']) ? $data['header_font_size'] : '',
                'header_font_family' => isset($data['header_font_family']) ? $data['header_font_family'] : '',

                'footer_text' => isset($data['footer_text']) ? $data['footer_text'] : '',
                'footer_text_link' => isset($data['footer_text_link']) ? $data['footer_text_link'] : '',
                'footer_text_align' => $data['footer_text_align'] ? $data['footer_text_align'] : '',
                'footer_text_color' => $data['footer_text_color'] ? $data['footer_text_color'] : '',
                'footer_font_size' => isset($data['footer_font_size']) ? $data['footer_font_size'] : '',
                'footer_font_family' => isset($data['footer_font_family']) ? $data['footer_font_family'] : '',

                'title_text_align' => $data['title_text_align'] ? $data['title_text_align'] : '',
                'title_text_color' => $data['title_text_color'] ? $data['title_text_color'] : '',
                'title_font_size' => $data['title_font_size'] ? $data['title_font_size'] : '',

                'subheader_text' => $data['subheader_text'] ? $data['subheader_text'] : '',
                'subheader_text_link' => $data['subheader_text_link'] ? $data['subheader_text_link'] : '',
                'subheader_text_align' => $data['subheader_text_align'] ? $data['subheader_text_align'] : '',
                'subheader_text_color' => $data['subheader_text_color'] ? $data['subheader_text_color'] : '',
                'subheader_font_size' => $data['subheader_font_size'] ? $data['subheader_font_size'] : '',
                'subheader_font_family' => $data['subheader_font_family'] ? $data['subheader_font_family'] : '',

                'description' => $data['description'] ? $data['description'] : '',
                'summary' => $data['summary'] ? $data['summary'] : '',

                'articleData' => $articleData,
            ];

            $pdf = PDF::loadView('myPDF', $idata);
            Alert::success('Ebook PDF Generated Successfully', '');
            $pdf->stream('ebook.pdf', array("Attachment" => false));
            return back();
            $pdf->download('new_ebook.pdf');
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
