$(document).ready(function () {

    var $info = $('.info');
    var $domainInp = $('#domainInp');
    var $btn = $('#getBtn');

    function getDomainInfo(domain) {
        $.ajax({
            url: 'WhoisProcessor.php',
            type: 'get',
            data: {
                query: domain
            },
            success: function (response) {
                $info.html(response);
            },
            error: function (ex) {
                $info.addClass('error');
                $info.html(ex);
            }
        }).done(function () {
            $btn.text('Look up');
        });
    }

    $('form').on('submit', function (e) {
        e.preventDefault();
        if ($domainInp.val().trim()) {
            $btn.click();
        }
    });

    $btn.on('click', function () {
        resetDisplay();
        var domain = $domainInp.val().trim();
        $btn.text('Loading...');
        getDomainInfo(domain);
    });

    function resetDisplay() {
        $info.html('');
        $info.removeClass('error');
    }

});
