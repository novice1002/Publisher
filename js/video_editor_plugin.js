(function() {
    tinymce.PluginManager.add('video_mce_button', function(editor, url) {
        editor.addButton('video_mce_button', {
            icon: false,
            text: "Embed Video",
            onclick: function() {
                editor.windowManager.open({
                    title: "Chèn Video",
                    body: [{
                        type: 'textbox',
                        name: 'VideoURL',
                        label: 'Video URL',
                        value: ''
                    },
                    {
                        type: 'textbox',
                        name: 'VideoCaption',
                        label: 'Video Caption',
                        value: ''
                    }],
                    onsubmit: function(e) {
                        editor.insertContent(
                            '[vd url="' +
                            e.data.VideoURL + 
                            '" ' + 'caption="' +
                            e.data.VideoCaption +'" ]'
                        );
                    }
                });
            }
        });
    });
})();