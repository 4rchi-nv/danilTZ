window.showCase = {isActive: false};
var GeoInfo = {
    ip: '3.8.146.43',
    cityId: '37724',
    city: 'LONDON',
    countryCode: 'GB'
};

window.pageType = 'layer';
        window.hasComebacker = false;
        $(document).ready(function(){
            function removeComebacker(counter) {
                if ($('#comebacker_main_div').size() == 0 && counter <= 60) {
                    setTimeout(function(){
                        counter = counter + 1;
                        removeComebacker(counter);
                    }, 50);
                } else {
                    $('#comebacker_main_div').remove();
                }
            }
            var counter = 0
            removeComebacker(counter);
        });
    
