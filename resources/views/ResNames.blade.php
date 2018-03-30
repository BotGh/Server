<!DOCTYPE html>

<html>
<head>
    <title>

    </title>
</head>
<body>
<div>
    <h1>Restaurant Names</h1>
    <ul>

        @foreach($restaurant as $restaurant)

            <li>{{ $restaurant->resName }}</li>

        @endforeach

    </ul>
</div>
</body>
</html>