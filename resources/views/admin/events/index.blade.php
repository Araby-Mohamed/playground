@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
	<div class="col-12 col-lg-12 p-0 main-box">
		<div class="col-12 px-0">
			<div class="col-12 p-0 row">
				<div class="col-12 col-lg-4 py-3 px-3">
					<span class="fas fa-categories"></span> الحجوزات
				</div>
				<div class="col-12 col-lg-4 p-2">
				</div>
				<div class="col-12 col-lg-4 p-2 text-lg-end">
					<a href="{{route('admin.events.create')}}">
					<span class="btn btn-success"><span class="fas fa-plus"></span> إضافة جديد</span>
					</a>
				</div>
			</div>
			<div class="col-12 divider" style="min-height: 2px;"></div>
		</div>
		<div class="col-12 py-2 px-2 row">
			<div class="col-12 col-lg-4 p-2">
				<form method="GET">
					<input type="text" name="q" class="form-control" placeholder="بحث ... ">
				</form>
			</div>
		</div>
		<div class="col-12 p-3" style="overflow:auto">
			<div class="col-12 p-0" style="min-width:1100px;">
			<table class="table table-bordered  table-hover">
				<thead>
					<tr>
						<th>#</th>
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
                        <th>
                           الموافقة علي الطلب
                        </th>
						<th>تحكم</th>
					</tr>
				</thead>
				<tbody>
					@foreach($data as $category)
					<tr>
						<td>{{$category->id}}</td>
						<td>{{$category->name}}</td>
						<td>{{$category->amount}}</td>
						<td>{{$category->deposit}}</td>
						<td>{{$category->remain}}</td>
						<td>{{$category->start_time}}</td>
						<td>{{ $category->venue->name ?? '' }}</td>
                        <td>
                            @if( $category->booking_status == 'pending')
                                تحت المراجعة
                            @elseif( $category->booking_status == 'accepted')
                               تم الموافقة
                            @elseif( $category->booking_status == 'rejected')
                                تم الرفض
                            @elseif( $category->booking_status == 'completed')
                               حجز مكتمل
                            @elseif( $category->booking_status == 'not_completed')
                                الحجز لم يكتمل
                            @endif
                        </td>
                        <td>
                            <div class="row">
                                @if( $category->booking_status == 'pending')
                                    <div class="col-md-6">
                                        <a href="{{route('admin.events.change_status',['status'=>'accepted','id'=>$category->id])}}"
                                           class="btn btn-success">موافقة
                                            <i class="fa fa-check"> </i>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{route('admin.events.change_status',['status'=>'rejected','id'=>$category->id])}}"
                                           class="btn btn-danger">
                                            رفض
                                            <i class="fa fa-close"> </i>
                                        </a>
                                    </div>
                                @elseif($category->booking_status  == 'accepted')
                                    <div class="col-md-6">
                                        <a href="{{route('admin.events.change_status',['status'=>'rejected','id'=>$category->id])}}"
                                           class="btn btn-danger">
                                            رفض
                                            <i class="fa fa-close"> </i>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{route('admin.events.change_status',['status'=>'compleated','id'=>$category->id])}}"
                                           class="btn btn-success">اكتمل الحجز
                                            <i class="fa fa-check"> </i>
                                        </a>
                                    </div>
                                @elseif($category->booking_status  == 'rejected')
                                    <div class="col-md-6">
                                        <a href="{{route('admin.events.change_status',['status'=>'accepted','id'=>$category->id])}}"
                                           class="btn btn-success">موافقة
                                            <i class="fa fa-check"> </i>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </td>
						<td style="width: 180px;">
							@if(auth()->user()->has_access_to('update',$category))
							<a href="{{route('admin.events.edit',$category)}}">
							<span class="btn  btn-outline-success btn-sm font-1 mx-1">
								<span class="fas fa-wrench "></span> تحكم
							</span>
							</a>
							@endif
							@if(auth()->user()->has_access_to('delete',$category))
							<form method="POST" action="{{route('admin.events.destroy',$category)}}" class="d-inline-block">@csrf @method("DELETE")
								<button class="btn  btn-outline-danger btn-sm font-1 mx-1" onclick="var result = confirm('هل أنت متأكد من عملية الحذف ؟');if(result){}else{event.preventDefault()}">
									<span class="fas fa-trash "></span> حذف
								</button>
							</form>
							@endif
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		</div>
		<div class="col-12 p-3">
			{{$data->appends(request()->query())->render()}}
		</div>
	</div>
</div>
@endsection
