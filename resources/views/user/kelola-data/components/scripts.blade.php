<script>
    jQuery(document).ready(function(){
        jQuery("#add-event").submit(function(){
            alert("Submitted");
            var values = {};
            $.each($('#add-event').serializeArray(), function(i, field) {
                values[field.name] = field.value;
            });
            console.log(
                values
            );
        });
    });

    (function () {
        'use strict';
        // ------------------------------------------------------- //
        // Calendar
        // ------------------------------------------------------ //
        jQuery(function() {
            // page is ready
            jQuery('#calendar').fullCalendar({
                themeSystem: 'bootstrap4',
                // emphasizes business hours
                businessHours: false,
                defaultView: 'month',
                // event dragging & resizing
                editable: true,
                // header
                header: {
                    left: 'title',
                    // center: 'month',
                    right: 'today prev,next'
                },
                events: [
                    {
                        title: 'Meeting',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                        start: '2022-09-12',
                        tanggal: '2022-09-12',
                        className: 'fc-bg-lightgreen',
                        icon : "suitcase"
                    }
                ],
                dayClick: function(date, event, jsEvent, view) {
                    jQuery('#itanggal').val(date.format());
                    jQuery('#modal-view-add').modal();
                    
                    // if (date.format() == event.tanggal) {
                    //     alert('Tidak dapat input, data telah tersedia');
                    // } else {
                    //     jQuery('#modal-view-add').modal();
                    // }
                },
                eventClick: function(event, jsEvent, view) {
                    console.log(event.title);
                    jQuery('.event-icon').html("<i class='fa fa-"+event.icon+"'></i>");
                    jQuery('.event-title').html(event.title);
                    jQuery('.event-body').html(event.description);
                    jQuery('.eventUrl').attr('href',event.url);
                    jQuery('#modal-view-event').modal();
                },
            })
    });

    })(jQuery);
</script>