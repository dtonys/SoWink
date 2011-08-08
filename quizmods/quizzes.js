(function () {
    var $body = $('body'), $q_form;

    //All 'add Qstn' buttons disabled by default
    $('input[name="add_question"]').attr('disabled', 'disabled')
                                   .addClass('disabled');

    if ($body.hasClass('create-question')) {
        var $q_form = $('#main-content form');
        var $ans_accepted = $q_form.find('.answers input[type="checkbox"]'),
            accept_limit = $q_form.find('.answers').data('accept-limit');
        $ans_accepted.change(function (ev) {
            if ($ans_accepted.filter(':checked').length >= accept_limit) {
                $ans_accepted.not(':checked').attr('disabled', 'disabled');
            } else {
                $ans_accepted.removeAttr('disabled');
            }
        });
    }
    else if ($body.hasClass('stock-q')) {
        $q_form = $('#main-content form');
        $q_form.each(function(i) {
            var $ans_accepted = $(this).find('input[type="checkbox"]')
                                       .not('[value="other"]'),
                accept_limit = $q_form.find('.answers').data('accept-limit'),
                $curr_questn = $(this).find('input[name="add_question"]'),
                $all_others = $q_form.not($(this));

            $ans_accepted.change(function (ev) {
                //If at least 1 answer checked, enable 'add Qstn' button and
                //disable all other Questions
                if ($ans_accepted.filter(':checked').length >= 1) {
                    $curr_questn.removeAttr('disabled')
                                .removeClass('disabled');
                    $all_others.find('input[type="checkbox"]')
                                           .attr('disabled', 'disabled');
                    $all_others.closest('.post').addClass('disabled');
                }
                else {
                //If no answers checked, disable 'add Qstn' button
                //and enable all other questions
                    $curr_questn.attr('disabled', 'disabled')
                                .addClass('disabled');
                    $('input[type="checkbox"]').removeAttr('disabled');
                    $all_others.closest('.post').removeClass('disabled');
                }
                //If more than accept_limit answers checked,
                //disable checkboxes within question
                if ($ans_accepted.filter(':checked').length >= accept_limit) {
                    $ans_accepted.not(':checked').attr('disabled', 'disabled');
                } else {
                    $ans_accepted.removeAttr('disabled');
                }
            });
        });
    }
})();
