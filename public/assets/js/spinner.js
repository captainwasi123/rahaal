/*$(".box-circle").each(function() {
        let i = 0,
            that = $(this),
            circleBorder = that.find(".circle-border"),
            borderColor = circleBorder.data("color1"),
            animationColor = circleBorder.data("color2"),
            percentageText = that.find(".percentage"),
            percentage = percentageText.data("percentage"),
            degrees = percentage * 3.6;

        circleBorder.css({
            "background-color":  animationColor
        });

        setTimeout(function(){
            loopIt();
        },1);

        function loopIt(){
            i = i + 1

            if (i < 0) {
                i = 0;
            }

            if (i > degrees) {
                i = degrees;
            }

            percentage = i / 3.6;
            percentageText.text(percentage.toFixed(0)+"%");

            if (i <= 180){
                circleBorder.css('background-image','linear-gradient(' + (90 + i) + 'deg, transparent 50%,' + borderColor + ' 50%),linear-gradient(90deg, ' + borderColor + ' 50%, transparent 50%)');
            }
            else{
                circleBorder.css('background-image','linear-gradient(' + (i - 90) + 'deg, transparent 50%,' + animationColor + ' 50%),linear-gradient(90deg, ' + borderColor + ' 50%, transparent 50%)');
            }

            setTimeout(function(){
                loopIt();
            },1);
        }
    });*/