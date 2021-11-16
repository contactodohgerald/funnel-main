@php $pageTitle = 'Ebook PDF Creator' @endphp
@extends('front.layouts.design')

@section('extra_css')   
<style>
    #myTable td:hover{
        cursor:move;
    }
    .rounded {
        border-radius: 0.25rem;
        width: 100%;
        height: 100%;
    }
    img, video {
        max-width: 100%;
        height: auto;
    }

    .ecover-hold{
        border: 3px solid #a7a5a5;
    } 
    
    .ecover-hold:hover{
        border: 3px solid #e27878;
        cursor:move;
        border-radius: 2%;
    }
</style>
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
                <form action="{{ route('saveUploadedEbook') }}" method="POST">@csrf
                    <div class="row x-pd-r">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="ebook_title">TITLE</label>
                                <input id="ebook_title" class="form-control no-shadow input-signin" type="text" name="ebook_title" value="{{ $ebookTitle }}" required>
                                <input type="hidden" class="form-control no-shadow input-signin" name="ebookFileUrl" value="{{ $ebookFileUrl }}">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="ebook_author">AUTHOR</label>
                                <input id="ebook_author" class="form-control no-shadow input-signin" type="text" name="ebook_author" required>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="ebook_cover_image">COVER IMAGE (OPTIONAL)</label>
                                <input id="ebook_cover_image" class="form-control no-shadow input-signin browse_modal" type="url" name="ebook_cover_image">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="btn-flex align-item-left mt-4">
                                <a data-toggle="slide-in-wrap" data-target="#book-cover"
                                class="btn btn-browse">Browse</a>
                                <a class="btn btn-danger" id="reset-ecover">Reset</a>
                            </div>
                        </div>
                    </div>
                    <div class="editor-main x-pd-r">
                        <div class="label">DESCRIPTION (OPTIONAL)</div>
                        <div class="editor-wrap mb-4">
                            <textarea id="description" rows="20" name="description" class="form-control no-shadow"></textarea>
                        </div>
                    </div>
                    <div class="editor-main x-pd-r">
                        <div class="label"> SUMMARY (OPTIONAL)</div>
                        <div class="editor-wrap mb-4">
                            <textarea id="summary" rows="20" name="summary" class="form-control no-shadow"></textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-2 mb-4 x-pd-r">
                        <button class="btn btn-find" type="submit">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @section('extra_div')
        <div id="book-cover" class="slide-in-wrap">
            <div class="slide-in-inner">
                <div class="slide-head">
                    <div class="slide-details">
                        <h5 class="title">Select Your Preferred eCover</h5>
                    </div>
                    <button class="btn btn-close" data-dismiss=".slide-in-wrap">
                        <i class="flaticon-cancel icons"></i>
                    </button>
                </div>
                <div class="images-select-wrap">
                    <div class="row">
                        @if (count($ecoverList) > 0)
                            @foreach ($ecoverList as $each_ecover)
                                <div class="col-3 m-1 ecover-hold">
                                    <div class="img-box grab_ecover_url text-center">
                                        <img src="{{ $each_ecover->thumbnail }}" alt="{{ env('APP_NAME') }}">
                                        <input type="hidden" value="{{ $each_ecover->thumbnail }}" class="form-control">
                                        <button class="btn btn-success" disabled>Tap Image To Select</button>
                                    </div>
                                </div>
                            @endforeach                
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endsection 

@section('extra_js')  
    @include('front.js_files.eBookJsHandler')
@endsection

@endsection