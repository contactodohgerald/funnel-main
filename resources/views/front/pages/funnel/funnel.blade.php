@php $pageTitle = 'My Funnel' @endphp
@extends('front.layouts.design')

@section('extra_css')   
@endsection

@section('content')

<div class="content-section">
    <div class="container-fluid custom-padding">
        <h5 class="head-title">
            My Products
        </h5>
        <div class="main-head">
            <div class="main-head-inner bg-light px-3 pt-2 pb-3">
                <h4 class="title">Add New Funnel</h4>
                <div class="d-flex align-items-center justify-content-between mt-3 px-3">
                    <div class="control-form">
                        <input placeholder="Enter Funnel title" class="form-control no-shadow " type="text"
                            name="" id="">
                    </div>
                    <div>
                        <button class="btn btn-find">Add Funnel</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-wrap">
            <div class="content-head rounded align-items-center bg-light m-0 pl-2 pt-3 b-0">
                <div class="left-section">
                    <h6 class="title text-dark">My Funnel</h6>
                </div>

            </div>
            <table class="table no-border table-product table-funnel">
                <thead>
                    <tr class="bg-light">
                        <th>TITLE</th>
                        <th class="text-center">PRODUCT</th>
                        <th class="text-center">ORDER</th>
                        <th class="text-center">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">
                            <div class="control-form">
                                <input readonly class="form-control no-shadow " type="text" name="" id="" value="Guardian of the stone">
                            </div>

                        </td>
                        <td class="text-center">0</td>
                        <td>
                            <nav class="nav justify-content-center table-actions">
                                <li class="nav-item">
                                    <a class="nav-link px-1" href="#">
                                        <img src="../assets/icons/try/funnel project svg/arrow up.svg" alt="">
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link px-1" href="#">
                                        <img src="../assets/icons/try/funnel project svg/arrow down.svg" alt="">
                                    </a>
                                </li>
                    
                            </nav>
                        </td>
                        <td>
                            <nav class="nav justify-content-center table-actions">
                                <li class="nav-item">
                                    <a class="nav-link px-1" href="#" data-toggle="tooltip" data-placement="top" title="Download">
                                        <img src="../assets/icons/download product.svg" alt="">
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link px-1" href="#" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <img src="../assets/icons/copy to my funnel.svg" alt="">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-1" href="#" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <img src="../assets/icons/try/funnel project svg/ic_cancel_24px.svg" alt="">
                                    </a>
                                </li>
                            </nav>
                        </td>
                    </tr>

                </tbody>
            </table>

            <!-- <div class="d-flex justify-content-end m-3 mt-5">
                <button class="btn btn-find">Save Changes</button>
            </div> -->
        </div>
    </div>
</div>

    @section('extra_div')
    
    @endsection 



@section('extra_js')  
@endsection

@endsection