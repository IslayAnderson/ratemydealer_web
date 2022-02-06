<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
include_once "../inc/sql.php";
include_once "../inc/msc_func.php";
$data = new sqlinterface();
$sql = "SELECT * FROM `submissions`";
$submissions = $data->DBOps($sql, null);
?>
let map;

function initMap() {
    map = new google.maps.Map(document.querySelector("map"), {
        center: { lat: <?=$ipResult['lat']?>, lng: <?=$ipResult['lon']?> },
        zoom: 10,
    });

    const infoWindow = new google.maps.InfoWindow();

    google.maps.event.addListener(map, "click", (event) => {
        addMarker(event.latLng, map);
        document.querySelector('input[name=lat]').value = event.latLng.lat();
        document.querySelector('input[name=lon]').value = event.latLng.lng();
        document.querySelector('.modal').style.padding = "5vh";
        document.querySelector('.modal').style.height = "100vh";
        document.querySelector('.modal').style.opacity = "0";
        document.querySelector('.modal').style.opacity = "1";
    });

    function addMarker(location, map) {
        // Add the marker at the clicked location, and add the next-available label
        // from the array of alphabetical characters.
        new google.maps.Marker({
            position: location,
            map: map,
        });
    }

    <?php foreach($submissions as $key=>$submission): ?>
    let marker<?=$key?> = new google.maps.Marker({
        position: { lat: <?=$submission->lat?>, lng: <?=$submission->lon?> },
        map,
        title: '<p>Operating Hours: <?=$submission->time?></p>'+
            '<fieldset>' +
            '<label>Communication</label>'+
            <?php for($i=5;$i>=0;$i--): ?>
            '<span class="pin star fa fa-star <?php if($i<$submission->communication){echo "checked";}?>" data-name="communication" data-value="<?=$i?>"></span>' +
            <?php endfor;?>
            '</fieldset>'+
            '<fieldset>' +
            '<label>punctuality</label>'+
            <?php for($i=5;$i>=0;$i--): ?>
            '<span class="pin star fa fa-star <?php if($i<$submission->punctuality){echo "checked";}?>" data-name="punctuality" data-value="<?=$i?>"></span>' +
            <?php endfor;?>
            '</fieldset>'+
            '<fieldset>' +
            '<label>knowledge</label>'+
            <?php for($i=5;$i>=0;$i--): ?>
            '<span class="pin star fa fa-star <?php if($i<$submission->knowledge){echo "checked";}?>" data-name="knowledge" data-value="<?=$i?>"></span>' +
            <?php endfor;?>
            '</fieldset>'+
            '<fieldset>' +
            '<label>variety</label>'+
            <?php for($i=5;$i>=0;$i--): ?>
            '<span class="pin star fa fa-star <?php if($i<$submission->variety){echo "checked";}?>" data-name="variety" data-value="<?=$i?>"></span>' +
            <?php endfor;?>
            '</fieldset>'+
            '<fieldset>' +
            '<label>quality</label>'+
            <?php for($i=5;$i>=0;$i--): ?>
            '<span class="pin star fa fa-star <?php if($i<$submission->quality){echo "checked";}?>" data-name="quality" data-value="<?=$i?>"></span>' +
            <?php endfor;?>
            '</fieldset>'+
        ''
    });

    marker<?=$key?>.addListener("click", () => {
        infoWindow.close();
        infoWindow.setContent(marker<?=$key?>.getTitle());
        infoWindow.open(marker<?=$key?>.getMap(), marker<?=$key?>);
    });
    <?php endforeach; ?>
}

document.querySelectorAll(".star").forEach(function(item, index){
    item.addEventListener('click', function(e){
        let value = item.dataset['value'];
        let name = item.dataset['name'];
        for(let i=1;i<=5;i++){
            if(document.querySelector('.star[data-name="' + name + '"][data-value="' + i + '"]').classList.contains('checked')) {
                document.querySelector('.star[data-name="' + name + '"][data-value="' + i + '"]').classList.remove('checked');
            }
        }
        if(!item.classList.contains('checked')){
            for(let i=1;i<=value;i++){
                document.querySelector('.star[data-name="'+name+'"][data-value="'+i+'"]').classList.add('checked');
            }
        }else{
            for(let i=1;i<=value;i++){
                document.querySelector('.star[data-name="'+name+'"][data-value="'+i+'"]').classList.remove('checked');
            }
        }
        document.querySelector('input[name="' + name + '"]').value = value;
    })
})

