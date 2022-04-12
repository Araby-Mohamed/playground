<div class="col-12 p-3 row">
    <div class="col-12 col-lg-6 p-2">
        <div class="col-12">
            اسم الحجز
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
            رقم الجوال
        </div>
        <div class="col-12 pt-3">
            <input type="text" name="phone" required maxlength="190" class="form-control"
                   value="{{ old('phone', $data->phone ?? '') }}">
        </div>
    </div>
</div>
<div class="col-12 p-3 row">
    <div class="col-12 col-lg-6 p-2">
        <div class="col-12">
            مبلغ الحجز
        </div>
        <div class="col-12 pt-3">
            <input type="number" step="any" min="0" name="amount" id="amount" required class="form-control"
                   value="{{ old('amount', $data->amount ?? '') }}">
        </div>
    </div>
</div>
<div class="col-12 p-3 row">
    <div class="col-12 col-lg-6 p-2">
        <div class="col-12">
            العربون
        </div>
        <div class="col-12 pt-3">
            <input type="number" step="any" min="0" name="deposit" id="deposit" required class="form-control"
                   value="{{ old('deposit', $data->deposit ?? '') }}">
        </div>
    </div>
</div>
<div class="col-12 p-3 row">
    <div class="col-12 col-lg-6 p-2">
        <div class="col-12">
            المبلغ المتبقي
        </div>
        <div class="col-12 pt-3">
            <input type="number" readonly step="any" min="0" name="remain" id="remain" required class="form-control"
                   value="{{ old('remain', $data->remain ?? '') }}">
        </div>
    </div>
</div>
<div class="col-12 p-3 row">
    <div class="col-12 col-lg-6 p-2">
        <div class="col-12">
            وقت الحجز
        </div>
        <div class="col-12 pt-3">
            <input type="datetime-local" id="start_time"
                   value="{{ old('start_time', isset($data) ? $data->start_time : '') }}"
                   class="form-control datetime" required name="start_time">
        </div>
    </div>
</div>
<div class="col-12 p-3 row">
    <div class="col-12 col-lg-6 p-2">
        <div class="col-12">
            الملعب
        </div>
        <div class="col-12 pt-3">
            <select class="form-control select2" required name="venue_id" id="venue">
                @foreach($venues as $id => $venue)
                    <option
                        value="{{ $id }}" {{ (isset($data) && $data->venue ? $data->venue->id : old('venue_id')) == $id ? 'selected' : '' }} >
                        {{ $venue }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        var type;
        $(document).ready(function () {
            $(document).on('keyup', '#amount', function () {
                //To View Updated remain value afer pay on view
                amount = document.getElementById("amount").value;
                deposit = document.getElementById("deposit").value;
                khasmtotla = amount - deposit;
                $("#remain").val(khasmtotla);
            });
            $(document).on('keyup', '#deposit', function () {
                //To View Updated remain value afer pay on view
                amount = document.getElementById("amount").value;
                deposit = document.getElementById("deposit").value;
                khasmtotla = amount - deposit;
                $("#remain").val(khasmtotla);
            });
        });
    </script>
@endpush
