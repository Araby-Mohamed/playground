@extends('layouts.admin')
@section('content')
    <div class="col-12 p-3">
        <div class="col-12 col-lg-12 p-0 main-box">
            <div class="col-12 px-0">
                <div class="col-12 p-0 row">
                    <div class="col-12 col-lg-4 py-3 px-3">
                        <span class="fas fa-categories"></span> التقويم
                    </div>
                    <div class="col-12 col-lg-4 p-2">
                    </div>
                    <div class="col-12 col-lg-4 p-2 text-lg-end">

                    </div>
                </div>
                <div class="col-12 divider" style="min-height: 2px;"></div>
            </div>
            <div class="col-12 p-3" style="overflow:auto">
                <div class="col-12 p-0" style="min-width:1100px;">
                    <form action="{{ route('admin.system-calendar.index') }}" method="GET">
                        <div class="row">
                            <div class="col-md-1"> <label>بحث بالملعب</label></div>
                            <div class="col-md-4">
                                <select name="venue_id" class="form-control select2">
                                    <option value="">اختر الملعب</option>
                                    @foreach($venues as $venue)
                                        <option value="{{ $venue->id }}"
                                                @if (request('venue_id') == $venue->id) selected @endif>{{ $venue->name }}</option>
                                    @endforeach
                                </select></div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-sm btn-primary">بحث</button>
                            </div>
                        </div>
                    </form>
                    <br>
                    <link rel='stylesheet'
                          href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css'/>

                    <div id='calendar'></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script>
        $(document).ready(function () {
            // page is now ready, initialize the calendar...
            events ={!! json_encode($events) !!};
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                events: events,
            })
        });
    </script>
@endsection
