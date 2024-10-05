<div class="{{ $class }}">
    {{ $title }}
    <br>
    @if(Session()->has('login'))
        {{ Session()->get('login') }}
    @endif
</div>
<ul class="list-group">
    <a class="list-group-item btn btn-primary alert alert-primary {{ Request::path() == '/' ? 'active' : '' }}" href="">Home</a>
    <a class="list-group-item btn btn-primary alert alert-primary {{ Request::path() == '/student' ? 'active' : '' }}" href="">Student</a>
    <a class="list-group-item btn btn-primary alert alert-primary {{ Request::path() == '/faculty' ? 'active' : '' }}" href="">Faculty</a>
    <a class="list-group-item btn btn-primary alert alert-primary {{ Request::path() == '/book' ? 'active' : '' }}" href="">Book</a>
    <a class="list-group-item btn btn-primary alert alert-primary {{ Request::path() == '/book-type' ? 'active' : '' }}" href="">Book Type</a>
    <a class="list-group-item btn btn-primary alert alert-primary {{ Request::path() == '/author' ? 'active' : '' }}" href="">Author</a>
    @if (session()->has('type'))
        <a class="list-group-item btn btn-primary alert alert-primary {{ Request::path() == '/user' ? 'active' : '' }}"
        href="{{ route('user.index') }}">User</a>
    @endif
    <a class="list-group-item btn btn-primary alert alert-primary" href="{{ route('logout') }}"
        onclick="return confirm('Sure ? You Want to Logout')">Logout</a>
</ul>
