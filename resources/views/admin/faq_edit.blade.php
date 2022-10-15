@extends('admin.layout.app')

@section('heading', 'Edit Faq')

@section('button')
<a href="{{ route('admin_faq_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View </a>
@endsection

@section('main_content')

<div class="section-body">
    <form action="{{ route('admin_faq_update', $faq_single->id) }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group mb-3">
                            <label>Faq Title * </label>
                            <div>
                                <input type="text" name="faq_title" class="form-control"
                                    value="{{ $faq_single->faq_title }}"
                                    placeholder="Faq Title">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label>Faq Detail * </label>
                            <textarea name="faq_detail" class="form-control snote" id="" cols="30" rows="10">{!! old('faq_detail', $faq_single->faq_detail) !!}</textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
