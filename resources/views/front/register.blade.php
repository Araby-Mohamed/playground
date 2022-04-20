@extends('layouts.front')
@section('content')
    <div class="header" id="home">
        <div class="container">
            @if(flash()->message)
                <div
                    style="position: absolute;z-index: 4444444444444;left: 35px;top: 80px;max-width: calc(100% - 70px);padding: 16px 22px;border-radius: 7px;overflow: hidden;width: 273px;border-right: 8px solid #374b52;background: #2196f3;color: #fff;cursor: pointer;"
                    onclick="$(this).slideUp();">
                    <span class="fas fa-info-circle"></span> {{ flash()->message }}
                </div>
            @endif
            @if ($errors->any())
                <div
                    style="position: absolute;z-index: 4444444444444;left: 35px;top: 80px;max-width: calc(100% - 70px);padding: 16px 22px;border-radius: 7px;overflow: hidden;width: 273px;border-right: 8px solid #374b52;background: #FF0000;color: #fff;cursor: pointer;"
                    onclick="$(this).slideUp();">
                    <span class="fas fa-info-circle"></span>
                    @foreach ($errors->all() as  $value)
                        {{ $value }} <br>
                    @endforeach
                </div>
            @endif
            <div class="row gx-0">
                <div class="col-lg-8">
                    <div class="info">
                        <h2>انضم لـ 6.5 مليون رياضي يلعبون ويتعلمون في قولاتو</h2>
                        <p>
                            قولاتو منصة الرياضيين، تتيح لك حجز الملاعب، الإشتراك في الأكاديميات، الإنضمام للتمارين.
                            <br/>
                            سواءً كنت منسق فريقك لحجز الملاعب، أو كنت هاوي وتدور أحد تلعب معه، أو حتى تبغى تتدرب وتتعلم
                            أساسيات وفنون أي رياضة، حيّاك!
                            <br/>
                            قولاتو منصة متكاملة لعشاق الرياضة تستعرض منها الملاعب في مدينتك، وممكن تستعرض على الخريطة،
                            وتختار الأقرب لك والأنسب موقع، وتقدر تستعرض الملعب وتشوف خدماته ومميزاته، وتشوف صوره وتحجزه
                            بكل موثوقية وضمان وبضغطة زر بس!
                        </p>
                        <a href="get.html"> <img src="{{url('/')}}/new_front/img/Badge-gp.svg" alt=""/></a><a
                            href="get.html"> <img src="{{url('/')}}/new_front/img/Badge-as.svg" alt=""/></a>
                    </div>
                </div>
                <div class="col-lg-4 text-center d-none d-lg-block">
                    <img src="{{url('/')}}/new_front/img/header-iPhone.png" alt=""/>
                </div>
            </div>
        </div>
    </div>
@endsection
