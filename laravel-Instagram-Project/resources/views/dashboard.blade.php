<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<x-app-layout>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-3 pt-5">
                    <img src="{{$user->profile->profileImage()}}" class="rounded-circle w-100"
                        class="logoPhoto ">
                </div>
                <div class="col-9 pt-5">
                    <div class="d-flex justify-content-between align-items-baseline">
                        <div class="font-weight-bold">
                            <h1>{{ $user->user_name }}</h1>
                        </div>
                        @can('update', $user->profile)
                            <a href="/p/create">Add new post </a>
                        @endcan
                    </div>
                    @can('update', $user->profile)
                        <a href="/instagram/profile/{{ $user->id }}/edit">Edit Profile</a>
                    @endcan
                    <div class="d-flex">
                        <div class="pr-4"><strong>{{ $user->posts->count() }}</strong> posts</div>
                        <div class="pr-4"><strong>23k</strong> followers</div>
                        <div class="pr-4"><strong>212</strong> following</div>
                    </div>
                    <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
                    <div> {{ $user->profile->description }}
                    </div>
                    <div><a href="#"> {{ $user->profile->url }}</a></div>
                </div>
            </div>
            <div class="row pt-5 ">
                @foreach ($user->posts as $post)
                    <div class="col-4 pb-4">
                        <a href="/p/{{ $post->id }}">
                            <img src="/storage/{{ $post->image }}" class="w-100">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</x-app-layout>
