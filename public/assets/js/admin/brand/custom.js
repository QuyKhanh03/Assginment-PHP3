$(document).ready(function () {
    var table = $('#brandTable').DataTable({
        "processing": true,
        "serverSide": true,
        ajax: {
            url : "/admin/get-brands",
        },
        columns : [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data : 'created_at',name: 'created_at'},
            {data : 'updated_at',name: 'updated_at'},
            {data : 'action',name: 'action',orderable: false,searchable: false},
        ]
    })
    $('body').on('click','.btn-create',function(){
        $('#modal-brand').modal('show')
        $('#form-brand')[0].reset();
        $('.text-danger').remove();
        $('#id').val('');
        $('.modal-title').html('Thêm thương hiệu');
    })
    $('body').on('click','.btn-edit',function(){
        $('#form-brand')[0].reset();
        $('#modal-brand').modal('show')
        $('.modal-title').html('Sửa thương hiệu');
        $('.text-danger').remove();
        let id = $(this).attr('data-id');
        $.ajax({
            url : '/admin/edit-brand/'+id,
            type : 'GET',
            dataType : 'JSON',
            success : function(response){
                $('#id').val(response.data.id);
                $('#name').val(response.data.name);
            }
        })
    })
    $('body').on('click','.save',function(e) {
        e.preventDefault();
        let id = $('#id').val();
        let url;
        if (id) {
            url = '/admin/update-brand/' + id;
        } else {
            url = "/admin/create-brand";
        }
        $('.text-danger').remove();
        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'JSON',
            data: $('#form-brand').serialize(),
            success: function (response) {
                if (response.success) {
                    $('#modal-brand').modal('hide');
                    table.ajax.reload();
                    Swal.fire(
                        'Thành công!',
                        response.message,
                        'success'
                    )
                }else {
                    Swal.fire(
                        'Thất bại!',
                        response.message,
                        'error'
                    )
                }
            },
            error: function (err) {
                $.each(err.responseJSON.errors,function(key,val){
                    $('#'+key).after('<span class="text-danger">'+val+'</span>')
                })
                toastr["error"]("Có lỗi xảy ra", "Thất bại");
            }
        })

    })
    $('body').on('click','.btn-delete',function(){
        var id = $(this).attr('data-id');
        Swal.fire({
            title: 'Bạn có chắc chắn muốn xóa?',
            text: "Nếu bạn xóa thì sẽ không khôi phục được !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',

        }).then((result) => {
            if(result.isConfirmed){
                $.ajax({
                    url : '/admin/delete-brand/'+id,
                    type : 'GET',
                    dataType : 'JSON',
                    success : function(response){
                        if(response.success){
                            table.ajax.reload();
                            Swal.fire(
                                'Thành công!',
                                response.message,
                                'success'
                            )
                        }else{
                            Swal.fire(
                                'Thất bại!',
                                response.message,
                                'error'
                            )
                        }
                    }
                })
            }
        })

    })

})
