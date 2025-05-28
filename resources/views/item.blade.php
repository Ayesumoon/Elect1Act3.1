<!DOCTYPE html>
<html>
<head>
    <title>Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Item Information</h2>
    <div class="mb-3">
        <label class="form-label">Item No</label>
        <input type="text" class="form-control" value="{{ $itemNo }}" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" value="{{ $name }}" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="text" class="form-control" value="{{ $price }}" readonly>
    </div>
</div>
</body>
</html>