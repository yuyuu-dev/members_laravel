<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>会員登録システム（会員一覧画面）</title>
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

            <div class="row">
              <div class="col-sm">
                <h1>会員一覧画面</h1>
              </div>
            </div>

            <div class="row py-4">
              <div class="col-sm">
                <a class="btn btn-success float-right" href="members/register" role="button">
                  <i class="fas fa-plus"></i>
                  登録
                </a>
              </div>
            </div>

            <div class="row">
              <div class="col-sm">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">No.</th>
                      <th scope="col">名前</th>
                      <th scope="col">電話番号</th>
                      <th scope="col">メールアドレス</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($members as $member)
                    <tr>
                      <th scope="row">{{ $loop->index + 1 }}</th>
                      <td>{{ $member->name }}</td>
                      <td>{{ $member->phone }}</td>
                      <td>{{ $member->email }}</td>
                      <td>
                        <a href="members/edit/{{ $member->id }}" class="btn btn-primary">
                          <i class="fas fa-edit"></i>
                          編集
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </main>
      </div>
    </body>
  </body>
</html>
