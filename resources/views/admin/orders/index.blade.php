@extends('layouts.admin')
@section('content')
<div class="py-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">اسم الطلب</th>
                <th scope="col">السعر</th>

                <th scope="col">الأحداث</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product )
            <tr>
                <th scope="row">1</th>
                <td> {{ $product-> name}}</td>
                <td>{{ $product-> price}}</td>
                <td>
                    <a href="{{ url('products/delete/'.product->id)}}" class=" btn btn-danger">حذف</a>
                    <a href="{{ url('products/edit/'.product->id)}}" class=" btn btn-info">تعديل </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection