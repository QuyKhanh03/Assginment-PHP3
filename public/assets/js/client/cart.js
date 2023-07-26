$(document).ready(function(){
    $('.add-cart').on('click', function(e){
        e.preventDefault();
        var id = $(this).data('id');
        var qty = $('.qty').val();
        var size_name = $('.size_name').val();
        console.log(id + ' ' + qty + ' ' + size_name);
    })
})


