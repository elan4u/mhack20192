<!DOCTYPE html>
<html lang="zxx">

    <head>

        <title>Medication Medical Category Bootstrap responsive Web Template | Home :: w3layouts</title>
        <?php $this->load->view('includes/css_headers') ?>
        <style>
            .time_slot{
                padding-right:15px;

            }
            .slot{
                padding-bottom:10px;
            }
            .card{
                width: 100px;
                height: 30px;
            }
            .card-body{
                padding: 0rem; 
            }

        </style>>
    </head>

    <body>
        <div class="header-top-w3layouts">
            <?php $this->load->view('includes/top_menu') ?>

            <div class="container ">
                <form action="save_data" id="registration_form" name="registration_form" method="post"  >

                    <div class="form-group row">
                        <label for="text"  class="col-sm-2 col-form-label">Select Date</label> 
                        <div class="col-md-6">
                            <input type="date" class="form-control" id="date" name="date" onchange='displyTimeSlots()' required >
                        </div>
                    </div>   

<div id='divTimeSlot'>
                    <div class="form-group row">
                        <div class="container my-4">

                            <h2 class="my-5 h2">Time Slots</h2>


                            <div class="row slot">
                                <div class="form-group time_slot">
                                    <div class="card text-white bg-secondary mb-3" style="max-width: 7rem;text-align: center;">
                                        <div class="card-body">
                                            <p class="card-text text-white">10:30 AM</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group time_slot ">
                                    <div class="card text-white bg-secondary mb-3" style="max-width: 7rem;text-align: center;">
                                        <div class="card-body">
                                            <p class="card-text text-white">11:00 AM</p>
                                        </div>
                                    </div>
                                </div>
								<div class="form-group time_slot">
                                    <div class="card text-white bg-secondary mb-3" style="max-width: 7rem;text-align: center;">
                                        <div class="card-body">
                                            <p class="card-text text-white">11:30 AM</p>
                                        </div>
                                    </div>
                                </div><div class="form-group time_slot">
                                    <div class="card text-white bg-secondary mb-3" style="max-width: 7rem;text-align: center;">
                                        <div class="card-body">
                                            <p class="card-text text-white">12:00 PM</p>
                                        </div>
                                    </div>
                                </div>   </div>
                            <div class="row slot">
                                <div class="form-group time_slot" >
                                    <div class="card text-white bg-secondary mb-3" style="max-width: 7rem;text-align: center;">
                                        <div class="card-body">
                                            <p class="card-text text-white">12:30 PM</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group time_slot">
                                    <div class="card text-white bg-success mb-3" style="max-width: 7rem;text-align: center;">
                                        <div class="card-body">
                                            <p class="card-text text-white">01:00 PM</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group time_slot">
                                    <div class="card text-white bg-success mb-3" style="max-width: 7rem;text-align: center;">
                                        <div class="card-body">
                                            <p class="card-text text-white">01:30 PM</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group time_slot">
                                    <div class="card text-white bg-success mb-3" style="max-width: 7rem;text-align: center;">
                                        <div class="card-body">
                                            <p class="card-text text-white">03:00 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row slot">
                                <div class="form-group time_slot">
                                    <div class="card text-white bg-success mb-3" style="max-width: 7rem;text-align: center;">
                                        <div class="card-body">
                                            <p class="card-text text-white">03:30 PM</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group time_slot">
                                    <div class="card text-white bg-secondary mb-3" style="max-width: 7rem;text-align: center;">
                                        <div class="card-body">
                                            <p class="card-text text-white">04:00 PM</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group time_slot">
                                    <div class="card text-white bg-success mb-3" style="max-width: 7rem;text-align: center;">
                                        <div class="card-body">
                                            <p class="card-text text-white">04:30 PM</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group time_slot">
                                    <div class="card text-white bg-success mb-3" style="max-width: 7rem;text-align: center;">
                                        <div class="card-body">
                                            <p class="card-text text-white">05:00 PM</p>
                                        </div>
                                    </div>
                                </div>
                                 </div>
                            <div class="row">
                                <div class="form-group time_slot">
                                    <div class="card text-white bg-secondary mb-3" style="max-width: 7rem;text-align: center;">
                                        <div class="card-body">
                                            <p class="card-text text-white">05:30 PM</p>
                                        </div>
                                    </div>
                                </div> 
                                <div class="form-group time_slot">
                                    <div class="card text-white bg-success mb-3" style="max-width: 7rem;text-align: center;">
                                        <div class="card-body">
                                            <p class="card-text text-white">06:00 PM</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group time_slot">
                                    <div class="card text-white bg-success mb-3" style="max-width: 7rem;text-align: center;">
                                        <div class="card-body">
                                            <p class="card-text text-white">06:30 PM</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group time_slot">
                                    <div class="card text-white bg-success mb-3" style="max-width: 7rem;text-align: center;">
                                        <div class="card-body">
                                            <p class="card-text text-white">06:30 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
            </div>
			<div class="form-group row">
			<button id='btnAppointment' class='btn btn-danger' >Book Appointment</button>
                                    
                                </div>
			</div>
			

        </form>
    </div>
    <?php $this->load->view('includes/footer') ?>
    <?php $this->load->view('includes/js_footer') ?>
</div>

<script>
$(document).ready(function(){
	
	$('#divTimeSlot').hide();
	
});
function displyTimeSlots(){
$('#divTimeSlot').show();
}
</script>
</body>

</html>

