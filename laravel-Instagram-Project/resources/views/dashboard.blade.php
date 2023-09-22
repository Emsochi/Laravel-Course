<!DOCTYPE html>
<html>

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<x-app-layout>

    <body>
        <div class="layoutStyle">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="row">

                        <div class="col-3 pt-5">
                            <div class="logoContainer">

                                <img src="https://yt3.googleusercontent.com/ytc/AOPolaTs1IEit9EUooQAJkWS4SkpUE7oMDXYrjIgnOk1Kw=s900-c-k-c0x00ffffff-no-rj"
                                    class="logoPhoto ">
                            </div>
                        </div>


                        <div class="col-9 pt-5">
                            <div class="titleContainer">

                                <div class="instagramLogo">
                                    <div>{{ $user->user_name }}</div>
                                </div>
                                <div class="instagramSubtitles">
                                    <div class="pr-4"><strong>153</strong> posts</div>
                                    <div class="pr-4"><strong>23k</strong> followers</div>
                                    <div class="pr-4"><strong>212</strong> following</div>
                </div>
                                <div class="pt-4 font-weight-bold">{{$user->profiles->title}}</div>
                                <div> {{$user->profiles->description}}
                                </div>
                                <div><a href="#"> {{$user->profiles->url }}</a></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row pt-4 ">
                <div class="col-4 ">
                    <img src="https://images.pexels.com/photos/4385547/pexels-photo-4385547.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt="Coding" class="w-100">
                </div>
                <div class="col-4">
                    <img src="https://images.pexels.com/photos/546819/pexels-photo-546819.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="Laptop photo" class="w-100">
                </div>
                <div class="col-4">
                    <img src="https://images.pexels.com/photos/879109/pexels-photo-879109.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt="Photo with card" class="w-100">
                </div>
            </div>
            <div class="row pt-4 ">
                <div class="col-4 ">
                    <img src="https://images.pexels.com/photos/1181244/pexels-photo-1181244.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="Phone and laptop" class="w-100">
                </div>
                <div class="col-4">
                    <img src="https://images.pexels.com/photos/1181325/pexels-photo-1181325.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt="Women in jacket " class="w-100">
                </div>
                <div class="col-4">
                    <img src="https://images.pexels.com/photos/1181676/pexels-photo-1181676.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt="Macbook support" class="w-100">
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-4 ">
                    <img src="https://images.pexels.com/photos/270488/pexels-photo-270488.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt="Clean Code" class="w-100">
                </div>
                <div class="col-4">
                    <img src="https://images.pexels.com/photos/3861958/pexels-photo-3861958.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt="Women coding " class="w-100">
                </div>
                <div class="col-4">
                    <img src="https://images.pexels.com/photos/1181373/pexels-photo-1181373.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt="Free use" class="w-100">
                </div>
            </div>

        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</x-app-layout>
