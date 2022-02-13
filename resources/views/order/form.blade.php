<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($order->user_id) ? $order->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('remark') ? 'has-error' : ''}}">
    <label for="remark" class="control-label">{{ 'Remark' }}</label>
    <textarea class="form-control" rows="5" name="remark" type="textarea" id="remark" >{{ isset($order->remark) ? $order->remark : ''}}</textarea>
    {!! $errors->first('remark', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('total') ? 'has-error' : ''}}">
    <label for="total" class="control-label">{{ 'Total' }}</label>
    <input class="form-control" name="total" type="number" id="total" value="{{ isset($order->total) ? $order->total : ''}}" >
    {!! $errors->first('total', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="control-label">{{ 'Status' }}</label>
    <input class="form-control" name="status" type="text" id="status" value="{{ isset($order->status) ? $order->status : ''}}" >
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('checking_at') ? 'has-error' : ''}}">
    <label for="checking_at" class="control-label">{{ 'Checking At' }}</label>
    <input class="form-control" name="checking_at" type="datetime-local" id="checking_at" value="{{ isset($order->checking_at) ? $order->checking_at : ''}}" >
    {!! $errors->first('checking_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('paid_at') ? 'has-error' : ''}}">
    <label for="paid_at" class="control-label">{{ 'Paid At' }}</label>
    <input class="form-control" name="paid_at" type="datetime-local" id="paid_at" value="{{ isset($order->paid_at) ? $order->paid_at : ''}}" >
    {!! $errors->first('paid_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cancelled_at') ? 'has-error' : ''}}">
    <label for="cancelled_at" class="control-label">{{ 'Cancelled At' }}</label>
    <input class="form-control" name="cancelled_at" type="datetime-local" id="cancelled_at" value="{{ isset($order->cancelled_at) ? $order->cancelled_at : ''}}" >
    {!! $errors->first('cancelled_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('completed_at') ? 'has-error' : ''}}">
    <label for="completed_at" class="control-label">{{ 'Completed At' }}</label>
    <input class="form-control" name="completed_at" type="datetime-local" id="completed_at" value="{{ isset($order->completed_at) ? $order->completed_at : ''}}" >
    {!! $errors->first('completed_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tracking') ? 'has-error' : ''}}">
    <label for="tracking" class="control-label">{{ 'Tracking' }}</label>
    <input class="form-control" name="tracking" type="text" id="tracking" value="{{ isset($order->tracking) ? $order->tracking : ''}}" >
    {!! $errors->first('tracking', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
