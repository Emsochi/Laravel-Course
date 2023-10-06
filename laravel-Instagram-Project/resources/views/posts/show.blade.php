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
            <div class="row">
                <div class="col-8">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </div>
                <div class="col-4">
                    <div>
                        <div class="d-flex align-items-center">
                            <div class="pr-3">
                                <img src="/storage/{{ $post->user->profile->image }}" class="rounded-circle w-100"
                                    style="max-width: 40px">
                            </div>
                            <div>
                                <div class="font-weight-bold">{{ $post->user->user_name }}</div>
                            </div>
                        </div>
                        <hr>
                        <p><span class="font-weight-bold">{{ $post->user->user_name }}</span>{{$post->caption}}</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </x-app-layout>
</body>

</html>
