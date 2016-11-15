@extends('_layouts.master')

@section('body')
<style>
</style>

	@include('_partials/paralax', [
		'name' 		=> 'portofolio',
        'url'       => '/images/home.jpg',
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
            </div>
        </div>
    </div>
@stop

@section('header_portofolio')
	active
@stop

@section('scripts')

@stop