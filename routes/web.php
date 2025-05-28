<?php

use Illuminate\Support\Facades\Route;

Route::get('/customer/{id}/{name}/{address}', function ($id, $name, $address) {
    return view('customer', compact('id', 'name', 'address'));
});

Route::get('/item/{itemNo}/{name}/{price}', function ($itemNo, $name, $price) {
    return view('item', compact('itemNo', 'name', 'price'));
});

Route::get('/order/{custId}/{custName}/{orderNo}/{date}', function ($custId, $custName, $orderNo, $date) {
    return view('order', compact('custId', 'custName', 'orderNo', 'date'));
});

Route::get('/orderDetails/{transNo}/{orderNo}/{itemId}/{itemName}/{price}/{qty}', function ($transNo, $orderNo, $itemId, $itemName, $price, $qty) {
    return view('order_detail', compact('transNo', 'orderNo', 'itemId', 'itemName', 'price', 'qty'));
});
