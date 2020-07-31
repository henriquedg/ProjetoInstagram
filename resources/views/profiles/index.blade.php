@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pt-5">
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/45/A_small_cup_of_coffee.JPG" class="rounded-circle" style="height: 100px; width: 100px;">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
            
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-4">
                    <strong>153</strong> posts
                </div>
                <div class="pr-4">
                    <strong>23k</strong> followers
                </div>
                <div class="pr-4">
                    <strong>212</strong> following
                </div>
            </div>
            <div class="pt-3 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://media.gazetadopovo.com.br/haus/2019/10/flores-primavera-pixabay-1-768x415-d7bd5fc0.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://s2.glbimg.com/jsaPuF7nO23vRxQkuJ_V3WgouKA=/e.glbimg.com/og/ed/f/original/2014/06/10/461777879.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://lh3.googleusercontent.com/proxy/NIgyRkXsrs4X1RnOqeCkPBraApricsafMXRfPgi9OoBJq255beRgJEe5IAVXtGBfYZ-kUBHiqsVPWJwRVo61GR0Eu00pD5idtT0IGGLUGUj9fKC6qiHZsaoZ2EtgqwbNCXLxvUFzEDKLA22MB0P8W-z-Nsl0sPVmMwjq95O8v-zaK1PJ_CtkkCocC9BOf-JOCKRQDA" class="w-100">
        </div>
    </div>

</div>
@endsection
