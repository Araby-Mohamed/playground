
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
                العنوان
            </div>
            <div class="col-12 pt-3">
                <input type="text" name="address" required maxlength="190" class="form-control"
                       value="{{ old('address', $data->address ?? '') }}">
            </div>
        </div>
    </div>
