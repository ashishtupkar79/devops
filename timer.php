<!DOCTYPE html>
<html>
<head>
    <title>Date Difference Calculator</title>
</head>
<body>
    <?php
        // Replace this with your PHP date
        $phpDate = "2023-08-28 12:00:00";
        echo 'Hello World';
    ?>
    <div id="timer"></div>
    <script>
        var phpDate = new Date("<?php echo $phpDate; ?>");
        var currentDate = new Date();
        var timeDifference = phpDate-currentDate  ; // Time difference in milliseconds
        //alert(timeDifference);
        var millisecondsPerDay = 24 * 60 * 60 * 1000; // Number of milliseconds in a day
        var millisecondsPer8Days = 8 * millisecondsPerDay; // Number of milliseconds in 8 days

        if (timeDifference < millisecondsPerDay) {
            // Less than 24 hours, display hours, minutes, and seconds
            var hours = Math.floor(timeDifference / (60 * 60 * 1000));
            var minutes = Math.floor((timeDifference % (60 * 60 * 1000)) / (60 * 1000));
            var seconds = Math.floor((timeDifference % (60 * 1000)) / 1000);

            var formattedTime = hours + " hours, " + minutes + " minutes, " + seconds + " seconds";
        } else if (timeDifference <= -millisecondsPer8Days) {
            // More than 8 days, display timing with negative marking
            var days = Math.floor(timeDifference / millisecondsPerDay);
            var hours = Math.floor((timeDifference % millisecondsPerDay) / (60 * 60 * 1000));
            var minutes = Math.floor(((timeDifference % millisecondsPerDay) % (60 * 60 * 1000)) / (60 * 1000));

            var formattedTime = days + " days, " + hours + " hours, and " + minutes + " minutes from the initial date.";
            formattedTime = "-" + formattedTime;
        } else {
            // Between 24 hours and 8 days, display regular timing
            var days = Math.floor(timeDifference / millisecondsPerDay);
            var remainingTime = timeDifference % millisecondsPerDay;
            var hours = Math.floor(remainingTime / (60 * 60 * 1000));
            var minutes = Math.floor((remainingTime % (60 * 60 * 1000)) / (60 * 1000));

            var formattedTime = days + " days, " + hours + " hours, and " + minutes + " minutes from the initial date.";
        }
        try {
            document.getElementById("timer").innerHTML =formattedTime;    
        } catch (error) {
            alert(error);
            
        }
        

        
    </script>
</body>
</html>





