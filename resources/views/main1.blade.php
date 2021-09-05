<!doctype html>
<html lang="en">
    <head>
        @include('_partition._head')
        @yield('style')
    </head>
    <body>
        <header>
            @yield('header_desc')
        </header>
        <br>

        <div class="container book_table_container"> 
            @yield('content')
        </div>

        @include('_partition._end_script')
        @yield('script')
        
    
    </body>
</html>
