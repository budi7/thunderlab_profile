@extends('_layouts.master')

@section('body')
<style>
    .panel-section{
        padding-top: 4rem;
        padding-bottom: 4rem;
    }
</style>

	@include('_partials/paralax', [
		'name' 		=> 'tes',
        'url'       => '/images/home.jpg',
        'title'     => '<strong>THUNDERLAB INDONESIA</strong>',
        'title_color' => 'white',
        'subtitle'  => 'DO MORE THINGS SIMPLER',
        'subtitle_color' => 'white',
	])

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12 text-xs-center title">
                    <h3>LATEST CUSTOMERS</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-xs-center" style="height:100px; background-color: blue;">
                </div>
                <div class="col-md-4 text-xs-center" style="height:100px; background-color: red;">
                </div>
                <div class="col-md-4 text-xs-center" style="height:100px; background-color: green;">
                </div>
            </div>
        </div>
    </div>

    <div class="content-block-one">
    <h1>
    </h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="content-block-one">
    <h1>This is a content block</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm    </h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>


    <div class="content-block-one">
    <h1>This is a content block</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm    </h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    



    <div class="content-block-one">
    <h1>This is a content block</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm    </h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="content-block-one">
    <h1>This is a content block</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm    </h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="content-block-one">
    <h1>This is a content block</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
@stop

@section('header_home')
	active
@stop

@section('scripts')
	$(document).ready(function(){       
	    var scroll_start = 0;
	    var startchange = $('#startchange');
	    var offset = startchange.offset();
	        if (startchange.length){
	    $(document).scroll(function() { 
	        scroll_start = $(this).scrollTop();
        }
    });
@stop