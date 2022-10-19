@extends('admin.layout.app')

@section('heading', 'Edit Online Poll')

@section('button')
<a href="{{ route('admin_online_poll_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View </a>
@endsection

@section('main_content')

<div class="section-body">
    <form action="{{ route('admin_online_poll_update', $online_poll_single->id) }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group mb-3">
                            <label>Question </label>
                            <div>
                                <textarea name="question" class="form-control" cols="30" rows="10"
                                    style="height:150px;">{{ $online_poll_single->question }}</textarea>
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
