<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <link href='fullcalendar/main.css' rel='stylesheet'>
        <script src='fullcalendar/main.js'></script>
        <link href='fullcalendar/core/main.css' rel='stylesheet' />
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth'
        });
        calendar.render();
        });
    </script>
    </head>
    <body>
        <div class="body">
            <div class="menu">
                メニュー
            </div>
            <div class="calendar">
                <div id='calendar'></div>
            </div>
        </div>
        
    </body>
</html><?php /**PATH /home/ec2-user/environment/portfolio/resources/views/calendar.blade.php ENDPATH**/ ?>