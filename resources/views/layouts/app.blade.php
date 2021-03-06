<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Anthonys Blog') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Enriqueta:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        
<style>
        html, body {
            background-color: rgba(42, 42, 46, 1);
            font-family: 'Enriqueta', serif;
            color: #fafafa;
        }

        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            color: #ffffff;
            background-color: rgb(56, 56, 61);
            background-clip: border-box;
            border: 0px solid rgba(0, 0, 0, 0.125);
            border-radius: 10px;
            -webkit-filter: opacity(0.95);
        }

        .card-header {
            background-color: rgb(64, 64, 70);
        }

        .card-header-dash {
            background-color: rgb(60, 60, 65);
            padding: 0.75rem 1.25rem;
            margin-bottom: 15px;
        }

        .blog-card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            color: #ffffff;
            background-color: rgb(56, 56, 61);
            background-clip: border-box;
            border: 0px solid rgba(0, 0, 0, 0.125);
            border-radius: 5px;
        }

        .table {
            width: 100%;
            margin-bottom: 0;
            border-top: hidden;
        }

        .table th,
        .table td {
            border-top: hidden;
        }

        .table tbody + tbody {
            border-top: hidden;
        }

        .table thead th {
            border-bottom: hidden;
        }
        
        .table-striped {
            background-color: rgb(56, 56, 61);
        }

        .table-striped>tbody>tr:nth-child(odd)>td, 
        .table-striped>tbody>tr:nth-child(odd)>th {
            background-color: rgb(56, 56, 61);
        }

        .card-img-top {
            width: 100%;
            flex-shrink: 0;
            height: 200px;
            object-fit: cover;
        }

        .col-sm-4 {
            margin-bottom: 20px;
        }

        .card-body-table {
            max-width:100%;
            overflow-x: auto;
        }

        .card-body-dash {
            max-width:100%;
            overflow-x: auto;
        }

        .card-body-dash h3 {
            padding: 0.2rem 1.25rem;
        }

        .btn-block {
            width: 50%;
            margin-left: 25%;
        }

        .post-heading {
            text-align: left;
        }

        .post-body {
            border-radius: 0px;
        }

        .post-body img {
            width: 100%;
            object-fit: cover;
        }

        .text-prop {
            margin: 0px 0px 10px;
            text-align: justify;
        }

        .small-info {
            text-align: center;
        }

        .mastfoot {
            color: rgba(255, 255, 255, .5);
        }
    </style>

</head>
<body>
    @include('inc.navbar')
    <div class="container">
        @include('inc.messages')
        @yield('content')
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>    
</body>
</html>