@extends('layouts.front')
@section('content')
    <div class="header" id="home">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-12">
                    <div class="info">
                        <h2 style="text-align: center; color: green;">الشروط والاحكام</h2>
                        <br>
                     <p>
                         {!! settings()->terms_page  !!}
                     </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
