<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Booking Confirmed</title>
</head>
<body>

    <h2>Hello {{ $booking->name }},</h2>

    <p>Your booking <strong>{{ $booking->reference }}</strong> has been <strong>confirmed</strong>. 🎉</p>

    <p><strong>Booking details:</strong></p>

    <ul>
        <li>Date: {{ $booking->booking_date }}</li>
        <li>Reference: {{ $booking->reference }}</li>
        <li>Time: {!! Str::substr($booking->start_at, 10) !!} </li>
        <li>Service: {{ $booking->product->name }}</li>
        <li>Total price: £{{ number_format($booking->total_price, 2) }}</li>
        <li>Peyment method: @if($booking->payment_method == 'bank')Bank Transfer @else Cash @endif</li>
    </ul>

    @if($booking->payment_method == 'bank')
        <p><strong>Bank details:</strong></p>
        <ul>
            <li>Name: Katalin Kvak</li>
            <li>Sort code: {{ env('SORT_CODE') }}</li>
            <li>Account number: {{ env('ACCOUNT_NUMBER') }}</li>
        </ul>
        <p>Payment is due latest on the day of the booking.</p>
    @endif

    <p>If you have any questions, just reply to this email.</p>

    <p>Thanks,<br>{{ config('app.name') }}</p>

</body>
</html>
