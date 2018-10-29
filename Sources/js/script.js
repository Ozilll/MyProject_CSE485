// Tạo menu trong cột trái
(function($) {
    $.fn.simpleTab = function() {
        return this.each(function() {
            $("#tabs li").click(function() {
                $("#tabs li").removeClass('active');
                $(this).addClass("active");
                $(".tab_content").hide();
                var selected_tab = $(this).find("a").attr("href");
                $(selected_tab).fadeIn();
                return false;
            });
            $("#tabs li:first").click();
        });
    };
})(jQuery);
