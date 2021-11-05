@php $pageTitle = 'Ebook Creator' @endphp
@extends('front.layouts.design')

@section('extra_css')   
@endsection

@section('content')

<div class="content-section">
    <div class="container-fluid custom-padding">
        <div class="create-wrap">
            <div class="left-section">
                <h5 class="title-main">
                    Create eBook</h5>
                <div class="foot-content">
                    <div class="title">General Chapters</div>
                    <div class="desc">
                        Create the additional content such as About Me / Us, Introduction, Summary, etc. to
                        be
                        reused in different eBooks
                    </div>
                    <div class="d-flex justify-content-end mt-1">
                        <a class="btn btn-add-chapter" href="#">Add New Chapter</a>
                    </div>
                </div>
                <div class="nav flex-column nav-pills ebook-nav" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-facebook-tab" data-toggle="pill"
                        href="#v-pills-facebook" role="tab" aria-controls="v-pills-facebook"
                        aria-selected="true">
                        <img src="../assets/icons/content.svg" alt="">
                        Create from article
                    </a>
                    <a class="nav-link" id="v-pills-twitter-tab" data-toggle="pill" href="#v-pills-twitter"
                        role="tab" aria-controls="v-pills-twitter" aria-selected="false">
                        <img src="../assets/icons/information.svg" alt="">
                        Create manually
                    </a>
                    <a class="nav-link" id="v-pills-linkedin-tab" data-toggle="pill"
                        href="#v-pills-linkedin" role="tab" aria-controls="v-pills-linkedin"
                        aria-selected="false">
                        <img src="../assets/icons/link.svg" alt="">
                        Create from URL
                    </a>
                    <a class="nav-link" id="v-pills-google-tab" data-toggle="pill" href="#v-pills-google"
                        role="tab" aria-controls="v-pills-google" aria-selected="false">
                        <img src="../assets/icons/upload.svg" alt="">
                        Upload from eBook
                    </a>
                    <a class="nav-link" id="v-pills-custom-tab" data-toggle="pill" href="#v-pills-custom"
                        role="tab" aria-controls="v-pills-custom" aria-selected="false">
                        <img src="../assets/icons/hand.svg" alt="">
                        Choose DYF eBooks
                    </a>
                </div>

            </div>
            <div class="right-section">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-facebook" role="tabpanel"
                        aria-labelledby="v-pills-facebook-tab">
                        <h6 class="tab-title">Find Articles</h6>


                        <form action="#" method="post" class="mt-5 w-100">
                            <div class="form-group">
                                <label for="">KEYWORD(S)</label>
                                <input id="my-input" class="form-control tab-form no-shadow" type="text"
                                    name="">
                            </div>

                            <div class="form-group">
                                <label for="">REPOSITORY</label>
                                <select id="my-select" class="form-control tab-form no-shadow" name="">
                                    <option>PLR Repository</option>
                                </select>

                            </div>

                            <div class="form-group">
                                <label for="">MATCH</label>
                                <select id="my-select" class="form-control tab-form no-shadow" name="">
                                    <option>All keywords</option>
                                </select>

                            </div>

                            <div class="form-group">
                                <label for="">COLLECT</label>
                                <select id="my-select" class="form-control tab-form no-shadow" name="">
                                    <option>10</option>
                                </select>

                            </div>

                            <div class="d-flex justify-content-end bottom-btn-wrap">
                                <button class="btn btn-find">
                                    Find
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="v-pills-twitter" role="tabpanel"
                        aria-labelledby="v-pills-twitter-tab">
                        <h6 class="tab-title">Create manually</h6>

                        <form action="#" method="post" class="mt-5 w-100">
                            <div class="form-group">
                                <label for="">eBook Title</label>
                                <input id="my-input" class="form-control tab-form no-shadow" type="text"
                                    name="">
                            </div>




                            <div class="d-flex justify-content-end bottom-btn-wrap">
                                <button class="btn btn-find">
                                    Create
                                </button>
                            </div>
                        </form>

                    </div>
                    <div class="tab-pane fade" id="v-pills-linkedin" role="tabpanel"
                        aria-labelledby="v-pills-linkedin-tab">
                        <h6 class="tab-title">Create from URL</h6>


                        <form action="#" method="post" class="mt-5 w-100">
                            <div class="form-group">

                                <input id="my-input" class="form-control tab-form no-shadow" type="text"
                                    name="" placeholder="Enter URL">
                            </div>




                            <div class="d-flex justify-content-end bottom-btn-wrap">
                                <button class="btn btn-find">
                                    Create
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="v-pills-google" role="tabpanel"
                        aria-labelledby="v-pills-google-tab">
                        <h6 class="tab-title">Upload eBook</h6>


                        <form action="#" method="post" class="mt-5 w-100">
                            <div class="form-group">
                                <label for="">EBOOK TITLE</label>
                                <input id="my-input" class="form-control tab-form no-shadow" type="text"
                                    name="">
                            </div>

                            <div class="form-group">
                                <label for="">EBOOK FILE</label>
                                <input id="my-input" class="form-control tab-form no-shadow" type="file"
                                    name="">
                            </div>




                            <div class="d-flex justify-content-end bottom-btn-wrap">
                                <button class="btn btn-find">
                                    Create
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane tab-dfy-ebook fade" id="v-pills-custom" role="tabpanel"
                        aria-labelledby="v-pills-custom-tab">
                        <h6 class="tab-title ml-5">DFY EBOOKS</h6>
                        <div class="table-outter mt-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="text-center">ECOVER</th>
                                        <th class="text-center">TITLE/SUMMARY</th>
                                        <th>CHOOSE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td>
                                            <div class="ebook-prev">

                                            </div>
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sita met, consectetur adipi
                                            scinge lit, sed doeius mod tempor incididun tutla bore et dolor
                                            emag
                                            na
                                            aliqua
                                        </td>
                                        <td class="text-center">


                                            <input type="checkbox">


                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td>
                                            <div class="ebook-prev">

                                            </div>
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sita met, consectetur adipi
                                            scinge lit, sed doeius mod tempor incididun tutla bore et dolor
                                            emag
                                            na
                                            aliqua
                                        </td>
                                        <td class="text-center">


                                            <input type="checkbox">


                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td>
                                            <div class="ebook-prev">

                                            </div>
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sita met, consectetur adipi
                                            scinge lit, sed doeius mod tempor incididun tutla bore et dolor
                                            emag
                                            na
                                            aliqua
                                        </td>
                                        <td class="text-center">


                                            <input type="checkbox">


                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td>
                                            <div class="ebook-prev">

                                            </div>
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sita met, consectetur adipi
                                            scinge lit, sed doeius mod tempor incididun tutla bore et dolor
                                            emag
                                            na
                                            aliqua
                                        </td>
                                        <td class="text-center">


                                            <input type="checkbox">


                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-end bottom-btn-wrap">
                            <button class="btn btn-find">
                                Create
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    @section('extra_div')
    
    @endsection 



@section('extra_js')  
@endsection

@endsection