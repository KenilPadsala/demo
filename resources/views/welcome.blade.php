<x-layout>

    <h1> {{ $email }} </h1>

    <p>{{ $name }}</p>

    <ol>
        @foreach ($hobbies as $item)
            <li> {{ $item }} </li>
        @endforeach
    </ol>

    <b>{{ $aadhaarcard }}</b>

    <br>

    <em>{{ $pancard }}</em>

    <br>

    <h3>{{ $electioncard }}</h3>

    <h1>{{ $mobilenumber }}</h1>

    @if ($age > 18)
        <p> You're Pass</p>
    @else
        <p> You're Fail</p>
    @endif

</x-layout>