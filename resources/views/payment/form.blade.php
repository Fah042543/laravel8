<div class="form-group {{ $errors->has('total') ? 'has-error' : ''}}">
    <label for="total" class="control-label">{{ 'Total' }} <span class="text-danger">*</span></label>
    <input class="form-control" name="total" type="number" id="total" value="{{ isset($payment->total) ? $payment->total : ''}}" required>...
</div>
<div class="form-group d-none {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($payment->user_id) ? $payment->user_id : Auth::id() }}" readonly>...
</div>
<div class="form-group {{ $errors->has('order_id') ? 'has-error' : ''}}">
    <label for="order_id" class="control-label">{{ 'Order Id' }} (ยอดที่ต้องชำระ {{ $order->total }} บาท)</label>
    <input class="form-control" name="order_id" type="number" id="order_id" value="{{ isset($payment->order_id) ? $payment->order_id : request('order_id') }}" readonly>...
</div>
<div class="form-group {{ $errors->has('slip') ? 'has-error' : ''}}">
    <label for="slip" class="control-label">{{ 'Slip' }} <span class="text-danger">*</span></label>
    <input class="form-control" name="slip" type="file" id="slip" value="{{ isset($payment->slip) ? $payment->slip : ''}}" required>...
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
