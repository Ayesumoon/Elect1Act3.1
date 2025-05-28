<!DOCTYPE html>
<html>
<head>
    <title>Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Order Information</h2>
    <div class="mb-3">
        <label class="form-label">Customer ID</label>
        <input type="text" class="form-control" value="{{ $customerId }}" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Customer Name</label>
        <input type="text" class="form-control" value="{{ $customerName }}" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Order No</label>
        <input type="text" class="form-control" value="{{ $orderNo }}" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Date</label>
        <input type="text" class="form-control" value="{{ $date }}" readonly>
    </div>
</div>
</body>
</html>