$(document).ready(function() {
    // Função para ocultar o campo Duração e o ícone do relógio
    function hideDurationFieldAndIcon() {
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

    // Configura o MutationObserver para monitorar mudanças no DOM
    var observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            if (mutation.addedNodes && mutation.addedNodes.length > 0) {
                // Verifica se a alteração no DOM inclui adição de novos nós
                hideDurationFieldAndIcon();
            }
        });
    });

    // Inicia o observador no body do documento para capturar todas as alterações
    observer.observe(document.body, { childList: true, subtree: true });
});
