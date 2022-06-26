
function getAllTasks() {

    let table = document.getElementById('table_tasks')
    console.log(table)

    $.ajax({
        url: "index",
        type: 'GET',
        dataType: 'json',
        success: function (res) {
            console.log(res);

            res.forEach((item) => {
                table.innerHTML += ` <tr>

            <td>${item.task}</td>
            <td class="text-center">
                <button onclick="status_task(${item.id})" class="btn btn-primary btn-sm"><i
                        class="fa fa-check"></i></button>
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                    data-bs-target="#staticEdit_${item.id}"><i class="fa fa-pencil"></i>
                </button>
                <button onclick="delete_task(${item.id})" class="btn btn-primary btn-sm"><i
                        class="fa fa-trash"></i></button>
            </td>
            
        </tr>

             <div class="modal fade" id="staticEdit_${item.id}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Editar Tarefa</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="form_edit" method="POST" action="{{route('edit')}}">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tarefa</label>
                                        <input type="text" class="form-control" value="${item.task}" name="text_task" id="">
                                    </div>
                                    <button onclick="edit_task(${item.id})"class="btn btn-primary">Salvar</button>
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancelar</button>
                                </form>



                            </div>
                        </div>
                    </div>
                </div>`
                console.log(item)
            });



        }
    });
}

function status_task(id) {
    console.log('status '+id)
}

function edit_task(id) {
    console.log('edit '+id)
}

function delete_task(id) {
    console.log('delete '+id)
}

function create_task() {
    console.log('create')
}
