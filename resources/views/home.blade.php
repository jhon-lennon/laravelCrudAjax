@extends('layout')

@section('home')
    <div class="container" >
        <div class="row">
            <div class="col">


<body onload="getAllTasks()">
    
</body>

                <h1 class="mt-5 text-center">Minhas Tarefas</h1>


                <button class="btn btn-primary">Tarefa afazer</button>
                <button class="btn btn-primary">Tarefas concuidas</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticCreate">Nova
                    tarefa</button>
                


                <table class="table"onload="getAllTasks()">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 80%">Tarefas</th>
                            <th class="text-center" scope="col">Opçoes</th>
                        </tr>
                    </thead>
                    <tbody id="table_tasks">
                        
                    </tbody>
                </table>

                <!-- Modal Create-->
                <div class="modal fade" id="staticCreate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Nova Tarefa</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="form_create" method="POST" action="{{route('create')}}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tarefa</label>
                                        <input type="text" class="form-control" name="text_task" id="">

                                    </div>

                                    <button class="btn btn-primary">Salvar</button>
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancelar</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
