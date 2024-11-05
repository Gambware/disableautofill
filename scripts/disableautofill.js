$(document).ready(function() {
    const observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            $('input').attr('autocomplete', 'off');
        });
    });
    
    observer.observe(document.body, { childList: true, subtree: true });
});
