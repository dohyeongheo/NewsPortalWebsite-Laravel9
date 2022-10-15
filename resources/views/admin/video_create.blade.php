@extends('admin.layout.app')

@section('heading', 'Add Video')

@section('button')
<a href="{{ route('admin_video_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View </a>
@endsection

@section('main_content')

<div class="section-body">
    <form action="{{ route('admin_video_store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group mb-3">
                            <label>Video ID </label>
                            <div>
                                <input type="text" name="video_id" class="form-control" placeholder="Video ID"
                                    value="{{ old('video_id') }}">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label>Caption </label>
                            <div>
                                <input type="text" name="caption" class="form-control" id="" value="{{ old('caption') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
