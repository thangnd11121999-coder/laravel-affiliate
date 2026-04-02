<h1>Chi tiết Creator</h1>

<p>Full name: {{ $creator->full_name }}</p>
<p>Email: {{ $creator->email }}</p>
<p>Phone: {{ $creator->phone }}</p>
<p>Platform: {{ $creator->platform }}</p>
<p>Follower: {{ $creator->follower_count }}</p>
<p>Status: {{ $creator->status }}</p>
<p>Notes: {{ $creator->notes }}</p>

<a href="{{ route('creators.index') }}">Quay lại</a>