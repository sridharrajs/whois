$(document).ready(function() {

    function getDomainInfo(domain) {
        $.ajax({
            url: 'WhoisProcessor.php',
            type: 'get',
            data: {
                query: domain
            },
            success: function(response) {
                var generalInfo = response.split('Registrant ID:');
                var registerInfo = generalInfo[1].split('Admin ID:');
                var adminInfo = registerInfo[1].split('Tech ID:');
                var techInfo = adminInfo[1];
                var domainInfo = generalInfo[0].split('Domain ID:');
                $('.general').html(domainInfo[0].replace(/<br\/>/g, ''));
                $('.domain').html(domainInfo[1]);
                $('.register').html(registerInfo[0]);
                $('.admin').html(adminInfo[0]);
                $('.tech').html(techInfo);
                $.get("AlexaProcessor.php", {
                    query: domain
                }).done(function(alexaInfo) {
                    $('.alexa').html(alexaInfo);
                });
                $('#getBtn').text('Look up');
                $('.container').show();
                return 'done';
            },
            error: function(ex) {
                console.log(ex);
            }
        });
    }

    $('#getBtn').click(function() {
        resetDisplay();
        var domain = $('#domainInp').val();
        $('#getBtn').text('Loading...');
        $.when(getDomainInfo(domain)).done(function(domainInfo) {
            $.get("AlexaProcessor.php", {
                query: domain
            }).done(function(alexaInfo) {
                $('.alexa').html(alexaInfo);
            });
        });
    });

    function resetDisplay() {
        $('.container').hide();
        $('.alexa').html('');
        $('.general').html('');
        $('.domain').html('');
        $('.register').html('');
        $('.admin').html('');
        $('.tech').html('');
    }

    $('#domainInp').keypress(function(e) {
        var keyEvent = e.which;
        if (keyEvent == 13) {
            $('#getBtn').click();
        }
    });

});
