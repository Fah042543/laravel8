<div class="form-group {{ $errors->has('no') ? 'has-error' : ''}}">
    <label for="no" class="control-label">{{ 'No' }}</label>
    <input class="form-control" name="no" type="text" id="no" value="{{ isset($profile->no) ? $profile->no : ''}}" >
    {!! $errors->first('no', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
    <label for="type" class="control-label">{{ 'Type' }}</label>
    <input class="form-control" name="type" type="text" id="type" value="{{ isset($profile->type) ? $profile->type : ''}}" >
    {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('issue_date') ? 'has-error' : ''}}">
    <label for="issue_date" class="control-label">{{ 'Issue Date' }}</label>
    <input class="form-control" name="issue_date" type="date" id="issue_date" value="{{ isset($profile->issue_date) ? $profile->issue_date : ''}}" >
    {!! $errors->first('issue_date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('expire_date') ? 'has-error' : ''}}">
    <label for="expire_date" class="control-label">{{ 'Expire Date' }}</label>
    <input class="form-control" name="expire_date" type="date" id="expire_date" value="{{ isset($profile->expire_date) ? $profile->expire_date : ''}}" >
    {!! $errors->first('expire_date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($profile->name) ? $profile->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('birth_date') ? 'has-error' : ''}}">
    <label for="birth_date" class="control-label">{{ 'Birth Date' }}</label>
    <input class="form-control" name="birth_date" type="date" id="birth_date" value="{{ isset($profile->birth_date) ? $profile->birth_date : ''}}" >
    {!! $errors->first('birth_date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_no') ? 'has-error' : ''}}">
    <label for="id_no" class="control-label">{{ 'Id No' }}</label>
    <input class="form-control" name="id_no" type="text" id="id_no" value="{{ isset($profile->id_no) ? $profile->id_no : ''}}" >
    {!! $errors->first('id_no', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($profile->user_id) ? $profile->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
