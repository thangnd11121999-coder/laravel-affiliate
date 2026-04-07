<h1>Danh sách Creator</h1>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<a href="  {{ route('creators.create') }}  ">+ thêm mới</a>
<br>
<form action="{{ route('creators.index') }}" method="GET">
    <input type="text" name="keyword" placeholder="Tìm creator..." value="{{ request('keyword') }}">
    <button type="submit">Tìm</button>
</form>

<table border="1">
  <tr>
    <th>ID</th>
    <th>Full name</th>
    <th>Display Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Platform</th>
    <th>Flower Count</th>
    <th>Status</th>
    <th>Notes</th>
  </tr>
      @foreach($creators as $creator )
  <tr>
    <td>{{ $creator -> id }}</td>
    <td>{{ $creator -> full_name }}</td>
    <td>{{ $creator -> display_name }}</td>
    <td>{{ $creator -> email }}</td>
    <td>{{ $creator -> phone }}</td>
    <td>{{ $creator -> platform }}</td>
    <td>{{ $creator -> follower_count }}</td>
    <td>{{ $creator -> status }}</td>
    <td>{{ $creator -> notes }}</td>
    <td>
        <a href="{{ route('creators.edit', $creator->id) }}">Sửa</a>
    </td>
    <td>
        <form action="{{ route('creators.destroy', $creator -> id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit">Xóa</button>
        </form>
    </td>
    <td>
      <a href="{{ route('creators.show', $creator->id) }}">Xem</a>
    </td>
  </tr>
       @endforeach
</table>
{{ $creators->links('pagination::bootstrap-5') }}