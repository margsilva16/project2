
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Lista de Posts</b></div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Mensagem</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php ($c = 0)
                            @foreach ($publications as $publication)
                            @php ($c++)
                            <tr> 
                                <td><div id="D<?php echo $c; ?>R"> {{ $publication -> message}}</div></td> 
                                <td><input type="button" class="btn btn-default" id="D<?php echo $c; ?>" value="Down" class="move down"  onClick="MoveDown('D<?php echo $c; ?>', 'D<?php echo $c + 1; ?>');"/></td>
                                <td><input type="button" class="btn btn-default" id="U<?php echo $c; ?>" value="Up" class="move up"  onClick="MoveUp('D<?php echo $c; ?>', 'D<?php echo $c - 1; ?>');"/></td>
                        <form method="post" action="/list/{{ $publication -> id}}">
                            {{method_field('DELETE')}}
                            @csrf
                            <td><button type='submit' class="btn btn-default" >Eliminar</button></td>
                        </form>    
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-primary" href="{{ route('home') }}">{{ __('Página Inicial') }}</a>
                    <script type="text/javascript">
                        function MoveDown(roww, rowwN)
                        {
                            divv = document.getElementById(roww + 'R').innerHTML;
                            if (roww)
                            {
                                ch = document.getElementById(rowwN + 'R').innerHTML;
                                document.getElementById(rowwN + 'R').innerHTML = document.getElementById(roww + 'R').innerHTML;
                                document.getElementById(roww + 'R').innerHTML = ch;
                            }
                        }
                        function MoveUp(roww, rowwN)
                        {
                            divv = document.getElementById(roww + 'R').innerHTML;
                            if (roww)
                            {
                                ch = document.getElementById(rowwN + 'R').innerHTML;
                                document.getElementById(rowwN + 'R').innerHTML = document.getElementById(roww + 'R').innerHTML;
                                document.getElementById(roww + 'R').innerHTML = ch;
                            }
                        }
                    </script>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection


