$(document).ready(function () {

    $(document).on('click','.btn-excluir', function () {
        var id = $(this).attr('data-idCad');
        $.ajax({
            url: 'https://regnfccb.online/index.php?url=excluir/excluirCad',
            type:'GET',
            data:{id:id},
            success:function (retorno) {
                console.log(retorno);
                var tabela = $('#tabela');
                tabela.load('https://regnfccb.online/ #tabela');
            }

        })
    })
    $(document).on('click', '.btn-status', function () {
        var id = $(this).attr('data-idCad');
        $.ajax({
            url: 'https://regnfccb.online/index.php?url=status/alterarStatus/' + id,
            type: 'GET',
            success: function (retorno) {
                console.log(retorno);
                var tabela = $('#tabela');
                tabela.load('https://regnfccb.online/ #tabela');
            }

        })
    })
    $(document).on('click', '.btn-alterar', function () {
        var id = $(this).attr('data-idCad');
        var snome = $(this).attr('data-nome');
        var sidade = $(this).attr('data-idade');
        var stel = $(this).attr('data-tel');
        console.log(snome);
        $('#nome').val(snome);
        $('#idade').val(sidade);
        $('#tel').val(stel);
        $.ajax({
            url: 'https://regnfccb.online/index.php?url=alterar/buscaCad/' + id,
            type: 'GET',
            dataType:'json',
            success: function (retorno) {
                $('#nome').val(retorno.nome);
                $('#idade').val(retorno.idade);
                $('#tel').val(retorno.tel);
                $('#cadastro_id').val(retorno.id);
                var tabela = $('#tabela');
                tabela.load('https://regnfccb.online/ #tabela');
            }
        })
    })
    $(document).on('click', '#btn-salvar', function () {
        var id = $('#cadastro_id').val();
        var nomes = $('#nome').val();
        var idades = $('#idade').val();
        var tels = $('#tel').val();
        $.ajax({
            url: 'https://regnfccb.online/index.php?url=alterar/alterarCad/' + id,
            type: 'GET',
            data: {nome:nomes,
                    idade:idades,
                    tel:tels,
            },
            success: function (retorno) {
                console.log(retorno);
                var tabela = $('#tabela');
                tabela.load('https://regnfccb.online/ #tabela');
            }
        })
    })

    $(document).on('click', '#btn-inserir', function () {
        var id = $('#cadastro_id').val();
        var nome = $('#nome').val();
        var idade = $('#idade').val();
        var tel = $('#tel').val();
        $.ajax({
            url: 'https://regnfccb.online/index.php?url=cadastrar/inserirCad/' + id,
            type: 'GET',
            data: {
                nome: nome,
                idade: idade,
                tel: tel,
            },
            success: function (retorno) {
                console.log(retorno);
            }
        })
    })
    


})
