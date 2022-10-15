@extends('admin.layout.app')

@section('heading', ' Faq')

@section('button')
<a href="{{ route('admin_faq_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View </a>
@endsection

@section('main_content')

<div class="section-body">
    <form action="{{ route('admin_faq_store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group mb-3">
                            <label>Faq Title * </label>
                            <div>
                                <input type="text" name="faq_title" class="form-control"
                                    value="{{ old('faq_title') }}" placeholder="Faq Title">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label>Faq Detail * </label>
                            <textarea name="faq_detail" class="form-control snote" id="" cols="50">
                                {!! old('faq_detail') !!}
                            </textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
