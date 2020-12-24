@extends('layouts.app')
@section('title-block')
    Товар 1
@endsection
@section('content')
    <div><img src="https://sapone.com.ua/uploads/shop/products/main/ff3759fed54de7b342f2a9ff3e8ad8ce.jpg" alt=""><br></div>
<p>Купи персонального помошника</p>
    Цена 100р
    <form method="GET" action="/cart">
        <input type="number" placeholder="Введите количество" name="quantity">
        <input type="submit" value="Купить">
    </form>
@endsection

