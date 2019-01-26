@extends('header')

@section('content')

<section class="hero">
    <div class="bg"></div>
    <div class="box"></div>
    <div class="inner-box"></div>
    <span>welcome to<br>the one and only<br>RLI.</span>
    <div class="cta">
        <button class="btn btn-primary">LEARN MORE</button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="btn btn-secondary">JOIN US</button>
    </div>
</section>

<section class="discord-banner">
    
</section>

<section class="tournaments">
    <div class="container-fluid">
        <div class="title">
            <div class="bar"></div>
            <h1>our latest</h1>
        </div>

        <div class="row">
                <div class="card">
                    <div class="card-title">APL 3.0 Qualifier 1</div>
                    <div class="card-subtitle">APL eSports</div>
                    <div class="card-img"></div>
                    <div class="card-body">
                        Date: 9 Feb 2019
                    </div>
                    <div class="card-cta">more info</div>
                </div>
            <div class="col">
                <div class="card">
                    <div class="card-title">Community Cup 8</div>
                    <div class="card-subtitle">RL India</div>
                    <div class="card-img"></div>
                    <div class="card-body"> dummy text </div>
                    <div class="card-cta">more info</div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-title">Dummy title</div>
                    <div class="card-subtitle">Dummy sub</div>
                    <div class="card-img"></div>
                    <div class="card-body"> dummy text </div>
                    <div class="card-cta">more info</div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection