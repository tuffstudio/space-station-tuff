(function() {
    tinymce.create('tinymce.plugins.intro', {
        init: function(ed, url) {
            ed.addButton('intro', {
                title: 'Intro',
                image: url + '/icons/intro.png',
                onclick : function() {
                    ed.execCommand('mceInsertContent', false, '[intro][/intro]');
                }
            });
        },
        createControl: function(n, cm) {
           return null;
        }
   });

   tinymce.PluginManager.add('intro', tinymce.plugins.intro);
})();
