<div class="row">
    <div class="form-group col-lg-6">
        <label class="control-label">{{ 'Date' }}</label>
        <input class="form-control form-control-sm" name="date" type="date" value="{{ isset($covid19->date) ? $covid19->date : ''}}" >     
    </div>
    <div class="form-group col-lg-6 ">
        <label>{{ 'Country' }}</label>
        <input class="form-control form-control-sm" name="country" type="text" value="{{ isset($covid19->country) ? $covid19->country : ''}}" > 
    </div>
    <div class="form-group col-lg-6 ">
        <label>{{ 'Total' }}</label>
        <input class="form-control form-control-sm" name="total" type="number" value="{{ isset($covid19->total) ? $covid19->total : ''}}" >    
    </div>
    <div class="form-group col-lg-6 ">
        <label>{{ 'Active' }}</label>
        <input class="form-control form-control-sm" name="active" type="number" value="{{ isset($covid19->active) ? $covid19->active : ''}}" >    
    </div>
    <div class="form-group col-lg-6 ">
        <label>{{ 'Death' }}</label>
        <input class="form-control form-control-sm" name="death" type="number" value="{{ isset($covid19->death) ? $covid19->death : ''}}" >    
    </div>
    <div class="form-group col-lg-6 ">
        <label>{{ 'Recovered' }}</label>
        <input class="form-control form-control-sm" name="recovered" type="number" value="{{ isset($covid19->recovered) ? $covid19->recovered : ''}}" >    
    </div>
    <div class="form-group col-lg-6 ">
        <label>{{ 'Total in 1 Million' }}</label>
        <input class="form-control form-control-sm" name="total_in_1m" type="number" value="{{ isset($covid19->total_in_1m) ? $covid19->total_in_1m : ''}}" >    
    </div>
    <div class="form-group col-lg-6 ">
        <label>{{ 'Remark' }}</label>
        <textarea class="form-control form-control-sm" rows="5" name="remark"  >{{ isset($covid19->remark) ? $covid19->remark : ''}}</textarea>    
    </div>
</div>
