window.history.pushState(null, null, window.location.href);

window.onpopstate = function(event) {
    window.history.pushState(null, null, window.location.href);
};