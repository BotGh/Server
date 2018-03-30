<!DOCTYPE html>

<html>
<head>
    <title>

    </title>
</head>
<body>
<div>
    <h1>Available Tables</h1>
    <ul>

        @foreach($Not_reserved as $Not_reserved)

            <li>{{$Not_reserved->tableName}} {{'with this id'}} {{ $Not_reserved->tableId }} {{'is available'}} </li>

        @endforeach

    </ul>
</div>
</body>
</html>