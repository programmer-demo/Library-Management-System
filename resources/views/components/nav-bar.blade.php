<div class="{{ $class }}">
    {{ $title }}
    <br>
    @if(Session()->has('login'))
        {{ Session()->get('login') }}
    @endif
</div>
<ul class="list-group">
    <a class="list-group-item btn btn-primary alert alert-primary
        {{ Request::path() == '/' ? 'active' : '' }}" href="{{ route('/') }}">Home</a>
    <a class="list-group-item btn btn-primary alert alert-primary
        {{ Request::path() == 'student' ? 'active' : '' }}" href="{{ route('student.index') }}">Student</a>
    <a class="list-group-item btn btn-primary alert alert-primary
        {{ Request::path() == 'faculty' ? 'active' : '' }}" href="{{ route('faculty.index') }}">Faculty</a>
    <a class="list-group-item btn btn-primary alert alert-primary
        {{ Request::path() == 'book' ? 'active' : '' }}" href="{{ route('book.index') }}">Book</a>
    <a class="list-group-item btn btn-primary alert alert-primary
        {{ Request::path() == 'book-type' ? 'active' : '' }}" href="{{ route('book-type.index') }}">Book Type</a>
    <a class="list-group-item btn btn-primary alert alert-primary
        {{ Request::path() == 'author' ? 'active' : '' }}" href="{{ route('author.index') }}">Author</a>
    @if (session()->has('type'))
        <a class="list-group-item btn btn-primary alert alert-primary {{ Request::path() == 'user' ? 'active' : '' }}"
        href="{{ route('user.index') }}">User</a>
    @endif
    <a class="list-group-item btn btn-primary alert alert-primary" href="{{ route('logout') }}"
        onclick="return confirm('Sure ? You Want to Logout')">Logout</a>
</ul>
