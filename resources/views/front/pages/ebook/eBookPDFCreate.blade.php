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
                    <h5 class="title">Create Manually</h5>
                    <a href="{{ route('ebookCreator') }}" class="btn d-flex btn-find">
                        <i class="flaticon-left-arrow icons"></i>
                        Back To Create eBook </a>
                    <button class="btn btn-gen-ebook ml-auto mr-3">Regenerate ebook</button>
                </div>
                <form action="{{ route('saveEbook') }}" method="POST">@csrf
                    <div class="row x-pd-r">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="ebook_title">TITLE</label>
                                <input id="ebook_title" class="form-control no-shadow input-signin" type="text" name="ebook_title" required>
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
                    <div class="row x-pd-r">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="fonts_family">BODY FONT FAMILY</label>
                                <select id="fonts_family" class="form-control no-shadow input-signin" name="fonts_family">
                                    <option value="">Please Select</option>
                                    @if (count($fonts_family) > 0)
                                        @foreach ($fonts_family as $each_family)
                                            <option value="{{ $each_family['family'] }}">{{ $each_family['family'] }}</option>
                                        @endforeach                                        
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="font_size">BODY TEXT SIZE</label>
                                <select id="font_size" name="font_size" class="form-control no-shadow input-signin">
                                    <option value="8">8px</option>
                                    <option value="9">9px</option>
                                    <option value="10">10px</option>
                                    <option value="11">11px</option>
                                    <option value="12">12px</option>
                                    <option value="13">13px</option>
                                    <option value="14" selected="">14px</option>
                                    <option value="15">15px</option>
                                    <option value="16">16px</option>
                                    <option value="18">18px</option>
                                    <option value="20">20px</option>
                                    <option value="22">22px</option>
                                    <option value="24">24px</option>
                                    <option value="26">26px</option>
                                    <option value="28">28px</option>
                                    <option value="36">36px</option>
                                    <option value="48">48px</option>
                                    <option value="72">72px</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group d-flex flex-column mt-2">
                                <label for="my-input">DARK MODE</label>
                                <label class="switch mb-0">
                                    <input type="checkbox" name="mode_settings">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row x-pd-r">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="page_numbering">PAGE NUMBERING</label>
                                <select id="page_numbering" class="form-control no-shadow input-signin" name="page_numbering">
                                    <option value="none">None</option>
                                    <option value="in_header">In Header</option>
                                    <option value="in_footer">In Footer</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="number_format">NUMBER FORMAT</label>
                                <select id="number_format" class="form-control no-shadow input-signin" name="number_format">
                                    <option value="">[page]</option>
                                    <option value="page">-[page]-</option>
                                    <option value="page">-Page [page]</option>
                                    <option value="page">-Page [page] of [page]</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="head-wrap">
                        <div class="title">HEADER SETTINGS</div>
                        <div class="line"></div>
                    </div>
                    <div class="row x-pd-r">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="header_font_text">TEXT</label>
                                <input id="header_font_text" class="form-control no-shadow input-signin" type="text"  name="header_font_text">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="header_font_link">LINK(OPTIONAL)</label>
                                <input id="header_font_link" class="form-control no-shadow input-signin" type="text"
                                    name="header_font_link">
                            </div> 
                        </div>
                    </div>
                    <div class="row x-pd-r">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="header_font_align">ALIGN</label>
                                <select id="header_font_align" class="form-control no-shadow input-signin" name="header_font_align">
                                    <option>Left</option>
                                    <option value="center">Center</option>
                                    <option value="right">Right</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="header_font_color">Color</label>
                                <input id="header_font_color" name="header_font_color" class="form-control no-shadow input-signin" type="color"
                                    name="">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="header_font_size">TEXT SIZE</label>
                                <select id="header_font_size" name="header_font_size" class="form-control no-shadow input-signin">
                                    <option value="8">8px</option>
                                    <option value="9">9px</option>
                                    <option value="10">10px</option>
                                    <option value="11">11px</option>
                                    <option value="12">12px</option>
                                    <option value="13">13px</option>
                                    <option value="14" selected="">14px</option>
                                    <option value="15">15px</option>
                                    <option value="16">16px</option>
                                    <option value="18">18px</option>
                                    <option value="20">20px</option>
                                    <option value="22">22px</option>
                                    <option value="24">24px</option>
                                    <option value="26">26px</option>
                                    <option value="28">28px</option>
                                    <option value="36">36px</option>
                                    <option value="48">48px</option>
                                    <option value="72">72px</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="header_font_family">FONT FAMILY</label>
                                <select id="header_font_family" class="form-control no-shadow input-signin" name="header_font_family">
                                    <option value="">Please Select</option>
                                    @if (count($fonts_family) > 0)
                                        @foreach ($fonts_family as $each_family)
                                            <option value="{{ $each_family['family'] }}">{{ $each_family['family'] }}</option>
                                        @endforeach                                        
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="head-wrap">
                        <div class="title">
                            FOOTER SETTINGS
                        </div>
                        <div class="line"></div>
                    </div>
                    <div class="row x-pd-r">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="footer_font_text">TEXT</label>
                                <input id="footer_font_text" class="form-control no-shadow input-signin" type="text" name="footer_font_text">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="footer_font_link">LINK(OPTIONAL)</label>
                                <input id="footer_font_link" class="form-control no-shadow input-signin" type="text" name="footer_font_link">
                            </div>
                        </div>
                    </div>
                    <div class="row x-pd-r">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="footer_font_align">ALIGN</label>
                                <select id="footer_font_align" class="form-control no-shadow input-signin" name="footer_font_align">
                                    <option>Left</option>
                                    <option value="center">Center</option>
                                    <option value="right">Right</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="footer_font_color">Color</label>
                                <input id="footer_font_color" class="form-control no-shadow input-signin" type="color"  name="footer_font_color">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="footer_font_size">TEXT SIZE</label>
                                <select id="footer_font_size" name="footer_font_size" class="form-control no-shadow input-signin">
                                    <option value="8">8px</option>
                                    <option value="9">9px</option>
                                    <option value="10">10px</option>
                                    <option value="11">11px</option>
                                    <option value="12">12px</option>
                                    <option value="13">13px</option>
                                    <option value="14" selected="">14px</option>
                                    <option value="15">15px</option>
                                    <option value="16">16px</option>
                                    <option value="18">18px</option>
                                    <option value="20">20px</option>
                                    <option value="22">22px</option>
                                    <option value="24">24px</option>
                                    <option value="26">26px</option>
                                    <option value="28">28px</option>
                                    <option value="36">36px</option>
                                    <option value="48">48px</option>
                                    <option value="72">72px</option>
                                </select>
                            </div>
                        </div>  
                        <div class="col-3">
                            <div class="form-group">
                                <label for="footer_font_family">FONT FAMILY</label>
                                <select id="footer_font_family" class="form-control no-shadow input-signin" name="footer_font_family">
                                    <option value="">Please Select</option>
                                    @if (count($fonts_family) > 0)
                                        @foreach ($fonts_family as $each_family)
                                            <option value="{{ $each_family['family'] }}">{{ $each_family['family'] }}</option>
                                        @endforeach                                        
                                    @endif
                                </select>
                            </div>
                        </div> 
                    </div>
                    <div class="head-wrap">
                        <div class="title">
                            TITLE SETTINGS
                        </div>
                        <div class="line"></div>
                    </div>
                    <div class="row x-pd-r">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="title_align">ALIGN</label>
                                <select id="title_align" class="form-control no-shadow input-signin" name="title_align">
                                    <option>Left</option>
                                    <option value="center">Center</option>
                                    <option value="right">Right</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="title_color">Color</label>
                                <input id="title_color" class="form-control no-shadow input-signin" type="color" name="title_color">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="title_size">TEXT SIZE</label>
                                <select id="title_size" name="title_size" class="form-control no-shadow input-signin">
                                    <option value="8">8px</option>
                                    <option value="9">9px</option>
                                    <option value="10">10px</option>
                                    <option value="11">11px</option>
                                    <option value="12">12px</option>
                                    <option value="13">13px</option>
                                    <option value="14" selected="">14px</option>
                                    <option value="15">15px</option>
                                    <option value="16">16px</option>
                                    <option value="18">18px</option>
                                    <option value="20">20px</option>
                                    <option value="22">22px</option>
                                    <option value="24">24px</option>
                                    <option value="26">26px</option>
                                    <option value="28">28px</option>
                                    <option value="36">36px</option>
                                    <option value="48">48px</option>
                                    <option value="72">72px</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="head-wrap">
                        <div class="title">
                            SUBHEADER SETTINGS
                        </div>
                        <div class="line"></div>
                    </div>
                    <div class="row x-pd-r">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="subheading_text">TEXT</label>
                                <input id="subheading_text" class="form-control no-shadow input-signin" type="text" name="subheading_text">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="subheading_link">LINK(OPTIONAL)</label>
                                <input id="subheading_link" class="form-control no-shadow input-signin" type="text" name="subheading_link">
                            </div>
                        </div>
                    </div>
                    <div class="row x-pd-r">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="subheading_align">ALIGN</label>
                                <select id="subheading_align" class="form-control no-shadow input-signin" name="subheading_align">
                                    <option>Left</option>
                                    <option value="center">Center</option>
                                    <option value="right">Right</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="subheading_font_color">Color</label>
                                <input id="subheading_font_color" class="form-control no-shadow input-signin" type="color" name="subheading_font_color">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="subheading_font_size">TEXT SIZE</label>
                                <select id="subheading_font_size" name="subheading_font_size" class="form-control no-shadow input-signin">
                                    <option value="8">8px</option>
                                    <option value="9">9px</option>
                                    <option value="10">10px</option>
                                    <option value="11">11px</option>
                                    <option value="12">12px</option>
                                    <option value="13">13px</option>
                                    <option value="14" selected="">14px</option>
                                    <option value="15">15px</option>
                                    <option value="16">16px</option>
                                    <option value="18">18px</option>
                                    <option value="20">20px</option>
                                    <option value="22">22px</option>
                                    <option value="24">24px</option>
                                    <option value="26">26px</option>
                                    <option value="28">28px</option>
                                    <option value="36">36px</option>
                                    <option value="48">48px</option>
                                    <option value="72">72px</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="subheading_font_family">FONT FAMILY</label>
                                <select id="subheading_font_family" class="form-control no-shadow input-signin" name="subheading_font_family">
                                    <option value="">Please Select</option>
                                    @if (count($fonts_family) > 0)
                                        @foreach ($fonts_family as $each_family)
                                            <option value="{{ $each_family['family'] }}">{{ $each_family['family'] }}</option>
                                        @endforeach                                        
                                    @endif
                                </select>
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
                    <div class="x-pd-r mb-3">
                        <div class="table-gen-chapter-wrap">
                            <div class="table-head">
                                <div class="right-section align-items-center">
                                    <div class="content">
                                        <div class="title">eBook Chapters</div>
                                        <div class="desc">Drag & Drop table rows to change the ebook chapters order and press</div>
                                    </div>
                                    <div>
                                        <a class="btn btn-gen-chapter">Save Order</a>
                                    </div>
                                </div>
                                <div class="left-section ml-auto">
                                    <a href="#" class="btn btn-gen-chapter">Add New Chapter</a>
                                </div>
                            </div>
                            <table class="table table-striped table-bordered table-hover" id="myTable">
                                <thead>
                                    <tr>
                                        <th>CURRENT</th>
                                        <th class="text-left">TITLE</th>
                                        <th class="text-left">ACTION</th>
                                        <th class="text-left">NEW</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($selectedArticles) > 0)
                                        @php $counter = 1; @endphp
                                        @foreach ($selectedArticles as $key => $each_articles)
                                        <tr>
                                            <td scope="row">{{ $key }}</td>
                                            <td>{{ $each_articles['title'] }}</td>
                                            <td class="text-center">
                                                <nav class="nav justify-content-center table-actions">                    
                                                    <li class="nav-item">
                                                        <a class="nav-link px-1" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                            <img src="../assets/icons/copy to my funnel.svg" alt="">
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link px-1" href="#" data-toggle="tooltip" data-placement="top" title="" onclick="return confirm('Are you sure you wish to delete this Chapter?');" data-original-title="Delete">
                                                            <img src="../assets/icons/try/funnel project svg/ic_cancel_24px.svg" alt="">
                                                        </a>
                                                    </li>
                                                </nav>
                                            </td>
                                            <td class="text-center">
                                                {{ $counter }}
                                                <input type="hidden" name="abc" id="index" value="{{ $key }}">
                                            </td>
                                        </tr>
                                            @php $counter++ @endphp   
                                        @endforeach
                                    @else
                                        <tr><td>No Data Available at this Moment</td></tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="x-pd-r mt-5">
                        <div class="table-gen-chapter-wrap">
                            <div class="table-head">
                                <div class="right-section align-items-center">
                                    <div class="content">
                                        <div class="title">GENERAL CHAPTER</div>
                                    </div>
                                </div>
                                <div class="left-section ml-auto">
                                    <a class="btn btn-gen-chapter"> Copy To eBook</a>
                                </div>
                            </div>
                            <table class="table table-striped table-bordered table-hover">
                                <tbody>
                                    @if (count($dfyChapters) > 0)
                                        @foreach ($dfyChapters as $each_dfy_chapters)
                                        <tr>
                                            <td>{{ $each_dfy_chapters['title'] }}</td>
                                            <td> <input type="checkbox" class="smallCheckBox" name="articleChecked[]"></td>
                                        </tr> 
                                        @endforeach
                                    @else
                                        <tr><td>No Data Available at this Moment</td></tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
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

  @include('front.js_files.eBookJsHandler')

  <script>
       // #4 Grouped Images
        Fancybox.bind("#grouped-images-2 a", {
        groupAll: true,
        });
  </script>

@endsection

@endsection