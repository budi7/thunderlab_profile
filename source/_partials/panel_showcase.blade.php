<div class="row pb-m" style="padding-top: 60px;">
    @foreach($datas as $key => $data)
        <div class="col-md-4 col-sm-4 col-xs-12 pb-m text-xs-center showcase" style="padding-bottom: 60px;">
            {{-- <a href="{{ $data['url'] }}" class="showcase"> --}}
                <img src="{{ $data['img'] }}" alt="{{ $data['name'] }}" class="img-fluid">
            {{-- </a> --}}
        </div>
    @endforeach
</div>