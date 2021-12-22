@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Test</div>

                    @php
                    $myName = "Kaung Si Thu";
                    @endphp

                    <div class="card-body">
                        <x-alert color="success" mark="45" :href="$myName">San Kyi Tar</x-alert>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection

@section("foot")
    <script>
        Swal.fire(
            'The Internet?',
            'That thing is still around?',
            'question'
        )
    </script>
    @stop
