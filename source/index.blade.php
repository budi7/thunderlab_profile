@extends('_layouts.master')

@section('body')
<style>   
</style>

    <!-- spacer -->
    <div style="background-color: black;height: 81px;"></div>

	@include('_partials/paralax', [
		'name' 		=> 'home',
        'url'       => '/images/home.jpg',
        'title'     => '<strong>THUNDERLAB INDONESIA</strong>',
        'title_color' => 'white',
        'subtitle'  => 'DO MORE THINGS SIMPLER',
        'subtitle_color' => 'white',
        'height'    => '675px',
        'top_text_spacer' => '(675px - 81px)/2 - 2.75rem'
	])

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="panel-section">
                <div class="row title">
                    <div class="col-md-12 text-xs-center">
                        <h3><strong>LATEST CUSTOMERS</strong></h3>
                    </div>
                </div>
                <div class="row pb-m">
                    <div class="col-md-4 col-sm-4 col-xs-12 pb-m text-xs-center">
                        <a href="#" class="showcase">
                            <img src="/images/gopego_background.jpg" alt="gopego.com" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 pb-m text-xs-center">
                        <a href="#" class="showcase">
                            <img src="/images/capcus_background.jpg" alt="capcus.id" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 pb-m text-xs-center">
                        <a href="#" class="showcase">
                            <img src="/images/balin_background.jpg" alt="balin.id" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="row pt-xl pb-s">
                    <div class="col-md-12 text-xs-center">
                        <a href="/portofolio" class="btn btn-primary btn-lg">MORE PORTOFOLIO</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

       

    @include('_partials/paralax_slider', [
        'name'      => 'testy',
        'url'       => '/images/testimonial.jpg',
        'content'   =>  [
                            0   =>  [
                                        'content'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                                        'name'      => 'John Dory',
                                        'company'   => 'CEO Lipsum'
                                    ],
                            1   =>  [
                                        'content'   => '2Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                                        'name'      => 'John Dory',
                                        'company'   => 'CEO Lipsum'
                                    ],
                            2   =>  [
                                        'content'   => '2Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                                        'name'      => 'John Dory',
                                        'company'   => 'CEO Lipsum'
                                    ],                                    
                        ],
    ])
@stop

@section('header_home')
	active
@stop

@section('scripts')

@stop