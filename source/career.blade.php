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

    @media screen and (max-width: 575px) {
        .pb-xs-hide{
            padding-bottom: 0px;
        }
        .pt-xs-hide{
            padding-top: 0px;
        }
        .responsive-subtitle{
            font-size: 1rem;
            font-weight: 100;
        }
        .responsive-subtitle .toggler{
            font-weight: bold;
            margin-top: -15px;
        }
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

    @include('_partials/panel_career', [
        'jobs'  =>  [
                        '0'     =>  [
                                        'title'      => 'Senior UX Developer',
                                        'location'   => 'Malang, Indonesia',
                                        'contents'   => [
                                                            'duties'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                                                            'requirement' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                                                            'qualified_applicants' => 'Please Contact: hr@thunderlab.id'
                                                        ]
                                    ],   
                        '1'     =>  [
                                        'title'      => 'Senior UI Developer',
                                        'location'   => 'Malang, Indonesia',
                                        'contents'   => [
                                                            'duties'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                                                            'requirement' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                                                            'qualified_applicants' => 'Please Contact: hr@thunderlab.id'
                                                        ]
                                    ],                     
                    ]
    ])

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