<x-admin-layout>
  @section('extra-style')
{{--    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">--}}
  @endsection

  @section('content')
    <div id="calendar" class="w-screen h-2/3"></div>
  @endsection

  @section('extra-js')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function () {

        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          events: '/admin/booking/calendar',
          displayEventTime: false,

          eventDidMount: function(info) {
            if(info.event.extendedProps.status === 'confirmed'){
              info.el.style.backgroundColor = 'green';
            }
          }
        });

        calendar.render();

      });
    </script>
  @endsection
</x-admin-layout>
