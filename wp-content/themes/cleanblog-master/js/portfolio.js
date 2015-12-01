    $(function () {

        // Using jQuery Event API v1.3
        $('#calltoaction-btn').click(function() {
          
          console.log('click en calltoaction');
          
          ga('send', 'event', 'button', 'click', 'portfolio_calltoaction');
          
          location.href= 'http://www.4geeks.co/contactanos';
          return false;
        });
        
        var filterList = {
        
            init: function () {
            
                // MixItUp plugin
                // http://mixitup.io
                $('#portfoliolist').mixitup({
                    targetSelector: '.portfolio',
                    filterSelector: '.filter',
                    effects: ['fade'],
                    easing: 'snap',
                    // call the hover effect
                    onMixEnd: filterList.hoverEffect()
                });             
            
            },
            
            hoverEffect: function () {
            
                // Simple parallax effect
                $('#portfoliolist .portfolio').hover(
                    function () {
                        $(this).find('.bottom-label').stop().animate({top: 0}, 700, 'easeOutQuad');
                        $(this).find('img').stop().animate({top: -50}, 500, 'easeOutQuad');             
                    },
                    function () {
                        $(this).find('.bottom-label').stop().animate({top: 200}, 700, 'easeInQuad');
                        $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');                               
                    }       
                );              
            
            }

        };
        
        // Run the show!
        filterList.init();

        $('.portfolio').click(function(){

        	location.href = $(this).data("url");

        });
        
        
    }); 