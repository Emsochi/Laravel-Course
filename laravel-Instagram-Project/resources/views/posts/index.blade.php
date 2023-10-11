<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <x-app-layout>
        <div class="container">

            @foreach ($posts as $post)
                <div class="row">
                    <div class="col-6 offset-3">
                        <a href="profile/{{$post->user->id}}"></a>
                        <img src="/storage/{{ $post->image }}" class="w-100">
                    </div>
                </div>
                <div class="row pt-2 pb-4">
                    <div class="col-6 offset-3">
                        <div>
                            <p><span class="font-weight-bold">
                                    <a href="/instagram/{{ $post->user->id }}">
                                        <span class="text-dark">{{ $post->user->user_name }}</span></a>
                                </span>{{ $post->caption }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    {{$posts->links()}}
                </div>
            </div>
        </div>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </x-app-layout>
</body>

</html>
