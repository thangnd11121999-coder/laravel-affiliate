<h1>Danh sách Creator</h1>
<a href="  {{ route('creators.create') }}  ">+ thêm mới</a>


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
  </tr>
       @endforeach
</table>
