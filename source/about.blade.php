@extends('_layouts.master')

@section('body')
<style>
</style>

	@include('_partials/paralax', [
		'name' 		=> 'about',
        'url'       => '/images/home.jpg',
        'title'     => 'ABOUT US',
        'title_color' => 'white',
        'subtitle'  => ' ',
        'subtitle_color' => 'white',
        'height'    => '425px',
        'top_text_spacer' => '(425px - 81px)/2'
	])

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="panel-section">
                <div class="row">
                    <div class="col-md-12 text-xs-center" style="padding: 0 15%;">
                        <p>
                        	After 10 years helping over 100 satisfied corporates to achieve their dreams through technology, we are left with big regrets. Regrets of not being able to help and serve more people, regrets that our services are too exclusive for certain markets.
                        </p>
                        <p>
                        	Therefore, in 2016, we are evolving to a brand new company called THUNDERLAB. To achieve what we have achieved and to be able to do what we have missed, we are doing huge improvement to our team structures, technologies and services. We believe with these changes, we will be able to create more excellent and awesome solutions and services for broader markets.
                        </p>
                        <p>
                        	In Thunderlab, we are focusing in helping small businesses to run like a big corporate, so that they can focus on their growth. We are achieving that by offering tech solutions with many services like accounting tech solution, data analysis solution, HR tech solution, customer relation management, management tech solutions, and much more.
                        </p>
                        <p>
	                        To stay updated with what we’re doing, please follow our social media
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('header_about')
	active
@stop