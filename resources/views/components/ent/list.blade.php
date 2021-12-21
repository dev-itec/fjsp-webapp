<div>
    <style>
        <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    </style>
    <div class="container mt-5">
        <h2 class="mb-4">Laravel 7|8 Yajra Datatables Example</h2>
        <table class="table table-bordered yajra-datatable">
            <thead>
            <tr>
                <th data-visible="false" scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">RUT</th>
                <th scope="col">Direccion</th>
                <th scope="col">Descripción</th>
                <th scope="col">Telefono</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th data-orderable="false" scope="col"></th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
        $(function () {

            var table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('students.list') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'username', name: 'username'},
                    {data: 'phone', name: 'phone'},
                    {data: 'dob', name: 'dob'},
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });

        });
    </script>
        <div class="row">
            <div class="col">
                <table class="table table responsive nowrap table-sm table-striped table-bordered" id="table" style="width: 100%;">
                    <thead>
                    <tr>
                        <th data-visible="false" scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">RUT</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th data-orderable="false" scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>

    <x-ent.editor></x-ent.editor>
    @endsection

    @section('scripts')

        @include("components.datatable")

        <script>
            //$("#telefono").mask("(999) 999-9999");

            let dt = null;
            let fn = '#modalEditarClientes';

            function reHandle(){
                $("*[name=btnCrear]").off("click", crear).on("click", crear);
                $("*[name=btnEditar]").off("click", editar).on("click", editar);
                $("*[name=btnGuardar]").off("click", guardar).on("click", guardar);
                $("*[name=btnMemo]").off("click", guardar).on("click", memo);
            }

            $(document).ready(function ($) {
                $("#telefono").mask("(999) 999-9999");

                dt = $('#table').DataTable({
                    dom: 'lBfrtip',
                    language: {url: dataTableLangPath},
                    responsive: true,
                    buttons: defaultButtons,
                    serverSide: true,
                    processing: false,
                    paging: true,
                    info: true,
                    search: {
                        caseInsensitive: true
                    },
                    ajax: {
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        url: "{{ route('clientes.data') }}",
                        type: 'POST',
                        contentType: "application/json",
                        data: function (d) {
                            return JSON.stringify(d);
                        }
                    },
                    columns: [
                        {data: 'id'},
                        {data: 'nombre'},
                        {data: 'apellido'},
                        {data: 'identificacion'},
                        //{data: 'tipo_identificacion'},
                        {data: 'tipo_identificacion', render: function (data, type, row, meta) {
                                return $(this).identificacionBadgeRender(data, "Cedula", "RIF", "Pasaporte", "otro");
                            }},
                        {data: 'direccion'},
                        {data: 'telefono'},
                        {data: 'correo'},
                        {data: 'persona_contacto'},
                        {data: 'distribuidor'},
                        {data: null, className:"text-right", width: "10%", render: function (data, type, row, meta)
                            {
                                let defaultMainActions =
                                    '<div class="btn-group">' +
                                    '   <button type="button" class="btn btn-sm btn-primary" name="btnEditar"><i class="fas fa-edit"></i> Editar</button>' +
                                    '   <button type="button" class="btn btn-sm btn-secondary" name="btnMemo"><i class="fas fa-eye"></i> Memo</button>' +
                                    '</div>';

                                return defaultMainActions;

                            }
                        }
                    ],
                    initComplete: function() {
                        // Handles
                        reHandle();
                        // Search Delay
                        $(this).doSearchDelay(dt);
                        // UI Fixes
                        $(this).dtUiFixes(dt);
                        // Loader
                        hideLoader();
                        // Columns
                        dt.columns.adjust();
                    }
                });
                dt.on('draw.dt', function () {
                    reHandle();
                });

            });

            function crear() {
                $(fn).modal("title", "Crear").modal('clear').modal('show');
            }

            function editar() {

                let datos = dt.row($(this).closest('tr')).data();

                $(fn).modal("title", "Editar").modal('clear').modal('show');

                $(`${fn} *[data-field=id]`).val(datos.id);
                $(`${fn} *[data-field=nombre]`).val(datos.nombre);
                $(`${fn} *[data-field=apellido]`).val(datos.apellido);
                $(`${fn} *[data-field=identificacion]`).val(datos.identificacion);
                $(`${fn} *[data-field=tipo_identificacion]`).val(datos.tipo_identificacion);
                $(`${fn} *[data-field=direccion]`).val(datos.direccion);
                $(`${fn} *[data-field=telefono]`).val(datos.telefono);
                $(`${fn} *[data-field=correo]`).val(datos.correo);
                $(`${fn} *[data-field=persona_contacto]`).val(datos.persona_contacto);
                $(`${fn} *[data-field=distribuidor]`).val(datos.distribuidor);
                $(`${fn} *[data-field=observaciones]`).val(datos.observaciones);

            }

            function guardar() {

                let model = {id: 0};
                $(`${fn} *[data-field]`).each(function () {
                    let fieldName = $(this).data('field');
                    let source = $(`*[data-field=${fieldName}]`);
                    let value = source.val();
                    if (source.attr('type') === "checkbox") {
                        value = source.is(':checked') ? 1 : 0;
                    }
                    else if (source.hasClass('datepicker')) {
                        value = source.datepicker('getDate').to1292();
                    }
                    Reflect.set(model, fieldName, value);
                });

                let method = "POST";
                let url = "{{ route('clientes.store') }}";

                if (model.id !== "") {
                    method = "PUT";
                    url = "{{ route('clientes.store') }}" + '/' + model.id;
                }

                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url: url,
                    data: model,
                    type: method,
                    success: function (r) {
                        $(fn).modal('clear').modal('hide');
                        dt.ajax.reload(reHandle);
                        Toast.fire({
                            icon: 'success',
                            title: 'Registro guardado correctamente'
                        });
                    },
                    error: function (xhr, status, error) {
                        if (xhr.responseJSON !== undefined && xhr.responseJSON.errorBag !== undefined){
                            $.each(xhr.responseJSON.errorBag, function (index, value ) {
                                Toast.fire({
                                    icon: 'error',
                                    title: value,
                                });
                            });
                        }
                        else {
                            Toast.fire({
                                icon: 'error',
                                title: xhr.responseJSON !== undefined ? xhr.responseJSON.message : xhr.responseText
                            });
                        }
                    }
                });
            }

            function memo() {
                let memo = dt.row($(this).closest('tr')).data().observaciones;
                if (memo != null) {
                    Swal.fire({title: 'Observación', text: memo});
                }
                else {
                    Toast.fire({
                        icon: 'warning',
                        title: 'No tiene observaciones por el momento'
                    });
                }
            }

        </script>
    @endsection
</div>
