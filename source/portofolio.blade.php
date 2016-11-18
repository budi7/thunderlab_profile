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
                                                'img'   => '/images/gopego_background.jpg',
                                                'url'   => 'gopego.com',
                                            ],
                                    1   =>  [
                                                'name'  => 'Capcus.id',
                                                'img'   => '/images/capcus_background.jpg',
                                                'url'   => 'capcus.id',
                                            ],   
                                    2   =>  [
                                                'name'  => 'Balin.id',
                                                'img'   => '/images/balin_background.jpg',
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