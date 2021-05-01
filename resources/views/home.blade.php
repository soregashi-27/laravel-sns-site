@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pb-5">
            {{-- <img src="" class="rounded-circle" alt="profileImg"> --}}
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>SNS-site</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5">
                    <strong>100</strong>posts
                </div>
                <div class="pr-5">
                    <strong>20k</strong>followers
                </div>
                <div class="pr-5">
                    <strong>212</strong>following
                </div>
            </div>
            <div class="pt-4 font-weight-bold">SNS-site.org</div>
            <div>Hi there. I'm soregashi-27. I love coding, and create something a new one. Let's go enjoy making. My github below.</div>
            <div><a href="https://github.com/soregashi-27">https://github.com/soregashi-27</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="images/laravel_midnightHacking.jpg" class="w-100" alt="postPictureFirst">

        </div>
        <div class="col-4">
            <img src="images/laravel_midnightProgramming.jpg" class="w-100" alt="postPictureSecond">
        </div>
        <div class="col-4">
            <img src="images/laravel_reviewBefore.jpg" class="w-100" alt="postPictureThird">
        </div>

    </div>
</div>
@endsection
