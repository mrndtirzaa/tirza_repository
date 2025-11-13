<?php
// Helper function untuk alert/notification
function showAlert($message, $type = 'success') {
    $bgColor = $type === 'success' ? 'bg-green-500' : 'bg-red-500';
    return "
    <div id='alert' class='fixed top-4 right-4 {$bgColor} text-white px-6 py-4 rounded-lg shadow-lg z-50 animate-slide-in'>
        <div class='flex items-center gap-3'>
            <span>{$message}</span>
            <button onclick='closeAlert()' class='ml-2 font-bold'>×</button>
        </div>
    </div>
    <script>
        function closeAlert() {
            document.getElementById('alert').classList.add('animate-fade-out');
            setTimeout(() => document.getElementById('alert').remove(), 300);
        }
        setTimeout(closeAlert, 5000);
    </script>
    ";
}

// Helper function untuk pagination
function paginate($items, $perPage = 10, $currentPage = 1) {
    $total = count($items);
    $totalPages = ceil($total / $perPage);
    $offset = ($currentPage - 1) * $perPage;
    
    return [
        'items' => array_slice($items, $offset, $perPage),
        'total' => $total,
        'per_page' => $perPage,
        'current_page' => $currentPage,
        'total_pages' => $totalPages
    ];
}

// Helper function untuk search
function searchSchedules($schedules, $keyword) {
    return array_filter($schedules, function($schedule) use ($keyword) {
        $keyword = strtolower($keyword);
        return strpos(strtolower($schedule['title']), $keyword) !== false ||
               strpos(strtolower($schedule['description']), $keyword) !== false ||
               strpos(strtolower($schedule['speaker']), $keyword) !== false;
    });
}

// Helper function untuk get schedule minggu ini
function getThisWeekSchedules($schedules) {
    $today = date('Y-m-d');
    $nextWeek = date('Y-m-d', strtotime('+7 days'));
    
    return array_filter($schedules, function($schedule) use ($today, $nextWeek) {
        return $schedule['date'] >= $today && $schedule['date'] <= $nextWeek;
    });
}

// Helper function untuk get schedule hari ini
function getTodaySchedules($schedules) {
    $today = date('Y-m-d');
    
    return array_filter($schedules, function($schedule) use ($today) {
        return $schedule['date'] === $today;
    });
}

// Helper function untuk generate calendar
function generateCalendar($year, $month, $schedules) {
    $firstDay = mktime(0, 0, 0, $month, 1, $year);
    $daysInMonth = date('t', $firstDay);
    $startDay = date('w', $firstDay);
    
    $calendar = [];
    $currentDay = 1;
    
    for ($week = 0; $week < 6; $week++) {
        $calendar[$week] = [];
        for ($day = 0; $day < 7; $day++) {
            if (($week === 0 && $day < $startDay) || $currentDay > $daysInMonth) {
                $calendar[$week][$day] = null;
            } else {
                $date = sprintf('%04d-%02d-%02d', $year, $month, $currentDay);
                $daySchedules = array_filter($schedules, function($s) use ($date) {
                    return $s['date'] === $date;
                });
                
                $calendar[$week][$day] = [
                    'day' => $currentDay,
                    'date' => $date,
                    'schedules' => array_values($daySchedules)
                ];
                $currentDay++;
            }
        }
    }
    
    return $calendar;
}

// Helper function untuk truncate text
function truncateText($text, $length = 100) {
    if (strlen($text) <= $length) {
        return $text;
    }
    return substr($text, 0, $length) . '...';
}

// Helper function untuk validasi form
function validateRequired($fields, $data) {
    $errors = [];
    foreach ($fields as $field => $label) {
        if (empty($data[$field])) {
            $errors[$field] = "$label harus diisi";
        }
    }
    return $errors;
}

// Helper function untuk generate random ID
function generateId() {
    return time() . rand(1000, 9999);
}

// Sanitize input
function sanitize($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}
?>
