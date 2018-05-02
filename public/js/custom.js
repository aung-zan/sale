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

    var elem=$('#container ul');
    $('#viewcontrols a').on('click',function(e) {
        if ($(this).hasClass('gridview')) {
            elem.fadeOut(1000, function () {
                $('#container ul').removeClass('list').addClass('grid');
                $('#viewcontrols').removeClass('view-controls-list').addClass('view-controls-grid');
                $('#viewcontrols .gridview').addClass('active');
                $('#viewcontrols .listview').removeClass('active');
                elem.fadeIn(1000);
            });
        }
        else if($(this).hasClass('listview')) {
            elem.fadeOut(1000, function () {
                $('#container ul').removeClass('grid').addClass('list');
                $('#viewcontrols').removeClass('view-controls-grid').addClass('view-controls-list');
                $('#viewcontrols .gridview').removeClass('active');
                $('#viewcontrols .listview').addClass('active');
                elem.fadeIn(1000);
            });
        }
    });
});