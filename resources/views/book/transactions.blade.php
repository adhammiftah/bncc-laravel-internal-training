@extends('templates.master')

@section('content')
<!-- Content -->
<div class="w-100 d-flex justify-content-center">
    <h1>My Transactions</h1>
</div>
<div class="w-100 d-flex justify-content-center">
    @if (count($transactions) == 0)
    <h1>You don't have any transactions yet</h1>
    @else
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Date</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
            <tr>
                <th scope="row">{{ $loop->index }}</th>
                <td>{{ $transaction->book->title }}</td>
                <td>{{ strftime("%d %b %Y %T", strtotime($transaction->created_at)) }}</td>
                <td>Rp{{ number_format($transaction->book->detail->price, 0, '.', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>

@endsection
