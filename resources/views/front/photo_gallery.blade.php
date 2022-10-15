@extends('front.layout.app')

@section('main_content')
<div class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Photo Gallery</h2>
                <nav class="breadcrumb-container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Photo Gallery</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>


<div class="page-content">
    <div class="container">
        <div class="photo-gallery">
            <div class="row">

                @foreach ($photo_data as $row)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="photo-thumb">
                        <img src="uploads/photo_gallery/{{ $row->photo }}" alt="">
                        <div class="bg"></div>
                        <div class="icon">
                            <a href="uploads/photo_gallery/{{ $row->photo }}" class="magnific"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="photo-caption">
                        <a href="javascript:void">{!! $row->caption !!}</a>
                    </div>
                    <div class="photo-date">
                        <i class="fas fa-calendar-alt"></i>
                        @php
                        $time = $row->updated_at;
                        $update_date = date('d-m-y', strtotime($time));
                        @endphp
                        {{ $update_date }}
                    </div>
                </div>
                @endforeach

                <div class="d-flex justify-content-center">
                    {{ $photo_data->links() }}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
