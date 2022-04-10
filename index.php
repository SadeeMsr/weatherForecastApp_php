<?php

function fetchData($city, $lat, $lon)
{
    if ($city === "") {
        $city = "dhaka";
    }
    $url = "https://api.openweathermap.org/data/2.5/forecast?q=$city&units=metric&lat=$lat&lon=$lon &appid=359f0831c53fa20ed2ff23f00ae0904e";
    $contents = file_get_contents($url);
    return json_decode($contents);
}


$cityName = isset($_POST["city"]) ? $_POST["city"] : "";

$climate = fetchData($cityName, "", "");

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/faveicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>weather app</title>
</head>

<body>
    <div class="app-container container">
        <div class="row">
            <div class="col-6 pe-5">

                <div class="search">
                    <form action="" method="POST">
                        <input type="text" name="city" class="search-bar" placeholder="search"></input>

                        <button><i class="fa fa-search"></i></button>
                    </form>
                </div>

                <div>
                    <h1>Today</h1>
                    <h2 style="font-size:100px">
                        <?php
                          echo date("g:i a");
                        ?>
                    </h2>
                </div>

                <div class="daysW_container mt-5">

                <div class="d-flex justify-content-between ps-3 pe-3 mt-1 rounded-pill" style="background: rgba(15, 15, 30, 0.1); " >
                        <div>
                           <i>Day</i>
                        </div>
                        <div>
                           <i>Humidity</i>
                        </div>
                        <div>
                           <i>weather</i>
                        </div>
                        <div>
                            <i>Temp</i>
                        </div>
                    </div>


                <!-- next day -->
                    <div class="d-flex justify-content-between ps-3 pe-3 mt-1 rounded-pill" style="background: rgba(15, 15, 30, 0.1); " >
                        <div>
                            <?php
                            echo date('D', strtotime($climate->list[6]->dt_txt));
                            ?>
                        </div>
                        <div>
                            <?php
                            echo $climate->list[6]->main->humidity . "%";
                            ?>
                        </div>
                        <div>
                            <?php
                            echo '<img class="" src="http://openweathermap.org/img/wn/' . $climate->list[6]->weather[0]->icon . '@2x.png" height="40px" width="50px" alt="weather-icon">';
                            ?>
                        </div>
                        <div>
                            <?php
                            echo $climate->list[6]->main->temp . " °C";
                            ?>
                        </div>
                    </div>


                     <!-- 2nd next day -->
                    <div class="daysW_cards d-flex justify-content-between ps-3 pe-3 mt-1 rounded-pill" style="background: rgba(15, 15, 30, 0.1); ">
                        <div>
                            <?php
                            echo date('D', strtotime($climate->list[12]->dt_txt));
                            ?>
                        </div>
                        <div>
                            <?php
                            echo $climate->list[12]->main->humidity . "%";
                            ?>
                        </div>
                        <div>
                            <?php
                            echo '<img class="" src="http://openweathermap.org/img/wn/' . $climate->list[12]->weather[0]->icon . '@2x.png" height="40px" width="50px" alt="weather-icon">';
                            ?>
                        </div>
                        <div>
                            <?php
                            echo $climate->list[12]->main->temp . " °C";
                            ?>
                        </div>
                    </div>

                    <!-- 3rd next day -->
                    <div class="daysW_cards d-flex justify-content-between ps-3 pe-3 mt-1 rounded-pill" style="background: rgba(15, 15, 30, 0.1); ">
                        <div>
                            <?php
                            echo date('D', strtotime($climate->list[18]->dt_txt));
                            ?>
                        </div>
                        <div>
                            <?php
                            echo $climate->list[18]->main->humidity . "%";
                            ?>
                        </div>
                        <div>
                            <?php
                            echo '<img class="" src="http://openweathermap.org/img/wn/' . $climate->list[18]->weather[0]->icon . '@2x.png" height="40px" width="50px" alt="weather-icon">';
                            ?>
                        </div>
                        <div>
                            <?php
                            echo $climate->list[18]->main->temp . " °C";
                            ?>
                        </div>
                    </div>

                     <!-- 4th next day -->
                    <div class="daysW_cards d-flex justify-content-between ps-3 pe-3 mt-1 rounded-pill" style="background: rgba(15, 15, 30, 0.1); ">
                        <div>
                            <?php
                            echo date('D', strtotime($climate->list[24]->dt_txt));
                            ?>
                        </div>
                        <div>
                            <?php
                            echo $climate->list[24]->main->humidity . "%";
                            ?>
                        </div>
                        <div>
                            <?php
                            echo '<img class="" src="http://openweathermap.org/img/wn/' . $climate->list[24]->weather[0]->icon . '@2x.png" height="40px" width="50px" alt="weather-icon">';
                            ?>
                        </div>
                        <div>
                            <?php
                            echo $climate->list[24]->main->temp . " °C";
                            ?>
                        </div>
                    </div>

                    <!-- 4th next day -->
                    <div class="daysW_cards d-flex justify-content-between ps-3 pe-3 mt-1 rounded-pill" style="background: rgba(15, 15, 30, 0.1); ">
                        <div>
                            <?php
                            echo date('D', strtotime($climate->list[32]->dt_txt));
                            ?>
                        </div>
                        <div>
                            <?php
                            echo $climate->list[32]->main->humidity . "%";
                            ?>
                        </div>
                        <div>
                            <?php
                            echo '<img class="" src="http://openweathermap.org/img/wn/' . $climate->list[32]->weather[0]->icon . '@2x.png" height="40px" width="50px" alt="weather-icon">';
                            ?>
                        </div>
                        <div>
                            <?php
                            echo $climate->list[32]->main->temp . " °C";
                            ?>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-6 ps-5">
                <div id="status"></div>

                <div class="region">
                    <h2 id="city" style="text-transform: uppercase;">
                        <?php
                        echo $climate->city->name;
                        ?>
                    </h2>
                    <p id="country">
                        <?php
                        echo $climate->city->country;
                        ?>
                    </p>
                    <p class="">
                        <?php
                        echo date('d M, Y', strtotime($climate->list[0]->dt_txt));
                        ?>
                    </p>
                </div>

                <div class="weather">
                    <div id="temp">
                        <?php
                        echo $climate->list[0]->main->temp . " °C";
                        ?>
                    </div>
                    <div id="w-icon">
                        <?php
                        echo '<img src="http://openweathermap.org/img/wn/' . $climate->list[0]->weather[0]->icon . '@2x.png" alt="weather-icon">';
                        ?>
                    </div>
                </div>

                <p id="description"  style="text-transform: uppercase; font-style: italic;">
                    <?php
                    echo $climate->list[0]->weather[0]->description;
                    ?>
                </p>

                <div class="details">

                    <div class="wind">
                        <i class="fa fa-wind"></i>
                        <span>wind</span>
                        <span id="wind">
                            <?php
                            echo $climate->list[0]->wind->speed . " km/hr";
                            ?>
                        </span>
                    </div>
                    <div class="humidity">
                        <i class="fa fa-tint"></i>
                        <span>humidity</span>
                        <span id="humidity">
                            <?php
                            echo $climate->list[0]->main->humidity . "%";
                            ?>
                        </span>
                    </div>

                    <div>
                        <i class="fa fa-tachometer-alt"></i>
                        <span>pressure</span>
                        <span id="pressure">
                            <?php
                            echo $climate->list[0]->main->pressure;
                            ?>
                        </span>
                    </div>

                    <div>
                        <i class="fa fa-thermometer-three-quarters"></i>
                        <span>feels like</span>
                        <span id="feels-like">
                            <?php
                            echo $climate->list[0]->main->feels_like . " °C";
                            ?>
                        </span>
                    </div>

                    <div>
                        <i class="fa fa-arrow-up"></i>
                        <span>max temp</span>
                        <span id="temp-max">
                            <?php
                            echo $climate->list[0]->main->temp_max . " °C";
                            ?>
                        </span>
                    </div>

                    <div>
                        <i class="fa fa-arrow-down"></i>
                        <span>min temp</span>
                        <span id="temp-min" class="">
                            <?php
                            echo $climate->list[0]->main->temp_min . " °C";
                            ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>