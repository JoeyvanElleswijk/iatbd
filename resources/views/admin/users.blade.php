@extends('default')
@section('content')
    <section class="user">
        <table class="user__table">
            @foreach($users as $user)
                @include('admin.components.admin--index')
            @endforeach
        </table>
    </section>
@endsection