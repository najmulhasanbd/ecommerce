<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AttributeValue;
use Illuminate\Http\Request;

class AttributeValueController extends Controller
{
    protected $attributeValue;
    public function __construct(AttributeValue $attributeValue)
    {
        $this->attributeValue = $attributeValue;
    }

    public function index()
    {
        $data = $this->attributeValue::latest()->get();
        return view('admin.attribute-value.index', compact('data'));
    }
    public function create() {}
    public function store() {}
    public function edit() {}
    public function update() {}
    public function destroy() {}
}
