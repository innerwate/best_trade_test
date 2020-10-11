<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
       
         

    
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>All products</h2>
            @foreach($products as $product)
            <div class="item">
                <div class="product_title">{{$product->title}}</div>
                <div class="product_image">{{$product->images}}</div>
                <div class="crud_buttons">
                    <button class="main_btn edit_btn">Edit</button>
                    <button class="main_btn delete_btn">Delete</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="row">
        <a href="/create" class="main_btn create_btn">Create new</a>
    </div>
</div>

       
    </body>
</html>
