@extends('_layouts.master')

@section('body')
<style>
    .panel-section{
        padding-top: 5rem;
        padding-bottom: 5rem;
    }
    .panel-section .title{
        padding-bottom: 5rem;
    }
</style>

	@include('_partials/paralax', [
		'name' 		=> 'home',
        'url'       => '/images/home.jpg',
        'title'     => '<strong>THUNDERLAB INDONESIA</strong>',
        'title_color' => 'white',
        'subtitle'  => 'DO MORE THINGS SIMPLER',
        'subtitle_color' => 'white',
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
                        <img src="/images/gopego_background.jpg" alt="gopego.com" class="img-fluid">
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 pb-m text-xs-center">
                        <img src="/images/capcus_background.jpg" alt="capcus.id" class="img-fluid">
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 pb-m text-xs-center">
                        <img src="/images/balin_background.jpg" alt="balin.id" class="img-fluid">
                    </div>
                </div>
                <div class="row pt-xl pb-s">
                    <div class="col-md-12 text-xs-center">
                        <a href="#" class="btn btn-primary btn-lg">MORE PORTOFOLIO</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img src="http://wallpapercave.com/wp/yJluwNX.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img src="https://wallpaperscraft.com/image/laptop_room_on_the_desk_keyboard_mouse_apple_window_interior_73963_1920x1080.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img src="http://wallpapercave.com/wp/yJluwNX.jpg" alt="Third slide">
            </div>
          </div>
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="icon-prev" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="icon-next" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

    @include('_partials/paralax', [
        'name'      => 'tes',
        'url'       => '/images/testimonial.jpg',
        'title'     => '<strong>THUNDERLAB INDONESIA</strong>',
        'title_color' => 'white',
        'subtitle'  => 'DO MORE THINGS SIMPLER',
        'subtitle_color' => 'white',
    ])
@stop

@section('header_home')
	active
@stop

@section('scripts')

@stop