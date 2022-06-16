<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <link href='css/style.css' rel='stylesheet' />
        <link href='fullcalendar/main.css' rel='stylesheet' />
        <script src='fullcalendar/main.js'></script>
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
                <p class='topictop'>日記一覧</p>
                作成
                <p class='topictop'>タスク一覧</p>
                作成
                <p class='topictop'>コミュニティ</p>
            </div>
            <div class="calendar">
                <div id='calendar'></div>
                calendar
            </div>
        </div>
    </body>
</html><?php /**PATH /home/ec2-user/environment/portfolio/resources/views/index.blade.php ENDPATH**/ ?>