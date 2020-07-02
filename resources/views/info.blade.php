
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Informações Pessoais</b></div>
                <div class="card-body">
                    @foreach ($info as $user)
                    <ul style="list-style-type: none">
                        <li>Nome: {{ $user -> name}}</li>
                        <li>Apelido: {{ $user -> surname}}</li>
                        <li>Email: {{ $user -> email}} </li>

                    </ul>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                    <a class="btn btn-primary" href="{{ url('change-password') }}">{{ __('Alterar Palavra-Passe') }}</a>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection


