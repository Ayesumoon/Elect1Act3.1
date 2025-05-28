<!DOCTYPE html>
<html>
<head><title>Order</title></head>
<body>
    <h1>Order Form</h1>
    <form>
        <label>Order Number:</label>
        <input type="text"><br>
        <label>Date:</label>
        <input type="date"><br>
        <button type="submit">Save Order</button>
    </form>

    <a href="{{ route('order.details') }}">Go to Order Details</a>
</body>
</html>
