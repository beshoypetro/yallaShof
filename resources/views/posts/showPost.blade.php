@extends('main.master')


@section('content')
    <div class="col-12">
        <div class="col-12 d-none d-lg-block">
          <img src='{{asset('images/posts/'.$post->image)}}' class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"> <title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>
        </div>
        <div class="col-md-12">
            <p style="font-family: 'Adamina';font-size: 22px;padding-top: 10px;">{{$post->body}} </p>
        </div>
        <div class="col-10" style="margin: auto;">
            <div class="row">
                <div class="col-md-4">
                    <div class="reacts" style="padding: 10px;font-weight: bold;font-size: 22px;">
                        <i class="far fa-thumbs-up"></i> Like
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="reacts" style="padding: 10px;font-weight: bold;font-size: 22px;">
                        <i class="far fa-comment"></i> Comment
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="reacts" style="padding: 10px;font-weight: bold;font-size: 22px;">
                        <i class="far fa-share-square"></i> Share
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
