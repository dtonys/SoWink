(function () {
    _.templateSettings = {
        interpolate : /\{\{(.+?)\}\}/g
    };
    $('#id_f_password').showPassword();

    var STATUS_INTERVAL = 300000,  // update interval in ms, 5min
        status_ref = null,
        $body = $('body'),
        $modal_triggers = $('.modal-form-trigger'),
        $mobileVerifyModal = $('#mobile-verify-modal'),
        $overlay = $('#overlay');

    /*
     * When a tab is open, keep sending requests to show online.
     */
    function updateActivity() {
        $.ajax({
            url: '/js_activity',
            dataType: 'json',
            timeout: 5000,
            complete: function (jqXHR, textStatus) {
                status_ref = setTimeout(updateActivity, STATUS_INTERVAL);
            },
            success: function (data) {
                if (data.status == 0 && window && window.location &&
                    window.location.href) {
                    window.location.href = '/logout';
                }
            }
        });
    }
    /*
     * Set the above activity updater on a timeout.
     */
    $(document).ready(function () {
        status_ref = setTimeout(updateActivity, STATUS_INTERVAL);
    });

    /*
     * Prevent modals from closing when clicking on links in them?
     * Not sure what this is doing, actually.
     */
    $('.off a').live('click', function (ev) {
        ev.preventDefault();
    });

    /*
     * News feed modals for quizzes.
     */
    if ($body.hasClass('news')) {
        var $trigger = $('#news .quiz-result-trigger');
        $trigger.each(function(i) {
            var $self = $(this),
                $results = $self.closest('.post-content')
                                .find('.quiz-result-box'),
                self_position = $self.position(),
                self_top = self_position.top,
                self_left = 200,
                self_height = $self.height() + 5,
                $wrapper = $('<div class="quiz-modal pop-modal off"/>');
            $results.wrap($wrapper);
            $wrapper = $results.closest('.quiz-modal');
            $results.show();
            $wrapper.css('top', self_top + self_height);
            $wrapper.css('left', self_left);

            $self.click(function (ev) {
                ev.preventDefault();
                ev.stopPropagation();
                $wrapper.toggleClass('off');
            });
        });
    }

    /*
     * Account info modal.
     */
    s.functions = {};
    s.functions['account-info-modal'] = {
        success: function(data) {
            var ob = s.functions['account-info-modal'];
            ob.$form.find('ul.errorlist').remove();
            if (data.is_valid) {
                ob.$modal.addClass('off');
                if (data.completed) {
                    // open the next form - looking for.
                    var $looking_for_trigger = $('#looking-for-trigger');
                    if ($looking_for_trigger.length) {
                        $.data(document.body, 'username-changed', true);
                        $looking_for_trigger.click();
                    } else if (!data.verified) {
                        $mobileVerifyModal.removeClass('off');
                    } else {
                        window.location = '/profile/user/' + data.username;
                    }
                } else if (data.changed_phone) {
                        $mobileVerifyModal.find('.phone-number').html(
                            data.phone);
                        $mobileVerifyModal.find('input[name="phone"]').val(
                            data.phone);
                        $mobileVerifyModal.find('.step-1').hide();
                        $mobileVerifyModal.find('.errorlist').remove();
                        $mobileVerifyModal.find('.step-2').show();
                        $mobileVerifyModal.removeClass('off');
                } else {
                    // already active user, just close the modal.
                    $overlay.click();
                    return true;
                }
            }
            var $ul = s.generateErrorlist(data.errors);
            ob.$form.prepend($ul);
        }
    };
     /*
     * Send gift modal
     */   
    s.functions['send-gift-modal'] = {
        success: function(data) {
            var ob = s.functions['send-gift-modal'];
            ob.$form.find('ul.errorlist').remove();
            /*if (data.is_valid && data.action == 'change') {
                ob.$modal.find('.step-1').hide();
                ob.$modal.find('.errorlist').remove();
                ob.$modal.find('.step-2').show();
                // move to the next step,
                return false;
            } else if (data.is_valid && data.action == 'verify') {
                ob.$modal.addClass('off');
                // reload the current page
                window.location = window.location;
                return true;
            }*/
            var $ul = s.generateErrorlist(data.errors);
            ob.$form.prepend($ul);
        }
    };
    
    
    s.functions['mobile-verify-modal'] = {
        success: function(data) {
            var ob = s.functions['mobile-verify-modal'];
            ob.$form.find('ul.errorlist').remove();
            if (data.is_valid && data.action == 'change') {
                ob.$modal.find('.step-1').hide();
                ob.$modal.find('.errorlist').remove();
                ob.$modal.find('.step-2').show();
                // move to the next step,
                return false;
            } else if (data.is_valid && data.action == 'verify') {
                ob.$modal.addClass('off');
                // reload the current page
                window.location = window.location;
                return true;
            }
            var $ul = s.generateErrorlist(data.errors);
            ob.$form.prepend($ul);
        }
    };
    
    $mobileVerifyModal.find('.resend').click(function(ev) {
        ev.preventDefault();
        $mobileVerifyModal.find('.step-2').hide();
        $mobileVerifyModal.find('.step-1').show();
    });

    /*
     * Fairly generic code to handle modal triggers, showing, hiding,
     * and success events.
     *
     * If you add any modals to the page, make sure to define their actions in
     * s.functions[modal_id]
     */
    $modal_triggers.each(function(i) {
        var $self = $(this),
            modal_id = $self.data('for-modal'),
            $modal = $('#' + modal_id);
        $self.click(function(ev) {
            ev.preventDefault();
            ev.stopPropagation();
            if ($self.data('restore')) {
                $modal.removeClass('complete');
                $modal.children('.modal-form').show();
                $modal.children('.extra').remove();
            }
            if ($modal.hasClass('center-modal')) {
                $modal.css('margin-top', -$modal.height() / 2 - 18);
                $modal.css('margin-left', -$modal.width() / 2 - 18);
            }
           //$modal.find('a.close').remove(); This caused the "X" to not appear
           //                                 For the gift window
            if ($modal.data('overlay')) {
                $overlay.removeClass('off');
                if ($modal.data('overlay-sticky')) {
                    $overlay.data('sticky', 1);
                } else {
                    $modal.prepend('<a href="#" class="close">✘</a>');
                }
            }
            $modal.toggleClass('off');
        });
        $modal.find('form').submit(function(ev) {
            ev.preventDefault();
            var $form = $(this);

            s.functions[modal_id].$form = $form;
            s.functions[modal_id].$modal = $modal;
            $.ajax({
                dataType: 'json',
                type: 'POST',
                url: $form.attr('action'),
                data: $form.serialize(),
                success: s.functions[modal_id].success
            });
        });
    });
    /*
     * Overlay click close actions.
     */
    function closeModal(ev) {
        if (undefined !== ev) {
            ev.preventDefault();
        }
        if ($(this).data('sticky')) {
            return true;
        }
        $('.modal').addClass('off');
        $overlay.addClass('off');
    }
    $('.modal a.close,.modal a.cancel').live('click', closeModal);
    $overlay.click(closeModal);

    if ($('#account-info-modal').hasClass('inactive')) {
        $overlay.removeClass('off');
    }

    function noAreaWarn() {
        var $noAreaWarn = $('#no-area-warn');
        $noAreaWarn.find('.close').click(function(ev) {
            ev.preventDefault();
            $.cookie('no_area_warn', true, {expires: 1, path: '/'});
            $noAreaWarn.addClass('off');
        });
    }
    if ($('#no-area-warn').length) {
        noAreaWarn();
    }
})();