<!DOCTYPE html>
<html>

<head>
    <title>WHISTLEBz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/libs/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/libs/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/stylesheet.css')}}">
    <script src="{{asset('js/libs/jquery.min.js')}}"></script>
    <script src="{{asset('js/libs/owl.carousel.js')}}"></script>
    <script src="{{asset('js/custom.js')}}" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <form action="Superadmin" method="POST">
        @csrf
        <label><h1>Select Company Name for details<h1></label>
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="selected">
            <option selected name="all">All</option>
            @foreach($data as $item)
                <option>{{$item->CompanyName}}</option>
            @endforeach
        </select>
        <button type="submit">Find</button>
    </form>
</body>
</html>