//This is the page where you have dropdown with default values(from the table)
//use sql query directly with a for loop to print value instead of foreach

<div class="col-sm-6 col-md-8">
    <select class="form-control" id="view_country">
   <option value="-1" disabled selected>Select Country</option>
        <?php foreach ($country_get as $each_country) { ?>
        <option value=<?php echo $each_country['country_id'] ?>><?php echo strtoupper($each_country['country_name']); ?></option>
          <?php } ?>
  </select>
  </div>

//This is the particular .js file, on which jquery script to do the action
/*onchange_update_state*/
//#view_country id of the country drop_down

$('body').on('change', '#view_country', function () {

    $index = $('#view_country :selected').val();
    $country_id = $('#view_country option:selected').val();
//    alert($index);
//    alert($country_id);
    $.ajax({
        type: 'post',
        url: 'exec/save_date.php',
        data: {
            country_id: $country_id,
            context: "fetch_state_from_country"
        },
        success: function (response)
        {
            console.log(response);
            $get_s = response.split(",");
            $push_str = "";
            $push_str = "<option value='-1' disabled hidden selected>Select State</option>";
            for (var i = 0; i < $get_s.length; i++)
            {
                $split = $get_s[i].split(':');
                $push_str += '<option value=' + $split[0] + '>' + $split[1].toUpperCase(); + "</option>";
            }
            $('#view_state').html($push_str);
        }
    });

});
/*end_onchange__udate_state*/

// remember this "url: 'exec/save_date.php'" and save_date.php file is 

<?php

require_once '../core/Database.php';//fetch files which are required
require_once '../core/Session.php';
require_once '../core/Hash.php';
session::init();  //initialize session

//object of db
$db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
if (isset($_POST['context'])) {

    switch ($_POST['context']) {
        case "fetch_state_from_country": save_register($db);
            break; 
}
}
else{
echo "UnAuthorized Access"
die(); //deflt_fn to destroy
}

//function as mentioned in the case

function fetch_state($db) {

    //$requested_country = $_POST['index'];
    $requested_country_id = $_POST['country_id'];

    //$get_c = "SELECT `country_id`, `country_name`  FROM `country` WHERE `status`=1";
    $get_s = $db->prepare("SELECT `state_id`, `state_name` FROM `state` WHERE `country_id`='$requested_country_id'  and `status`=1");
    $get_s->execute();
    $result_s = $get_s->fetchAll();
    $str = "";

    foreach ($result_s as $states_) {
        $str .= $states_['state_id'] . ":" . $states_['state_name'] . ",";
    }
    echo rtrim($str, ',');
}


//check jquery "success: function (response)"


//If any doubt, pls cnt me





