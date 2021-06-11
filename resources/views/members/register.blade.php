<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>会員登録システム（会員登録画面）</title>
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'Laravel') }}</title>

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>

      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
      <div id="app">
        <main class="py-4">
          <div class="container">
            <div class="mx-auto" style="width: 220px;">
              <h1>会員登録画面</h1>
            </div>

            <div class="py-4 mx-auto" style="width: 500px;">
              <!-- バリデーションエラーの表示 -->
              @include('common.errors')

              <form action="{{ url('members/register') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                  <div>
                    <input type="text" name="name" id="member-name" class="form-control" placeholder="名前" value="{{ old('name') }}">
                  </div>
                </div>

                <div class="form-group">
                  <div>
                    <input type="tel" name="phone" id="member-phone" class="form-control" placeholder="電話" value="{{ old('phone') }}">
                  </div>
                </div>

                <div class="form-group">
                  <div>
                    <input type="email" name="email" id="member-email" class="form-control" placeholder="メール" value="{{ old('email') }}">
                  </div>
                </div>

                <div class="form-group mt-4">
                  <div class="px-1">
                    <button type="submit" class="btn btn-success btn-block">
                      登録
                    </button>
                  </div>
                </div>

                <div class="form-group">
                  <div class="px-1">
                    <a href="/" class="btn btn-secondary btn-block">
                      キャンセル
                    </a>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </main>
      </div>
    </body>
  </body>
</html>
