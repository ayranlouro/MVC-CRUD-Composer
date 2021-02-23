$(document).ready(function () {
    $('#search').click(function () {
        var id = $('#produto_lista').val();
        //console.log(id);
        if (id != '') {
            $.ajax({
                method: 'POST',
                data: { id : id },
                dataType: 'JSON',
                success: function (data) {
                    //console.log('Data aqui: ' + data);
                    $('#employee_details').css("display", "block");
                    $('#produto_ID').text(data.produto_id);
                    $('#produto_nome').text(data.produto_nome);
                    $('#produto_descricao').text(data.produto_descricao);
                    $('#produto_valor').text(data.produto_valor);
                    $('#produto_qtd').text(data.produto_qtd);
                    $('#produto_data').text(data.produto_data);
                }
            });
        } else {
            alert('Você deve escolher um produto');
        }
    });
});