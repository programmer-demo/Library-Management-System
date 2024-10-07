<div class="{{ $class }}">
    {{ $title }}
    <br>
    @if(Session()->has('login'))
            {{ Session()->get('login') }}
        @endif
</div>
<ul class="list-group">
    <a class="list-group-item btn btn-primary alert alert-primary
        {{ Request::path() == '/' ? 'active' : '' }}" href="{{ route('index') }}">Home</a>
    <a class="list-group-item btn btn-primary alert alert-primary
        {{ Request::path() == 'borrow' ? 'active' : '' }}" href="{{ route('borrow.index') }}">Borrow</a>
    <a class="list-group-item btn btn-primary alert alert-primary
        {{ Request::path() == 'book' ? 'active' : '' }}" href="{{ route('book.index') }}">Book</a>
    @if (session()->has('type'))
        <a class="list-group-item btn btn-primary alert alert-primary {{ Request::path() == 'user' ? 'active' : '' }}"
        href="{{ route('user.index') }}">User</a>
    @endif
    <a class="list-group-item btn btn-primary alert alert-primary" href="{{ route('logout') }}"
        onclick="return confirm('Sure ? You Want to Logout')">Logout</a>
</ul>
