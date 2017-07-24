$(document).ready(function() {

    /*
     |--------------------------------------------------------------------------
     | Форма для ленты новостей
     |--------------------------------------------------------------------------
    */

    var tein = $('.textarea-input'); // Поле ввода текста
    var tear = $('.textarea-area');  // Контейнер в которм находится поле для ввода

    // Развернуть форму
    tein.click(function () {
        tear.animate({
            height: '180px'
        }, 'slow');
        tinymce.init({  // запускаем редактор текста
            selector: "textarea",  // change this value according to your HTML
            skin: "my",
            language:"ru",
            plugins: ["link autolink image bbcode lists charmap textcolor colorpicker"],
            menubar: false,
            branding: false,
            toolbar: "undo redo | bold italic | forecolor backcolor | numlist bullist link image charmap",
            elementpath: false,
            resize: false,
            height: 140,
            width: "auto"
        });

        $('.textarea-buttons-panel').slideDown('slow'); // Показываем поле с кнопками
    });

    // Свернуть форму
    $('#feed-cancel').click(function () { // При нажатии на кнопку "отменить"

        tinymce.remove('#comment');  // Удаляем редактор текста
        $('.textarea-buttons-panel').slideUp('slow'); // Прячем контейнер с конпками
        tear.animate({          // Уменьшаем контейнер в котором поле для ввода
            height: '60px'
        }, 'slow');
        tein.slideDown('slow');  // Выводим поле для текста
        tein.val('');         // Убираем все символы из поля

    });
    //--------------------------------------------

    $('#prof-tooltip').tooltip();

});