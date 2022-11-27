@extends('layouts.admin')
@section('content')
    <div class="py-5">
        <a class="btn btn-secondary" href="{{url('admin/categories/create')}}">أضف صنف جديد</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">اسم الصنف</th>
                    <th scope="col">الأحداث</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$category->name}}</td>
                        <td>
                            <a href="{{url('admin/categories/delete/'.$category->id)}}" class="btn btn-danger">حذف</a>
                            <a href="{{url('admin/categories/edit/'.$category->id)}}" class="btn btn-info">تعديل</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
