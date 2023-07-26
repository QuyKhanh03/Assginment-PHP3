$(document).ready(function(){
    $('#search').on('keyup', function(){
        var search = $(this).val();
        if(search.trim() !== "") {
            $.ajax({
                url: '/search',
                method: 'get',
                data: {search: search},
                success: function(response){
                    var results = response;
                    $('#search-results').empty()
                    if(results.length > 0) {
                        $.each(results, function(key, value){
                            $('#search-results').append('' +
                                '<li class="mb-3"><a class="h6 " href="/product/'+value.id+'">' +
                                '<img style="width: 45px;height: 45px" src="/storage/images/products/'+value.image_primary+'" alt="'+value.name+'" class="img-fluid">' +
                                ' '+value.name+'</a></li> ')
                        })
                    } else {
                        $('#search-results').append('<li>No results found</li>')
                    }
                }
            })
        }else {
            $('#search-results').empty()
        }
    })
    $('.filter').on('change', function(){
        $('.form-filter').submit()
    })
})


