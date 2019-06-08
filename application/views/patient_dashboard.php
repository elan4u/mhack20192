<!DOCTYPE html>
<html lang="zxx">

    <head>
        <title>Medication Medical Category Bootstrap responsive Web Template | Home :: w3layouts</title>
        <?php $this->load->view('includes/css_headers') ?>
		<style>
		.counter
{
    background-color: #eaecf0;
    text-align: center;
}
.employees,.customer,.design,.order
{
    margin-top: 70px;
    margin-bottom: 70px;
}
.counter-count
{
    font-size: 18px;
    background-color: #00b3e7;
    border-radius: 50%;
    position: relative;
    color: #ffffff;
    text-align: center;
    line-height: 92px;
    width: 92px;
    height: 92px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    display: inline-block;
}

.employee-p,.customer-p,.order-p,.design-p
{
    font-size: 24px;
    color: #000000;
    line-height: 34px;
}
		</style>
    </head>

    <body>
        <div class="header-top-w3layouts">
            <?php $this->load->view('includes/top_menu') ?>
<div class="counter">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="design">
                    <p class="counter-count">31</p>
                    <p class="design-p">Token Number</p>
                </div>
            </div>
			
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="employees">
                    <p class="counter-count">15</p>
                    <p class="employee-p">Patients In Queue</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="customer">
                    <p class="counter-count">1.3</p>
                    <p class="customer-p">Approximate Waiting Time(hrs)</p>
                </div>
            </div>
        </div>
		<div class="py-4 text-center">
    <p>Above mentioned numbers are real time and will be adjusted autometically
        <!--| Design by <a href="http://w3layouts.com/">W3layouts</a>-->
    </p>

</div>
    <div class='row col-lg-12 col-md-12 col-sm-12 col-xs-12' >
	<p> </p>
	</div>
	</div>
</div>
            <!--banner-bottom-w3layouts-->
            <?php $this->load->view('includes/footer') ?>
            <?php $this->load->view('includes/js_footer') ?>
        </div>
    </body>
	<script>
	$(document).ready(function (){
	$('.counter-count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 5000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
	});
	</script>
</html>