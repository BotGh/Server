<!DOCTYPE html>

<html>
<head>
    <title>

    </title>
</head>
<body>
<div>
    <h1>Menus</h1>
<ul>

    @foreach($menu as $menu)

        <li>{{ $menu->menuName }}</li>

    @endforeach

</ul>
</div>
</body>
</html>