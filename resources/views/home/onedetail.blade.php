@extends('layouts.home')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('javascript')
@endsection
@section('content')


<main role="main" class="h-100">
        <section class="bg-carbon">
        <div class="container pt-5">
        <div class="row">
        <div class="col-md-7 mb-4">
        <a target="_blank" href="/panels/crescitaly/goto">
        <img src="/storage/{{$panel->image}}" class="float-left" style="height:62px;width:62px;margin-right:22px;">
        </a>
        <h4 class="text-truncate mb-0">
        <a target="_blank" href="/panels/{{$panel->title}}/goto" class="text-white text-decoration-none">
        {{$panel->title}}
        </a>
        </h4>
        <a target="_blank" href="/panels/{{$panel->title}}/goto" class="lead">
        <i class="fa fa-external-link mr-2"></i>
        {{$panel->description}}
        </a>
        <div style="clear:both;  margin-bottom:12px"></div>
        <p class="text-dark" style="height:42px!important;overflow-y:hidden;">
        <small>Welcome to {{$panel->title}}, The World&#39;s Cheapest SMM Panel. When looking for an All-In-One SMM Panel, you&#39;ve come to the Perfect Panel! </small>
        <span class="badge badge-light text-dark">smm panel</span>
        <span class="badge badge-light text-dark">smm panels</span>
        <span class="badge badge-light text-dark">best cheap smm panels</span>
        <span class="badge badge-light text-dark">cheap smm</span>
        <span class="badge badge-light text-dark">smma panel</span>
        <span class="badge badge-light text-dark">cheap panel</span>
        <span class="badge badge-light text-dark">youtube smm</span>
        <span class="badge badge-light text-dark">youtube social panel</span>
        <span class="badge badge-light text-dark">youtube smm panel</span>
        <span class="badge badge-light text-dark">cheapest panel</span>
        <span class="badge badge-light text-dark">instagram panel</span>
        <span class="badge badge-light text-dark">smm panel tiktok</span>
        </p>
        <div class="row">
        <div class="col-md-4">
        <div class="card bg-light border-muted shadow-sm">
        <div class="card-body text-left">
        <h5 class="mb-0 text-white">{{$panel->commendnum}}</h5>
        <small class="text-uppercase"><i class="fa fa-thumbs-up mr-1"></i> Votes</small>
        </div>
        </div>
        </div>
        <div class="col-md-8">
        <div class="card bg-light border-muted shadow-sm">
        <div class="card-body text-left">
        <h5 class="mb-0 text-white">{{$panel->activenum}}</h5>
        <small class="text-uppercase"><i class="fa fa-cube mr-1"></i> Unique Services</small>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="col-md-5">
        <a target="_blank" href="/panels/crescitaly/goto">
        <img src="/storage/{{$panel->image}}" class="img-fluid" style="height: 230px;margin-right:22px;">
        </a>
        </div>
        </div>
        </div>
        </section>
        <div class="container">
        <div class="row mt-4">
        <div class="col-md-7">
        <div class="card shadow mb-4">
        <script>var last_comment_id = 12865;</script>
        <div class="card-body p-1" style="overflow-y:auto; max-height:310px">
        <div id="comments_container">
        <div class="comment p-1" data-id="14421">
        <span class="float-right text-muted">4 months ago</span>
        <i class="fa fa-thumbs-up text-primary ml-1 mr-1"></i>
        <a href="/panels/{{$panel->title}}" class="mr-2">{{$panel->title}}</a>
        <span class="ml-1 mr-1 text-muted">from</span>
        <div class="country d-inline-block">
        <img src="/flags/us.svg" class="flag" alt="United States flag">&nbsp;
        United States
        </div>
        <div class="bg-light mt-1 p-2 comment-box text-truncate" onclick="this.classList.remove('text-truncate')">
        BAD PANEL
        They sell service as Lifetime refill, but they still haven&#39;t refilled for 1 month. They still tell me to be patient.
        </div>
        </div>
        <div class="comment p-1" data-id="13312">
        <span class="float-right text-muted">5 months ago</span>
        <i class="fa fa-thumbs-up text-primary ml-1 mr-1"></i>
        <a href="/panels/crescitaly" class="mr-2">Crescitaly</a>
        <span class="ml-1 mr-1 text-muted">from</span>
        <div class="country d-inline-block">
        <img src="/flags/us.svg" class="flag" alt="United States flag">&nbsp;
        United States
        </div>
        <div class="bg-light mt-1 p-2 comment-box text-truncate" onclick="this.classList.remove('text-truncate')">
        Best panel
        </div>
        </div>
        <div class="comment p-1" data-id="13179">
        <span class="float-right text-muted">5 months ago</span>
        <i class="fa fa-thumbs-up text-primary ml-1 mr-1"></i>
        <a href="/panels/crescitaly" class="mr-2">Crescitaly</a>
        <span class="ml-1 mr-1 text-muted">from</span>
        <div class="country d-inline-block">
        <img src="/flags/us.svg" class="flag" alt="United States flag">&nbsp;
        United States
        </div>
        <div class="bg-light mt-1 p-2 comment-box text-truncate" onclick="this.classList.remove('text-truncate')">
        Cheapest prices in the market
        </div>
        </div>
        <div class="comment p-1" data-id="13159">
        <span class="float-right text-muted">5 months ago</span>
        <i class="fa fa-thumbs-up text-primary ml-1 mr-1"></i>
        <a href="/panels/crescitaly" class="mr-2">Crescitaly</a>
        <span class="ml-1 mr-1 text-muted">from</span>
        <div class="country d-inline-block">
        <img src="/flags/us.svg" class="flag" alt="United States flag">&nbsp;
        United States
        </div>
        <div class="bg-light mt-1 p-2 comment-box text-truncate" onclick="this.classList.remove('text-truncate')">
        Never had a single issue, best panel so far
        </div>
        </div>
        <div class="comment p-1" data-id="12865">
        <span class="float-right text-muted">7 months ago</span>
        <i class="fa fa-thumbs-up text-primary ml-1 mr-1"></i>
        <a href="/panels/crescitaly" class="mr-2">Crescitaly</a>
        <span class="ml-1 mr-1 text-muted">from</span>
        <div class="country d-inline-block">
        <img src="/flags/co.svg" class="flag" alt="Colombia flag">&nbsp;
        Colombia
        </div>
        <div class="bg-light mt-1 p-2 comment-box text-truncate" onclick="this.classList.remove('text-truncate')">
        this panel is scam paid 50$ and the admin never added to balance.
        </div>
        </div>
        </div>
        <a href="#" onclick="load_more_comments(event)" class="d-block p-1 pl-2 pt-2 load_more_comments"><i class="fa fa-comments text-white mr-1"></i> Load more...</a>
        <script>
                    function load_more_comments(e){
                    e.preventDefault();
                    $.ajax({ type: "GET",
                        url: "/panels/crescitaly/comments/"+last_comment_id,
                        success : function(text){
                            if(text.length == 0){ $("a.load_more_comments").remove() } else {
                            $('#comments_container').append(text);
                            last_comment_id = parseInt( $("#comments_container .comment").last().attr('data-id') );
                            }
                        }
                    });
                    }
                </script>
        </div>
        </div>
        </div>
        <div class="col-md-5">
        <div class="card shadow mb-3">
        <div class="card-header">
        <h4 class="text-white mb-0"><i class="fa fa-thumbs-up mr-1 text-primary"></i> Vote</h4>
        </div>
        <div class="card-body pt-3">
        <p>
        Vote for Crescitaly to push it on top and let others know this is a good panel.
        You may also leave a comment!
        </p>
        <button type="button" class="btn btn-outline-success btn-lg" id="launchVoteModal" onclick="$('#vote_name').focus()" data-toggle="modal" data-target="#voteModal">
        <i class="fa fa-comment mr-1"></i> Vote for Crescitaly
        </button>
        </div>
        </div>
        <script src="https://love.comparesmm.com/load.js" kind="leaderboard" defer></script>
        <br class="mb-3">
        <div class="modal" tabindex="-1" role="dialog" id="voteModal">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"><i class="fa fa-comment text-primary mr-1"></i> Vote for <span class="text-white">Crescitaly</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form id="voteForm" action="/votes" accept-charset="UTF-8" data-remote="true" method="post"><input type="hidden" name="authenticity_token" value="WlhTVDq1at8mKtKwxm+e18WbIBZgBqjvMxOhM56r4X6erHh5uw0fmKIpgnHbFDntzNToSVfSOOnlUNWyBuDdIA==" autocomplete="off" />
        <div class="modal-body">
        <div class="alert alert-danger" id="vote_alert_danger" style="display:none;">
        </div>
        <p>
        Optionally add a <span class="text-white">username</span>
        to may receive rewards from you panel.
        You can also leave a <span class="text-white">comment</span> if you want to (No rudeness or links!).
        </p>
        <input autocomplete="off" type="hidden" value="854" name="vote[panel_id]" id="vote_panel_id" />
        <div id="vote_panel_content">
        <div class="mb-3"><label class="form-label" for="vote_name"><span class="text-white">Username</span> (may gives rewards!) *optional*</label><input class="form-control" type="text" name="vote[name]" id="vote_name" /></div>
        <div class="mb-3"><label class="form-label" for="vote_comment"><span class="text-white">Comment</span> *optional*</label><textarea class="form-control" name="vote[comment]" id="vote_comment">
        </textarea></div>
        <script src="https://www.recaptcha.net/recaptcha/api.js" async defer></script>
        <div data-sitekey="6Ld89skUAAAAAKYzUkDCe0fDEjtgzF_1hWyQi2V7" class="g-recaptcha "></div>
        <noscript>
                    <div>
                    <div style="width: 302px; height: 422px; position: relative;">
                        <div style="width: 302px; height: 422px; position: absolute;">
                        <iframe
                            src="https://www.recaptcha.net/recaptcha/api/fallback?k=6Ld89skUAAAAAKYzUkDCe0fDEjtgzF_1hWyQi2V7"
                            name="ReCAPTCHA"
                            style="width: 302px; height: 422px; border-style: none; border: 0; overflow: hidden;">
                        </iframe>
                        </div>
                    </div>
                    <div style="width: 300px; height: 60px; border-style: none;
                        bottom: 12px; left: 25px; margin: 0px; padding: 0px; right: 25px;
                        background: #f9f9f9; border: 1px solid #c1c1c1; border-radius: 3px;">
                        <textarea id="g-recaptcha-response" name="g-recaptcha-response"
                        class="g-recaptcha-response"
                        style="width: 250px; height: 40px; border: 1px solid #c1c1c1;
                        margin: 10px 25px; padding: 0px; resize: none;">
                        </textarea>
                    </div>
                    </div>
                </noscript>
        </div>
        </div>
        <div class="modal-footer">
        <input type="submit" name="commit" value="Vote Now!" class="btn btn-outline-primary btn-lg" id="vote_now_button" data-disable-with="Vote Now!" />
        </div>
        <script>
            var voteForm = document.getElementById("voteForm");
            voteForm.addEventListener('ajax:success', function(res) {
            var error = document.getElementById("vote_alert_danger")
            error.style.display = 'none';
            var _res = res.detail[0];
            if(_res.error){
                error.style.display = 'block';
                error.innerHTML = "<i class='fa fa-times mr-1'></i> "+_res.error;
            } else {
                var c = document.getElementById("vote_panel_content")
                c.innerHTML = "<h2 class='text-white mt-5'><i class='fa fa-check mr-1 text-success'></i> Voted!</h2>"
                document.getElementById("vote_now_button").style.display = 'none';
                window.setTimeout(function(){
                $("#voteModal").modal('hide');
                }, 3000);
                window.setTimeout(function(){
                Turbolinks.visit(window.location)
                }, 4000);
            }
            });
        </script>
        </form>
        </div>
        </div>
        </div>
        <div class="mb-3" style="opacity:0.6">
        <strong>Your Panel?</strong>
        <a href="/auth/smm-panels/claim/854" class="text-white">Claim the listing</a> to edit & promote your Panel.
        </div>
        </div>
        </div>
        </div>
        <section class="bg-light mt-4 pt-4 pb-4 mb-4">
        <div class="container">
        <script src="https://love.comparesmm.com/load.js" kind="leaderboard" defer></script>
        <br class="mb-4">
        <div class="row mt-4" style="font-size:12px">
        <div class="col-md-4 mb-3">
        <h5><i class="fa fa-heart mr-1 text-danger mb-2"></i> Favorite Services</h5>
        <div class="text-truncate">
        <a class="text-dark" href="/panels/crescitaly/category/facebook-italy-services?s=2666897">Facebook Italy Post Reaction | 😮 WOW | HQ | No Drop | Start 0-24 Hours 🇮🇹</a>
        <span class="text-muted">/</span> 🇮🇹 Facebook Italy Services
        </div>
        <div class="text-truncate">
        <a class="text-dark" href="/panels/crescitaly/category/instagram-egypt-verified-services?s=2493139">🇪🇬 Instagram Egypt Verified Followers | 25 Followers | 1 Order Per Account | Blue Tick ✅</a>
        <span class="text-muted">/</span> Instagram Egypt Verified Services 🇪🇬
        </div>
        <div class="text-truncate">
        <a class="text-dark" href="/panels/crescitaly/category/instagram-random-comments?s=2492768">Instagram - Random Comments | HQ</a>
        <span class="text-muted">/</span> Instagram Random Comments
        </div>
        <div class="text-truncate">
        <a class="text-dark" href="/panels/crescitaly/category/website-traffic-china?s=2702501">China Traffic from hao123.com</a>
        <span class="text-muted">/</span> 🇨🇳 Website Traffic China
        </div>
        <div class="text-truncate">
        <a class="text-dark" href="/panels/crescitaly/category/twitter-likes-no-refill?s=2494537">Twitter Likes | Refill 30 Days | Old Accounts | Fast</a>
        <span class="text-muted">/</span> Twitter Likes | No Refill
        </div>
        <div class="text-truncate">
        <a class="text-dark" href="/panels/crescitaly/category/website-traffic-singapore?s=2496860">Singapore Traffic from Quora</a>
        <span class="text-muted">/</span> 🇸🇬 Website Traffic Singapore
        </div>
        <div class="text-truncate">
        <a class="text-dark" href="/panels/crescitaly/category/website-traffic-from-thailand?s=2497041">Thailand Traffic from LinkedIn</a>
        <span class="text-muted">/</span> 🇹🇭 Website Traffic from Thailand
        </div>
        <div class="text-truncate">
        <a class="text-dark" href="/panels/crescitaly/category/tiktok-views-targeted?s=2494990">🇬🇹 TikTok Views Guatemala | Instant | Real 🔥</a>
        <span class="text-muted">/</span> TikTok Views | Targeted
        </div>
        <div class="text-truncate">
        <a class="text-dark" href="/panels/crescitaly/category/spotify-usa-plays?s=2494815">🇺🇸 Spotify USA Premium Plays | Super HQ</a>
        <span class="text-muted">/</span> 🇺🇸 Spotify USA Plays
        </div>
        <div class="text-truncate">
        <a class="text-dark" href="/panels/crescitaly/category/tiktok-followers-no-guarantee?s=2495116">👦🏻 TikTok Male Followers | Instant | Real Profiles 🔥🔥</a>
        <span class="text-muted">/</span> TikTok Followers | No Guarantee
        </div>
        <div class="text-truncate">
        <a class="text-dark" href="/panels/crescitaly/category/facebook-reviews?s=2493745">Facebook USA Fan-page Reviews Custom Comments | R30</a>
        <span class="text-muted">/</span> Facebook Reviews
        </div>
        <div class="text-truncate">
        <a class="text-dark" href="/panels/crescitaly/category/website-traffic-worldwide-from-exchange-platforms-ptc?s=2940183">Worldwide Traffic - Text-Ad Redirection (No Referrer - Direct)</a>
        <span class="text-muted">/</span> 🌐 Website Traffic - Worldwide - from Exchange Platforms (PTC)
        </div>
        <div class="text-truncate">
        <a class="text-dark" href="/panels/crescitaly/category/spotify-usa-plays?s=2494819">🇺🇸Spotify USA Track Saves | Super Real</a>
        <span class="text-muted">/</span> 🇺🇸 Spotify USA Plays
        </div>
        <div class="text-truncate">
        <a class="text-dark" href="/panels/crescitaly/category/website-traffic-poland?s=2496753">Poland Traffic from Tumblr</a>
        <span class="text-muted">/</span> 🇵🇱 Website Traffic Poland
        </div>
        <div class="text-truncate">
        <a class="text-dark" href="/panels/crescitaly/category/website-traffic-ireland?s=2496534">Ireland Traffic from Google.ie</a>
        <span class="text-muted">/</span> 🇮🇪 Website Traffic Ireland
        </div>
        <div class="text-truncate">
        <a class="text-dark" href="/panels/crescitaly/category/website-traffic-philippines?s=2496724">Philippines Traffic from Google.com.ph</a>
        <span class="text-muted">/</span> 🇵🇭 Website Traffic Philippines
        </div>
        <div class="text-truncate">
        <a class="text-dark" href="/panels/crescitaly/category/instagram-story-slider-poll-votes-quiz-answer?s=2492912">Instagram Story Slider Vote | Random 0-100 Vote | MQ 300K | 0-1 Hour | 300K Per Day</a>
        <span class="text-muted">/</span> Instagram Story Slider | Poll Votes | Quiz Answer
        </div>
        </div>
        <div class="col-md-8 mb-4">
        <h5 class="mb-3"><i class="fa fa-search mr-1 text-warning"></i> Search for Services on Crescitaly</h5>
        <form action="/search" method="get">
        <div class="input-group mb-3">
        <input type="hidden" name="panel" value="crescitaly">
        <input type="text" name="q" class="form-control bg-secondary text-white form-control-lg" placeholder="Search services on Crescitaly" aria-label="Search services">
        <div class="input-group-append">
        <button class="btn btn-primary" type="submit"><i class="fa fa-search mr-1"></i> <strong>Search</strong></button>
        </div>
        </div>
        </form>
        <hr class="border-primary mb-4 mt-4">
        <div class="row">
        <div class="col-md-6 mb-3">
        <h5><i class="fa fa-clock-o mr-1 text-info"></i> Recently Added</h5>
        <div class="text-truncate">
        <small>about 15 hours ago</small>
        <span class="text-muted">/</span>
        <a class="text-dark" href="/panels/crescitaly/category/youtube-subscribers?s=2948057">YouTube Subscribers | No Drop | Speed 1000/2000 Per Day</a>
        <span class="text-muted">/</span> YouTube Subscribers
        </div>
        <div class="text-truncate">
        <small>1 day ago</small>
        <span class="text-muted">/</span>
        <a class="text-dark" href="/panels/crescitaly/category/youtube-watchtime-new-server?s=2947644">YouTube Watchtime | Refill 30 Days | 15 Minute Videos | Speed 500 Per Hour | No Drop ✅</a>
        <span class="text-muted">/</span> Youtube Watchtime | NEW Server
        </div>
        <div class="text-truncate">
        <small>1 day ago</small>
        <span class="text-muted">/</span>
        <a class="text-dark" href="/panels/crescitaly/category/youtube-watchtime-new-server?s=2947643">YouTube Watchtime | Refill 30 Days | 30 Minute Videos | Speed 500 Per Hour | No Drop ✅</a>
        <span class="text-muted">/</span> Youtube Watchtime | NEW Server
        </div>
        <div class="text-truncate">
        <small>1 day ago</small>
        <span class="text-muted">/</span>
        <a class="text-dark" href="/panels/crescitaly/category/youtube-watchtime-new-server?s=2947642">YouTube Watchtime | Refill 30 Days | 45 Minute Videos | Speed 500 Per Hour | No Drop ✅</a>
        <span class="text-muted">/</span> Youtube Watchtime | NEW Server
        </div>
        <div class="text-truncate">
        <small>1 day ago</small>
        <span class="text-muted">/</span>
        <a class="text-dark" href="/panels/crescitaly/category/youtube-watchtime-new-server?s=2947641">YouTube Watchtime | Refill 30 Days | 60 Minute Videos | Speed 500 Per Hour | No Drop ✅</a>
        <span class="text-muted">/</span> Youtube Watchtime | NEW Server
        </div>
        <div class="text-truncate">
        <small>3 days ago</small>
        <span class="text-muted">/</span>
        <a class="text-dark" href="/panels/crescitaly/category/instagram-views-insights?s=2944719">Instagram Views + Impressions | Super Instant</a>
        <span class="text-muted">/</span> Instagram Views + Insights
        </div>
        <div class="text-truncate">
        <small>3 days ago</small>
        <span class="text-muted">/</span>
        <a class="text-dark" href="/panels/crescitaly/category/spotify-followers-users-playlist-artist-no-refill?s=2944573">🇺🇸 Spotify USA Followers | Instant</a>
        <span class="text-muted">/</span> Spotify Followers (Users/Playlist/Artist) | No Refill
        </div>
        <div class="text-truncate">
        <small>3 days ago</small>
        <span class="text-muted">/</span>
        <a class="text-dark" href="/panels/crescitaly/category/instagram-nigeria-story-views?s=2944572">🇳🇬 Instagram Nigeria Story Views | Instant</a>
        <span class="text-muted">/</span> 🇳🇬 Instagram Nigeria Story Views
        </div>
        <div class="text-truncate">
        <small>3 days ago</small>
        <span class="text-muted">/</span>
        <a class="text-dark" href="/panels/crescitaly/category/instagram-nigeria-comments?s=2944571">🇳🇬 Instagram Nigeria Comments | Unique Votes</a>
        <span class="text-muted">/</span> 🇳🇬 Instagram Nigeria Comments
        </div>
        <div class="text-truncate">
        <small>3 days ago</small>
        <span class="text-muted">/</span>
        <a class="text-dark" href="/panels/crescitaly/category/instagram-nigeria-comments?s=2944570">🇳🇬 Instagram Nigeria Auto Comments | Instant</a>
        <span class="text-muted">/</span> 🇳🇬 Instagram Nigeria Comments
        </div>
        </div>
        <div class="col-md-6">
        <h5><i class="fa fa-trash mr-1 text-warning"></i> Recently Removed</h5>
        <div class="text-truncate">
        <small>about 15 hours ago</small>
        <span class="text-muted">/</span>
        <a class="text-dark" href="/panels/crescitaly/category/instagram-latvia-services?s=2666891">Instagram Latvia Random Comment | Real 🇱🇻</a>
        <span class="text-muted">/</span> 🇱🇻 Instagram Latvia Services
        </div>
        <div class="text-truncate">
        <small>about 15 hours ago</small>
        <span class="text-muted">/</span>
        <a class="text-dark" href="/panels/crescitaly/category/instagram-germany-comments?s=2692312">Instagram Germany | 20 Random Comments | HQ 🇩🇪</a>
        <span class="text-muted">/</span> Instagram Germany Comments 🇩🇪
        </div>
        <div class="text-truncate">
        <small>about 15 hours ago</small>
        <span class="text-muted">/</span>
        <a class="text-dark" href="/panels/crescitaly/category/instagram-france-package-comments?s=2611598">🇫🇷Instagram France | 20 Random Comments From 5K+ Accounts</a>
        <span class="text-muted">/</span> Instagram France Package Comments 🇫🇷
        </div>
        <div class="text-truncate">
        <small>1 day ago</small>
        <span class="text-muted">/</span>
        <a class="text-dark" href="/panels/crescitaly/category/youtube-turkey-services?s=2494256">YouTube TURKEY Comments [5K] [R30] [1H - 1K/Day]</a>
        <span class="text-muted">/</span> 🇹🇷 YouTube Turkey Services
        </div>
        <div class="text-truncate">
        <small>1 day ago</small>
        <span class="text-muted">/</span>
        <a class="text-dark" href="/panels/crescitaly/category/instagram-uzbekistan-services?s=2493554">Instagram Uzbekistan Followers | Real Followers 🇺🇿</a>
        <span class="text-muted">/</span> Instagram Uzbekistan Services 🇺🇿
        </div>
        <div class="text-truncate">
        <small>1 day ago</small>
        <span class="text-muted">/</span>
        <a class="text-dark" href="/panels/crescitaly/category/instagram-impressions?s=2947640">Instagram Impressions | Profile + Home + Explorer + Other | Slow</a>
        <span class="text-muted">/</span> Instagram Impressions
        </div>
        <div class="text-truncate">
        <small>5 days ago</small>
        <span class="text-muted">/</span>
        <a class="text-dark" href="/panels/crescitaly/category/instagram-views-insights?s=2492841">Instagram Views + Reach + Impressions + Profile Visits | Reel + IGTV + Video</a>
        <span class="text-muted">/</span> Instagram Views + Insights
        </div>
        <div class="text-truncate">
        <small>5 days ago</small>
        <span class="text-muted">/</span>
        <a class="text-dark" href="/panels/crescitaly/category/instagram-views-insights?s=2492843">Instagram - Views + Impressions | Reel + IGTV + Video</a>
        <span class="text-muted">/</span> Instagram Views + Insights
        </div>
        <div class="text-truncate">
        <small>5 days ago</small>
        <span class="text-muted">/</span>
        <a class="text-dark" href="/panels/crescitaly/category/instagram-views-insights?s=2492840">Instagram - Views + Profile Visit | Reel + IGTV | Max 5M</a>
        <span class="text-muted">/</span> Instagram Views + Insights
        </div>
        <div class="text-truncate">
        <small>6 days ago</small>
        <span class="text-muted">/</span>
        <a class="text-dark" href="/panels/crescitaly/category/instagram-views-insights?s=2740954">Instagram Views + Impression + Reach + Story</a>
        <span class="text-muted">/</span> Instagram Views + Insights
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </section>
        <div class="container">
        <p class="text-uppercase mb-0">
        <a href="/panels" class="float-right text-info"><i class="fa fa-eye mr-1 text-white"></i> All Panels</a>
        <a href="/promote"><i class="fa fa-star"></i> Featured</a> SMM Panels
        </p>
        <br style="clear:both;">
        <div class="row mt-1">
        
        @foreach($activepanels as $activepanel)
                        <div class="col-6 col-md-4 col-lg-3 d-none d-lg-block">
                        
                        <div class="card shadow mb-4 panel-card">
                        <a class="card-img-top" style="background:url(/storage/{{$activepanel->image}} ) no-repeat center center; background-size: cover; -webkit-background-size: cover;" href="/panels/{{$activepanel->title}}">
                        <span>
                        <img src="/storage/{{$activepanel->image}} " alt="SMMFlare - #1 SMM Panel Icon" class="m-3">
                        </span>
                        </a> <div class="card-body text-center">
                        <h6 class="card-title mb-2 mt-1 text-truncate">
                        <a class="text-white" href="/panels/{{$activepanel->title}}">{{$activepanel->title}}</a>
                        </h6>
                        <i class="fa fa-thumbs-up mr-1"></i> <strong class="text-dark">{{$activepanel->commendnum}}</strong>
                        <span class="text-muted ml-2 mr-2">|</span>
                        {{$activepanel->servicenum}} Services
                        </div>
                        </div>
                        </div>
                    @endforeach
        </div>
        </div>
</main>

@endsection
