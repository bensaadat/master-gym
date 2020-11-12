<?php

                $tz_object = new DateTimeZone('Africa/Casablanca');
            $datetime = new DateTime();
            $datetime->setTimezone($tz_object);
            $current_datetime =  $datetime->format('Y-m-d H:i');
            echo $current_datetime;
