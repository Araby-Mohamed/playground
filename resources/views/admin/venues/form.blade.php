
    <div class="col-12 p-3 row">
        <div class="col-12 col-lg-6 p-2">
            <div class="col-12">
                اسم الملعب
            </div>
            <div class="col-12 pt-3">
                <input type="text" name="name" required maxlength="190" class="form-control"
                       value="{{ old('name', $data->name ?? '') }}">
            </div>
        </div>
    </div>
    <div class="col-12 p-3 row">
        <div class="col-12 col-lg-6 p-2">
            <div class="col-12">
                سعر الساعة
            </div>
            <div class="col-12 pt-3">
                <input type="number" min="0" step="any" name="cost" required class="form-control"
                       value="{{ old('cost', $data->cost ?? '') }}">
            </div>
        </div>
    </div>
    <div class="col-12 p-3 row">
        <div class="col-12 col-lg-6 p-2">
            <div class="col-12">
                العنوان
            </div>
            <div class="col-12 pt-3">
                <input type="text" name="address" required maxlength="190" class="form-control"
                       value="{{ old('address', $data->address ?? '') }}">
            </div>
        </div>
    </div>
    <div class="col-12 p-3 row">
        <div class="col-12 col-lg-6 p-2">
            <div class="col-12">
                صورة الملعب
            </div>
            <div class="col-12 pt-3">
                <input type="file" name="image" class="form-control" >
                @if(request()->segment(4) == 'edit')
                <div class="col-12 p-2">
                    <img src="{{$data->image_path}}" style="width:100px;max-height: 100px;">
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="col-12 p-3 row">
        <div class="col-12 col-lg-6 p-2">
            <div class="col-12">
                تفاصيل الملعب
            </div>
            <div class="col-12 pt-3">
                <textarea name="details" rows="6" class="form-control">{{ old('details', $data->details ?? '') }}</textarea>
            </div>
        </div>
    </div>
