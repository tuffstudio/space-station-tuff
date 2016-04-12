(function() {
    tinymce.create('tinymce.plugins.quotes', {
        init: function(ed, url) {
            ed.addButton('quotes', {
                title: 'Quote',
                image: url + '/icons/quote.png',
                onclick : function() {
                    ed.execCommand('mceInsertContent', false, '[quote][/quote]');
                }
            });
        },
        createControl: function(n, cm) {
           return null;
        }
   });

   tinymce.PluginManager.add('quotes', tinymce.plugins.quotes);
})();
