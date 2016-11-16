@extends('_layouts.master')

@section('body')
<style>
    .container-title{
        background-color: #eee;
    }
    .span-show{
        padding-left: 2rem;
    }
    .span-show > a{
       color: #373a3c;
    }    
    .job-sub-title{
        text-transform: uppercase;
    }
    .colapse_career .active{
        transform: rotateX(180deg);
    }
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

    <!-- section 1 -->
    <div class="container-title">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row panel-wrap"> 
                    <div class="col-md-6 col-xs-12 pb-s pt-s">
                        <h5>
                            Senior UI Designer
                        </h5>
                    </div>
                    <div class="col-md-6 col-xs-12 pb-s pt-s text-xs-right">
                        <h5>
                            <span>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </span>
                            Malang, Indonesia
                            <span class="span-show">
                                <a class="colapse_career" href="#" data-toggle="collapse" data-target="#collapseCareer1" aria-expanded="false" aria-controls="collapseCareer1">
                                    <i class="fa fa-angle-down active" aria-hidden="true"></i>
                                </a>
                            </span>
                        </h5>                    
                    </div>                    
                </div>
            </div>
        </div>
    </div>

    <div class="collapse in" id="collapseCareer1">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="pb-l pt-l panel-wrap">
                    <div class="pb-s">
                        <h5>Senior UX designer</h5>
                        <p>
                            <span>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </span>
                            Malang, Indonesia                    
                        </p>
                    </div>
                    <div class="pb-s">
                        <p class="mb-none job-sub-title">DUTIES:</p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div> 
                    <div class="pb-s">
                        <p class="mb-none job-sub-title">JOB REQUIREMENTS:</p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>   
                    <div class="pb-s">
                        <p class="mb-none job-sub-title">Qualified Applicants:</p>
                        <p>
                            Please Contact: hr@thunderlab.id
                        </p>
                    </div>                                          
                </div>
            </div>
        </div>
    </div>

    <!-- section 2 -->
    <div class="container-title">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row panel-wrap"> 
                    <div class="col-md-6 col-xs-12 pb-s pt-s">
                        <h5>
                            Senior UI Designer
                        </h5>
                    </div>
                    <div class="col-md-6 col-xs-12 pb-s pt-s text-xs-right">
                        <h5>
                            <span>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </span>
                            Malang, Indonesia
                            <span class="span-show">
                                <a class="colapse_career" href="#" data-toggle="collapse" data-target="#collapseCareer2" aria-expanded="false" aria-controls="collapseCareer2">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                            </span>
                        </h5>                    
                    </div>                    
                </div>
            </div>
        </div>
    </div>

    <div class="collapse" id="collapseCareer2">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="pb-l pt-l panel-wrap">
                    <div class="pb-s">
                        <h5>Senior UX designer</h5>
                        <p>
                            <span>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </span>
                            Malang, Indonesia                    
                        </p>
                    </div>
                    <div class="pb-s">
                        <p class="mb-none job-sub-title">DUTIES:</p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div> 
                    <div class="pb-s">
                        <p class="mb-none job-sub-title">JOB REQUIREMENTS:</p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>   
                    <div class="pb-s">
                        <p class="mb-none job-sub-title">Qualified Applicants:</p>
                        <p>
                            Please Contact: hr@thunderlab.id
                        </p>
                    </div>                                          
                </div>
            </div>
        </div>
    </div>

    <!-- filler -->
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

@section('scripts')
    $('.colapse_career').on('click', function(){
        var target = $(this).data('target');
        if($(target).is( ":visible" )){
            $(this).children().removeClass('active');
        }else{
            $(this).children().addClass('active');
        }
    });
@stop