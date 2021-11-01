
@extends('front.layouts.design')

@section('extra_css')   
@endsection

@section('content')

<div class="content-section">
    <div class="container-fluid custom-padding">
        <h5 class="head-title">
            Ecover Creator
        </h5>
        <div class="content-wrap">
            <div class="content-head">
                <div class="left-section">
                    <h6 class="title">eCovers</h6>
                    <div class="desc">You can create ecover from scratch</div>
                </div>
                <div class="ml-auto right-section">

                    <div class="btn-flex">
                        <button class="btn btn-setup-api">Setup html css to image API keys</button>
                        <div class="dropdown">
                            <button type="button" class="btn btn-create-ecover dropdown-toggle"
                                data-toggle="dropdown">
                                Create eCover
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropmenu-wrap">
                                <a data-toggle="slide-in-wrap" data-target="#flat-cover"
                                    class="dropdown-item" href="#">Flat Cover</a>
                                <a data-toggle="slide-in-wrap" data-target="#book-cover"
                                    class="dropdown-item" href="#">3D Book Cover</a>
                                <a data-toggle="slide-in-wrap" data-target="#cd-cover" class="dropdown-item"
                                    href="#">3D CD Cover</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table no-border table-ecover mt-3">
                <thead>
                    <tr>
                        <th class="text-left">NAME</th>
                        <th>THUMBNAIL</th>
                        <th>DOWNLOAD</th>
                        <th>CREATED BY</th>
                        <th>UPDATED AT</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">
                            BILL
                            FRANKLIN
                        </td>
                        <td class="text-center">
                            <img class="ecover-prev" src="{{asset('/front/image/2nd aug Funnel project pdf.png')}}" alt="">
                        </td>
                        <td class="text-center">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                    id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Download
                                </button>
                                <div class="dropdown-menu dropmenu-wrap" aria-labelledby="triggerId">
                                    <a class="dropdown-item" href="#">JPEG Format</a>
                                    <a class="dropdown-item" href="#">PNG FORMAT</a>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">
                            May 04, 2021 03:15Am
                        </td>
                        <td class="text-center">
                            May 04, 2021 03:15Am
                        </td>
                        <td class="text-center">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                    id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Actions
                                </button>
                                <div class="dropdown-menu dropmenu-wrap" aria-labelledby="triggerId">
                                    <a class="dropdown-item" href="#">Preview</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                    <a class="dropdown-item" href="#">View 3D</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">
                            BILL
                            FRANKLIN
                        </td>
                        <td class="text-center">
                            <img class="ecover-prev" src="{{asset('/front/image/2nd aug Funnel project pdf.png')}}" alt="">
                        </td>
                        <td class="text-center">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                    id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Download
                                </button>
                                <div class="dropdown-menu dropmenu-wrap" aria-labelledby="triggerId">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Disabled action</a>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">
                            May 04, 2021 03:15Am
                        </td>
                        <td class="text-center">
                            May 04, 2021 03:15Am
                        </td>
                        <td class="text-center">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                    id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Actions
                                </button>
                                <div class="dropdown-menu dropmenu-wrap" aria-labelledby="triggerId">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Disabled action</a>
                                    <a class="dropdown-item" href="#">Action</a>
                                </div>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

    @section('extra_div')
    <div id="flat-cover" class="slide-in-wrap">
        <div class="slide-in-inner">
            <div class="slide-head">
                <div class="slide-details">
                    <h5 class="title">Create eCover</h5>
                    <div class="sub-title">flat cover</div>
                </div>
                <button class="btn btn-close" data-dismiss=".slide-in-wrap">
                    <i class="flaticon-cancel icons"></i>
                </button>
            </div>

            <div class="edit-forms-wrap">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group mb-0">
                            <label for="">Name</label>
                            <input type="text" class="form-control input-bordered no-shadow slide-input" name="" id=""
                                placeholder="">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="form-group">
                            <label for="">Dimension</label>
                            <div class="row">
                                <div class="col-6">
                                    <div class="edit-input-wrap input-bordered">
                                        <label for="">width</label>
                                        <input type="number" class="form-control no-shadow" name="" id="" placeholder=""
                                            min="0">
                                        <span class="dim-text">px</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="edit-input-wrap input-bordered">
                                        <label for="">height</label>
                                        <input type="number" class="form-control no-shadow" name="" id="" placeholder=""
                                            min="0">
                                        <span class="dim-text">px</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="images-select-wrap">
                <div class="row">
                    <div class="col-4">
                        <div class="img-box">
                            <img src="{{asset('/front/image/place-holder.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="img-box">
                            <img src="{{asset('/front/image/place-holder.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="img-box">
                            <img src="{{asset('/front/image/place-holder.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="img-box">
                            <img src="{{asset('/front/image/place-holder.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="img-box">
                            <img src="{{asset('/front/image/place-holder.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="img-box">
                            <img src="{{asset('/front/image/place-holder.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <button class="btn btn-purple-trans btn-close d-flex align-items-center btn-edit-cover"
                    data-toggle="slide-in-wrap" data-target="#cd-cover" data-dismiss=".slide-in-wrap">
                    <i class="flaticon-left-arrow icons"></i>
                    3D CD Cover
                </button>
                <button class="btn btn-purple-trans btn-edit-cover">
                    Create
                </button>
            </div>
        </div>
    </div>

    <div id="book-cover" class="slide-in-wrap">
        <div class="slide-in-inner">
            <div class="slide-head">
                <div class="slide-details">
                    <h5 class="title">Create eCover</h5>
                    <div class="sub-title">3D book cover</div>
                </div>
                <button class="btn btn-close" data-dismiss=".slide-in-wrap">
                    <i class="flaticon-cancel icons"></i>
                </button>
            </div>

            <div class="edit-forms-wrap">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group mb-0">
                            <label for="">Name</label>
                            <input type="text" class="form-control input-bordered no-shadow slide-input" name="" id=""
                                placeholder="">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="form-group">
                            <label for="">Dimension</label>
                            <div class="row">
                                <div class="col-6">
                                    <div class="edit-input-wrap input-bordered">
                                        <label for="">width</label>
                                        <input type="number" class="form-control no-shadow" name="" id="" placeholder=""
                                            min="0">
                                        <span class="dim-text">px</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="edit-input-wrap input-bordered">
                                        <label for="">height</label>
                                        <input type="number" class="form-control no-shadow" name="" id="" placeholder=""
                                            min="0">
                                        <span class="dim-text">px</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="images-select-wrap">
                <div class="row">
                    <div class="col-6">
                        <div class="img-box">
                            <img src="{{asset('/front/image/place-holder.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="img-box">
                            <img src="{{asset('/front/image/place-holder.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="img-box">
                            <img src="{{asset('/front/image/place-holder.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="img-box">
                            <img src="{{asset('/front/image/place-holder.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <button class="btn btn-purple-trans btn-close d-flex align-items-center btn-edit-cover"
                    data-toggle="slide-in-wrap" data-target="#flat-cover" data-dismiss=".slide-in-wrap">
                    <i class="flaticon-left-arrow icons"></i>
                    Flat Cover
                </button>
                <button class="btn btn-purple-trans btn-edit-cover">
                    Create
                </button>
            </div>
        </div>
    </div>

    <div id="cd-cover" class="slide-in-wrap">
        <div class="slide-in-inner">
            <div class="slide-head">
                <div class="slide-details">
                    <h5 class="title">Create eCover</h5>
                    <div class="sub-title">3D CD cover</div>
                </div>
                <button class="btn btn-close" data-dismiss=".slide-in-wrap">
                    <i class="flaticon-cancel icons"></i>
                </button>
            </div>

            <div class="edit-forms-wrap">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group mb-0">
                            <label for="">Name</label>
                            <input type="text" class="form-control input-bordered no-shadow slide-input" name="" id=""
                                placeholder="">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="form-group">
                            <label for="">Dimension</label>
                            <div class="row">
                                <div class="col-6">
                                    <div class="edit-input-wrap input-bordered">
                                        <label for="">width</label>
                                        <input type="number" class="form-control no-shadow" name="" id="" placeholder=""
                                            min="0">
                                        <span class="dim-text">px</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="edit-input-wrap input-bordered">
                                        <label for="">height</label>
                                        <input type="number" class="form-control no-shadow" name="" id="" placeholder=""
                                            min="0">
                                        <span class="dim-text">px</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="images-select-wrap">
                <div class="row">
                    <div class="col-6">
                        <div class="img-box">
                            <img src="{{asset('/front/image/place-holder.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="img-box">
                            <img src="{{asset('/front/image/place-holder.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="img-box">
                            <img src="{{asset('/front/image/place-holder.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="img-box">
                            <img src="{{asset('/front/image/place-holder.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <button class="btn btn-purple-trans btn-close d-flex align-items-center btn-edit-cover"
                    data-toggle="slide-in-wrap" data-target="#book-cover" data-dismiss=".slide-in-wrap">
                    <i class="flaticon-left-arrow icons"></i>
                    3D Book Cover
                </button>
                <button class="btn btn-purple-trans btn-edit-cover">
                    Create
                </button>
            </div>
        </div>
    </div>
    @endsection 



@section('extra_js')  
@endsection

@endsection