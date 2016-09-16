<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Write｜Shortsword</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">

</head>
<body>
<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="title">
                    Shortsword
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="md-contents">
                    {!! $parsedText !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2 col-md-offset-5">
                <form action="{{ url('/write/download') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="md-text" value="{{ $mdText }}">
                    <input type="submit" class="center-block" value="ダウンロード">
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>