$(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
        mySelect.find('option:selected').prop('disabled', true);
        mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
        mySelect.find('option:disabled').prop('disabled', false);
        mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
       liveSearch: true,
       maxOptions: 1
    });

    $('.uls-trigger').uls({
        onSelect : function( language ) {
            var languageName = $.uls.data.getAutonym( language );
            $( '.uls-trigger' ).text( languageName );
        },
        quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
    });

    // plugin installation
    //Vertical Tab
    $('#parentVerticalTab').easyResponsiveTabs({
        type: 'vertical', //Types: default, vertical, accordion
        width: 'auto', //auto or any width like 600px
        fit: true, // 100% fit in a container
        closed: 'accordion', // Start closed if in accordion view
        tabidentify: 'hor_1', // The tab groups identifier
        activate: function(event) { // Callback function if tab is switched
            var $tab = $(this);
            var $info = $('#nested-tabInfo2');
            var $name = $('span', $info);
            $name.text($tab.text());
            $info.show();
        }
    });
});