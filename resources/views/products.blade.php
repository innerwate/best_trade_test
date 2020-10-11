<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body>




    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h2>All products</h2>

                @foreach($products as $product)

                <div class="item">

                    <div class="product_title">{{$product->title}}</div>


                    <div class="options hide">
                        <table class="darkTable">
                            <thead>
                                <th>Option name</th>
                                <th>Option value</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Vendor:</td>
                                    <td>{{$product->vendor}}</td>
                                </tr>
                                <tr>
                                    <td>Title:</td>
                                    <td>{{$product->title}}</td>
                                </tr>
                                <tr>
                                    <td>Images:</td>
                                    <td>{{$product->images}}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="crud_buttons">
                    <a href="/edit/{{$product->id}}" class="edit_href"> <button class="main_btn edit_btn" data-id="{{$product->id}}">Edit</button></a>
                        <button class="main_btn delete_btn" data-id="{{$product->id}}">Delete</button>
                        <button class="main_btn show_more_button">Show more</button>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="create_button_div col-md-4"><a href="/create" ><button class="main_btn create_btn">Create new</button>
</a></div>
            
        </div>
    </div>


</body>

</html>