<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <ul>
        <li><a href="{{ route('Products') }}">Prodotti</a></li>
        <li><a href="{{ route('FAQs') }}">FAQs</a></li>
        <li><a href="{{ route('Discounts') }}">Special Discounts</a></li>
        <li><a href="{{ route('About_us') }}">About Us</a></li>
        <li><a href="{{ route('Contacts') }}">Contacts</a></li>
        <li><a href="{{ route('Basket') }}">Basket</a></li>
    </ul>

    <h1>Welcome World!</h1>

    <h2>Hello {{ $name }} {{ $lastname }}</h2>

    <div>
        @forelse($class_mates as $class_mate)
            {{ $class_mate }}

            @if (!$loop->last) 
                ,
            @endif

        @empty
            <p>Non ci sono informazioni nel database</p>
        @endforelse
    </div>
</body>
</html>