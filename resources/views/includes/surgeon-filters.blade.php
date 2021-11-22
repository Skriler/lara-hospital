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
    <label for="min-birth-date">Min birth date</label>
    <input type="date" name="min-birth-date" class="form-control" id="min-birth-date" placeholder="Enter min birth date"
           value="{{$params['min_birth_date'] ?? ''}}">
</div>
<div class="form-group">
    <label for="max-birth-date">Max birth date</label>
    <input type="date" name="max-birth-date" class="form-control" id="max-birth-date" placeholder="Enter max birth date"
           value="{{$params['max_birth_date'] ?? ''}}">
</div>
<div class="form-group">
    <label for="gender">Gender</label>
    <select name="gender" class="form-control" id="gender">
        <option></option>
        <option {{isset($params['gender']) ? 'Male' == $params['gender'] ? "selected" : '' : ''}}>Male</option>
        <option {{isset($params['gender']) ? 'Female' == $params['gender'] ? "selected" : '' : ''}}>Female</option>
    </select>
</div>
