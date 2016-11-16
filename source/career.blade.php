@extends('_layouts.master')

@section('body')
<style>
</style>

	@include('_partials/paralax', [
		'name' 		=> 'portofolio',
        'url'       => '/images/career.jpg',
        'title'     => 'CAREER',
        'title_color' => 'white',
        'subtitle'  => ' ',
        'subtitle_color' => 'white',
        'height'    => '425px',
        'top_text_spacer' => '(425px - 81px)/2'
	])

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="panel-section">
            
            </div>
        </div>
    </div>
@stop

@section('header_career')
	active
@stop