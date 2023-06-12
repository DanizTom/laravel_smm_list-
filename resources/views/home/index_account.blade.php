@extends('layouts.home')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('javascript')
@endsection
@section('content')

<main role="main" class="h-100">
                <section class="bg-light">
                        <div class="container">
                        <div class="btn-group d-flex" role="group" aria-label="Basic example">
                        <a href="/dashboard" class="btn btn-light w-100 p-3">
                        <i class="fa fa-dashboard fa-2x mb-2 d-none d-md-block"></i>
                        <i class="fa fa-dashboard mb-2 d-md-none"></i>
                        <p class="mb-0">Dash<span class="d-none d-sm-inline-block">board</span></p>
                        </a>
                        <a href="/userpanels" class="btn btn-light w-100 p-3">
                        <i class="fa fa-cube fa-2x mb-2 d-none d-md-block"></i>
                        <i class="fa fa-cube mb-2 d-md-none"></i>
                        <p class="mb-0">
                          <span class="d-none d-md-inline-block">SMM</span> Panels</p>
                        </a>
                        <a href="/userfinance" class="btn btn-light w-100 p-3">
                        <i class="fa fa-cube fa-2x mb-2 d-none d-md-block"></i>
                        <i class="fa fa-cube mb-2 d-md-none"></i>
                        <p class="mb-0">Finances</p>
                        </a>
                        <a href="/useraccount" class="btn btn-primary w-100 p-3">
                        <i class="fa fa-credit-card fa-2x mb-2 d-none d-md-block"></i>
                        <i class="fa fa-credit-card mb-2 d-md-none"></i>
                        <p class="mb-0">Account</p>
                        </a>
                        </div>
                        </div>
                </section>
                <div class="container my-4"><div class="row">
                    <div class="row">
                        <div class="col-md-7">
                        <div class="card mb-3">
                        <div class="card-body">
                        <form action="/auth/newsletter" method="post" id="newsletter_form">
                        <input type="hidden" name="authenticity_token" id="authenticity_token" value="ur1ebSNvsRaQgDqG9pBbUyx7EaJv8N3Y8+ilbXykp7wSpZfAWjSbuW95qZzgajqo8OnRXdZWy1yd8afe4D4ZFw==" autocomplete="off" />
                        <span class="float-right" style="margin-top:-4px; margin-bottom:-4px">
                        <button type="submit" id="save_newsletter" class="btn btn-sm btn-outline-primary" style="display:none;">
                        <i class="fas fa-save mr-1"></i> <strong class="text-uppercase">Save</strong>
                        </button>
                        </span>
                        <strong class="text-white"><i class="fas fa-envelope mr-1 text-warning"></i> Email</strong>&nbsp; Settings & Notifications
                        <div class="mb-3"></div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="newsletter" value="yes" id="select_newsletter" checked>
                        <label class="form-check-label" for="select_newsletter">
                        <strong class="text-dark">SMM Newsletter</strong>
                        <span>occasional newsletter about SMM News</span>
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="owner_newsletter" value="yes" id="select_owner_newsletter">
                        <label class="form-check-label" for="select_owner_newsletter">
                        <strong class="text-dark">Panel Owner Newsletter</strong>
                        <span>occasional newsletter for SMM Panel Owners</span>
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="panel_notifications" value="yes" id="select_panel_notifications">
                        <label class="form-check-label" for="select_panel_notifications">
                        <strong class="text-dark">SMM Panel Notifications</strong>
                        <span>Status changes & more. <strong>only for paid subscriptions</strong></span>
                        </label>
                        </div>
                        </form>
                        <script>
                                    $("#newsletter_form input[type='checkbox']").on('click change', function(){
                                      $("#save_newsletter").fadeIn()
                                    })
                                  </script>
                        </div>
                        </div>
                        <div class="card mb-3">
                        <div class="card-body">
                        <span class="float-right" style="margin-top:-4px; margin-bottom:-4px">
                        <button type="button" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#telegramModal">
                        <i class="fas fa-play"></i> <strong class="text-uppercase">Enable</strong>
                        </button>
                        </span>
                        <strong class="text-white"><i class="fab fa-telegram mr-1" style="color:#0088cc"></i> Telegram</strong>&nbsp; Account & Panel Notifications
                        </div>
                        </div>
                        <div class="modal fade" id="telegramModal" tabindex="-1" aria-labelledby="telegramModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="telegramModalLabel">Connect to <strong class="text-white"><i class="fab fa-telegram mr-1" style="color:#0088cc"></i> Telegram</strong></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <p>
                        By connecting your account to Telegram you can receive notifications about your account and SMM Panels.
                        If the Status, Subscription, API Status or anything changes you get a message by our bot.
                        </p>
                        <ol class="lead">
                        <li>Contact our bot <a href="https://t.me/SMMWatchBot" target="_blank">@SMMWatchBot</a></li>
                        <li>Send message to connect account:<br><code>/connect 1497;hpby0N-SAAUMBfO-LEfT</code></li>
                        <li>The bot will confirm your connection. Reload</li>
                        </ol>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="card">
                        <div class="card-body">
                        <h6><i class="fa fa-cog text-dark mr-1"></i> Account Settings</h6>
                        <form class="edit_user" id="edit_user" action="/auth" accept-charset="UTF-8" method="post"><input type="hidden" name="_method" value="put" autocomplete="off" /><input type="hidden" name="authenticity_token" value="k1uaD9BJ6HBK57CWcOs9z8GXPpB+Ml6+rZTAtS5PvBkoaEMqxuT5zrGVDrdAhQJ0FaVBGvAnJoowIYbSzSXytA==" autocomplete="off" />
                        <div class="mb-3"><label class="form-label required" for="user_email">Email</label><input autofocus="autofocus" autocomplete="email" class="form-control" type="email" value="deniztom1992@gmail.com" name="user[email]" id="user_email" /></div>
                        <div class="row">
                        <div class="col-6">
                        <div class="mb-3"><label class="form-label required" for="user_password">Password (leave blank, to not change it)</label><input autocomplete="new-password" class="form-control" type="password" name="user[password]" id="user_password" /></div>
                        </div>
                        <div class="col-6">
                        <div class="mb-3"><label class="form-label" for="user_password_confirmation">Password confirmation</label><input autocomplete="new-password" class="form-control" type="password" name="user[password_confirmation]" id="user_password_confirmation" /></div>
                        </div>
                        </div>
                        <div class="mb-3"><label class="form-label" for="user_current_password">Current password</label><input autocomplete="current-password" class="form-control" type="password" name="user[current_password]" id="user_current_password" /></div>
                        <input type="submit" name="commit" value="Update Account" class="btn btn-secondary" data-disable-with="Update Account" />
                        </form> </div>
                        </div>
                        </div>
                        <div class="col-md-5">
                        <div class="card mb-3">
                        <div class="card-body">
                        <small class="text-uppercase">Account created</small>
                        <h5 class="text-white mb-0 mt-2">about 4 hours ago</h5>
                        </div>
                        </div>
                        <div class="card mb-4">
                        <div class="card-body">
                        <small class="text-uppercase">Account Balance</small>
                        <h5 class="text-white mb-0 mt-2">$ 0.00</h5>
                        </div>
                        </div>
                        <h5><i class="fa fa-ban text-danger mr-2"></i> Cancel account</h5>
                        <p>Feel free to cancel your account anytime. All attached panels and information will be removed and lost forever. <form class="button_to" method="post" action="/auth"><input type="hidden" name="_method" value="delete" autocomplete="off" /><input class="btn btn-danger" data-confirm="Are you 100% sure?" type="submit" value="Cancel my account" /><input type="hidden" name="authenticity_token" value="o9YZ4/LoxVjHMI30P30mslTAHoJcLpsqIf4CXrLQF6iSRlcJPlnE1RPAzNFjA50McNDRvgGhappDDZrFreJKfA==" autocomplete="off" /></form></p>
                        </div>
                        </div>
                </div>
    </main>

@endsection
