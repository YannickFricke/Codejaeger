$(document).ready(function($) {
      $('#sitemap li').prepend('<div class="dropzone"></div>');
      $('#sitemap li').draggable({
            handle: ' > dl',
            opacity: .8,
            addClasses: false,
            helper: 'clone',
            zIndex: 100
        });
      $('#sitemap dl, #sitemap .dropzone li').droppable({
            accept: '#sitemap li',
            tolerance: 'pointer',
            drop: function(e, ui) {
                var li = $(this).parent();
                var child = !$(this).hasClass('dropzone');
                //If this is our first child, we'll need a ul to drop into.
                if (child && li.children('ul').length == 0) {
                    li.append('<ul/>');
                }
                //ui.draggable is our reference to the item that's been dragged.
                if (child) {
                    li.children('ul').append(ui.draggable);
                }
                else {
                    li.before(ui.draggable);
                }
                //reset our background colours.
                li.find('dl,.dropzone').css({ backgroundColor: '', borderColor: '' });
            },
            over: function() {
                $(this).filter('dl').css({ backgroundColor: '#ccc' });
                $(this).filter('.dropzone').css({ borderColor: '#aaa' });
            },
            out: function() {
                $(this).filter('dl').css({ backgroundColor: '' });
                $(this).filter('.dropzone').css({ borderColor: '' });
            }
        });
});
