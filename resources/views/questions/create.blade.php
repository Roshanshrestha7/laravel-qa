@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h2>Ask Questions</h2>
                            <div class="ml-auto">
                                <a href="{{route('question.index')}}" class="btn btn-outline-secondary">Back</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        {!! Form::open(['method'=>'post','url'=>'question','enctype'=>'multipart/form-data']) !!}

{{--                        <form action="{{ route('question.store') }}" method="post">--}}
                            <div class="form-group {{ ($errors->has('full_name'))?'has-error':'' }}">
                                <label for="question-title">Question Title</label>
                                {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Title','autocomplete' => 'off']) !!}
                                {!! $errors->first('title', '<span class="text-danger">:message</span>') !!}

{{--                                <input type="text" name="title" id="question-title" class="form-control">--}}
                            </div>
                            <div class="form-group {{ ($errors->has('full_name'))?'has-error':'' }}">
                                <label for="question-Body">Explain Your Question</label>
                                {{Form::textarea('body',Request::get('body'),['class'=>'form-control','style'=>'width:100%;','id'=>'content','name'=>'body','rows' => 5, 'cols' => 40,'placeholder'=>
                                    'Question'])}}
                                {!! $errors->first('body', '<span class="text-danger">:message</span>') !!}

{{--                                <textarea name="body" id="question-body" cols="30" rows="10" class="form-control"></textarea>--}}
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-primary btn-lg">Submit</button>
                            </div>
{{--                        </form>--}}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
