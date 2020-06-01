@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="GET" action="{{ route('contact.edit', ['id' => $contact->id]) }}">
                    @csrf
                    氏名 : {{ $contact->name }}
                    <br>
                    件名 : {{ $contact->title }}
                    <br>
                    メールアドレス : {{ $contact->email }}
                    <br>
                    ホームページ : {{ $contact->url }}
                    <br>
                    性別 : {{ $gender }} 
                    <br>
                    年齢 : {{ $age }} 
                    <br>
                    お問い合わせ内容 : {{ $contact->name }}
                    <br>
                    <input class="btn btn-info" type="submit" value="変更する">
                    </form>
                    <form method="POST" action="{{ route('contact.destroy', ['id' => $contact->id]) }}">
                    @csrf
                    <a href="#" class="btn btn-danger" data-id="{{ $contact->id }}" onclick="deletePost(this);">削除する</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function deletePost(e) {
    'use strict';
    if (confirm('本当に削除していいですか？')) {
        document.getElementById('delete_' + e.dataset.id).submit();
    }
}
</script>
@endsection
