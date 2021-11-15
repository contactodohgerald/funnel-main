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
                                <a class="btn btn-browse" data-fancybox data-src="#dialog-content">Browse</a>
                                <a class="btn btn-danger">Reset</a>
                            </div>
                        </div>
                    </div>
                    <div class="editor-main x-pd-r">
                        <div class="label">DESCRIPTION (OPTIONAL)</div>
                        <div class="editor-wrap mb-4">
                            <div id="editor" name="description"></div>
                        </div>
                    </div>
                    <div class="editor-main x-pd-r">
                        <div class="label"> SUMMARY (OPTIONAL)</div>
                        <div class="editor-wrap mb-4">
                            <div id="pop-editor" name="summary"></div>
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
        <!-- Fancy Box -->
        <div id="dialog-content" style="display:none;">
            <h2>Ecovers </h2>
            <div id="grouped-images-2" class="pb-16 flex flex-wrap gap-5 justify-center max-w-5xl mx-auto px-6">
                <div class="row">
                    @if (count($ecoverList) > 0)
                    @foreach ($ecoverList as $each_ecover)
                        <div class="col-lg-3 col-md-4">
                            <a href="{{ $each_ecover->thumbnail }}">
                                <img class="rounded" src="{{ $each_ecover->thumbnail }}" alt="{{ env('APP_NAME') }}" />
                            </a>
                            <button class="btn btn-primary">Select</button>
                        </div>
                    @endforeach                
                @endif
                </div>
            </div>
        </div>
    @endsection 

@section('extra_js')  

@endsection

@endsection