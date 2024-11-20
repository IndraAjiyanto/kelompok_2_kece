<?php
// routes.php

require_once 'app/controllers/ProdukController.php';

$produk = new ProdukController();
require_once 'app/controllers/KategoriController.php';

$kategori = new KategoriController();

$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/user/index' || $url == '/') {
    $controller->index();
} elseif ($url == '/user/create' && $requestMethod == 'GET') {
    $controller->create();
} elseif ($url == '/user/store' && $requestMethod == 'POST') {
    $controller->store();
} elseif (preg_match('/\/user\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->edit($userId);
} elseif (preg_match('/\/user\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $controller->update($userId, $_POST);
} elseif (preg_match('/\/user\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->delete($userId);
} elseif ($url == '/kategori/index'){
    $kategori->index();
} elseif ($url == '/kategori/store' && $requestMethod == 'POST') {
    $kategori->store();
}  elseif ($url == '/kategori/create' && $requestMethod == 'GET'){
    $kategori->create();
} elseif (preg_match('/\/kategori\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $kategoriId = $matches[1];
    $kategori->edit($kategoriId);
} elseif (preg_match('/\/kategori\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $kategoriId = $matches[1];
    $kategori->update($kategoriId, $_POST);
} elseif (preg_match('/\/kategori\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $kategoriId = $matches[1];
    $kategori->delete($kategoriId);
} elseif ($url == '/produk/index'){
    $produk->index();
} elseif ($url == '/produk/store' && $requestMethod == 'POST') {
    $produk->store();
} elseif ($url == '/produk/create' && $requestMethod == 'GET'){
    $produk->create();
} elseif (preg_match('/\/produk\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $produkId = $matches[1];
    $produk->edit($produkId);
} elseif (preg_match('/\/produk\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $produkId = $matches[1];
    $produk->update($produkId, $_POST);
} elseif (preg_match('/\/produk\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $produkId = $matches[1];
    $produk->delete($produkId);
} elseif ($url == 'order/index'){
    $order->index();
} elseif ($url == '/order/create' && $requestMethod == 'GET'){
    $order->create();
} elseif (preg_match('/\/order\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $orderId = $matches[1];
    $order->edit($orderId);
} elseif (preg_match('/\/order\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $orderId = $matches[1];
    $order->update($orderId, $_POST);
} elseif (preg_match('/\/order\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $orderId = $matches[1];
    $order->delete($orderId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}