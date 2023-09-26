<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <x-app-layout>
        <div class="container">
            <form action="/p" enctype="multipart/form-data" method="post">
                @csrf

                <div class="row">
                    <div class="col-8 offset-2">
                        <div class="row">
                            <div class="font-weight-bold text-center mx-auto mt-4"><h1>Add New Post</h1></div>
                        </div>
                        <div class="form-group row">
                            <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
                            <input 
                            id="caption" 
                            type="text" 
                            name="caption" 
                            class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}">
                            @if ($errors->has('caption'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('caption') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="row">
                            <label for="image" class="col-md-4  col-form-label">Post Image</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                            @if ($errors->has('image'))
                                    <strong>{{ $errors->first('image') }}</strong>
                            @endif
                        </div>
                        <div class="row pt-4">
                            <button class="btn btn-primary">Add New Post</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </x-app-layout>
</body>
</html>
