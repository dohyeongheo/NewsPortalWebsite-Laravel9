@extends('admin.layout.app')

@section('heading', 'Live Channels')

@section('button')
<a href="{{ route('admin_live_channel_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add </a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Video ID</th>
                                    <th>Heading</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach($live_channels as $row)
                            <tbody>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="video-thumb">
                                            <iframe style="width=300px height:220px;"
                                                src="https://www.youtube.com/embed/{{ $row->video_id }}"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                    </td>
                                    <td>{{ $row->heading }}</td>
                                    <td class="pt_10 pb_10">
                                        <a href="{{ route('admin_live_channel_edit', $row->id) }}"
                                            class="btn btn-primary">Edit</a>
                                        <a href="{{ route('admin_live_channel_delete', $row->id) }}"
                                            class="btn btn-danger" onClick="return confirm('삭제하시겠습니까?');">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
