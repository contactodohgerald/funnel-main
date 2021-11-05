@php $pageTitle = 'My Library' @endphp
@extends('front.layouts.design')

@section('extra_css')   
@endsection

@section('content')

<div class="content-section">
    <div class="container-fluid custom-x-padding">
        <h5 class="head-title">
            My Library
        </h5>
        <div class="d-flex align-items-center page-desc-head">
            <h5 class="desc-title">
                My eBook
            </h5>
            <button class="btn btn-create-cover">
                Create ebook
            </button>
        </div>
        <div class="table-wrap mb-5">
            <div class="manage-table-overflow">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-center">ECOVER</th>
                            <th class="text-center">TITLE/SUMMARY</th>
                            <th>TYPE</th>
                            <th># PAGE</th>
                            <th>FILE SIZE</th>
                            <th class="text-center">LAST UPDATE</th>
                            <th>DOWNLOAD</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td>
                                <img class="ecover-prev"
                                    src="/front/image/2nd aug Funnel project pdf.png" alt="">
                            </td>
                            <td class="text-justified ecover-prev-text">
                                <div class="title">The Passion Within</div>
                                Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit, sed do
                            </td>
                            <td>MANUAL</td>
                            <td>N/A</td>
                            <td class="text-center">N/A</td>
                            <td class="text-center">
                                2021-04-20<br>
                                09:01:03
                            </td>
                            <td>
                                <nav class="nav flex-column funnel-download-list">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">PDF</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">EPUB</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">MOBI</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">HTML</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">DOCX</a>
                                    </li>
                                </nav>
                            </td>
                            <td>
                                <nav class="nav flex-column table-actions">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="tooltip"
                                            data-placement="left" title="Preview">
                                            <img src="/front/icons/preview ebook.svg" alt="">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="tooltip"
                                            data-placement="left" title="Regenerate">
                                            <img src="/front/icons/try/funnel project svg/renerate ebook.svg"
                                                alt="">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="tooltip"
                                            data-placement="left" title="Edit">
                                            <img src="/front/icons/copy to my funnel.svg" alt="">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="tooltip"
                                            data-placement="left" title="Delete">
                                            <img src="/front/icons/delete.svg" alt="">
                                        </a>
                                    </li>
                                </nav>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">1</td>
                            <td>
                                <img class="ecover-prev"
                                    src="/front/image/2nd aug Funnel project pdf.png" alt="">
                            </td>
                            <td class="text-justified ecover-prev-text">
                                <div class="title">The Passion Within</div>
                                Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit, sed do
                            </td>
                            <td>MANUAL</td>
                            <td>N/A</td>
                            <td class="text-center">N/A</td>
                            <td class="text-center">
                                2021-04-20<br>
                                09:01:03
                            </td>
                            <td>
                                <nav class="nav flex-column funnel-download-list">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">PDF</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">EPUB</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">MOBI</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">HTML</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">DOCX</a>
                                    </li>
                                </nav>
                            </td>
                            <td>
                                <nav class="nav flex-column table-actions">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="tooltip"
                                            data-placement="left" title="Preview">
                                            <img src="/front/icons/preview ebook.svg" alt="">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="tooltip"
                                            data-placement="left" title="Regenerate">
                                            <img src="/front/icons/try/funnel project svg/renerate ebook.svg"
                                                alt="">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="tooltip"
                                            data-placement="left" title="Edit">
                                            <img src="/front/icons/copy to my funnel.svg" alt="">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="tooltip"
                                            data-placement="left" title="Delete">
                                            <img src="/front/icons/delete.svg" alt="">
                                        </a>
                                    </li>
                                </nav>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">1</td>
                            <td>
                                <img class="ecover-prev"
                                    src="/front/image/2nd aug Funnel project pdf.png" alt="">
                            </td>
                            <td class="text-justified ecover-prev-text">
                                <div class="title">The Passion Within</div>
                                Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit, sed do
                            </td>
                            <td>MANUAL</td>
                            <td>N/A</td>
                            <td class="text-center">N/A</td>
                            <td class="text-center">
                                2021-04-20<br>
                                09:01:03
                            </td>
                            <td>
                                <nav class="nav flex-column funnel-download-list">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">PDF</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">EPUB</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">MOBI</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">HTML</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">DOCX</a>
                                    </li>
                                </nav>
                            </td>
                            <td>
                                <nav class="nav flex-column table-actions">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="tooltip"
                                            data-placement="left" title="Preview">
                                            <img src="/front/icons/preview ebook.svg" alt="">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="tooltip"
                                            data-placement="left" title="Regenerate">
                                            <img src="/front/icons/try/funnel project svg/renerate ebook.svg"
                                                alt="">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="tooltip"
                                            data-placement="left" title="Edit">
                                            <img src="/front/icons/copy to my funnel.svg" alt="">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="tooltip"
                                            data-placement="left" title="Delete">
                                            <img src="/front/icons/delete.svg" alt="">
                                        </a>
                                    </li>
                                </nav>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end mt-2">
                <button class="btn btn-find">
                    Create ebook
                </button>
            </div>
        </div>

    </div>
</div>

    @section('extra_div')
    
    @endsection 



@section('extra_js')  
@endsection

@endsection