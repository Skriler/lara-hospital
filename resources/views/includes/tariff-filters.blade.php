<div class="form-group">
    <label for="min-code">Min code</label>
    <input type="number" name="min-code" class="form-control" id="min-code" placeholder="Enter min code"
           value="{{$params['min_code'] ?? ''}}">
</div>
<div class="form-group">
    <label for="max-code">Max code</label>
    <input type="number" name="max-code" class="form-control" id="max-code" placeholder="Enter max code"
           value="{{$params['max_code'] ?? ''}}">
</div>
<div class="form-group">
    <label for="min-operation-price">Min operation price</label>
    <input type="number" name="min-operation-price" class="form-control"
           id="min-operation-price" placeholder="Enter min operation price"
           value="{{$params['min_operation_price'] ?? ''}}">
</div>
<div class="form-group">
    <label for="max-operation-price">Max operation price</label>
    <input type="number" name="max-operation-price" class="form-control"
           id="max-operation-price" placeholder="Enter max operation price"
           value="{{$params['max_operation_price'] ?? ''}}">
</div>
<div class="form-group">
    <label for="min-rehabilitation-day-price">Min rehabilitation day price</label>
    <input type="number" name="min-rehabilitation-day-price" class="form-control"
           id="min-rehabilitation-day-price" placeholder="Enter rehabilitation day price"
           value="{{$params['min_rehab_day_price'] ?? ''}}">
</div>
<div class="form-group">
    <label for="max-rehabilitation-day-price">Max rehabilitation day price</label>
    <input type="number" name="max-rehabilitation-day-price" class="form-control"
           id="max-rehabilitation-day-price" placeholder="Enter rehabilitation day price"
           value="{{$params['max_rehab_day_price'] ?? ''}}">
</div>
