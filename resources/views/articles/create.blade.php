
<form method="POST" action="articles/create" enctype="multipart/form-data">
    @csrf
        {{-- OU --}}
        {{ csrf_field() }}
    @include('partials.article-form')
</form>