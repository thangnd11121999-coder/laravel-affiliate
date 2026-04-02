<h1>Thêm Creator</h1>

<form action="{{ route('creators.store') }}" method="POST">
    @csrf

    <input type="text" name="full_name" placeholder="Full name"><br>
    <input type="text" name="display_name" placeholder="Display name"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="text" name="phone" placeholder="Phone"><br>
    <input type="text" name="platform" placeholder="Platform"><br>
    <input type="number" name="follower_count" placeholder="Follower"><br>
    <input type="text" name="status" placeholder="Status"><br>

    <textarea name="notes" placeholder="Notes"></textarea><br>

    <button type="submit">Lưu</button>
</form>