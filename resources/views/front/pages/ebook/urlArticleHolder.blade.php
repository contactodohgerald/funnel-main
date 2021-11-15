@php $pageTitle = 'Ebook PDF Creator' @endphp
@extends('front.layouts.design')

@section('extra_css')   

@endsection

@section('content')

    <div class="content-section">
        <div class="container-fluid custom-x-padding">
            <div class="bg-light create-manual-box pb-3">
                <div class="d-flex align-item-center mb-5">
                    <a href="{{ route('ebookCreator') }}" class="btn d-flex btn-find">
                        <i class="flaticon-left-arrow icons"></i>
                        Back To Create eBook 
                    </a>
                </div>

                <form action="{{ route('saveEbook') }}" method="POST">@csrf
                    <div class="editor-main x-pd-r">
                        <div class="label">GRABED RESULT FROM  <a target="_blank" href="{{ $url_articles['url'] }}">({{ $url_articles['url'] }})</a></div>
                        <div class="editor-wrap mb-4">
                            <div id="editor" name="url_article">{{ $url_articles['html'] }}</div>
                        </div>
                    </div>
                    <button class="btn btn-primary">Create Chapter</button>
                </form>
            </div>
        </div>
    </div>

    @section('extra_div')
    
    @endsection 

@section('extra_js')   

@endsection

@endsection