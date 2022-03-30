@extends('layouts.base-layout')

@section('pageTitle', 'Movies')

@section('content')

    <table>
        <thead>
            <tr>
                <th> Titolo</th>
                <th>Titolo Originale</th>
                <th>Nazionalità Film</th>
                <th>Data di uscita</th>
                <th>Voto ricevuto</th>
            </tr>
        </thead>
        @foreach ($movies as $movie)
        <tbody>
            <tr>
                <td>{{$movie->title}}</td>
                <td>{{$movie->original_title}}</td>
                <td>{{$movie->nationality}}</td>
                <td>{{$movie->date}}</td>
                <td>{{$movie->vote}}</td>
            </tr>
        </tbody>
        @endforeach
    </table>

    <ul>
        @foreach ($ratings as $rating )
            <li>
               Titolo Film: {{$movie->title}} Voto: {{$rating->vote}}
            </li>
        @endforeach
        
    </ul>
   
@endsection

