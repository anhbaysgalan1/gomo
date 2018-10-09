@extends('main')
@section('title', 'Feedback')

@section('content')
<div class="ui stackable grid">
    <div class="wide centered column">
    <table class="ui sortable celled table">
        <thead>
            <tr>
            <th>Date</th>
            <th>Name</th>
            <th>E-mail address</th>
            <th>Nature of feedback</th>
            <th>Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach($feedbacks as $feedback)
            <tr>
                <td>{{ $feedback->created_at->format('Y-m-d') }}</td>
                <td>{{ $feedback->first_name }} {{ $feedback->last_name }}</td>
                <td>{{ $feedback->email }}</td>
                <td>{{ $feedback->nature }}</td>
                <td>{{ $feedback->details }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection
