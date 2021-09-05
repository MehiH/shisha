<!DOCTYPE html>
<html>
<head>
    @include('_partition._admin._head') 
    <style>
        body {
            background-color: #050505;
            color: #e9ecef;
            text-rendering: optimizeLegibility;
        }
        td {
            background-color: #050505;
            color: #e9ecef;
        }
        header {
            height: 10vh;
            min-height: 100px;
            background-size: cover;
            background-image:none;
        }
        .pagination li{

        }
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            box-sizing: border-box;
            display: inline-block;
            min-width: 1.5em;
            padding: 0;
            margin-left: 2px;
            text-align: center;
            text-decoration: none !important;
            cursor: pointer;
            *cursor: hand;
            color: #333 !important;
            border: 1px solid transparent;
            border-radius: 2px;
        }
        .mobile-nav .drop-down ul>li {
            display: block;
        }
        .main-nav .drop-down:hover > li {
            opacity: 1;
            top: 100%;
            visibility: visible;
            display: block;
        }
            </style>
    @yield('style') 
</head>
<body>
<header>
    @include('_partition._admin._navigation')
</header>
<div class="container">
    @yield('content') 
</div>
</body>
    @include('_partition._admin._end_script')
    @yield('script')
</html>
