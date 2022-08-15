@extends('layouts.main')

@section('content')
    <div>
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Services</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
                <h2>Services Details</h2>
            </div><!-- /.container -->
        </section><!-- /.page-header -->
        <section class="service-details pt-120 pb-120">
            <div class="container">
                <div class="row row-gutter-y-30">
                    <div class="col-lg-4">
                        <div class="service-sidebar">
                            <div class="service-sidebar__item service-sidebar__item--menu">
                                <ul class="service-sidebar__menu">
                                    <li class="active"><a href="#">Wedding Loan</a></li>
                                    <li><a href="#">Property Loan</a></li>
                                    <li><a href="#">Business Loan</a></li>
                                    <li><a href="#">Education Loan</a></li>
                                    <li><a href="#">Personal Loan</a></li>
                                </ul>
                            </div><!-- /.service-sidebar__item -->
                            <div class="service-sidebar__item service-sidebar__item--contact">
                                <div class="service-sidebar__bg" style="background-image: url(assets/images/services/service-s-1-1.png);">
                                </div><!-- /.service-sidebar__bg -->
                                <div class="service-sidebar__contact">
                                    <div class="service-sidebar__icon">
                                        <i class="icon-phone-ringing"></i>
                                    </div><!-- /.service-sidebar__icon -->
                                    <h3 class="service-sidebar__title">Quick loan
                                        proccess</h3><!-- /.service-sidebar__title -->
                                    <hr class="service-sidebar__separator">
                                    <p class="service-sidebar__tagline">Talk to an expert</p><!-- /.service-sidebar__tagline -->
                                    <a class="service-sidebar__phone" href="tel:+1-(246)333-0089">+ 1- (246) 333-0089</a>
                                </div><!-- /.service-sidebar__contact -->
                            </div><!-- /.service-sidebar__item -->
                        </div><!-- /.service-sidebar -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-8">
                        <div class="service-details__image">
                            <img src="assets/images/services/service-d-1-1.png" alt="">
                            <div class="service-details__icon">
                                <i class="icon-diamond"></i>
                            </div><!-- /.service-details__icon -->
                        </div><!-- /.service-details__image -->
                        <div class="service-details__content">
                            <h3 class="service-details__title">Wedding Loan</h3><!-- /.service-details__title -->
                            <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum
                                quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes
                                port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is
                                simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ndustry
                                standard dummy text ever since the 1500s.</p>
                            <p>It has survived not only five centuries. Lorem Ipsum is simply dummy text of the new design
                                printng and type setting Ipsum take a look at our round. When an unknown printer took a galley
                                of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                but also the leap into electronic typesetting.</p>
                            <div class="row row-gutter-y-30">
                                <div class="col-md-6">
                                    <img src="assets/images/services/service-d-1-2.png" alt="">
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <h3 class="service-details__subtitle">Service benefits</h3>
                                    <p class="service-details__text">Duis aute irure dolor in reprehenderit in voluptate velit
                                        esse cillum.</p>
                                    <ul class="list-unstyled ml-0 service-details__list">
                                        <li>
                                            <i class="fa fa-check-circle"></i>
                                            Refresing to get such a personal touch.
                                        </li>
                                        <li>
                                            <i class="fa fa-check-circle"></i>
                                            Duis aute irure dolor in in voluptate.
                                        </li>
                                        <li>
                                            <i class="fa fa-check-circle"></i>
                                            Velit esse cillum eu fugiat pariatur.
                                        </li>
                                        <li>
                                            <i class="fa fa-check-circle"></i>
                                            Duis aute irure dolor in in voluptate.
                                        </li>
                                    </ul><!-- /.list-unstyled -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="accrodion-grp service-details__accrodion" data-grp-name="service-details__accrodion-1">
                                        <!--Start Faq One Single-->
                                        <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                                            <div class="accrodion-title">
                                                <h4>Nunc dui massa, porttitor id erat et <span class="accrodion-icon"></span>
                                                </h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages the majority have suffered
                                                        alteration in some fo injected humour, or randomised words believable.
                                                        Phasellus a rhoncus erat.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Faq One Single-->
                                        <!--Start Faq One Single-->
                                        <div class="accrodion active wow fadeInUp" data-wow-delay="0ms">
                                            <div class="accrodion-title">
                                                <h4>Quisque quis urna consequat, scelerisque <span class="accrodion-icon"></span></h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages the majority have suffered
                                                        alteration in some fo injected humour, or randomised words believable.
                                                        Phasellus a rhoncus erat.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Faq One Single-->
                                        <!--Start Faq One Single-->
                                        <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                                            <div class="accrodion-title">
                                                <h4>Mauris a ipsum id libero sodales dapibus <span class="accrodion-icon"></span></h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages the majority have suffered
                                                        alteration in some fo injected humour, or randomised words believable.
                                                        Phasellus a rhoncus erat.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Faq One Single-->
                                        <!--Start Faq One Single-->
                                        <div class="accrodion  wow fadeInUp" data-wow-delay="0ms">
                                            <div class="accrodion-title">
                                                <h4>Nunc dui massa, porttitor id erat et <span class="accrodion-icon"></span>
                                                </h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages the majority have suffered
                                                        alteration in some fo injected humour, or randomised words believable.
                                                        Phasellus a rhoncus erat.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Faq One Single-->
                                    </div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.service-details__content -->
                    </div><!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-details -->
    </div>
@endsection
