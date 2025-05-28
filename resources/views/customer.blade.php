<!DOCTYPE html>
<html>
<head><title>Customer</title></head>
<body>
    <h1>Customer Form</h1>
    <form>
        <label>Customer Name:</label>
        <input type="text"><br>
        <label>Email:</label>
        <input type="email"><br>
        <button type="submit">Save Customer</button>
    </form>

    <a href="{{ route('order') }}">Go to Order</a>
</body>
</html>
