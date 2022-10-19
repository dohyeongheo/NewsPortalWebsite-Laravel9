@extends('admin.layout.app')

@section('heading', 'Add Online Poll')

@section('button')
<a href="{{ route('admin_online_poll_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View </a>
@endsection

@section('main_content')

<div class="section-body">
    <form action="{{ route('admin_online_poll_store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group mb-3">
                            <label>Question </label>
                            <div>
                                <input type="text" name="question" class="form-control"
                                    placeholder="Online Poll Question" value="{{ old('question') }}">
                            </div>
                        </div>

                        {{-- <div class="form-group mb-3">
                            <label>Heading </label>
                            <div>
                                <input type="text" name="heading" class="form-control" id="" placeholder="Heading"
                                    value="{{ old('heading') }}">
                            </div>
                        </div> --}}

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
