@extends('templates.master')

@section('content')
    <!-- Content -->
    <h1>{{ $book->title }}</h1>
    <h3>{{ $book->author }}</h3>
    <h3>Rp{{ number_format($book->detail->price, 0, '.', '.') }}</h3>
    <h3>Stock: {{ $book->detail->stock }}</h3>
    <form action="{{ route('purchase_book', ['id' => $book->id]) }}" method="POST">

        @csrf
        @method('POST')

        <!-- Buy Button -->
        <div class="d-flex justify-content-start">
        <?php
            if ( $book->detail->stock == 0) {
                echo '<input class="btn mt-auto btn-danger" type="submit" value="Not available" disabled>';
            } else {
                echo '<input class="btn mt-auto btn-success" type="submit" value="Buy">';
            };
        ?>
        </div>
    </form>
@endsection
