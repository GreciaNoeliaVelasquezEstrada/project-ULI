@extends("admin.app")

@section("content")
<div class="flex justify-center flex-wrap p-4 mt-5">
    @include("admin.person.form")

    return view("admin.index");
</div>
@endsection