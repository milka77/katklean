<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Booking</title>
</head>
<body>

<h2>New Booking Received</h2>

<p><strong>Customer:</strong> {{ $booking->name }}</p>
<p><strong>Email:</strong> {{ $booking->email }}</p>
<p><strong>Phone:</strong> {{ $booking->phone }}</p>

<hr>

<p><strong>Service:</strong> {{ $booking->product->name }}</p>
<p><strong>Date:</strong> {{ $booking->booking_date }}</p>
<p><strong>Time:</strong> {{ $booking->start_at }} </p>
<p><strong>Total:</strong> £{{ number_format($booking->total_price, 2) }}</p>

<hr>

<p><strong>Address:</strong></p>
<p>
    {{ $booking->address_line1 }}<br>
    {{ $booking->town }}<br>
    {{ $booking->postcode }}
</p>

@if($booking->message)
<hr>
<p><strong>Customer Message:</strong></p>
<p>{{ $booking->message }}</p>
@endif

</body>
</html>
