@extends('layouts.admin')
@section('content')
    <div class="py-5">
        <a class="btn btn-secondary" href="{{url('admin/products/create')}}">أضف منتج جديد</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">اسم المنتج</th>
                    <th scope="col">الصنف</th>
                    <th scope="col">السعر</th>
                    <th scope="col">الكمية</th>
                    <th scope="col">الأحداث</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$product->name}}</td>
                        <td>{{$categories[$product->category_id - 1]->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>
                            <a href="{{url('admin/products/delete/'.$product->id)}}" class="btn btn-danger">حذف</a>
                            <a href="{{url('admin/products/edit/'.$product->id)}}" class="btn btn-info">تعديل</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
