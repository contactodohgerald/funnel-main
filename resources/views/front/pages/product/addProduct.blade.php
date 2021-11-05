@php $pageTitle = 'Add Product' @endphp
@extends('front.layouts.design')

@section('extra_css')   
@endsection

@section('content')

<div class="content-section">
    <div class="container-fluid custom-padding">
        <h5 class="head-title">
            My Products
        </h5>
        <div class="content-head align-items-center mb-2">
            <div class="left-section">
                <h6 class="title">Add new Product</h6>
            </div>
            <div class=" ml-2 right-section">

                <a href="product.html" class="btn btn-find btn-full-br">Back to my Product</a>
            </div>
            <button class="btn btn-purple-trans ml-auto btn-edit-cover">
                Save All Edits
            </button>
        </div>
        <div class="content-wrap p-3 pr-5 mb-5 bg-light mt-3">
            <div class="d-flex justify-content-between mb-5">
                <div class="toggle-section">
                    <div class="text">
                        <div class="text-inner text-label">
                            Click To Enable/Disable Sales Page
                        </div>
                        <img class="question-icn" title="" src="/front/icons/question.svg" alt="">
                        <label class="switch mb-0">
                            <input type="checkbox" id="is-sale-active">
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

            </div>
            <div class="row mb-5">
                <div class="col-12 col-md-6">
                    <div class="prod-section">
                        <div class="text-label">
                            Product Settings
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div>
                                    <label for="my-select">EBOOKS</label>
                                    <select id="my-select" class="form-control no-shadow slide-prod-input"
                                        name="">
                                        <option value="none">SELECT EBOOK</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div>
                                    <label for="">PRICE, USD</label>
                                    <input type="number" min="0"
                                        class="form-control no-shadow slide-prod-input" name="" id=""
                                        placeholder="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="token-wrap mr-5">
                <div class="btn-flex mb-4">
                    <div class="d-flex align-items-center">
                        <div class="text-label">
                            Custom Tokens/Shortcodes
                        </div>

                        <button data-target="#show-template" data-text="click to hide"
                            class="btn btn-toggle btn-click-show mr-3">click to
                            show</button>
                    </div>
                    <button data-toggle="modal" data-target="#choose-template"
                        class="btn btn-toggle ml-auto btn-load-template">Load
                        Product Page
                        Template</button>
                </div>
                <div class="toggle-container">
                    <div class="toggle-item" id="show-template">
                        <div class="row">
                            <div class="col-5">
                                <div class="text-content">
                                    <p>
                                        Sales Page Required tokens: <br>
                                        %button% - Buy Button Position <br>
                                        %upsell% - Upsell Header Position <br>
                                        %nothanks% - No Thanks Link Position
                                    </p>
                                    <p>
                                        Squeeze (Thank You) Page Required tokens: <br>
                                        %form% - Autoresponder Form Position
                                    </p>
                                    <p>
                                        Download Page Required tokens: <br>
                                        %download% - Download Product Link Position <br>
                                        %license% - Download License Link Position
                                    </p>
                                    <p>
                                        Exit Pop-Up Sales Page Required tokens: <br>
                                        %form% - Autoresponder Form Position
                                    </p>
                                    <p>
                                        Exit Pop-Up Download Page Required tokens: <br>
                                        %download% - Download Product Link Position <br>
                                        %license% - Download License Link Position
                                    </p>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="text-content">
                                    <p>
                                        All Pages Optional tokens: <br>
                                        %title% - Product Title <br>
                                        %summary% - Product Summary <br>
                                        %description% - Product Description <br>
                                        %cover% - Product eCover <br>
                                        %price% - Product Price
                                    </p>
                                    <p>
                                        %fname% - Author First Name <br>
                                        %lname% - Author Last Name <br>
                                        %email% - Author E-mail Address <br>
                                        %avatar% - Author Avatar
                                    </p>
                                    <p>
                                        %date% - Current Date <br>
                                        %time% - Current Time <br>
                                        %cdtimer% - CountDown Timer Position
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- <ul class="nav select-page-type nav-pills" role="tablist">
                <a class="btn no-shadow btn-page-type btn-sales-page" data-toggle="pill" href="#sales-page"
                    role="tab">Sales
                    Page Content
                </a>
                <a class="btn btn-page-type no-shadow active" data-toggle="pill" href="#squeeze-page"
                    role="tab">
                    Squeeze (ThankYou) Page
                    <i class="flaticon-question icons"></i>
                </a>
                <a class="btn no-shadow btn-page-type" data-toggle="pill" href="#download-page" role="tab">
                    Download Page
                    Content
                </a>
            </ul> -->

            <ul class="nav nav-pills select-page-type sales-page" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link btn no-shadow btn-page-type btn-sales-page" id="sales-page-tab"
                        data-toggle="pill" href="#sales-page" role="tab" aria-controls="sales-page"
                        aria-selected="true">
                        Sales
                        Page Content
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-page-type btn-squeeze no-shadow active" id="squeeze-page-tab"
                        data-toggle="pill" href="#squeeze-page" role="tab" aria-controls="squeeze-page"
                        aria-selected="false">
                        Squeeze (ThankYou) Page
                        <i class="flaticon-question icons"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn no-shadow btn-page-type" id="download-page-tab"
                        data-toggle="pill" href="#download-page" role="tab" aria-controls="download-page"
                        aria-selected="false">
                        Download Page
                        Content
                    </a>
                </li>
            </ul>

            <!-- <div class="editor-wrap mb-4">
                <div id="editor"></div>
            </div> -->
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane container fade" role="tabpanel" id="sales-page">
                    <div class="editor-wrap mb-4">
                        <div id="editor-sales"></div>
                    </div>
                </div>
                <div class="tab-pane container active" role="tabpanel" id="squeeze-page">
                    <div class="editor-wrap mb-4">
                        <div id="editor-squeeze"></div>
                    </div>
                </div>
                <div class="tab-pane container fade" role="tabpanel" id="download-page">
                    <div class="editor-wrap mb-4">
                        <div id="editor-download"></div>
                    </div>
                </div>
            </div>


            <!-- <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="sales-page" role="tabpanel"
                    aria-labelledby="sales-page-tab">...</div>
                <div class="tab-pane fade" id="squeeze-page" role="tabpanel"
                    aria-labelledby="squeeze-page-tab">...</div>
                <div class="tab-pane fade" id="download-page" role="tabpanel"
                    aria-labelledby="download-page-tab">...</div>
            </div> -->

            <div class="bg-blue-wrap">
                <div class="toggle-section">
                    <div class="text">
                        <div class="text-inner text-label">
                            Click To Enable/Disable Exit Pop-Up Pages
                        </div>
                        <label class="switch mb-0">
                            <input type="checkbox" id="is-exit-active">
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>
            </div>

           


            <div class="pop-up-page-edit fade">
            
                <ul class="nav nav-pills select-page-type" id="pills-tab" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link btn btn-page-type btn-squeeze no-shadow active" id="exit-sales-tab"
                            data-toggle="pill" href="#exit-sales" role="tab" aria-controls="exit-sales"
                            aria-selected="false">
                            Exit Pop-Up Sales Pages
                            Content
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn no-shadow btn-page-type" id="download-page-tab"
                            data-toggle="pill" href="#exit-download" role="tab" aria-controls="exit-download"
                            aria-selected="false">
                            Exit Pop-Up Download Pages Content
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane container active" role="tabpanel" id="exit-sales">
                        <div class="editor-wrap mb-4">
                            <div id="exit-sales-editor"></div>
                        </div>
                    </div>
                    <div class="tab-pane container fade" role="tabpanel" id="exit-download">
                        <div class="editor-wrap mb-4">
                            <div id="exit-download-editor"></div>
                        </div>
                    </div>
                </div>

             
            </div>


        </div>
    </div>
</div>

    @section('extra_div')
    <div class="modal fade bd-example-modal-lg" id="choose-template">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-inner bg-light px-3 py-4">
                    <h1 class="modal-title">Load page Template</h1>

                    <div class="row px-2 mt-5">
                        <div class="col-3">
                            <img class="template-prev" src="/front/image/templates.png" alt="">
                        </div>
                        <div class="col-3">
                            <img class="template-prev" src="/front/image/templates.png" alt="">
                        </div>
                        <div class="col-3">
                            <img class="template-prev" src="/front/image/templates.png" alt="">
                        </div>
                        <div class="col-3">
                            <img class="template-prev" src="/front/image/templates.png" alt="">
                        </div>
                        <div class="col-3">
                            <img class="template-prev" src="/front/image/templates.png" alt="">
                        </div>
                        <div class="col-3">
                            <img class="template-prev" src="/front/image/templates.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection 



@section('extra_js')  
@endsection

@endsection