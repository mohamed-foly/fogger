<html>
    <head>
        <title>Entries</title>
    </head>
    <body>
        <table border="3">
            <thead>
                <th>Id</th> <th>Host</th> <th>Message</th> <th>Details</th>
            </thead>
            <tbody>
                @foreach ($entries as $entry)
                    <tr>
                        <td>{{$entry->id}}</td> <td>{{$entry->host_name}} | {{$entry->host_address}}</td> <td>{{$entry->message}}</td> <td> <a href="{{route('entry.show', $entry->id)}}">Details</a> </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{$entries->links()}} --}}
        {!! $entries->render() !!}
    </body>
</html>