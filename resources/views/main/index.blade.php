@extends('main.master')


@section('content')

    @include('main.featuredBar')
    <h3 class="pb-4 mb-4 font-italic border-bottom">
        General Posts
    </h3>
    @foreach ($posts as $post)
        <div class="col-12">
            <div class="col-12 d-none d-lg-block">
                <a href="user/posts/{{$post->id}}" > <img src='{{asset('images/posts/'.$post->image)}}' class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"> <title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">w</text></img> </a>
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
    @endforeach
    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
    </nav>
@endsection
