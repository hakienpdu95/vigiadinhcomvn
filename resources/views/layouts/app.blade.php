<!doctype html>
<html @php(language_attributes())>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @php(do_action('get_header'))
    @php(wp_head())

    @vite([
      'resources/css/hgi-stroke-rounded.css',
      'resources/css/app.css',
      'resources/css/main.scss',
      'resources/js/jquery.js',
      'resources/js/app.js'
    ])
  </head>

  <body @php(body_class())>
    @php(wp_body_open())
    @include('partials.body-common')
    
    <div id="app" class="container mx-auto bg-white">
      @include('sections.header')

      <main id="main" class="main">
        <div class="container">
          <div class="w-full inline-block clear-both mt-4 mb-5">
            @if (has_nav_menu('primary_navigation'))
            <nav class="main-menu">
              {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
            </nav>
            @endif
          </div>
          <div class="max-w-[1110px] mx-auto sm:px-0 px-3 flex items-start justify-between gap-5 flex-col lg:flex-row relative">

              <div class="max-w-[772px] w-full">
                  @yield('content')
              </div>

              <div class="w-full lg:w-75 flex-none grid gap-[15px] sm:grid-cols-2 lg:grid-cols-1 top-5">
                  @hasSection('sidebar')
                    <aside class="sidebar">
                      @yield('sidebar')
                    </aside>
                  @endif
              </div>
          </div>
      </div>
    </main>
    </div>
    @include('sections.footer')
    @php(do_action('get_footer'))
    @php(wp_footer())
    @yield('scripts')
  </body>
</html>
