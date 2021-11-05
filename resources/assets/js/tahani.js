// alert('Add custom js ');

/*===== SHOW NAVBAR  =====*/
$(document).on('click', '#header-toggle', function () {
    const sidebar = $('#nav-bar'),
        bodypd = $('#body-pd'),
        toggle = $('#header-toggle');

    sidebar.toggleClass('collapsed');
    bodypd.toggleClass('body-pd');

    document.cookie = "sidebar-collapsed=" + sidebar.hasClass('show') + "; expires=Sun, 7 May 2028 12:00:00 UTC; path=/";
    document.cookie = "sidebar-collapsed=" + bodypd.hasClass('body-pd') + "; expires=Sun, 7 May 2028 12:00:00 UTC; path=/";
    document.cookie = "sidebar-collapsed=" + toggle.hasClass('open') + "; expires=Sun, 7 May 2028 12:00:00 UTC; path=/";
});

