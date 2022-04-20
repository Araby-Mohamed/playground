@extends('layouts.front')
@section('content')
    <div class="header" id="home">
        <div class="container">
            <div class="row gx-0">
                <h2 style="text-align: center; color: green;">حجوزاتي</h2>

            </div>
            <br>
            <div class="row gx-0">
                <table class="table table-bordered  table-hover">
                    <thead>
                    <tr>
                        <th>
                            اسم الحجز
                        </th>
                        <th>
                            مبلغ الحجز
                        </th>
                        <th>
                            العربون
                        </th>
                        <th>
                            المبلغ المتبقي
                        </th>
                        <th>
                            وقت الحجز
                        </th>
                        <th>
                            اسم الملعب
                        </th>
                        <th>
                            حالة الحجز الان
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $row)
                        <tr>
                            <td>{{$row->name}}</td>
                            <td>{{$row->amount}}</td>
                            <td>{{$row->deposit}}</td>
                            <td>{{$row->remain}}</td>
                            <td>{{date('Y-m-d H:i a', strtotime($row->start_time))}} </td>
                            <td>{{$row->venue->name ?? ''}}</td>
                            <td>{{$row->booking}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
