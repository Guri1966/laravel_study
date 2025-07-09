<form action="{{ $action }}" method="post">
    @csrf
    <input type="submit" value="{{ $label }}" class="{{ $class ?? '' }}">
</form>