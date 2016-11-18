<div class="row pb-m">
    @foreach($datas as $key => $data)
        <div class="col-md-4 col-sm-4 col-xs-12 pb-m text-xs-center">
            <a href="{{ $data['url'] }}" class="showcase">
                <img src="{{ $data['img'] }}" alt="{{ $data['name'] }}" class="img-fluid">
            </a>
        </div>
    @endforeach
</div>