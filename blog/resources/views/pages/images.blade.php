@extends('layouts.app')

@section('content')
    <div class="imagePage_container">
        <div class="imagePageTitle">All images</div>
        <div class="image_container">
        @foreach ($images as $image)
            <div class="image" id="{{$image->id}}">
                <div class = "image_title">
                   {{ $image->name }}
                </div>

                <div id="image_csgo" >
                    <img src="{{url($image->image_url)}}" alt="{{$image->image_url}}"/>
                </div>

                <div id="image_footer">

                    <img id="like" src="{{ Auth::user()->likes()->where('image_id', $image->id)->first() ? Auth::user()->likes()->where('image_id', $image->id)->first()->like == 'like' ? 'imagesButtons/upGreen.png' : 'imagesButtons/up.png' : 'imagesButtons/up.png'}}" alt="no image" onclick="isLiked('{{$image->id}}', 'like', this)"/>
                    <img id="dislike" src="{{ Auth::user()->likes()->where('image_id', $image->id)->first() ? Auth::user()->likes()->where('image_id', $image->id)->first()->like == 'dislike' ? 'imagesButtons/downRed.png' : 'imagesButtons/down.png' : 'imagesButtons/down.png'}}" alt="no image" onclick="isLiked('{{$image->id}}', 'dislike', this)"/>

                </div>


            </div>
        @endforeach
        </div>
    </div>
@endsection
