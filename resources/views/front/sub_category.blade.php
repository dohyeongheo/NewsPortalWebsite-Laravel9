@extends('front.layout.app')

@section('main_content')
<div class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ $sub_category_data->sub_category_name }}</h2>
                <nav class="breadcrumb-container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $sub_category_data->sub_category_name
                            }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6">

                <div class="category-page">
                    <div class="row">

                        @if (count($post_data))
                        @foreach($post_data as $row)
                        <div class="col-lg-6 col-md-12">
                            <div class="category-page-post-item">
                                <div class="photo">
                                    <img src="{{ asset('uploads/post/'.$row->post_photo) }}" alt="">
                                </div>
                                <div class="category">
                                    <span class="badge bg-success">{{ $sub_category_data->sub_category_name }}</span>
                                </div>
                                <h3><a href="{{ route('news_detail', $row->id) }}">{!!$row->post_detail!!}</a></h3>
                                <div class="date-user">
                                    <div class="user">
                                        @if($row->author_id==0)
                                        @php
                                        $user_data = \App\Models\Admin::where('id',$row->admin_id)->first();
                                        @endphp
                                        @else
                                        {{-- @php
                                        $user_data = \App\Models\Author::where('id',$single->author_id)->first();
                                        @endphp --}}
                                        @endif
                                        <a href="javascript:void;">{{ $user_data->name }}</a>
                                    </div>
                                    <div class="date">
                                        @php
                                        $ts = strtotime($row->updated_at);
                                        $updated_date = date('d F, Y',$ts);
                                        @endphp
                                        <a href="javascript:void;">{{ $updated_date }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        @else
                        <span class="text-danger"> 포스트가 없습니다.</span>
                        @endif



                        <div class="d-flex justify-content-center">
                            {{ $post_data->links() }}
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 sidebar-col">
                @include('front.layout.sidebar');
            </div>
        </div>
    </div>
</div>
@endsection
