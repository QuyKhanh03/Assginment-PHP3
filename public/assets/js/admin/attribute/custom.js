$(document).ready(function (){

    var table = $('#table-attr').DataTable({
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
        $('#form-attribute')[0].reset();
        $('#id').val('');
        $('.modal-title').html('Thêm thuộc tính');
    })
    $('body').on('click','.btn-edit',function(){
        $('#modal-attribute').modal('show')
        $('.modal-title').html('Sửa thuộc tính');
        $('#form-attribute')[0].reset();
        let id = $(this).attr('data-id');
        $.ajax({
            url : '/admin/edit-attribute/'+id,
            type : 'GET',
            dataType : 'JSON',
            success : function(response){
                $('#id').val(response.data.id);
                $('#name').val(response.data.name);
                var values = $('#values');
                if(values.empty()){
                    for(var i = 0; i < response.data.values.length; i++){
                        var option = new Option(response.data.values[i], response.data.values[i], true, true);
                        values.append(option)
                    }
                }
            }
        })
    });

    $('body').on('click','.btn-delete',function(e){
       var id = $(this).attr('data-id');
       if(id) {
           Swal.fire({
               title: 'Bạn có chắc chắn không?',
               text: "Nếu bạn xóa thì sẽ không khôi phục được !",
               icon: 'warning',
               showCancelButton: true,
               confirmButtonColor: '#3085d6',
               cancelButtonColor: '#d33',
               confirmButtonText: 'Vâng, xóa nó!',
               cancelButtonText: 'Hủy'
           }).then((result) => {
               if (result.isConfirmed) {
                   $.ajax({
                       url: '/admin/delete-attribute/' + id,
                       type: 'GET',
                       dataType: 'json',
                          success: function (data) {
                              table.draw();
                              Swal.fire(
                                  'Đã xóa!',
                                  data.message,
                                  'success'
                              )
                              toastr["success"](data.message, "Thành công");
                          }
                   })
               }
           })
       }
    })

    $('body').on('click','.save',function(e){
        e.preventDefault();
        let id = $('#id').val();
        let url = '';
        if(id == ''){
            url = '/admin/add-attribute';
        }else {
            url = '/admin/update-attribute/'+id;
        }
        $.ajax({
            url : url,
            type : 'POST',
            dataType : 'JSON',
            data : $('#form-attribute').serialize(),
            success : function(data){
                $('.text-danger').remove();
                Swal.fire(
                    'Thành công!',
                    data.success,
                    'success'
                )
                $('#form-attribute').trigger("reset");
                $('#modal-attribute').modal('hide')
                table.draw()
                toastr["success"](data.success, "Thành công");
            },
            error : function (err){
                $.each(err.responseJSON.errors,function(key,val){
                    $('#'+key).after('<span class="text-danger">'+val+'</span>')
                })
                toastr["error"]("Có lỗi xảy ra", "Thất bại");
            }
        })
    })

    $("select").select2({
        tags: true,
        tokenSeparators: [',', ' ']
    })
})
