<header class="main-header">
  <div class="container">
    <a class="logo-wrap" href="//figshare.com">
      <img src="/img/figshare-logo.png" />
    </a>
    <div class="container-right">
      @if(subscribers_enabled())
        <a class="subscribe-link" href="{{ cachet_route('subscribe') }}">{{ trans('cachet.subscriber.button') }}</a>
      @endif
      <a class="back-to" href="//figshare.com">Back to figshare</a>
    </div>
  </div>
</header>
