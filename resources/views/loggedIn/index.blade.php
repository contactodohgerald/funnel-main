@php $pageTitle = 'HomePage' @endphp
@extends('layouts.design')

@section('content')

    <div class="content-section">
        <div class="container-fluid custom-padding">
            <div class="welcome-box">
                Welcome Back, Kelvin Hart
            </div>
            <div class="row mt-5">
                <div class="col-3">
                    <div class="dashboard-box first">
                        <div>
                            <div class="icon-wrap">
                                <i class="flaticon-book-of-black-cover icons dashboard-icon"></i>
                            </div>
                        </div>
                        <div class="value-wrap">
                            <div class="value">200</div>
                            <div class="title">ebooks</div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="dashboard-box second">
                        <div>
                            <div class="icon-wrap">
                                <i class="flaticon-block icons dashboard-icon"></i>
                            </div>
                        </div>
                        <div class="value-wrap">
                            <div class="value">195</div>
                            <div class="title">my product</div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="dashboard-box third">
                        <div>
                            <div class="icon-wrap">
                                <i class="flaticon-funnel icons dashboard-icon"></i>
                            </div>
                        </div>
                        <div class="value-wrap">
                            <div class="value">195</div>
                            <div class="title">my funnels</div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="dashboard-box forth">
                        <div>
                            <div class="icon-wrap">
                                <i class="flaticon-add icons dashboard-icon"></i>
                            </div>
                        </div>
                        <div class="value-wrap">
                            <div class="value">20</div>
                            <div class="title">bonus page builder</div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="dashboard-box fifth">
                        <div>
                            <div class="icon-wrap">
                                <i class="flaticon-left-bars icons dashboard-icon"></i>
                            </div>
                        </div>
                        <div class="value-wrap">
                            <div class="value">200</div>
                            <div class="title">flat builder</div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="dashboard-box sixth">
                        <div>
                            <div class="icon-wrap">
                                <i class="flaticon-pile-of-paper icons dashboard-icon"></i>
                            </div>
                        </div>
                        <div class="value-wrap">
                            <div class="value">195</div>
                            <div class="title">3D graphics</div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="dashboard-box seventh">
                        <div>
                            <div class="icon-wrap">
                                <i class="flaticon-web icons dashboard-icon"></i>
                            </div>
                        </div>
                        <div class="value-wrap">
                            <div class="value">121</div>
                            <div class="title">my template</div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="dashboard-box eighth">
                        <div>
                            <div class="icon-wrap">
                                <i class="flaticon-image-gallery icons dashboard-icon"></i>
                            </div>
                        </div>
                        <div class="value-wrap">
                            <div class="value">20</div>
                            <div class="title">images</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-9">
                    <div class="vid-wrap">
                        <div class="vid-area">
                            <iframe src="https://www.youtube.com/embed/RpXS1iYz6-M"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen="" frameborder="0"></iframe>
                        </div>
                        <a class="nav-link pl-0 text-dark" href="#">More tutorial videos</a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="recent-stat">
                        <div class="recent-content">
                            test
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection