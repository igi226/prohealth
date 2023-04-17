<?php
namespace App\Repository\Interface;

use Illuminate\Support\Facades\Request;

interface UserInterface {
    public function all();
    // public function store(Request $request);
    public function changeS(Request $request);
}