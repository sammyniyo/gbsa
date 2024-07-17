<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Booking Confirmation</h1>
    <p>Dear {{ $booking->full_name }},</p>
    <p>Thank you for your booking request. We have received your request for the following service:</p>
    <p><strong>Service:</strong> {{ $booking->service }}</p>
    <p>We will get back to you shortly with further details.</p>
    <p>Best regards,<br>Gorilla Beringei Africa Safaris Team</p>
</body>
</html>
