<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Hiển thị giao diện
     */
    public function index()
    {
        return view('cart.index');
    }

    /**
     * Hiển thị trang thêm mới (form để thêm)
     */
    public function create()
    {
        //
    }

    /**
     * Xử lý việc thêm mới
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Hiển thị chi tiết
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Hiển thị trang chỉnh sửa (form chỉnh sửa)
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Xử lý chỉnh sửa
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Xử lý xóa
     */
    public function destroy(string $id)
    {
        //
    }
}
