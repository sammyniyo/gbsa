<!DOCTYPE html>
<html>
<head>
    <title>New Booking Request</title>
</head>
<body>
    <h1>New Booking Request</h1>
    <p><strong>Full Name:</strong> {{ $booking->full_name }}</p>
    <p><strong>Email:</strong> {{ $booking->email }}</p>
    <p><strong>Service:</strong> {{ $booking->service }}</p>
    <p><strong>Message:</strong> {{ $booking->message }}</p>
</body>
</html>
