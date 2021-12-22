@extends('layout.default')
@section('page_title', 'Home')
@section('main_contant')
<div class="container">
    <h2>li</h2>
    <div class="row row-cols-4 g-4">
        @foreach ($data as $item)
        <div class="col">
            
            <div class="card" style="width: 18rem;">
                
                <div class="card-body">
                    <h5 class="card-title">{{$item['title']}}</h5>
                    <p>Nation: {{$item['nationality']}}</p>
                    <p>Data: {{$item['date']}}</p>
                    <p>Vote: {{$item['vote']}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection