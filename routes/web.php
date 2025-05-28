<?php

use Illuminate\Support\Facades\Route;

Route::get('/customer/{id}/{name}/{address}', function ($id, $name, $address) {
    return view('customer', compact('id', 'name', 'address'));
});

Route::get('/item/{itemNo}/{name}/{price}', function ($itemNo, $name, $price) {
    return view('item', compact('itemNo', 'name', 'price'));
});

Route::get('/order/{customerId}/{customerName}/{orderNo}/{date}', function ($customerId, $customerName, $orderNo, $date) {
    return view('order', compact('customerId', 'customerName', 'orderNo', 'date'));
});

Route::get('/orderDetails/{transNo}/{orderNo}/{itemId}/{name}/{price}/{qty}', function ($transNo, $orderNo, $itemId, $name, $price, $qty) {
    return view('orderDetails', compact('transNo', 'orderNo', 'itemId', 'name', 'price', 'qty'));
});
