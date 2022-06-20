@extends('layouts.app')

@section('main')
<div class="max-w-screen-xl mx-auto ">
    @include('parts.filter')
</div>
@include('parts.section')

@include('parts.pagination')
@include('parts.newsletter')


@endsection

