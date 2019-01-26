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
    discord.gg/rlindia
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
                        Format: 3v3
                        <br><br>
                        Date: 9 Feb 2019
                        <br><br>
                        Time: 1430 hrs IST
                        <div class="prize">$3000</div>
                    </div>
                    <div class="card-cta"><a href="http://register.aplesports.com" target="_blank">more info</a></div>
                </div>
            <div class="col">
                <div class="card">
                    <div class="card-title">Community Cup 8</div>
                    <div class="card-subtitle">RL India</div>
                    <div class="card-img"></div>
                    <div class="card-body">
                        Format: 3v3
                        <br><br>
                        Date: 9 Feb 2019
                        <br><br>
                        Time: 1430 hrs IST
                        <div class="prize">$75</div>
                    </div>
                    <div class="card-cta"><a href="https://smash.gg/rlicc8" target="_blank">more info</a></div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-title">Aerial RL x RL India</div>
                    <div class="card-subtitle">Aerial RL x RL India</div>
                    <div class="card-img"></div>
                    <div class="card-body">
                        Format: 3v3
                        <br><br>
                        Date: 8 december 2018
                        <br><br>
                        Time: 1430 hrs IST
                        <div class="prize">100 RL Keys</div>
                    </div>
                    <div class="card-cta"><a href="https://smash.gg/rlicc8" target="_blank">more info</a></div>
                </div>
            </div>
        </div>
    </div>  
</section>

<section class="yt">
    <div class="container-fluid">
        <div class="row" style="margin-top: 20px;">
                <iframe id="ytplayer" type="text/html" width="50%" height="480px" src="https://www.youtube.com/embed/9rGbFsXOgy8" frameborder="0"></iframe>
                <p>
                    Watch the latest videos, <br> on our youtube channel.
                    <br>
                    <br>
                    <a href="https://www.youtube.com/channel/UC_s9G5byunr30DEVgeY8qHA" target="_blank"><button class="btn btn-yt">Watch Now</button></a>
                </p>
        </div>
    </div>
</section>

<section class="partners">
    <div class="container-fluid">
        <div class="title">
            <div class="bar"></div>
            <h1>partners</h1>
        </div>
        <div class="container">
                <div class="row">
                    <div class="panel">
                        <div class="panel-img"><a href="http://division6.org" target="_blank"></a></div>
                        <div class="panel-title">
                            Twitch
                            <div class="panel-body">
                                <p>
                                    Twitch is a live streaming video platform owned by Twitch Interactive, a subsidiary of Amazon. Introduced in June 2011 as a spin-off of the general-interest streaming platform, Justin.tv, the site primarily focuses on video game live streaming, including broadcasts of eSports competitions, in addition to music broadcasts, creative content, and more recently, "in real life" streams.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="panel">
                        <div class="panel-img"><a href="http://division6.org" target="_blank"></a></div>
                        <div class="panel-title">
                            Division6
                            <div class="panel-body">
                                <p>
                                    Division6 is an open community mainly focused and based around Rocket League. They do seasonal one-off tournaments, the occasional stream and do their best to provide a nice experience for all their members. If you're looking for friendly people and great bantz, give them a visit!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="panel">
                        <div class="panel-img"><a href="http://division6.org" target="_blank"></a></div>
                        <div class="panel-title">
                            Discord
                            <div class="panel-body">
                                <p>
                                    Discord is a proprietary freeware VoIP application and digital distribution platform designed for video gaming communities, that specializes in text, image, video and audio communication between users in a chat channel. Discord runs on Windows, macOS, Android, iOS, Linux, and in web browsers. As of December 2018, there are over 200 million unique users of the software.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        
    </div>
</section>

@endsection