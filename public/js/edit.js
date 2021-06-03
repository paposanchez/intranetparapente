const { data } = require("jquery");

$(function(){

    $('#select-protect').on('change', onSelectProjectChange);

});
    function onSelectProjectChange()
    {
        var project_id = $(this).val();
        

        $.get('../api/servicios/5/mapa', function (data) {
            for (var i=0; i<data.length; ++i)
            console.log(data[i])
        });
    }
