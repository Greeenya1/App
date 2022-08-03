$(document).ready(function () {
    $('#form__signin').click(function() {
        $.ajax({
            url: 'index',  //Как пример, можно  просто /ajax. Тогда в роуте тоже исправь
            method: 'post',
            dataType: 'html',
            data: {text: 'Текст'},
            success: function(data){
                console.log(data);
            } }); });
});

