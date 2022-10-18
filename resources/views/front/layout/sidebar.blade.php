<div class="sidebar">

    <div class="widget">
        @foreach($global_sidebar_top_ad as $row)
        <div class="ad-sidebar">
            @if($row->sidebar_ad_url == '')
            <img src="{{ asset('uploads/'.$row->sidebar_ad) }}" alt="" style="width:100%" ;>
            @else
            <a href="{{ $row->sidebar_ad_url }}"><img src="{{ asset('uploads/'.$row->sidebar_ad) }}" alt=""
                    style="width:100%" ;></a>
            @endif
        </div>
        @endforeach

    </div>

    <div class="widget">
        <div class="tag-heading">
            <h2>Tags</h2>
        </div>
        <div class="tag">
            <div class="tag-item">
                <a href=""><span class="badge bg-secondary">business</span></a>
            </div>
            <div class="tag-item">
                <a href=""><span class="badge bg-secondary">river</span></a>
            </div>
            <div class="tag-item">
                <a href=""><span class="badge bg-secondary">politics</span></a>
            </div>
            <div class="tag-item">
                <a href=""><span class="badge bg-secondary">google</span></a>
            </div>
            <div class="tag-item">
                <a href=""><span class="badge bg-secondary">tree</span></a>
            </div>
            <div class="tag-item">
                <a href=""><span class="badge bg-secondary">airplane</span></a>
            </div>
            <div class="tag-item">
                <a href=""><span class="badge bg-secondary">tiles</span></a>
            </div>
            <div class="tag-item">
                <a href=""><span class="badge bg-secondary">recent</span></a>
            </div>
            <div class="tag-item">
                <a href=""><span class="badge bg-secondary">brand</span></a>
            </div>
            <div class="tag-item">
                <a href=""><span class="badge bg-secondary">election</span></a>
            </div>
        </div>
    </div>

    <div class="widget">
        <div class="archive-heading">
            <h2>Archive</h2>
        </div>
        <div class="archive">
            <select name="" class="form-select">
                <option value="">Select Month</option>
                <option value="">February 2022</option>
                <option value="">January 2022</option>
                <option value="">December 2021</option>
                <option value="">November 2021</option>
                <option value="">October 2021</option>
                <option value="">September 2021</option>
                <option value="">August 2021</option>
                <option value="">July 2021</option>
            </select>
        </div>
    </div>

    <div class="widget">
        @foreach ($global_live_channel_data as $row)
        <div class="live-channel">
            <div class="live-channel-heading">
                <h2>{{ $row->heading }}</h2>
            </div>
            <div class="live-channel-item">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $row->video_id }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
        @endforeach
    </div>

    <div class="widget">
        <div class="news">
            <div class="news-heading">
                <h2>Popular & Recent News</h2>
            </div>

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">Recent News</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">Popular News</button>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                    @foreach ($global_recent_news_data as $row)
                    @if($loop->iteration > 5)
                    @break
                    @endif
                    <div class="news-item">
                        <div class="left">
                            <img src="{{ asset('uploads/post/'.$row->post_photo) }}" alt="">
                        </div>
                        <div class="right">
                            <div class="category">
                                <span class="badge bg-success">{{ $row->rSubCategory->sub_category_name }}</span>
                            </div>
                            <h2><a href="{{ route('news_detail', $row->id) }}">{{ $row->post_title }}</a></h2>
                            <div class="date-user">
                                <div class="user">
                                    <a href="">
                                        @if($row->author_id==0)
                                        @php
                                        $user_data =
                                        \App\Models\Admin::where('id',$row->admin_id)->first();
                                        @endphp
                                        @else
                                        {{-- @php
                                        $user_data =
                                        \App\Models\Author::where('id',$single->author_id)->first();
                                        @endphp --}}
                                        @endif
                                        <a href="javascript:void;">{{ $user_data->name }}</a>
                                    </a>
                                </div>
                                <div class="date">
                                    <a href="javascript:void;">
                                        @php
                                        $time = $row->created_at;
                                        $create_date = date('d F, Y', strtotime($time));
                                        @endphp
                                        {{ $create_date }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                    @foreach ($global_popular_news_data as $row)
                    @if($loop->iteration > 5)
                    @break
                    @endif
                    <div class="news-item">
                        <div class="left">
                            <img src="{{ asset('uploads/post/'.$row->post_photo) }}" alt="">
                        </div>
                        <div class="right">
                            <div class="category">
                                <span class="badge bg-success">{{ $row->rSubCategory->sub_category_name }}</span>
                            </div>
                            <h2><a href="{{ route('news_detail', $row->id) }}">{{ $row->post_title }}</a></h2>
                            <div class="date-user">
                                <div class="user">

                                    @if($row->author_id==0)
                                    @php
                                    $user_data =
                                    \App\Models\Admin::where('id',$row->admin_id)->first();
                                    @endphp
                                    @else
                                    {{-- @php
                                    $user_data =
                                    \App\Models\Author::where('id',$single->author_id)->first();
                                    @endphp --}}
                                    @endif
                                    <a href="javascript:void;">{{ $user_data->name }}</a>


                                </div>
                                <div class="date">
                                    <a href="">
                                        @php
                                        $time = $row->created_at;
                                        $create_date = date('d F, Y', strtotime($time));
                                        @endphp
                                        {{ $create_date }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <div class="widget">
        <div class="poll-heading">
            <h2>Online Poll</h2>
        </div>
        <div class="poll">
            <div class="question">
                Do you think that Apple products will be able to survive in the next 20 years?
            </div>
            <div class="answer-option">
                <form action="" method="post">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="poll" id="poll_id_1">
                        <label class="form-check-label" for="poll_id_1">Yes</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="poll" id="poll_id_2">
                        <label class="form-check-label" for="poll_id_2">No</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="poll" id="poll_id_3">
                        <label class="form-check-label" for="poll_id_3">No Comment</label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="poll-result.html" class="btn btn-primary old">Old Result</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="widget">
        @foreach($global_sidebar_bottom_ad as $row)
        <div class="ad-sidebar">
            @if($row->sidebar_ad_url == '')
            <img src="{{ asset('uploads/'.$row->sidebar_ad) }}" alt="" style="width:100%" ;>
            @else
            <a href="{{ $row->sidebar_ad_url }}"><img src="{{ asset('uploads/'.$row->sidebar_ad) }}" alt=""
                    style="width:100%" ;></a>
            @endif
        </div>
        @endforeach

    </div>
