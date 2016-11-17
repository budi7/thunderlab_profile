@extends('_layouts.master')

@section('body')
<style>
</style>

	@include('_partials/paralax', [
		'name' 		=> 'portofolio',
        'url'       => '/images/contact.jpg',
        'title'     => 'CONTACT US',
        'title_color' => 'white',
        'subtitle'  => ' ',
        'subtitle_color' => 'white',
        'height'    => '425px',
        'top_text_spacer' => '(425px - 81px)/2'
	])

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="panel-section panel-wrap">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <form id="gform" method="POST" class="pure-form pure-form-stacked" action="https://script.google.com/macros/s/AKfycbzpXoJgF5H7q0vfD-hB-JfQLEgyr633ah44qfqVnSlopgEJioCD/exec">
                            <div class="mb-l">
                            	<h5>Get in Touch</h5>
                            	<p>
                            		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            	</p>
                            </div>
    	                    <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input id="email" name="email" type="email" value="" required placeholder="Email" class="form-control"/>                            
                            </div>      
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="7" placeholder="Your Message"></textarea>
                            </div>
                            <div class="text-xs-right pt-s">
                                <!-- <input type="submit" class="btn btn-primary submit" value="SEND MESSAGE"> -->
                                <button class="btn btn-primary submit">
                                    SEND MESSAGE
                                </button>                                
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                    	<h5 class="mb-m">Contact Info</h5>
                    	<h5>Address</h5>
                    	<p>
                    		Pondok Belimbing indah tengah V</br>
                    		Blok B8 No 05, Araya - Malang
                    	</p>
                    	<h5>Postal Code</h5>
                    	<p>
                    		65126
                    	</p>
                    	<h5>Phone</h5>
                    	<p>
                    		+62 341 1888
                    	</p>                    	
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('header_contact')
	active
@stop

@section('scripts')
@stop