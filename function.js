$(function() {

    var operacao = "A"; //"A"=Adição; "E"=Edição

    var indice_selecionado = -1;

    var tbClientes = localStorage.getItem("tbClientes"); // Recupera os dados armazenados

    tbClientes = JSON.parse(tbClientes); // Converte string para objeto

    if (tbClientes == null) // Caso não haja conteúdo, iniciamos um vetor vazio
        tbClientes = [];

    function Adicionar() {
        var cli = GetCliente("Codigo", $("#txtCodigo").val());

        if (cli != null) {
            alert("Código já cadastrado.");
            return;
        }

        var cliente = JSON.stringify({
            Codigo: $("#txtCodigo").val(),
            Nome: $("#txtNome").val(),
            Telefone: $("#txtTelefone").val(),
            Email: $("#txtEmail").val()
        });

        tbClientes.push(cliente);

        localStorage.setItem("tbClientes", JSON.stringify(tbClientes));

        alert("Registro adicionado.");
        return true;
    }

    function Editar() {
        tbClientes[indice_selecionado] = JSON.stringify({
            Codigo: $("#txtCodigo").val(),
            Nome: $("#txtNome").val(),
            Telefone: $("#txtTelefone").val(),
            Email: $("#txtEmail").val()
        });
        localStorage.setItem("tbClientes", JSON.stringify(tbClientes));
        alert("Informações editadas.")
        operacao = "A";
        return true;
    }

    function Listar() {
        $("#tblListar").html("");
        $("#tblListar").html(
            "<thead>" +
            "	<tr>" +
            "<th></th>" +
            "	<th>Matéria</th>" +
            "	<th>G1</th>" +
            "	<th>G2</th>" +
            "	<th>Média</th>" +
            "	</tr>" +
            "</thead>" +
            "<tbody>" +
            "</tbody>"
        );

        for (var i in tbClientes) {
            var cli = JSON.parse(tbClientes[i]);
            $("#tblListar tbody").append("<tr>" +
                "	<td><img src='img/edit.png' alt='" + i + "' class='btnEditar'/><img src='img/delete.png' alt='" + i + "' class='btnExcluir'/></td>" +
                "	<td>" + cli.Codigo + "</td>" +
                "	<td>" + cli.Nome + "</td>" +
                "	<td>" + cli.Telefone + "</td>" +
                "	<td>" + cli.Email + "</td>" +
                "</tr>");
        }
    }

    function Excluir() {
        tbClientes.splice(indice_selecionado, 1);
        localStorage.setItem("tbClientes", JSON.stringify(tbClientes));
        alert("Registro excluído.");
    }

    function GetCliente(propriedade, valor) {
        var cli = null;
        for (var item in tbClientes) {
            var i = JSON.parse(tbClientes[item]);
            if (i[propriedade] == valor)
                cli = i;
        }
        return cli;
    }

    Listar();

    $("#frmCadastro").on("submit", function() {
        if (operacao == "A")
            return Adicionar();
        else
            return Editar();
    });

    $("#tblListar").on("click", ".btnEditar", function() {
        operacao = "E";
        indice_selecionado = parseInt($(this).attr("alt"));
        var cli = JSON.parse(tbClientes[indice_selecionado]);
        $("#txtCodigo").val(cli.Codigo);
        $("#txtNome").val(cli.Nome);
        $("#txtTelefone").val(cli.Telefone);
        $("#txtEmail").val(cli.Email);
        $("#txtCodigo").attr("readonly", "readonly");
        $("#txtNome").focus();
    });

    $("#tblListar").on("click", ".btnExcluir", function() {
        indice_selecionado = parseInt($(this).attr("alt"));
        Excluir();
        Listar();
    });
});

/*function calcularmedia() {
    var nota = Number(document.getElementById("nota[]").value);
    var onota = Number(document.getElementById("onota[]").value);
    var elemResult = document.getElementById("resultado[]");


    if (elemResult.textContent === undefined) {
        elemResult.textContent === String((nota + (2 * onota)) / 3);
    } else {
        elemResult.innerText = String((nota + (2 * onota)) / 3);
    }

};

(function($) {
    AddTableRow = function() {

        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input  type="text" name="materia[]" id="materia[]" maxlength="20"></td>';
        cols += '<td><input  type="text" id="nota[]" onblur="calcularmedia()" size="12"></td>';
        cols += '<td><input  type="text" id="onota[]" onblur="calcularmedia()" size="12"></td>';
        cols += '<td><span id="resultado[]"></span></td>';
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

})(jQuery);

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

})(jQuery);*/