@if(isset($errors))
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form action="{{ route('books.update', [$item->id] ) }}" method="POST">
    <input type="hidden" name="_token" value="<?= csrf_token(); ?>">
    <input type="hidden" name="_method" value="PATCH">
    @include('books.shared._form')
    <input type="submit" value="Save">
</form>