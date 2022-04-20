@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
	<div class="col-12 col-lg-12 p-0 main-box">
		<div class="col-12 px-0">
			<div class="col-12 p-0 row">
				<div class="col-12 col-lg-4 py-3 px-3">
					<span class="fas fa-categories"></span> الملاعب
				</div>
				<div class="col-12 col-lg-4 p-2">
				</div>
				<div class="col-12 col-lg-4 p-2 text-lg-end">
					<a href="{{route('admin.venues.create')}}">
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
						<th>صورة الملعب</th>
						<th>اسم الملعب</th>
						<th>العنوان</th>
						<th>تحكم</th>
					</tr>
				</thead>
				<tbody>
					@foreach($data as $category)
					<tr>
                        <td><img style="width: 150px; height: 150px;" class="img-thumbnail" src="{{$category->image_path}}"></td>
						<td>{{$category->name}}</td>
						<td>{{$category->address}}</td>
						<td style="width: 180px;">
							@if(auth()->user()->has_access_to('update',$category))
							<a href="{{route('admin.venues.edit',$category)}}">
							<span class="btn  btn-outline-info btn-sm font-1 mx-1">
								<span class="fas fa-wrench "></span> تعديل
							</span>
							</a>
							@endif
							@if(auth()->user()->has_access_to('delete',$category))
							<form method="POST" action="{{route('admin.venues.destroy',$category)}}" class="d-inline-block">@csrf @method("DELETE")
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
