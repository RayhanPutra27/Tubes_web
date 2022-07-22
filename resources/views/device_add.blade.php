<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Device Store</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Device Store</a>
                </div>
                <div class="card-body">
                    <a href="/device" class="btn btn-primary">Back</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/device/store">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Device Name ..">

                            @if($errors->has('name'))
                                <div class="text-danger">
                                    {{ $errors->first('name')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Type</label>
                            <input type="text" name="type" class="form-control" placeholder="Device Type ..">

                             @if($errors->has('type'))
                                <div class="text-danger">
                                    {{ $errors->first('type')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="text" name="quantity" class="form-control" placeholder="Device Quantity ..">

                             @if($errors->has('quantity'))
                                <div class="text-danger">
                                    {{ $errors->first('quantity')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control" placeholder="Device Price ..">

                             @if($errors->has('price'))
                                <div class="text-danger">
                                    {{ $errors->first('price')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Save">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>
