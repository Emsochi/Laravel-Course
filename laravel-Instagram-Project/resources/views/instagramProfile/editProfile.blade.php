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
            <form action="/instagram/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PATCH')

                <div class="row">
                    <div class="col-8 offset-2">
                        <div class="row">
                            <div class="font-weight-bold text-center mx-auto mt-4"><h1>Edit Profile</h1></div>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label">Title</label>
                            <input 
                            id="title" 
                            type="text" 
                            name="title" 
                            class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}">
                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label">Description</label>
                            <input 
                            id="description" 
                            type="text" 
                            name="description" 
                            class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}">
                            @if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group row">
                            <label for="url" class="col-md-4 col-form-label">URL</label>
                            <input 
                            id="url" 
                            type="text" 
                            name="url" 
                            class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}">
                            @if ($errors->has('url'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('url') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="row">
                            <label for="image" class="col-md-4  col-form-label">Profile Image</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                            @if ($errors->has('image'))
                                    <strong>{{ $errors->first('image') }}</strong>
                            @endif
                        </div>
                        <div class="row pt-4">
                            <button class="btn btn-primary">Save Profile</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </x-app-layout>
</body>
</html>
