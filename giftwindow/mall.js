(function() {
    "use strict";
    var $listGifts = $('#list-gifts.buy'),
        $buying = null,
        $moneyLi = $('#money-li');

    s.money = {coins: $moneyLi.data('coins'),
               $myCoins: $('.my-coins'),
               $myWinkcash: $('.my-winkcash'),
               winkcash: $moneyLi.data('winkcash')};

    if ($listGifts.length) {
        initBuyGift();
    }

    function initBuyGift() {
        var $buyTriggers = $('#list-gifts .buy-trigger'),
            $messageTemplate = $(
                '<div class="message-box"><div class="message"></div></div>'),
            $gifts = $listGifts.children('li');

        $gifts.find('.close').unbind('click')
            .click(function(event) {
            var $gift = $(this).closest('.gift');
            event.preventDefault();
            event.stopPropagation();
            $gift.closest('li').removeClass('expanded');
            $gift.find('.modal').addClass('off');
            $buying = null;
        });
        $gifts.click(function(event) {
            event.preventDefault();
            var $self = $(this);
            if (!$self.hasClass('expanded') && !$buying) {
                $(this).addClass('expanded');
                $buying = $self;
            }
        });

        $buyTriggers.click(function(event) {
            event.preventDefault();
            var $target = $(event.target).closest('.buy-trigger'),
                $form = $target.closest('form'),
                $li = $form.closest('li');

            if (!$li.hasClass('expanded')) {
                return true;
            } else {
                event.stopPropagation();
            }

            var $messageBox = $messageTemplate.clone(), targetMoney = '';
            $form.find('.message-box').remove();
            $messageBox.find('.message').html('Processing your transaction...');
            if ($target.hasClass('coins')) {
                $form.find('.box.m-coins').prepend($messageBox).removeClass('off');
                if (s.money.coins < $target.data('coins')) {
                    boughtErrorModal($form, {
                        coins: s.money.coins,
                        winkcash: s.money.winkcash,
                        errors: {'__all__': ['Insufficient Coins.']}
                    });
                    return true;
                }
            } else {
                $form.find('.box.m-winkcash').prepend($messageBox).removeClass('off');
                if (s.money.winkcash < $target.data('winkcash')) {
                    boughtErrorModal($form, {
                        coins: s.money.coins,
                        winkcash: s.money.winkcash,
                        errors: {'__all__': ['Insufficient WinkCash.']}
                    });
                    return true;
                }
                targetMoney = '&bought_wink=1';
            }
            $.ajax({
                dataType: 'json',
                data: $form.find('textarea,input[name=gift],' +
                                 'input[name=csrfmiddlewaretoken]').serialize() +
                      targetMoney,
                type: $form.attr('method'),
                url: $form.attr('action'),
                complete: function() {
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Could not buy gift. ' +
                          'Try again, maybe reload the page first.');
                },
                success: function(data) {
                    if (data.is_valid) {
                        s.money.$myCoins.html(data.coins);
                        s.money.$myWinkcash.html(data.winkcash);
                        s.money.coins = data.coins;
                        s.money.winkcash = data.winkcash;
                        $form.find('.message')
                                   .html('You just purchased this gift!');
                        setTimeout(function() {
                            $form.closest('.gift').find('.close').click();
                        }, 2000);
                    }
                    else {
                        boughtErrorModal($form, data);
                    }
                }
            });
        });
    }

    function boughtErrorModal($form, data) {
        $form.find('.message').html('');
        if (data.winkcash == 0 &&
            !s.money.$myWinkcash.hasClass('out')) {
            s.money.$myWinkcash.addClass('out');
        }
        if (data.coins == 0 &&
            !s.money.$myCoins.hasClass('out')) {
            s.money.$myCoins.addClass('out');
        }
        var $ul = s.generateErrorlist(data.errors);
        $form.find('.message-box').append($ul);
        setTimeout(function() {
            $form.closest('.gift').find('.close').click();
        }, 2000);
    }
})();
