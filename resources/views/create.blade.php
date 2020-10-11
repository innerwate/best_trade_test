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
                <form method="POST" action="/create/create_product" id="createForm" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group">
                        <label for="productVendor">Vendor</label>
                        <input type="text" class="form-control" id="productVendor" placeholder="Vendor" name="vendor">
                    </div>
                    <div class="form-group">
                        <label for="productTitle">Title</label>
                        <input type="text" class="form-control" id="productTitle" placeholder="Title" name="title">
                    </div>

                    <div class="form-group">
                        <label for="productImages">Images</label>
                        <input type="file" class="form-control-file" id="productImages" multiple name="images[]" >
                    </div>
                    <button type="submit" class="main_btn create_btn">Create new</button>
                </form>
                <a href="/" type="" ><button class="main_btn home_btn">Home</button></a>
            </div>
        </div>

    </div>


</body>

</html>