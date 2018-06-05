 jQuery(document).ready(function () {
     "use strict";
                jQuery('#asia').vectorMap({
                    map: 'asia_en',
                    enableZoom: true,
                    showTooltip: true
                });
                jQuery('#usa').vectorMap({
                    map: 'north-america_en',
                    backgroundColor: '#333333',
                    color: '#ffffff',
                    hoverOpacity: 0.7,
                    selectedColor: '#666666',
                    enableZoom: true,
                    showTooltip: true,
                    scaleColors: ['#C8EEFF', '#006491'],
                    normalizeFunction: 'polynomial'
                });
                jQuery('#world').vectorMap({
                    map: 'world_en',
                    enableZoom: true,
                    showTooltip: true
                });
            });