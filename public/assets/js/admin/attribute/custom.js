$(document).ready(function (){
    $('#table-attr').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax" : "/admin/get-attributes",
        "columns": [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'values', name: 'values'},
            {data : 'created_at',name: 'created_at'},
            {data : 'updated_at',name: 'updated_at'},
            {data : 'action',name: 'action',orderable: false,searchable: false},
        ]
    })
    $('body').on('click','.btn-create',function(){
        $('#modal-attribute').modal('show')
        // $('#modal-attribute form')[0].reset()
    })



})
