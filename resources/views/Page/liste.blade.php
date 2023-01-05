<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Liste </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>

    <div class="container mt-4">

        <div class="card">
            <div class="card-header">
                <table>
                    @foreach ($pages as $page )
                    <tr>
                        <td>{{$page->name}}</td>
                        <td>{{$page->email}}</td>
                        <td> {!! QrCode::size(50)->generate('/generate-qr-code'); !!}
                        </td>
                        <td> <a href="{{route('page.edit',$page->id)}}" class="btn-btn-primary">Edit</a>
                        </td>
                        <td>
                            <form method="POST" action="{{route('page.delete',$page->id)}}">
                                @csrf
                                @method('Delete')
                                <button type="submit" class="btn-btn-primary">Delete</button>
                            </form>
                        </td>
                    </tr>

                    @endforeach
                </table>
            </div>
        </div>

    </div>
</body>

</html>