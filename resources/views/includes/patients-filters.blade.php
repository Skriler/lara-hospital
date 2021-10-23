<div class="form-group">
    <label for="surgeon">Surgeon</label>
    <select name="surgeon" class="form-control" id="surgeon">
        <option></option>
        @foreach($surgeons as $surgeon)
            <option>
                {{$surgeon->surname}}
            </option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="tariff">Tariff</label>
    <select name="tariff" class="form-control" id="tariff">
        <option></option>
        @foreach($tariffs as $tariff)
            <option>
                {{$tariff->title}}
            </option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="min-birth-date">Min birth date</label>
    <input type="date" name="min-birth-date" class="form-control" id="min-birth-date" placeholder="Enter min birth date">
</div>
<div class="form-group">
    <label for="max-birth-date">Max birth date</label>
    <input type="date" name="max-birth-date" class="form-control" id="max-birth-date" placeholder="Enter max birth date">
</div>
<div class="form-group">
    <label for="min-treatment-term">Min treatment term</label>
    <input type="number" name="min-treatment-term" class="form-control" id="min-treatment-term" placeholder="Enter min treatment term">
</div>
<div class="form-group">
    <label for="max-treatment-term">Max treatment term</label>
    <input type="number" name="max-treatment-term" class="form-control" id="max-treatment-term" placeholder="Enter max treatment term">
</div>
