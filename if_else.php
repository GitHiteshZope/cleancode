<?php 
    //Not good
    function isShopOpen($day)
    {
        if ($day) {
            if (is_string($day)) {
                $day = strtolower($day);
                if ($day === 'friday') {
                    return true;
                } elseif ($day === 'saturday') {
                    return true;
                } elseif ($day === 'sunday') {
                    return true;
                }
                return false;
            }
            return false;
        }
        return false;
    }

    //Good
    function isShopOpen(string $day)
    {
        if (empty($day)) {
            return false;
        }

        $openingDays = ['friday', 'saturday', 'sunday'];

        return in_array(strtolower($day), $openingDays, true);
    }
?>