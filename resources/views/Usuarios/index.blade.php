@extends('layouts.app1')

@section('contect')

    <div id="load_latest_scores">{{$date}}</div>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
    <script type="text/javascript">
        var auto_refresh = setInterval(
            function () {
                $('#load_latest_scores').load('latest_scores.html');
            }, 10000); // refresh every 10000 milliseconds
    </script>

@endsection
