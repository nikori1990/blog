<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        @include('partials._header')
    </head>
    
    <body>
        @include('partials._nav')

        <!-- Page Content -->
        <div class="container">
            @include('partials._messages')

            @yield('content')

            <hr>

            @include('partials._footer')

        </div>
        <!-- /.container -->

        @include('partials._javascript')

        @yield('scripts')

    </body>


</html>
