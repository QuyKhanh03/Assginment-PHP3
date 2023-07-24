$(document).ready(function(){

    $("select.select_size").select2({
        tags: true,
        tokenSeparators: [',', ' '],
    }).on('select2:selecting', function(e) {
        // Khi người dùng đang thêm một giá trị mới
        var value = e.params.args.data.id.trim().toLowerCase();

        // Lấy danh sách các giá trị đã được chọn
        var selectedValues = $(this).val() || [];
        selectedValues = selectedValues.map(v => v.trim().toLowerCase());

        // Kiểm tra xem giá trị mới có trùng với bất kỳ giá trị nào đã được chọn chưa
        if (selectedValues.indexOf(value) > -1) {
            // Nếu giá trị đã tồn tại, hủy bỏ việc thêm giá trị mới
            e.preventDefault();
            // Cập nhật lại Select2 để hiển thị đúng giá trị đã chọn
            $(this).val(selectedValues).trigger('change.select2');
        }
    });
    var table = $('#table_product').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "/admin/get-products",
        },
        "columns": [
            { data: "code_product", name: "code"},
            { data: "name", name: "name" },
            { data: "price", name: "price" },
            { data : "image", name: "image"},
            { data: "category_id", name: "category_id" },
            { data: "brand_id", name: "brand_id" },
            { data: "action", name: "action" , orderable: false, searchable: false}
        ]

    });

    $('body').on('click', '.btn-delete', function () {
        let id = $(this).attr('data-id');
        Swal.fire({
            title: 'Bạn có chắc chắn muốn xóa không?',
            text: "Bạn sẽ không thể khôi phục lại dữ liệu!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#28a745',
            confirmButtonText: 'Xóa',
            cancelButtonText: 'Hủy'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '/admin/delete-product/' + id,
                    type: 'GET',
                    dataType: 'JSON',
                    success: function (response) {
                        if (response.success) {
                            table.ajax.reload();
                            Swal.fire(
                                'Thành công!',
                                response.message,
                                'success'
                            )
                        }
                    }
                })
            }
        })
    })
})



