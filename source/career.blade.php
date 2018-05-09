@extends('_layouts.master')

@section('body')

	@include('_partials/paralax', [
		'name' 		=> 'portofolio',
        'url'       => '/images/career.jpg',
        'title'     => 'Pilih  Pekerjaan  Yang  Selalu  Membuat  Anda  Melakukan  Yang  Terbaik',
        'title_color' => 'white',
        'subtitle'  => ' ',
        'subtitle_color' => 'white',
        'height'    => '425px',
        'top_text_spacer' => '(425px - 81px)/2'
	])

    @include('_partials/panel_career', [
        'jobs'  =>  [
                        '0'     =>  [
                                        'title'      => 'Web  Developer ',
                                        'location'   => 'Malang, Indonesia',
                                        'contents'   => [
                                                            'KUALIFIKASI :'     => '
                                                            <ul>
                                                                <li>Pria/Wanita,  usia  maksimal  40  tahun  saat  mengajukan  lamaran  </li>
                                                                <li>Pendidikan  minimal  D3  dan  S1  jurusan  Teknik  Informatika/Teknik  Komputer  maupun  bidang  terkait  </li>
                                                                <li>Menguasai  PHP,Mysql,  HTML  </li>
                                                                <li>Menguasai  Laravel  merupakan  nilai  plus  </li>
                                                                <li>Dapat  bekerjasama  dalam  tim  dan  sesuai  deadline  </li>
                                                                <li>Penempatan  di  area  Malang  </li>
                                                            </ul> ',
                                                            'qualified_applicants' => 'Kirim  CV,  Surat  lamaran  dan  fortofolio  ke  email  : hr@thunderlab.id'
                                                        ]
                                    ],   
                        '1'     =>  [
                                        'title'      => 'Mobile  Developer ',
                                        'location'   => 'Malang, Indonesia',
                                        'contents'   => [
                                                            'KUALIFIKASI :'     => '
                                                            <ul>
                                                                <li>Pria/Wanita,  usia  maksimal  40  tahun  saat  mengajukan  lamaran  </li>
                                                                <li>Pendidikan  minimal  D3  dan  S1  jurusan  Teknik  Informatika/Teknik  Komputer  maupun  bidang  terkait  </li>
                                                                <li>Menguasai  Android  (Java)  maupun  IOS  App    </li>
                                                                <li>Dapat  bekerjasama  dalam  tim  dan  sesuai  deadline  </li>
                                                                <li>Penempatan  di  area  Malang  </li>
                                                            </ul> ',
                                                            'qualified_applicants' => 'Kirim  CV,  Surat  lamaran  dan  fortofolio  ke  email  : hr@thunderlab.id'
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