
window.onload = function (){
    var html = document.documentElement;
    var body = document.body;
    var height_diff =   html.clientHeight - body.clientHeight;
    if(height_diff > 0) {
        document.getElementsByClassName('footer')[0].style.marginTop = height_diff - 70 + "px";
    }
    var width = html.clientWidth;
    var height = html.clientHeight;
    console.log('height->' +height); 
    console.log('width->' +width);
    if(height > 800) {
        /*---------------------
 SETTINGS
 */




 var gallerySettings = {
    markup    : '' +
    '<div class="popup">' +
    '<div class="popup_wrap">' +
    '<div class="popup_content"/>' +
    '</div>' +
    '<p id="leftArrow"><a href="#next" class="ignore-hash">Next →</a></p>' +
    '<p id="rightArrow"><a href="#prev" class="ignore-hash">← Previous</a></p>' +
    '</div>',
    // This is a custom variable
    gallery : '.popup_gallery',
    replaced : function($popup, $back){
        var plugin = this,
        $wrap = $('.popup_wrap', $popup);
        // Animate the popup to new size
        $wrap.animate({
            width : $wrap.children().children().outerWidth(true),
            height : $wrap.children().children().outerHeight(true),

        }, {
            duration : 600,
            easing : 'easeOutBack',
            step : function(){
                // Need to center the poup on each step
                $popup
                .css({
                    top : plugin.getCenter().top,
                    left : plugin.getCenter().left
                });
            },
            complete : function(){
                // Fade in!
                $wrap
                .children()
                .animate({opacity : 1}, plugin.o.speed, function(){
                    plugin.center();
                    plugin.o.afterOpen.call(plugin);
                });
            }
        });
    },
    show    : function($popup, $back){
        var plugin = this,
        $wrap = $('.popup_wrap', $popup);
        // Center the plugin
        plugin.center();
        // Default fade in
        $popup
        .animate({opacity : 1}, plugin.o.speed, function(){
            plugin.o.afterOpen.call(plugin);
        });
        // Set the inline styles as we animate later
        $wrap.css({
            width   : $wrap.outerWidth(true),
            height   : $wrap.outerHeight(false),
        });
    },
    afterClose    : function(){
        this.currentIndex = undefined;
    }
};
$(function () {
    /*---------------------
     POPUP
     */
     $('.popup_gallery').popup(gallerySettings);
    /*---------------------
     NEXT & PREVIOUS LINKS
     */
     $(document).on('click', '[href="#next"], [href="#prev"]', function (e) {
        e.preventDefault();
        var $current = $('.popup_active'),
        popup = $current.data('popup'),
        $items = $(popup.o.gallery);
        // If this is the first time
        // and we don't have a currentIndex set
        if (popup.currentIndex === undefined) {
            popup.currentIndex = $items.index($current);
        }
        // Fade the current item out
        $('.' + popup.o.contentClass)
        .animate({opacity: 0}, 'fast', function () {
                // Get the next index
                var newIndex = $(e.target).attr('href') === '#next'
                ? popup.currentIndex + 1
                : popup.currentIndex - 1;
                // Make sure the index is valid
                if (newIndex > $items.length - 1) {
                    popup.currentIndex = 0;
                } else if (newIndex < 0) {
                    popup.currentIndex = $items.length - 1;
                } else {
                    popup.currentIndex = newIndex;
                }
                // Get the new current link
                $current = $($items[popup.currentIndex]);
                // Load the content
                popup.open($current.attr('href'), undefined, $current[0]);
            });
    });
});
$.extend($.easing, {
    easeOutBack: function (x, t, b, c, d, s) {
        if (s == undefined) s = 1.70158;
        return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
    },
    easeInBack: function (x, t, b, c, d, s) {
        if (s == undefined) s = 1.70158;
        return c*(t/=d)*t*((s+1)*t - s) + b;
    }
});
    }
};





