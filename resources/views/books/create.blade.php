@if(isset($errors))
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form action="{{ route('books.store') }}" method="POST">
    <input type="hidden" name="_token" value="<?= csrf_token(); ?>">
    @include('books.shared._form')
    <input type="submit" value="Save">
</form>