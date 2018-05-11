@extends('_layouts.master')

@section('body')

	@include('_partials/paralax', [
		'name' 		=> 'portofolio',
        'url'       => '/images/portofolio.jpg',
        'title'     => 'PORTOFOLIO',
        'title_color' => 'white',
        'subtitle'  => ' ',
        'subtitle_color' => 'white',
        'height'    => '425px',
        'top_text_spacer' => '(425px - 81px)/2'
	])

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="panel-section">
                @include('_partials/panel_showcase',[
                    'datas' =>  [
                                    0   =>  [
                                                'name'  => 'Gopego.com',
                                                'img'   => '/images/logo-gopego.png',
                                                'url'   => 'gopego.com',
                                            ],
                                    1   =>  [
                                                'name'  => 'Tamasyahati',
                                                'img'   => '/images/tamasyahati-logo-full.png',
                                                'url'   => 'capcus.id',
                                            ],   
                                    2   =>  [
                                                'name'  => 'Reliance',
                                                'img'   => '/images/reliance.png',
                                                'url'   => 'balin.id',
                                            ],
                                    3   =>  [
                                                'name'  => 'Polimoli',
                                                'img'   => '/images/logo-polimoli.png',
                                                'url'   => 'gopego.com',
                                            ],
                                    4   =>  [
                                                'name'  => 'Nissan',
                                                'img'   => '/images/Nissan_logo.png',
                                                'url'   => 'capcus.id',
                                            ],   
                                    5   =>  [
                                                'name'  => 'Telkomsel',
                                                'img'   => '/images/logo_lintas.jpg',
                                                'url'   => 'balin.id',
                                            ],
                                    6   =>  [
                                                'name'  => 'Nokia',
                                                'img'   => '/images/nokia.png',
                                                'url'   => 'gopego.com',
                                            ],
                                    7   =>  [
                                                'name'  => 'Ali  Express',
                                                'img'   => '/images/gantirugi-teknologi.png'        ,
                                                'url'   => 'capcus.id',
                                            ],   
                                    8   =>  [
                                                'name'  => 'Lintas  berita',
                                                'img'   => '/images/ali_express.png',
                                                'url'   => 'balin.id',
                                            ],
                                    9   =>  [
                                                'name'  => 'Balin',
                                                'img'   => '/images/logo-balin.png',
                                                'url'   => 'gopego.com',
                                            ],
                                    10   =>  [
                                                'name'  => 'Gantirugi',
                                                'img'   => '/images/telkomsel.png',
                                                'url'   => 'capcus.id',
                                            ],   
                                    11   =>  [
                                                'name'  => 'Gokredit',
                                                'img'   => '/images/logo-gokredit.png',
                                                'url'   => 'balin.id',
                                            ],

                                ]
                ])
            </div>
        </div>
    </div>
@stop

@section('header_portofolio')
	active
@stop

@section('scripts')
@stop