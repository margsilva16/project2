
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Olá {{ Auth::user()->name }}. Em que estás a pensar?</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif



                    <form method="POST" action="publicar">
                        @csrf                       

                        <textarea class="form-control" id="message" required name="message" rows="4" cols="50" style="resize: none"> </textarea>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Publicar') }}
                                </button>
                                </form>
                            </div>
                        </div>

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
                            <form method="post" action="/home/{{ $publication -> id}}">
                                {{method_field('DELETE')}}
                                @csrf
                                <td><button type='submit' class="btn btn-default" >Eliminar</button></td>
                            </form>    
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div> 
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

    @endsection


