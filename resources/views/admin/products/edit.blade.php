@extends('layouts.admin')
@section('content')
<div class=" py-3">
    <form action=" {{url('products/update' .$product->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="nameFormControlInput1" class="form-label">اسم المنتج</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}" placeholder="اسم المنتج ">
        </div>

        <div class="mb-3">
            <label for="quantityFormControlInput1" class="form-label">الكمية</label>
            <input type="number" class="form-control" id="quantity" name="quantity " value="{{$product->quantity}}" placeholder="الكمية">
        </div>
        <div class="mb-3">
            <label for="priceFormControlInput1" class="form-label">السعر</label>
            <input type="number" class="form-control" id="price" name="price" value="{{$product->price}}" placeholder="سعر المنتج">
        </div>
        <div class="mb-3">
            <label for="destreptionFormControlInput1" class="form-label">وصف المنتج</label>
            <input type="text" class="form-control" id="destreption" name=" destreption" rows="3">{{$product->destreption}}>
        </div>
        <div class="mb-3">
            <input type="submit" value=" احفظ" class="btn btn-info">
        </div>
        <div class="mb-3">
            <label for="categoryFormControlInput1" class="form-label">اختر الصنف </label>
            <select class="form-control" name="category" id="category">
                <option value="$category_name->id"> {{ $category_name -> name}}</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach


            </select>
        </div>

    </form>
</div>

@endsection