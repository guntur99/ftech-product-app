<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginIndex()
    {
        return view('auth.login');
    }

    public function loginStore()
    {
        return redirect()->route('product.index');
    }

    public function registerIndex()
    {
        return view('auth.register');
    }

    public function registerStore()
    {
        return redirect()->route('product.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
