 $(function () {
            var anim, panel;

            $('body').on('click', '.btn-toggle-anim', function (e) {
                anim = $(this).data('anim');
                panel = $(this).parents('.card');
                panel.addClass('animated ' + anim).one(
                    'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
                    function () {
                        $(this).removeClass('animated ' + anim);
                    });
                e.preventDefault();
            });
        });