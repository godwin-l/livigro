jQuery(document).ready(function ($) {    
    $(document).on('click', '.social-component .bd-social-share', function (e) {
        e.preventDefault();
        if($(this).data('share') == 'facebook') {
            var $href = $(this).data('href');
            var $url = $(this).data('url');
            
            var $link = $href + '?u=' + $url;
            window.open($link,'targetWindow', 'width=800, height=400', 'toolbar=no', 'location=0', 'status=no', 'menubar=no', 'scrollbars=yes', 'resizable=yes');
        }
        
        if($(this).data('share') == 'google' || $(this).data('share') == 'linkedin') {
            var $href = $(this).data('href');
            var $url = $(this).data('url');
            
            var $link = $href + '?url=' + $url;
            window.open($link,'targetWindow', 'width=800, height=400', 'toolbar=no', 'location=0', 'status=no', 'menubar=no', 'scrollbars=yes', 'resizable=yes');
        }
        
        if($(this).data('share') == 'twitter') {
            var $href = $(this).data('href');
            var $text = $(this).data('text');
            var $url = $(this).data('url');
            
            var $link = $href + '?text=' + $text + '&url=' + $url;
            window.open($link,'targetWindow', 'width=800, height=400', 'toolbar=no', 'location=0', 'status=no', 'menubar=no', 'scrollbars=yes', 'resizable=yes');
        }
        
        if($(this).data('share') == 'pinterest') {
            var $href = $(this).data('href');
            var $url = $(this).data('url');
            var $media = $(this).data('media');
            var $description = $(this).data('description');
            
            var $link = $href + '?url=' + $url + '&media=' + $media + '&description=' + $description;
            window.open($link,'targetWindow', 'width=800, height=400', 'toolbar=no', 'location=0', 'status=no', 'menubar=no', 'scrollbars=yes', 'resizable=yes');
        }
        
    });
});

