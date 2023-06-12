@extends('layouts.home')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('javascript')
@endsection
@section('content')

<main role="main" class="h-100"><div class="container mt-3 mb-4">
          <p class="lead">
          Find the best <span class="text-white">Social Media Marketing (SMM) Services</span> from all listed SMM Panels.
          Choose between 231715 different SMM service offers for at least 51 social platforms from 181 different SMM panels
          from all around the world. Find & Compare SMM services by platform & category.
          </p>
          <script src="https://love.comparesmm.com/load.js" kind="leaderboard" defer></script>
          <br class="mb-2">
          <h6 class="text-uppercase mb-3"><i class="far fa-heart mr-2 text-danger"></i> <strong>Most popular</strong> social Platforms</h6>
          <div class="row">
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/youtube" class="text-white">
          <i class="fab fa-youtube fa-fw mr-1" style="color:#ff0000"></i>
          Youtube
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/youtube/likes" class="btn btn-sm btn-light">LIKES</a>
          <a href="/platform/youtube/dislikes" class="btn btn-sm btn-light">DISLIKES</a>
          <a href="/platform/youtube/subscribers" class="btn btn-sm btn-light">SUBSCRIBERS</a>
          <a href="/platform/youtube/comments" class="btn btn-sm btn-light">COMMENTS</a>
          <a href="/platform/youtube/shares" class="btn btn-sm btn-light">SHARES</a>
          <a href="/platform/youtube/views" class="btn btn-sm btn-light">VIEWS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>110470</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/twitch" class="text-white">
          <i class="fab fa-twitch fa-fw mr-1" style="color:#6441a5"></i>
          Twitch
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/twitch/clip-views" class="btn btn-sm btn-light">CLIP VIEWS</a>
          <a href="/platform/twitch/channel-views" class="btn btn-sm btn-light">CHANNEL VIEWS</a>
          <a href="/platform/twitch/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          <a href="/platform/twitch/live-views" class="btn btn-sm btn-light">LIVE VIEWS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>8838</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/tik-tok" class="text-white">
          <i class="fas fa-music fa-fw mr-1" style="color:#69C9D0"></i>
          TikTok
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/tik-tok/views" class="btn btn-sm btn-light">VIEWS</a>
          <a href="/platform/tik-tok/likes" class="btn btn-sm btn-light">LIKES</a>
          <a href="/platform/tik-tok/shares" class="btn btn-sm btn-light">SHARES</a>
          <a href="/platform/tik-tok/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>52083</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/telegram" class="text-white">
          <i class="fab fa-telegram fa-fw mr-1" style="color:#0088cc"></i>
          Telegram
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/telegram/post-views" class="btn btn-sm btn-light">POST VIEWS</a>
          <a href="/platform/telegram/channel-members" class="btn btn-sm btn-light">CHANNEL MEMBERS</a>
          <a href="/platform/telegram/group-members" class="btn btn-sm btn-light">GROUP MEMBERS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>30809</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/instagram" class="text-white">
          <i class="fab fa-instagram fa-fw mr-1" style="color:#405de6"></i>
          Instagram
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/instagram/tv-likes" class="btn btn-sm btn-light">TV LIKES</a>
          <a href="/platform/instagram/live-views" class="btn btn-sm btn-light">LIVE VIEWS</a>
          <a href="/platform/instagram/comments" class="btn btn-sm btn-light">COMMENTS</a>
          <a href="/platform/instagram/views" class="btn btn-sm btn-light">VIEWS</a>
          <a href="/platform/instagram/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          <a href="/platform/instagram/likes" class="btn btn-sm btn-light">LIKES</a>
          <a href="/platform/instagram/story-views" class="btn btn-sm btn-light">STORY VIEWS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>196431</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/discord" class="text-white">
          <i class="fab fa-discord fa-fw mr-1" style="color:#5865F2"></i>
          Discord
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/discord/members" class="btn btn-sm btn-light">MEMBERS</a>
          <a href="/platform/discord/friend-requests" class="btn btn-sm btn-light">FRIEND REQUESTS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>4704</strong> services listed</small>
          </div>
          </div>
          </div>
          </div>
          <small class="text-uppercase"><a href="/promote"><i class="fa fa-star"></i> Featured</a> SMM Panels</small>
          <div class="row mt-1">
          <div class="col-6 col-md-4 col-lg-3 ">
          <div class="card shadow mb-4 panel-card">
          <a class="card-img-top" style="background:url(https://cdn.smmwatch.com/screenshots/smmflare-1-panel.jpg?cc=2lOe6ari0ZS1) no-repeat center center; background-size: cover; -webkit-background-size: cover;" href="/panels/smmflare-1-panel">
          <span>
          <img src="https://smmwatch.com/icons/smmflare-1-panel.png?cc=2lOe6ari0ZS1" alt="SMMFlare - #1 SMM Panel Icon" class="m-3">
          </span>
          </a> <div class="card-body text-center">
          <h6 class="card-title mb-2 mt-1 text-truncate">
          <a class="text-white" href="/panels/smmflare-1-panel">SMMFlare - #1 SMM Panel</a>
          </h6>
          <i class="fa fa-thumbs-up mr-1"></i> <strong class="text-dark">664</strong>
          <span class="text-muted ml-2 mr-2">|</span>
          1967 Services
          </div>
          </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3 ">
          <div class="card shadow mb-4 panel-card">
          <a class="card-img-top" style="background:url(https://cdn.smmwatch.com/screenshots/global-smm-panel.jpg?cc=yq7TEXrHQyWb) no-repeat center center; background-size: cover; -webkit-background-size: cover;" href="/panels/global-smm-panel">
          <span>
          <img src="https://smmwatch.com/icons/global-smm-panel.png?cc=yq7TEXrHQyWb" alt="Cheap Telegram Provider Icon" class="m-3">
          </span>
          </a> <div class="card-body text-center">
          <h6 class="card-title mb-2 mt-1 text-truncate">
          <a class="text-white" href="/panels/global-smm-panel">Cheap Telegram Provider</a>
          </h6>
          <i class="fa fa-thumbs-up mr-1"></i> <strong class="text-dark">6</strong>
          <span class="text-muted ml-2 mr-2">|</span>
          325 Services
          </div>
          </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3 d-none d-md-block">
          <div class="card shadow mb-4 panel-card">
          <a class="card-img-top" style="background:url(https://cdn.smmwatch.com/screenshots/crescitaly.jpg?cc=pW32GMH5dtJS) no-repeat center center; background-size: cover; -webkit-background-size: cover;" href="/panels/crescitaly">
          <span>
          <img src="https://smmwatch.com/icons/crescitaly.png?cc=pW32GMH5dtJS" alt="Crescitaly Icon" class="m-3">
          </span>
          </a> <div class="card-body text-center">
          <h6 class="card-title mb-2 mt-1 text-truncate">
          <a class="text-white" href="/panels/crescitaly">Crescitaly</a>
          </h6>
          <i class="fa fa-thumbs-up mr-1"></i> <strong class="text-dark">5</strong>
          <span class="text-muted ml-2 mr-2">|</span>
          4879 Services
          </div>
          </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3 d-none d-lg-block">
          <div class="card shadow mb-4 panel-card">
          <a class="card-img-top" style="background:url(https://cdn.smmwatch.com/screenshots/fortunesmm.jpg?cc=HUop3SIIW21z) no-repeat center center; background-size: cover; -webkit-background-size: cover;" href="/panels/fortunesmm">
          <span>
          <img src="https://smmwatch.com/icons/fortunesmm.png?cc=HUop3SIIW21z" alt="FortuneSMM Icon" class="m-3">
          </span>
          </a> <div class="card-body text-center">
          <h6 class="card-title mb-2 mt-1 text-truncate">
          <a class="text-white" href="/panels/fortunesmm">FortuneSMM</a>
          </h6>
          <i class="fa fa-thumbs-up mr-1"></i> <strong class="text-dark">0</strong>
          <span class="text-muted ml-2 mr-2">|</span>
          3410 Services
          </div>
          </div>
          </div>
          </div>
          <h6 class="text-uppercase mb-3"><i class="fas fa-list mr-2 text-primary"></i> All Platforms &nbsp; <strong><span class="text-primary">A - Z</span></strong></h6>
          <div class="row">
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/accounts" class="text-white">
          <i class="fa fa-user fa-fw mr-1" style="color:#999"></i>
          Accounts
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/accounts/netflix" class="btn btn-sm btn-light">NETFLIX</a>
          <a href="/platform/accounts/hulu" class="btn btn-sm btn-light">HULU</a>
          <a href="/platform/accounts/prime" class="btn btn-sm btn-light">PRIME</a>
          <a href="/platform/accounts/disney" class="btn btn-sm btn-light">DISNEY</a>
          <a href="/platform/accounts/brazzers" class="btn btn-sm btn-light">BRAZZERS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>66</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/amazon" class="text-white">
          <i class="fab fa-amazon fa-fw mr-1" style="color:#ff9900"></i>
          Amazon
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/amazon/music-plays" class="btn btn-sm btn-light">MUSIC PLAYS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>2159</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/anghami" class="text-white">
          <i class="fas fa-music fa-fw mr-1" style="color:#1976d2"></i>
          Anghami
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/anghami/likes" class="btn btn-sm btn-light">LIKES</a>
          <a href="/platform/anghami/plays" class="btn btn-sm btn-light">PLAYS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>67</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/apple-music" class="text-white">
          <i class="fab fa-apple fa-fw mr-1" style="color:#fa57c1"></i>
          Apple Music
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/apple-music/plays" class="btn btn-sm btn-light">PLAYS</a>
          <a href="/platform/apple-music/rating" class="btn btn-sm btn-light">RATING</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>248</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/clubhouse" class="text-white">
          <i class="fas fa-hand-paper fa-fw mr-1" style="color:#6515dd"></i>
          Clubhouse
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/clubhouse/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          <a href="/platform/clubhouse/Invitation" class="btn btn-sm btn-light">INVITATION</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>2491</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/dailymotion" class="text-white">
          <i class="fas fa-cloud fa-fw mr-1" style="color:#00aaff"></i>
          Dailymotion
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/dailymotion/views" class="btn btn-sm btn-light">VIEWS</a>
          <a href="/platform/dailymotion/video-views" class="btn btn-sm btn-light">VIDEO VIEWS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>155</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/datpiff" class="text-white">
          <i class="fas fa-music fa-fw mr-1" style="color:#555"></i>
          Datpiff
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/datpiff/views" class="btn btn-sm btn-light">VIEWS</a>
          <a href="/platform/datpiff/downloads" class="btn btn-sm btn-light">DOWNLOADS</a>
          <a href="/platform/datpiff/streams" class="btn btn-sm btn-light">STREAMS</a>
          <a href="/platform/datpiff/profile-views" class="btn btn-sm btn-light">PROFILE VIEWS</a>
          <a href="/platform/datpiff/plays" class="btn btn-sm btn-light">PLAYS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>233</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/deezer" class="text-white">
          <i class="fas fa-music fa-fw mr-1" style="color:#ff0000"></i>
          Deezer
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/deezer/plays" class="btn btn-sm btn-light">PLAYS</a>
          <a href="/platform/deezer/likes" class="btn btn-sm btn-light">LIKES</a>
          <a href="/platform/deezer/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>403</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/discord" class="text-white">
          <i class="fab fa-discord fa-fw mr-1" style="color:#5865F2"></i>
          Discord
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/discord/members" class="btn btn-sm btn-light">MEMBERS</a>
          <a href="/platform/discord/friend-requests" class="btn btn-sm btn-light">FRIEND REQUESTS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>3362</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/dribbble" class="text-white">
          <i class="fab fa-dribbble fa-fw mr-1" style="color:#444444"></i>
          Dribbble
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/dribbble/views" class="btn btn-sm btn-light">VIEWS</a>
          <a href="/platform/dribbble/likes" class="btn btn-sm btn-light">LIKES</a>
          <a href="/platform/dribbble/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>164</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/facebook" class="text-white">
          <i class="fab fa-facebook fa-fw mr-1" style="color:#3b5998"></i>
          Facebook
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/facebook/likes" class="btn btn-sm btn-light">LIKES</a>
          <a href="/platform/facebook/shares" class="btn btn-sm btn-light">SHARES</a>
          <a href="/platform/facebook/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          <a href="/platform/facebook/friends" class="btn btn-sm btn-light">FRIENDS</a>
          <a href="/platform/facebook/views" class="btn btn-sm btn-light">VIEWS</a>
          <a href="/platform/facebook/video-views" class="btn btn-sm btn-light">VIDEO VIEWS</a>
          <a href="/platform/facebook/reviews" class="btn btn-sm btn-light">REVIEWS</a>
          <a href="/platform/facebook/events" class="btn btn-sm btn-light">EVENTS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>54543</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/flipagram" class="text-white">
          <i class="fas fa-play fa-fw mr-1" style="color:#e84f3c"></i>
          Flipagram
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/flipagram/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          <a href="/platform/flipagram/likes" class="btn btn-sm btn-light">LIKES</a>
          <a href="/platform/flipagram/reflips" class="btn btn-sm btn-light">REFLIPS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>51</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/fyuse" class="text-white">
          <i class="fas fa-camera-retro fa-fw mr-1" style="color:#232631"></i>
          Fyuse
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/fyuse/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          <a href="/platform/fyuse/likes" class="btn btn-sm btn-light">LIKES</a>
          <a href="/platform/fyuse/echo" class="btn btn-sm btn-light">ECHO</a>
          <a href="/platform/fyuse/comments" class="btn btn-sm btn-light">COMMENTS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>0</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/google" class="text-white">
          <i class="fab fa-google-plus-g fa-fw mr-1" style="color:#dd4b39"></i>
          Google
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/google/music-plays" class="btn btn-sm btn-light">MUSIC PLAYS</a>
          <a href="/platform/google/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          <a href="/platform/google/+1" class="btn btn-sm btn-light">+1</a>
          <a href="/platform/google/reshares" class="btn btn-sm btn-light">RESHARES</a>
          <a href="/platform/google/backlinks" class="btn btn-sm btn-light">BACKLINKS</a>
          <a href="/platform/google/likes" class="btn btn-sm btn-light">LIKES</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>11167</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/google-play" class="text-white">
          <i class="fab fa-google-play fa-fw mr-1" style="color:#4285f4"></i>
          Google Play
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/google-play/installs" class="btn btn-sm btn-light">INSTALLS</a>
          <a href="/platform/google-play/keyword-installs" class="btn btn-sm btn-light">KEYWORD INSTALLS</a>
          <a href="/platform/google-play/ratings" class="btn btn-sm btn-light">RATINGS</a>
          <a href="/platform/google-play/reviews" class="btn btn-sm btn-light">REVIEWS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>848</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/imdb" class="text-white">
          <i class="fab fa-imdb fa-fw mr-1" style="color:#f5de50"></i>
          IMDb
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/imdb/votes" class="btn btn-sm btn-light">VOTES</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>519</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/instagram" class="text-white">
          <i class="fab fa-instagram fa-fw mr-1" style="color:#405de6"></i>
          Instagram
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/instagram/tv-likes" class="btn btn-sm btn-light">TV LIKES</a>
          <a href="/platform/instagram/live-views" class="btn btn-sm btn-light">LIVE VIEWS</a>
          <a href="/platform/instagram/comments" class="btn btn-sm btn-light">COMMENTS</a>
          <a href="/platform/instagram/views" class="btn btn-sm btn-light">VIEWS</a>
          <a href="/platform/instagram/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          <a href="/platform/instagram/likes" class="btn btn-sm btn-light">LIKES</a>
          <a href="/platform/instagram/story-views" class="btn btn-sm btn-light">STORY VIEWS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>147480</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/ios-app-store" class="text-white">
          <i class="fab fa-apple fa-fw mr-1" style="color:#5fc9f8"></i>
          iOS App Store
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/ios-app-store/installs" class="btn btn-sm btn-light">INSTALLS</a>
          <a href="/platform/ios-app-store/keyword-installs" class="btn btn-sm btn-light">KEYWORD INSTALLS</a>
          <a href="/platform/ios-app-store/ratings" class="btn btn-sm btn-light">RATINGS</a>
          <a href="/platform/ios-app-store/reviews" class="btn btn-sm btn-light">REVIEWS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>1050</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/itunes" class="text-white">
          <i class="fab fa-itunes-note fa-fw mr-1" style="color:#5fc9f8"></i>
          iTunes
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/itunes/podcast-downloads" class="btn btn-sm btn-light">PODCAST DOWNLOADS</a>
          <a href="/platform/itunes/podcast-streams" class="btn btn-sm btn-light">PODCAST STREAMS</a>
          <a href="/platform/itunes/podcast-subscribers" class="btn btn-sm btn-light">PODCAST SUBSCRIBERS</a>
          <a href="/platform/itunes/ratings" class="btn btn-sm btn-light">RATINGS</a>
          <a href="/platform/itunes/reviews" class="btn btn-sm btn-light">REVIEWS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>89</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/kick" class="text-white">
          <i class="fa-brands fa-kickstarter-k fa-fw mr-1" style="color:#6b9c3b"></i>
          Kick
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/kick/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          <a href="/platform/kick/views" class="btn btn-sm btn-light">VIEWS</a>
          <a href="/platform/kick/live-views" class="btn btn-sm btn-light">LIVE VIEWS</a>
          <a href="/platform/kick/chatbot" class="btn btn-sm btn-light">CHATBOT</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>52</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/kwai" class="text-white">
          <i class="fas fa-video fa-fw mr-1" style="color:#ff490a"></i>
          Kwai
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/kwai/kwai-followers" class="btn btn-sm btn-light">KWAI FOLLOWERS</a>
          <a href="/platform/kwai/kwai-likes" class="btn btn-sm btn-light">KWAI LIKES</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>1398</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/likee" class="text-white">
          <i class="fa fa-heart fa-fw mr-1" style="color:#ff2373"></i>
          Likee
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/likee/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          <a href="/platform/likee/views" class="btn btn-sm btn-light">VIEWS</a>
          <a href="/platform/likee/likes" class="btn btn-sm btn-light">LIKES</a>
          <a href="/platform/likee/shares" class="btn btn-sm btn-light">SHARES</a>
          <a href="/platform/likee/comments" class="btn btn-sm btn-light">COMMENTS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>1136</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/line" class="text-white">
          <i class="fab fa-line fa-fw mr-1" style="color:#00c300"></i>
          Line
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/line/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>17</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/linkedin" class="text-white">
          <i class="fab fa-linkedin fa-fw mr-1" style="color:#0077b5"></i>
          Linkedin
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/linkedin/post-views" class="btn btn-sm btn-light">POST VIEWS</a>
          <a href="/platform/linkedin/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          <a href="/platform/linkedin/endorsements" class="btn btn-sm btn-light">ENDORSEMENTS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>6023</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/livemixtapes" class="text-white">
          <i class="fas fa-music fa-fw mr-1" style="color:#00386c"></i>
          Livemixtapes
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/livemixtapes/views" class="btn btn-sm btn-light">VIEWS</a>
          <a href="/platform/livemixtapes/votes" class="btn btn-sm btn-light">VOTES</a>
          <a href="/platform/livemixtapes/comments" class="btn btn-sm btn-light">COMMENTS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>4</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/mixcloud" class="text-white">
          <i class="fab fa-mixcloud fa-fw mr-1" style="color:#52aad8"></i>
          Mixcloud
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/mixcloud/plays" class="btn btn-sm btn-light">PLAYS</a>
          <a href="/platform/mixcloud/minutes" class="btn btn-sm btn-light">MINUTES</a>
          <a href="/platform/mixcloud/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          <a href="/platform/mixcloud/reposts" class="btn btn-sm btn-light">REPOSTS</a>
          <a href="/platform/mixcloud/favorites" class="btn btn-sm btn-light">FAVORITES</a>
          <a href="/platform/mixcloud/likes" class="btn btn-sm btn-light">LIKES</a>
          <a href="/platform/mixcloud/comments" class="btn btn-sm btn-light">COMMENTS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>208</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/napster" class="text-white">
          <i class="fab fa-napster fa-fw mr-1" style="color:#fdb813"></i>
          Napster
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/napster/plays" class="btn btn-sm btn-light">PLAYS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>91</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/onlyfans" class="text-white">
          <i class="fas fa-lock fa-fw mr-1" style="color:#00AFF0"></i>
          Onlyfans
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/onlyfans/onlyfans-followers" class="btn btn-sm btn-light">ONLYFANS FOLLOWERS</a>
          <a href="/platform/onlyfans/onlyfans-likes" class="btn btn-sm btn-light">ONLYFANS LIKES</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>499</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/periscope" class="text-white">
          <i class="fab fa-periscope fa-fw mr-1" style="color:#3aa4c6"></i>
          Periscope
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/periscope/likes" class="btn btn-sm btn-light">LIKES</a>
          <a href="/platform/periscope/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>103</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/pinterest" class="text-white">
          <i class="fab fa-pinterest fa-fw mr-1" style="color:#bd081c"></i>
          Pinterest
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/pinterest/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          <a href="/platform/pinterest/repins" class="btn btn-sm btn-light">REPINS</a>
          <a href="/platform/pinterest/likes" class="btn btn-sm btn-light">LIKES</a>
          <a href="/platform/pinterest/board-followers" class="btn btn-sm btn-light">BOARD FOLLOWERS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>4123</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/quora" class="text-white">
          <i class="fab fa-quora fa-fw mr-1" style="color:#a82400"></i>
          Quora
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/quora/upvotes" class="btn btn-sm btn-light">UPVOTES</a>
          <a href="/platform/quora/downvotes" class="btn btn-sm btn-light">DOWNVOTES</a>
          <a href="/platform/quora/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>4405</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/radiojavan" class="text-white">
          <i class="fas fa-music fa-fw mr-1" style="color:#d0021b"></i>
          Radiojavan
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/radiojavan/likes" class="btn btn-sm btn-light">LIKES</a>
          <a href="/platform/radiojavan/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>3</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/reddit" class="text-white">
          <i class="fab fa-reddit-alien fa-fw mr-1" style="color:#ff4500"></i>
          Reddit
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/reddit/upvotes" class="btn btn-sm btn-light">UPVOTES</a>
          <a href="/platform/reddit/downvotes" class="btn btn-sm btn-light">DOWNVOTES</a>
          <a href="/platform/reddit/subscribers" class="btn btn-sm btn-light">SUBSCRIBERS</a>
          <a href="/platform/reddit/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>5339</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/reverbnation" class="text-white">
          <i class="fas fa-star fa-fw mr-1" style="color:#e43526"></i>
          Reverbnation
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/reverbnation/plays" class="btn btn-sm btn-light">PLAYS</a>
          <a href="/platform/reverbnation/views" class="btn btn-sm btn-light">VIEWS</a>
          <a href="/platform/reverbnation/widget-impressions" class="btn btn-sm btn-light">WIDGET IMPRESSIONS</a>
          <a href="/platform/reverbnation/fans" class="btn btn-sm btn-light">FANS</a>
          <a href="/platform/reverbnation/song-saves" class="btn btn-sm btn-light">SONG SAVES</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>430</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/rottentomatoes" class="text-white">
          <i class="fas fa-pizza-slice fa-fw mr-1" style="color:#FA320A"></i>
          RottenTomatoes
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/rottentomatoes/votes" class="btn btn-sm btn-light">VOTES</a>
          <a href="/platform/rottentomatoes/reviews" class="btn btn-sm btn-light">REVIEWS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>83</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/shazam" class="text-white">
          <i class="fas fa-bolt fa-fw mr-1" style="color:#0088ff"></i>
          Shazam
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/shazam/plays" class="btn btn-sm btn-light">PLAYS</a>
          <a href="/platform/shazam/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>217</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/soundcloud" class="text-white">
          <i class="fab fa-soundcloud fa-fw mr-1" style="color:#ff8800"></i>
          Soundcloud
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/soundcloud/plays" class="btn btn-sm btn-light">PLAYS</a>
          <a href="/platform/soundcloud/downloads" class="btn btn-sm btn-light">DOWNLOADS</a>
          <a href="/platform/soundcloud/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          <a href="/platform/soundcloud/likes" class="btn btn-sm btn-light">LIKES</a>
          <a href="/platform/soundcloud/comments" class="btn btn-sm btn-light">COMMENTS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>3491</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/spotify" class="text-white">
          <i class="fab fa-spotify fa-fw mr-1" style="color:#1db954"></i>
          Spotify
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/spotify/plays" class="btn btn-sm btn-light">PLAYS</a>
          <a href="/platform/spotify/playlist-plays" class="btn btn-sm btn-light">PLAYLIST PLAYS</a>
          <a href="/platform/spotify/album-plays" class="btn btn-sm btn-light">ALBUM PLAYS</a>
          <a href="/platform/spotify/monthly-listeners" class="btn btn-sm btn-light">MONTHLY LISTENERS</a>
          <a href="/platform/spotify/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          <a href="/platform/spotify/artist-saves" class="btn btn-sm btn-light">ARTIST SAVES</a>
          <a href="/platform/spotify/saves" class="btn btn-sm btn-light">SAVES</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>21240</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/spreaker" class="text-white">
          <i class="fas fa-volume-down fa-fw mr-1" style="color:#ffc107"></i>
          Spreaker
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/spreaker/plays" class="btn btn-sm btn-light">PLAYS</a>
          <a href="/platform/spreaker/likes" class="btn btn-sm btn-light">LIKES</a>
          <a href="/platform/spreaker/downloads" class="btn btn-sm btn-light">DOWNLOADS</a>
          <a href="/platform/spreaker/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          <a href="/platform/spreaker/comments" class="btn btn-sm btn-light">COMMENTS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>92</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/telegram" class="text-white">
          <i class="fab fa-telegram fa-fw mr-1" style="color:#0088cc"></i>
          Telegram
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/telegram/post-views" class="btn btn-sm btn-light">POST VIEWS</a>
          <a href="/platform/telegram/channel-members" class="btn btn-sm btn-light">CHANNEL MEMBERS</a>
          <a href="/platform/telegram/group-members" class="btn btn-sm btn-light">GROUP MEMBERS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>29009</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/tidal" class="text-white">
          <i class="fas fa-music fa-fw mr-1" style="color:#000000"></i>
          Tidal
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/tidal/plays" class="btn btn-sm btn-light">PLAYS</a>
          <a href="/platform/tidal/listeners" class="btn btn-sm btn-light">LISTENERS</a>
          <a href="/platform/tidal/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          <a href="/platform/tidal/likes" class="btn btn-sm btn-light">LIKES</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>555</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/tik-tok" class="text-white">
          <i class="fas fa-music fa-fw mr-1" style="color:#69C9D0"></i>
          TikTok
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/tik-tok/views" class="btn btn-sm btn-light">VIEWS</a>
          <a href="/platform/tik-tok/likes" class="btn btn-sm btn-light">LIKES</a>
          <a href="/platform/tik-tok/shares" class="btn btn-sm btn-light">SHARES</a>
          <a href="/platform/tik-tok/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>44875</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/traffic" class="text-white">
          <i class="fas fa-shipping-fast fa-fw mr-1" style="color:#555"></i>
          Traffic
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/traffic/website-traffic" class="btn btn-sm btn-light">WEBSITE TRAFFIC</a>
          <a href="/platform/traffic/uk-traffic" class="btn btn-sm btn-light">UK TRAFFIC</a>
          <a href="/platform/traffic/twitter" class="btn btn-sm btn-light">TWITTER</a>
          <a href="/platform/traffic/tumblr" class="btn btn-sm btn-light">TUMBLR</a>
          <a href="/platform/traffic/reddit" class="btn btn-sm btn-light">REDDIT</a>
          <a href="/platform/traffic/youtube" class="btn btn-sm btn-light">YOUTUBE</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>73862</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/tumblr" class="text-white">
          <i class="fab fa-tumblr fa-fw mr-1" style="color:#35465c"></i>
          Tumblr
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/tumblr/likes" class="btn btn-sm btn-light">LIKES</a>
          <a href="/platform/tumblr/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          <a href="/platform/tumblr/reblogs" class="btn btn-sm btn-light">REBLOGS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>3585</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/twitch" class="text-white">
          <i class="fab fa-twitch fa-fw mr-1" style="color:#6441a5"></i>
          Twitch
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/twitch/clip-views" class="btn btn-sm btn-light">CLIP VIEWS</a>
          <a href="/platform/twitch/channel-views" class="btn btn-sm btn-light">CHANNEL VIEWS</a>
          <a href="/platform/twitch/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          <a href="/platform/twitch/live-views" class="btn btn-sm btn-light">LIVE VIEWS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>7853</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/twitter" class="text-white">
          <i class="fab fa-twitter fa-fw mr-1" style="color:#1da1f2"></i>
          Twitter
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/twitter/likes" class="btn btn-sm btn-light">LIKES</a>
          <a href="/platform/twitter/retweets" class="btn btn-sm btn-light">RETWEETS</a>
          <a href="/platform/twitter/views" class="btn btn-sm btn-light">VIEWS</a>
          <a href="/platform/twitter/impressions" class="btn btn-sm btn-light">IMPRESSIONS</a>
          <a href="/platform/twitter/votes" class="btn btn-sm btn-light">VOTES</a>
          <a href="/platform/twitter/clicks" class="btn btn-sm btn-light">CLICKS</a>
          <a href="/platform/twitter/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>31286</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/vimeo" class="text-white">
          <i class="fab fa-vimeo fa-fw mr-1" style="color:#162221"></i>
          Vimeo
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/vimeo/views" class="btn btn-sm btn-light">VIEWS</a>
          <a href="/platform/vimeo/likes" class="btn btn-sm btn-light">LIKES</a>
          <a href="/platform/vimeo/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>718</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/vk-com" class="text-white">
          <i class="fab fa-vk fa-fw mr-1" style="color:#52aad8"></i>
          VK.com
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/vk-com/likes" class="btn btn-sm btn-light">LIKES</a>
          <a href="/platform/vk-com/followers" class="btn btn-sm btn-light">FOLLOWERS</a>
          <a href="/platform/vk-com/reposts" class="btn btn-sm btn-light">REPOSTS</a>
          <a href="/platform/vk-com/subscribers" class="btn btn-sm btn-light">SUBSCRIBERS</a>
          <a href="/platform/vk-com/friends" class="btn btn-sm btn-light">FRIENDS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>4008</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/yelp" class="text-white">
          <i class="fab fa-yelp fa-fw mr-1" style="color:#af0606"></i>
          Yelp
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/yelp/reviews" class="btn btn-sm btn-light">REVIEWS</a>
          <a href="/platform/yelp/accounts" class="btn btn-sm btn-light">ACCOUNTS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>92</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/youtube" class="text-white">
          <i class="fab fa-youtube fa-fw mr-1" style="color:#ff0000"></i>
          Youtube
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/youtube/likes" class="btn btn-sm btn-light">LIKES</a>
          <a href="/platform/youtube/dislikes" class="btn btn-sm btn-light">DISLIKES</a>
          <a href="/platform/youtube/subscribers" class="btn btn-sm btn-light">SUBSCRIBERS</a>
          <a href="/platform/youtube/comments" class="btn btn-sm btn-light">COMMENTS</a>
          <a href="/platform/youtube/shares" class="btn btn-sm btn-light">SHARES</a>
          <a href="/platform/youtube/views" class="btn btn-sm btn-light">VIEWS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>80301</strong> services listed</small>
          </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="card mb-4">
          <div class="card-body pb-2">
          <h6 class="mb-4"><a href="/platform/zomato" class="text-white">
          <i class="fas fa-pizza-slice fa-fw mr-1" style="color:#cb202d"></i>
          Zomato
          </a></h6>
          <p class="text-truncate mb-0">
          <a href="/platform/zomato/reviews" class="btn btn-sm btn-light">REVIEWS</a>
          </p>
          </div>
          <div class="card-footer">
          <small><strong>42</strong> services listed</small>
          </div>
          </div>
          </div>
          </div>
          </div>
    </main>

@endsection
