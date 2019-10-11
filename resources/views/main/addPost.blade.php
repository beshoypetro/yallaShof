@extends('main.master')


@section('content')

    <h3 class="pb-4 mb-4 font-italic border-bottom">
        Have a nice time adding new posts
    </h3>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'storePost', 'files' => true]) !!}

                    <!-- Type Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('type', 'Type:') !!}
                            {!! Form::select('type', ['sport' => 'sport', 'health' => 'health', 'technology' => 'technology', 'culture' => 'culture'], null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Body Field -->
                        <div class="form-group col-sm-12 col-lg-12">
                            {!! Form::label('body', 'Body:') !!}
                            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Image Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('image', 'Image:') !!}
                            {!! Form::file('image') !!}
                        </div>
                        <div class="clearfix"></div>

                        <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            <a href="{!! route('posts.index') !!}" class="btn btn-default">Cancel</a>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
