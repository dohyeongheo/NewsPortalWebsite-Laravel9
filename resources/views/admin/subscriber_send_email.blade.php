@extends('admin.layout.app')

@section('heading', 'Send Email to subscribers')

@section('main_content')

<div class="section-body">
    <form action="{{ route('admin_subscribers_send_email_submit') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group mb-3">
                            <label>Subject * </label>
                            <div>
                                <input type="text" name="subject" class="form-control"
                                    placeholder="Subject">
                            </div>
                        </div>


                        <div class="form-group mb-3">
                            <label>Message * </label>
                            <div>
                                <textarea name="message" class="form-control snote" cols="30"
                                    rows="10">{{ old('message') }}</textarea>
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
