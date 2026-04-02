<h1>Sửa Creator</h1>

<form action="{{ route('creators.update', $creator -> id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="full_name" placeholder="Full name" value="{{ $creator -> full_name}}"><br>
    <input type="text" name="display_name" placeholder="Display name" value="{{ $creator -> display_name}}"><br>
    <input type="email" name="email" placeholder="Email" value="{{ $creator-> email }}"><br>
    <input type="text" name="phone" placeholder="Phone" value="{{ $creator-> phone }}"><br>
    <input type="text" name="platform" placeholder="Platform" value="{{ $creator-> platform }}"><br>
    <input type="number" name="follower_count" placeholder="Follower" value="{{ $creator-> follower_count }}"><br>
    <input type="text" name="status" placeholder="Status"  value="{{ $creator-> status }}"><br>
    <textarea name="notes" placeholder="Notes" value="{{ $creator-> notes }}"></textarea><br>

    <button type="submit">Xác nhận cập nhật</button>
</form>