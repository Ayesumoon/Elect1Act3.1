<!DOCTYPE html>
<html>
<head><title>Item</title></head>
<body>
    <h1>Item Form</h1>
    <form>
        <label>Item Name:</label>
        <input type="text"><br>
        <label>Price:</label>
        <input type="number"><br>
        <button type="submit">Save Item</button>
    </form>

    <a href="{{ route('customer') }}">Go to Customer</a>
</body>
</html>
