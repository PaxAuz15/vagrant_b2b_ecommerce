@extends('layouts.app')

@section('content')

    <h2>Your Cart</h2>


    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($cartItems as $item)

            <tr>
                <td scope="row">{{ $item->name }}</td>
                <td>
                    {{-- {{ $item->price }} --}}
                    {{ Cart::session(auth()->id())->get($item->id)->getPriceSum() }}
                </td>
                <td>
                    <form action="{{ route('cart.update', $item->id) }}">
                        <input name="quantity" type="number" value="{{ $item->quantity }}">
                        <input type="submit" value="save">
                    </form>
                </td>
                <td>
                <a href="{{ route('cart.destroy', $item->id)}}">Delete</a>
                </td>
            </tr>

            @endforeach

        </tbody>
     </table>

     <h3>
         Total Price : $ {{ \Cart::session(auth()->id())->getTotal()}}
     </h3>

     <a href="#" class="btn btn-primary" role="button">Proceed to checkout</a>

@endsection
