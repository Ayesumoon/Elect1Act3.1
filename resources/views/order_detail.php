<!DOCTYPE html>
<html>
<head><title>Order Details</title></head>
<body>
    <h1>Order Details</h1>
    <form>
        <label>Item:</label>
        <input type="text"><br>
        <label>Quantity:</label>
        <input type="number"><br>
        <button type="submit">Save Details</button>
    </form>

    <a href="{{ route('item') }}">Back to Item</a>
</body>
</html>
