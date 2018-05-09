@extends('_layouts.master')

@section('body')

    <!-- spacer -->
    @include('_partials/nav_spacer')

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

                @include('_partials/panel_showcase',[
                    'datas' =>  [
                                    '0'   =>  [
                                                'name'  => 'Gopego.com',
                                                'img'   => '/images/gopego_background.jpg',
                                                'url'   => 'gopego.com',
                                            ],
                                    '1'   =>  [
                                                'name'  => 'Capcus.id',
                                                'img'   => '/images/capcus_background.jpg',
                                                'url'   => 'capcus.id',
                                            ],   
                                    '2'   =>  [
                                                'name'  => 'Balin.id',
                                                'img'   => '/images/balin_background.jpg',
                                                'url'   => 'balin.id',
                                            ],
                                ]
                ])
                
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
                                        'content'   => 'Well  wrapped  technology  is  powerful  "Bunshin  No  Jutsu"',
                                        'name'      => 'Chelsy  Mooy',
                                        'company'   => 'Thunderlab  Director'
                                    ],
                            1   =>  [
                                        'content'   => 'Your  time  is  limited  so  dont  waste  it  doing   "Unnecessary  Hassle"  thing',
                                        'name'      => 'Budi  Purnomo',
                                        'company'   => 'System  Developer  Thunderlab'
                                    ],
                            2   =>  [
                                        'content'   => 'Technology  brings  you  happier  experience',
                                        'name'      => 'Agil  Mahendra',
                                        'company'   => 'UI  Developer  Thunderlab'
                                    ],                                    
                        ],
    ])
@stop

@section('header_home')
	active
@stop

@section('scripts')
@stop