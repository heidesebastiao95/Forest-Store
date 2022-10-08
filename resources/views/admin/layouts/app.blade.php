<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Forest-Commerce</title>

        {{-- Styles --}}
       @include('admin.layouts.includes.css-links')
    </head>
    <body>
        <script src="{{ asset('js/demo-theme.min.js') }}"></script>
        <div class="page">
            {{-- Sidebar --}}
          @include('admin.layouts.includes.asside')
            {{-- Navbar --}}
          @include('admin.layouts.includes.navbar')
            <div class="page-wrapper">
              {{-- Page Header --}}
              <div class="page-header d-print-none">
               @yield('header-section')
              </div>
              {{-- Page Body --}}
              <div class="page-body">
                <div class="container">
                  <div class="row row-deck row-cards">
                    @yield('main')
                  </div>
                </div>
              </div>
              @include('admin.layouts.includes.footer')
            </div>
          </div>
          
          @include('admin.layouts.includes.scripts-src')
          @include('admin.layouts.includes.modals')
          @yield('scripts-chart')
    </body>
</html>
