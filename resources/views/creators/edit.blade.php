<h1>Sửa Creator</h1>

<form action="{{ route('creators.update', $creator->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="full_name" placeholder="Full name" value="{{ old('full_name', $creator->full_name) }}">
    @error('full_name')
        <div style="color:red">{{ $message }}</div>
    @enderror
    <br>

    <input type="text" name="display_name" placeholder="Display name" value="{{ old('display_name', $creator->display_name) }}">
    @error('display_name')
        <div style="color:red">{{ $message }}</div>
    @enderror
    <br>

    <input type="email" name="email" placeholder="Email" value="{{ old('email', $creator->email) }}">
    @error('email')
        <div style="color:red">{{ $message }}</div>
    @enderror
    <br>

    <input type="text" name="phone" placeholder="Phone" value="{{ old('phone', $creator->phone) }}">
    @error('phone')
        <div style="color:red">{{ $message }}</div>
    @enderror
    <br>

    <select name="platform">
        <option value="">--Chọn nền tảng--</option>
        <option value="facebook" {{ old('platform') == 'facebook' ? 'selected' : '' }}>Facebook</option>
        <option value="tiktok" {{ old('platform') == 'tiktok' ? 'selected' : '' }}>Tiktok</option>
        <option value="youtube" {{ old('platform') == 'youtube' ? 'selected' : '' }}>Youtube</option>
    </select>
    <br>

    <input type="number" name="follower_count" placeholder="Follower" value="{{ old('follower_count', $creator->follower_count) }}">
    @error('follower_count')
        <div style="color:red">{{ $message }}</div>
    @enderror
    <br>


       <select name="status">
        <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
        <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
        <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>

    </select>

    <textarea name="notes" placeholder="Notes">{{ old('notes', $creator->notes) }}</textarea>
    @error('notes')
        <div style="color:red">{{ $message }}</div>
    @enderror
    <br>

    <button type="submit">Xác nhận cập nhật</button>
</form>