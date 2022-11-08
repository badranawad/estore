@extends('layouts.admin')
@section('content')
<div class="py-3">
    <form action="{{url('products/store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nameFormControlInput" class="form-label">اسم المنتج</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="اسم المنتج">
        </div>
        <div class="mb-3">
            <label for="quantityFormControlInput" class="form-label"> الكمية </label>
            <input type="number" class="form-control" id="quantity" name="quantity" >
        </div>
        <div class="mb-3">
            <label for="priceFormControlInput" class="form-label"> السعر </label>
            <input type="number" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
            <label for="descriptionFormControlTextarea" class="form-label"> وصف المنتج </label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="descriptionFormControlTextarea" class="form-label"> اختر الصنف </label>
            <select class="form-control" name="category" id="category">
                <option value="#"></option>
                <option value="1">ملابس</option>
                <option value="2">أحذية</option>
                <option value="3">اكسسوارات</option>
            </select>
        </div>
        <div class="mb-3">
            <input type="submit" value="احفظ" class="btn btn-info">
        </div>
    </form>
</div>

@endsection

