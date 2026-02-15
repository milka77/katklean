<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Booking Confirmed</title>
</head>
<body>

    <h2>Hello {{ $booking->name }},</h2>

    <p>Your booking has been <strong>confirmed</strong>. 🎉</p>

    <p><strong>Booking details:</strong></p>

    <ul>
        <li>Date: {{ $booking->booking_date }}</li>
        <li>Time: {{ $booking->start_at }} – {{ $booking->end_at }}</li>
        <li>Service: {{ $booking->product->name }}</li>
        <li>Total price: £{{ number_format($booking->total_price, 2) }}</li>
    </ul>

    <p>If you have any questions, just reply to this email.</p>

    <p>Thanks,<br>{{ config('app.name') }}</p>

</body>
</html>
