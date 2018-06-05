'use strict' ;
 var el = document.getElementById('sortable-list');
        var sortable = Sortable.create(el, {
            animation: 150
        });

        var container = document.getElementById("multi");
        var sort = Sortable.create(container, {
            animation: 150, // ms, animation speed moving items when sorting, `0` — without animation
            draggable: ".col-md-3", // Specifies which items inside the element should be sortable
            onUpdate: function (evt /**Event*/ ) {
                var item = evt.item; // the current dragged HTMLElement
            }
        });