@if($errors->any())
    <ul class="list-unstyled alert alert-danger">
        @foreach($errors->all() as $error)
            <li class="small mb-2 text-center">
                {{ $error }}
            </li>
        @endforeach
    </ul>
@endif
