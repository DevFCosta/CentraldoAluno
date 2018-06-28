function calcularmedia() {
    var nota = Number(document.getElementById("nota").value);
    var onota = Number(document.getElementById("onota").value);
    var elemResult = document.getElementById("resultado");


    if (elemResult.textContent === undefined) {
        elemResult.textContent === String((nota + (2 * onota)) / 3);
    } else {
        elemResult.innerText = String((nota + (2 * onota)) / 3);
    }

};


/*(function($) {
    AddTableRow = function() {

        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input  type="text" size="20"></td>';
        cols += '<td><input  type="text" id="nota" onblur="calcularmedia()" size="12"></td>';
        cols += '<td><input  type="text" id="onota" onblur="calcularmedia()" size="12"></td>';
        cols += '<td><span id="resultado"></span></td>';
        cols += '<td>';
        cols += '<button class="btn btn-large btn-danger" onclick="RemoveTableRow(this)" type="button">Remover</button>';
        cols += '</td>';

        newRow.append(cols);
        $("#products-table").append(newRow);


        return false;
    };

    RemoveTableRow = function(handler) {
        var tr = $(handler).closest('tr');

        tr.fadeOut(400, function() {
            tr.remove();
        });

        return false;
    };

})(jQuery);*/

$(document).ready(function() {
    var max_fields = 13; //max de 15 inscricoes de cada vez
    var x = 1;
    $('#AddTableRow').click(function(e) {
        e.preventDefault(); //prevenir novos clicks
        if (x < max_fields) {
            $('#products-table').append('\
                                    <tr class="remove' + x + '"><td><input type="text" name="materia[]" id="materia"></td>\
                                    <td><input type="text" name="nota[]" id="nota" onblur="calcularmedia()""></td>\
                                    <td><input type="text" name="onota[]" id="onota" onblur="calcularmedia()""></td>\
                                    <td>\
                                                <span id="resultado"></span>\
                                        \
                                    </td>\
                                    <td><button class="btn btn-large btn-danger" id="RemoveTableRow' + x + ' " type="button">Remover</button></td>\
                    ');
            x++;
        }
    });

    //this is not the best move, because will create overhead...
    //but is for simplicity
    //damn users
    $('#products-table').on("click", ".btn btn-large btn-danger", function(e) {
        e.preventDefault();
        var tr = $(this).attr('id');
        //alert ('remove: ' + tr);
        $('#products-table tr.' + tr).RemoveTableRow();
        x--;
    });

})(jQuery);