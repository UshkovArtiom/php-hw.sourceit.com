@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('store-post')}}" method="post">
{{--            <input type="hidden" name="_token" value="{{csrf_token()}}">--}}
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" name="title" placeholder="Post Title" value="{{old('title')}}">
                @if ($errors->has('title'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="preview_text">Preview Text</label>
                <textarea class="form-control{{ $errors->has('preview_text') ? ' is-invalid' : '' }}" id="preview_text" name="preview_text" placeholder="Post preview">{{old('preview_text')}}</textarea>
                @if ($errors->has('preview_text'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('preview_text') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="detail_text">Preview Text</label>
                <textarea class="form-control{{ $errors->has('detail_text') ? ' is-invalid' : '' }}" id="detail_text" name="detail_text" placeholder="Post detail">{{old('detail_text')}}</textarea>
                @if ($errors->has('detail_text'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('detail_text') }}</strong>
                    </span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection