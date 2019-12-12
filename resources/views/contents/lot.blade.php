@extends('layouts.main')
@section('content')
    <link rel="stylesheet" href="{{ URL::to('css/fotorama.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Alegreya+Sans:300,300i,400,400i,500,500i,700,700i');

        .widget {
            background: #fafafa;
            box-shadow: 0 0 0 1px #e2e2e2 inset;
            margin-bottom: 20px;
            padding: 20px;
            position: relative;
        }
        .widget h3 {
            color: #666666;
            border-bottom: 1px solid #cbcbcb;
            margin-bottom: 20px;
            margin-top: 0;
            padding-bottom: 10px;
        }
        input#bid_amount {
            max-width: 150px;
        }
    </style>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-xs-12">
                @if(Session::has('info'))
                    <div class="row" id="alert_info">
                        <div class="col-md-12">
                            <p class="alert alert-success">{{ Session::get('info') }}</p>
                        </div>
                    </div>
                @endif
                <h1 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $lot->title }}</h1>
                <div class="auction-img-video-wrap">
                    <div class="ads-gallery">
                        <div class="fotorama" data-nav="thumbs" data-allowfullscreen="true" data-width="100%">
                            <img src="{{ URL::to('range-rover.jpeg') }}"
                                 alt="Range Rover">
                            <img src="{{ URL::to('pexels-photo.jpeg') }}"
                                 alt="Range Rover">
                        </div>
                    </div>
                </div>
                <div class="ads-detail">
                    Description</h4>
                    <p>{{ $lot->description }}</p><br />
                    <br />
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="sidebar-widget">

                    <div class="widget">
                        <h3>Highest bid <span style="color: crimson; font-weight: bold; font-size: 30px;">${{ $lot->highest_bid }}</span></h3>

                        <p>Bid deadline is {{ $lot->expired_at }}</p>

                        <form method="POST" action="{{ route('lots.lot.bid') }}" accept-charset="UTF-8"
                              class="form-inline">@csrf
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
                                    <input type="number" class="form-control" id="bid_amount" name="bid_amount" placeholder="Bid Amount"
                                           min="{{ $lot->highest_bid + 1 }}" required="required">
                                    <input type="hidden" name="lot_id" required="required" value="{{ $lot->id }}">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Place Bid</button>
                        </form>
                    </div>


                    <div class="widget">
                        <h3>General Info</h3>
                        <p><span class="ad-info-name"><i class="fa fa-money"></i> Starting price</span> <span class="ad-info-value">${{ $lot->starting_price }}</span></p>
                        {{--<p><span class="ad-info-name"><i class="fa fa-globe"></i> Country </span> <span class="ad-info-value">{{ $lot->country }} </span> </p>--}}
                        {{--<p><span class="ad-info-name"><i class="fa fa-area-chart"></i> City </span> <span class="ad-info-value">{{ $lot->city }} </span> </p>--}}
                        <p><span class="ad-info-name"><i class="fa fa-map-marker"></i> Address </span> <span class="ad-info-value">{{ $lot->address }}</span> </p>
                        <p><span class="ad-info-name"><i class="fa fa-calendar-check-o"></i> Posted at</span> <span class="ad-info-value">{{ $lot->posted_at }}</span></p>
                        <p><span class="ad-info-name"><i class="fa fa-calendar-check-o"></i> Expired at</span> <span class="ad-info-value">{{ $lot->expired_at }}</span></p>
                    </div>


                    <div class="widget">
                        <div class="sidebar-user-info">
                            <div class="ad-single-user-avatar">
                                <img src="http://www.gravatar.com/avatar/454141dab8fba2c55bc2d81247a629a4?s=40&amp;d=mm&amp;r=g"
                                     class="img-circle img-responsive" />
                            </div>
                            <div class="ad-single-user-info">
                                <h5>{{ $lot->user->name }}</h5>
                            </div>
                        </div>

                        <div class="sidebar-user-link">
                            @if (count($lot->user->lots) > 1)
                                <span>Other lots by this user</span>
                                <ul class="ad-action-list">
                                    @foreach($lot->user->lots as $user_lot)
                                        @if ($user_lot->id != $lot->id)
                                            <li><a href="{{ route('lots.lot', ['id' => $user_lot->id]) }}">{{ $user_lot->title }}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <script src="{{ URL::to('js/fotorama.js') }}"></script>
@endsection