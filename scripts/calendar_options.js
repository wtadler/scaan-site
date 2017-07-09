$(document).ready(function() {
    $('#calendar').fullCalendar({
      defaultView: 'list',
          // defaultDate: moment(),

          header: false,

          height: 302,

          views: {
          	list: {
          		duration: { days: 90 },
              listDayFormat: 'dddd LL',
              eventTimeFormat: 'h(:mm)t',
          	}
          },

          googleCalendarApiKey: 'AIzaSyB-VH_jUYf0thQ9HiZQdndaJVeWtDdh1L8',
          events: {
            googleCalendarId: 'nyu.edu_ifm76t83fckh8jviji92irkjk8@group.calendar.google.com'
        },

        eventRender: function(event, element, view) {
            if (event.location) {
               element.find(".fc-list-item-title")
               .append("<div class='small grayText'>" + event.location + "</div>");
           }
       }

   });
});
