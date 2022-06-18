$(document).ready(function(){
    $('.menu-btn').click(function(){
        $('.sidebar').css({
            'width':'60px',
            'font-size':'25px',
         });
        $('.text-link').hide();
        $('.close-btn').show();
        $('.menu-btn').hide();
    });

    $('.close-btn').click(function(){
        $('.sidebar').css({
            'width':'300px',
            'font-size':'18px',
        });
        $('.text-link').show();
        $('.close-btn').hide();
        $('.menu-btn').show();
    });
    $('.add_category-btn').click(function(){
        alert('worked');
    })
    $('.add_category').click(function(){
        $('#catModal').modal('show');
         $('.modal-title').text('Add a New Category');
    })
    // $('.save').click(function(){
    //     alert($('#category_name').val());
    // })

 });