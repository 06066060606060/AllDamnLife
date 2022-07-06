@extends('layouts.app')

@section('main')
<div class="max-w-screen-xl mx-auto ">
    @include('parts.filter')
    
</div>
@include('parts.new')
@include('parts.section')
{{$produits->appends(Request::all())->links('pagination::tailwind')}}


@endsection

