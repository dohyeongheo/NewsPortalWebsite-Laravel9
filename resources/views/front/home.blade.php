@extends('front.layout.app');

@section('main_content')


<div class="news-ticker-item">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="acme-news-ticker">
                    <div class="acme-news-ticker-label">Latest News</div>
                    <div class="acme-news-ticker-box">
                        <ul class="my-news-ticker">
                            <li><a href="">Helicopter crashes into waves off crowded Miami beach</a></li>
                            <li><a href="">Canadian police appear to end protesters' siege of Ottawa</a></li>
                            <li><a href="">Speedskating champ chooses sportsmanship over Olympic medal</a></li>
                            <li><a href="">USDA head: US farmers to help if Ukraine exports threatened</a></li>
                            <li><a href="">Actor Lindsey Pearlman found dead after going missing in LA</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-main">
    <div class="container">
        <div class="row g-2">
            <div class="col-lg-8 col-md-12 left">
                <div class="inner">
                    <div class="photo">
                        <div class="bg"></div>
                        <img src="uploads/n1.jpg" alt="">
                        <div class="text">
                            <div class="text-inner">
                                <div class="category">
                                    <span class="badge bg-success badge-sm">Politics</span>
                                </div>
                                <h2><a href="">Top five ranked teams in world lined up to take part in
                                        competition</a></h2>
                                <div class="date-user">
                                    <div class="user">
                                        <a href="">Paul David</a>
                                    </div>
                                    <div class="date">
                                        <a href="">10 Jan, 2022</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="inner inner-right">
                    <div class="photo">
                        <div class="bg"></div>
                        <img src="uploads/n2.jpg" alt="">
                        <div class="text">
                            <div class="text-inner">
                                <div class="category">
                                    <span class="badge bg-success badge-sm">Politics</span>
                                </div>
                                <h2><a href="">Top five ranked teams in world lined up to take part in
                                        competition</a></h2>
                                <div class="date-user">
                                    <div class="user">
                                        <a href="">Paul David</a>
                                    </div>
                                    <div class="date">
                                        <a href="">10 Jan, 2022</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="inner inner-right">
                    <div class="photo">
                        <div class="bg"></div>
                        <img src="uploads/n3.jpg" alt="">
                        <div class="text">
                            <div class="text-inner">
                                <div class="category">
                                    <span class="badge bg-success badge-sm">Politics</span>
                                </div>
                                <h2><a href="">Top five ranked teams in world lined up to take part in
                                        competition</a></h2>
                                <div class="date-user">
                                    <div class="user">
                                        <a href="">Paul David</a>
                                    </div>
                                    <div class="date">
                                        <a href="">10 Jan, 2022</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@if($home_ad_data->above_search_ad_status == 'Show')
<div class="ad-section-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if ($home_ad_data->above_search_ad_url != '')
                <a href="{{ $home_ad_data->above_search_ad_url }}"><img
                        src="{{ asset('uploads/'.$home_ad_data->above_search_ad)  }}" alt=""></a>
                @else
                <img src="{{ asset('uploads/'.$home_ad_data->above_search_ad) }}" alt="">
                @endif
            </div>
        </div>
    </div>
</div>
@endif

<div class="search-section">
    <div class="container">
        <div class="inner">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" name="" class="form-control" placeholder="Title or Description">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <select name="" class="form-select">
                            <option value="">Select Category</option>
                            <option value="">Sports</option>
                            <option value="">National</option>
                            <option value="">Lifestyle</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <select name="" class="form-select">
                            <option value="">Select SubCategory</option>
                            <option value="">Football</option>
                            <option value="">Cricket</option>
                            <option value="">Baseball</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6 left-col">
                <div class="left">

                    <!-- News Of Category -->
                    <div class="news-total-item">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <h2>Sports</h2>
                            </div>
                            <div class="col-lg-6 col-md-12 see-all">
                                <a href="" class="btn btn-primary btn-sm">See All News</a>
                            </div>
                            <div class="col-md-12">
                                <div class="bar"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="left-side">
                                    <div class="photo">
                                        <img src="uploads/n6.jpg" alt="">
                                    </div>
                                    <div class="category">
                                        <span class="badge bg-success">International</span>
                                    </div>
                                    <h3><a href="">Haaland scores before going off injured in Dortmund win and it is
                                            very real</a></h3>
                                    <div class="date-user">
                                        <div class="user">
                                            <a href="">Paul David</a>
                                        </div>
                                        <div class="date">
                                            <a href="">10 Jan, 2022</a>
                                        </div>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, omnis signiferumque in mei, mei ex enim
                                        concludaturque. Senserit salutandi euripidis no per, modus maiestatis
                                        scribentur est an. Cum ei doctus oporteat contentiones, vix ...
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="right-side">
                                    <div class="right-side-item">
                                        <div class="left">
                                            <img src="uploads/n5.jpg" alt="">
                                        </div>
                                        <div class="right">
                                            <div class="category">
                                                <span class="badge bg-success">International</span>
                                            </div>
                                            <h2><a href="">Remote island nation in Pacific under lockdown for first
                                                    time</a></h2>
                                            <div class="date-user">
                                                <div class="user">
                                                    <a href="">Paul David</a>
                                                </div>
                                                <div class="date">
                                                    <a href="">10 Jan, 2022</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-side-item">
                                        <div class="left">
                                            <img src="uploads/n5.jpg" alt="">
                                        </div>
                                        <div class="right">
                                            <div class="category">
                                                <span class="badge bg-success">International</span>
                                            </div>
                                            <h2><a href="">Remote island nation in Pacific under lockdown for first
                                                    time</a></h2>
                                            <div class="date-user">
                                                <div class="user">
                                                    <a href="">Paul David</a>
                                                </div>
                                                <div class="date">
                                                    <a href="">10 Jan, 2022</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-side-item">
                                        <div class="left">
                                            <img src="uploads/n5.jpg" alt="">
                                        </div>
                                        <div class="right">
                                            <div class="category">
                                                <span class="badge bg-success">International</span>
                                            </div>
                                            <h2><a href="">Remote island nation in Pacific under lockdown for first
                                                    time</a></h2>
                                            <div class="date-user">
                                                <div class="user">
                                                    <a href="">Paul David</a>
                                                </div>
                                                <div class="date">
                                                    <a href="">10 Jan, 2022</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-side-item">
                                        <div class="left">
                                            <img src="uploads/n5.jpg" alt="">
                                        </div>
                                        <div class="right">
                                            <div class="category">
                                                <span class="badge bg-success">International</span>
                                            </div>
                                            <h2><a href="">Remote island nation in Pacific under lockdown for first
                                                    time</a></h2>
                                            <div class="date-user">
                                                <div class="user">
                                                    <a href="">Paul David</a>
                                                </div>
                                                <div class="date">
                                                    <a href="">10 Jan, 2022</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // News Of Category -->



                    <!-- News Of Category -->
                    <div class="news-total-item">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <h2>Sports</h2>
                            </div>
                            <div class="col-lg-6 col-md-12 see-all">
                                <a href="" class="btn btn-primary btn-sm">See All News</a>
                            </div>
                            <div class="col-md-12">
                                <div class="bar"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="left-side">
                                    <div class="photo">
                                        <img src="uploads/n6.jpg" alt="">
                                    </div>
                                    <div class="category">
                                        <span class="badge bg-success">International</span>
                                    </div>
                                    <h3><a href="">Haaland scores before going off injured in Dortmund win and it is
                                            very real</a></h3>
                                    <div class="date-user">
                                        <div class="user">
                                            <a href="">Paul David</a>
                                        </div>
                                        <div class="date">
                                            <a href="">10 Jan, 2022</a>
                                        </div>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, omnis signiferumque in mei, mei ex enim
                                        concludaturque. Senserit salutandi euripidis no per, modus maiestatis
                                        scribentur est an. Cum ei doctus oporteat contentiones, vix ...
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="right-side">
                                    <div class="right-side-item">
                                        <div class="left">
                                            <img src="uploads/n5.jpg" alt="">
                                        </div>
                                        <div class="right">
                                            <div class="category">
                                                <span class="badge bg-success">International</span>
                                            </div>
                                            <h2><a href="">Remote island nation in Pacific under lockdown for first
                                                    time</a></h2>
                                            <div class="date-user">
                                                <div class="user">
                                                    <a href="">Paul David</a>
                                                </div>
                                                <div class="date">
                                                    <a href="">10 Jan, 2022</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-side-item">
                                        <div class="left">
                                            <img src="uploads/n5.jpg" alt="">
                                        </div>
                                        <div class="right">
                                            <div class="category">
                                                <span class="badge bg-success">International</span>
                                            </div>
                                            <h2><a href="">Remote island nation in Pacific under lockdown for first
                                                    time</a></h2>
                                            <div class="date-user">
                                                <div class="user">
                                                    <a href="">Paul David</a>
                                                </div>
                                                <div class="date">
                                                    <a href="">10 Jan, 2022</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-side-item">
                                        <div class="left">
                                            <img src="uploads/n5.jpg" alt="">
                                        </div>
                                        <div class="right">
                                            <div class="category">
                                                <span class="badge bg-success">International</span>
                                            </div>
                                            <h2><a href="">Remote island nation in Pacific under lockdown for first
                                                    time</a></h2>
                                            <div class="date-user">
                                                <div class="user">
                                                    <a href="">Paul David</a>
                                                </div>
                                                <div class="date">
                                                    <a href="">10 Jan, 2022</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-side-item">
                                        <div class="left">
                                            <img src="uploads/n5.jpg" alt="">
                                        </div>
                                        <div class="right">
                                            <div class="category">
                                                <span class="badge bg-success">International</span>
                                            </div>
                                            <h2><a href="">Remote island nation in Pacific under lockdown for first
                                                    time</a></h2>
                                            <div class="date-user">
                                                <div class="user">
                                                    <a href="">Paul David</a>
                                                </div>
                                                <div class="date">
                                                    <a href="">10 Jan, 2022</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // News Of Category -->






                    <!-- News Of Category -->
                    <div class="news-total-item">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <h2>Sports</h2>
                            </div>
                            <div class="col-lg-6 col-md-12 see-all">
                                <a href="" class="btn btn-primary btn-sm">See All News</a>
                            </div>
                            <div class="col-md-12">
                                <div class="bar"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="left-side">
                                    <div class="photo">
                                        <img src="uploads/n6.jpg" alt="">
                                    </div>
                                    <div class="category">
                                        <span class="badge bg-success">International</span>
                                    </div>
                                    <h3><a href="">Haaland scores before going off injured in Dortmund win and it is
                                            very real</a></h3>
                                    <div class="date-user">
                                        <div class="user">
                                            <a href="">Paul David</a>
                                        </div>
                                        <div class="date">
                                            <a href="">10 Jan, 2022</a>
                                        </div>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, omnis signiferumque in mei, mei ex enim
                                        concludaturque. Senserit salutandi euripidis no per, modus maiestatis
                                        scribentur est an. Cum ei doctus oporteat contentiones, vix ...
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="right-side">
                                    <div class="right-side-item">
                                        <div class="left">
                                            <img src="uploads/n5.jpg" alt="">
                                        </div>
                                        <div class="right">
                                            <div class="category">
                                                <span class="badge bg-success">International</span>
                                            </div>
                                            <h2><a href="">Remote island nation in Pacific under lockdown for first
                                                    time</a></h2>
                                            <div class="date-user">
                                                <div class="user">
                                                    <a href="">Paul David</a>
                                                </div>
                                                <div class="date">
                                                    <a href="">10 Jan, 2022</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-side-item">
                                        <div class="left">
                                            <img src="uploads/n5.jpg" alt="">
                                        </div>
                                        <div class="right">
                                            <div class="category">
                                                <span class="badge bg-success">International</span>
                                            </div>
                                            <h2><a href="">Remote island nation in Pacific under lockdown for first
                                                    time</a></h2>
                                            <div class="date-user">
                                                <div class="user">
                                                    <a href="">Paul David</a>
                                                </div>
                                                <div class="date">
                                                    <a href="">10 Jan, 2022</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-side-item">
                                        <div class="left">
                                            <img src="uploads/n5.jpg" alt="">
                                        </div>
                                        <div class="right">
                                            <div class="category">
                                                <span class="badge bg-success">International</span>
                                            </div>
                                            <h2><a href="">Remote island nation in Pacific under lockdown for first
                                                    time</a></h2>
                                            <div class="date-user">
                                                <div class="user">
                                                    <a href="">Paul David</a>
                                                </div>
                                                <div class="date">
                                                    <a href="">10 Jan, 2022</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-side-item">
                                        <div class="left">
                                            <img src="uploads/n5.jpg" alt="">
                                        </div>
                                        <div class="right">
                                            <div class="category">
                                                <span class="badge bg-success">International</span>
                                            </div>
                                            <h2><a href="">Remote island nation in Pacific under lockdown for first
                                                    time</a></h2>
                                            <div class="date-user">
                                                <div class="user">
                                                    <a href="">Paul David</a>
                                                </div>
                                                <div class="date">
                                                    <a href="">10 Jan, 2022</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // News Of Category -->





                </div>
            </div>
            <div class="col-lg-4 col-md-6 sidebar-col">
                @include('front.layout.sidebar')
            </div>
        </div>
    </div>
</div>


<div class="video-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="video-heading">
                    <h2>Videos</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="video-carousel owl-carousel">
                    <div class="item">
                        <div class="video-thumb">
                            <img src="http://img.youtube.com/vi/tvsyp08Uylw/0.jpg" alt="">
                            <div class="bg"></div>
                            <div class="icon">
                                <a href="http://www.youtube.com/watch?v=tvsyp08Uylw" class="video-button"><i
                                        class="fas fa-play"></i></a>
                            </div>
                        </div>
                        <div class="video-caption">
                            <a href="">Haaland scores before going off injured in Dortmund win and it is very
                                real</a>
                        </div>
                        <div class="video-date">
                            <i class="fas fa-calendar-alt"></i> Feb 28, 2022
                        </div>
                    </div>
                    <div class="item">
                        <div class="video-thumb">
                            <img src="http://img.youtube.com/vi/PKATJiyz0iI/0.jpg" alt="">
                            <div class="bg"></div>
                            <div class="icon">
                                <a href="http://www.youtube.com/watch?v=PKATJiyz0iI" class="video-button"><i
                                        class="fas fa-play"></i></a>
                            </div>
                        </div>
                        <div class="video-caption">
                            <a href="">Haaland scores before going off injured in Dortmund win and it is very
                                real</a>
                        </div>
                        <div class="video-date">
                            <i class="fas fa-calendar-alt"></i> Feb 28, 2022
                        </div>
                    </div>
                    <div class="item">
                        <div class="video-thumb">
                            <img src="http://img.youtube.com/vi/ekgUjyWe1Yc/0.jpg" alt="">
                            <div class="bg"></div>
                            <div class="icon">
                                <a href="http://www.youtube.com/watch?v=ekgUjyWe1Yc" class="video-button"><i
                                        class="fas fa-play"></i></a>
                            </div>
                        </div>
                        <div class="video-caption">
                            <a href="">Haaland scores before going off injured in Dortmund win and it is very
                                real</a>
                        </div>
                        <div class="video-date">
                            <i class="fas fa-calendar-alt"></i> Feb 28, 2022
                        </div>
                    </div>
                    <div class="item">
                        <div class="video-thumb">
                            <img src="http://img.youtube.com/vi/LEcpS6pX9kY/0.jpg" alt="">
                            <div class="bg"></div>
                            <div class="icon">
                                <a href="http://www.youtube.com/watch?v=LEcpS6pX9kY" class="video-button"><i
                                        class="fas fa-play"></i></a>
                            </div>
                        </div>
                        <div class="video-caption">
                            <a href="">Haaland scores before going off injured in Dortmund win and it is very
                                real</a>
                        </div>
                        <div class="video-date">
                            <i class="fas fa-calendar-alt"></i> Feb 28, 2022
                        </div>
                    </div>
                    <div class="item">
                        <div class="video-thumb">
                            <img src="http://img.youtube.com/vi/N88TwF4D2PI/0.jpg" alt="">
                            <div class="bg"></div>
                            <div class="icon">
                                <a href="http://www.youtube.com/watch?v=N88TwF4D2PI" class="video-button"><i
                                        class="fas fa-play"></i></a>
                            </div>
                        </div>
                        <div class="video-caption">
                            <a href="">Haaland scores before going off injured in Dortmund win and it is very
                                real</a>
                        </div>
                        <div class="video-date">
                            <i class="fas fa-calendar-alt"></i> Feb 28, 2022
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@if($home_ad_data->above_footer_ad_status == 'Show')
<div class="ad-section-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if ($home_ad_data->above_footer_ad_url != '')
                <a href="{{ $home_ad_data->above_footer_ad_url }}"><img
                        src="{{ asset('uploads/'.$home_ad_data->above_footer_ad)  }}" alt=""></a>
                @else
                <img src="{{ asset('uploads/'.$home_ad_data->above_footer_ad) }}" alt="">
                @endif
            </div>
        </div>
    </div>
</div>
@endif



@endsection
