$(document).ready(function() {
    if (window.location.href.indexOf("/front/ticket.form.php?id=") > -1) {
        // Função para ocultar o campo Duração e o ícone do relógio
        function hideDurationFieldAndIcon() {
            // Seleciona todos os elementos que começam com o ID 'dropdown_actiontime'
            $('[id^="dropdown_actiontime"]').each(function() {
                var $selectContainer = $(this).closest('.field-container');
                if ($selectContainer.length) {
                    $selectContainer.hide(); // Oculta o contêiner do select

                    // Tenta encontrar e ocultar o ícone do relógio associado
                    var $icon = $selectContainer.prev('label').find('i.fas.fa-stopwatch');
                    if ($icon.length) {
                        $icon.hide(); // Oculta o ícone do relógio
                    }
                }
            });
        }

        // Inicia um intervalo para verificar se o campo Duração está presente
        var interval = setInterval(() => {
            // Verifica se ao menos um elemento com esse ID está presente
            if ($('[id^="dropdown_actiontime"]').length > 0) {
                clearInterval(interval); // Limpa o intervalo uma vez que o campo é encontrado
                hideDurationFieldAndIcon(); // Chama a função para ocultar o campo e o ícone
            }
        }, 100); // Checa a cada 100ms
    }
});

