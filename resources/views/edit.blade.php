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
                <form method="POST" action="/update/" id="updateForm" enctype="multipart/form-data" >
                    @csrf
                   
                   
                    <div class="form-group">
                        <label for="productVendor">Vendor</label>
                        <input type="text" class="form-control" id="productVendor" placeholder="Vendor" name="vendor" value=" {{$singleProduct[0]->vendor}}">
                    </div>
                    <div class="form-group">
                        <label for="productTitle">Title</label>
                        <input type="text" class="form-control" id="productTitle" placeholder="Title" name="title"  value=" {{$singleProduct[0]->title}}">
                    </div>

                    <div class="form-group">
                        <label for="productImages">Images now available: {{$singleProduct[0]->images}}</label>
                        <input type="file" class="form-control-file" id="productImages" multiple name="images[]" placeholder="Update images" >
                    </div>
                    <input name="id" type="hidden" value="{{$singleProduct[0]->id}}" >
                    <button type="submit" class="main_btn update_btn">Update product</button>
                </form>
                <button  class="main_btn home_btn"><a href="/">Home</a></button>
            </div>
        </div>

    </div>


</body>

</html>