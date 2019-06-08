<!DOCTYPE html>
<html lang="zxx">

    <head>

        <title>Medication Medical Category Bootstrap responsive Web Template | Home :: w3layouts</title>
        <?php $this->load->view('includes/css_headers') ?>

        <style>
            .bg-img {
                /* The image used */
                background-image: url("doctor.jpg");

                min-height: 380px;

                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
            }

        </style>
    </head>

    <body>
        <div class="header-top-w3layouts">
            <?php $this->load->view('includes/top_menu') ?>
            <div class="container bg-img">
                <form action="save_data" id="registration_form" name="registration_form" method="post"  >

                    <div class="form-group row">
                        <label for="text"  class="col-sm-2 col-form-label">Patient Name :</label> 
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="name" name="first_name" >
                        </div>
                    </div>   
                    <div class="form-group row">
                        <label for="dropdown"  class="col-sm-2 col-form-label">Category :</label>
                        <div class="col-md-6">
                            <select class="form-control" name="category_filter" id="category_filter">  
                                <option value="">Select Category</option>                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleFormControlTextarea"  class="col-sm-2 col-form-label">Remarks :</label>
                        <div class="col-md-6">
                            <textarea class="form-control" id="exampleFormControlTextarea" rows="3" name="remarks"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark">Submit</button>
                </form>
            </div>
            <?php $this->load->view('includes/footer') ?>
            <?php $this->load->view('includes/js_footer') ?>
        </div>
        <script  language="JavaScript" type="text/javascript">
            $(document).ready(function () {
                get_cateogry_list();

                /* fetching all the doctors list*/
                function get_cateogry_list() {
                    $.ajax({
                        dataType: 'json',
                        url: 'get_cateogry',
                        type: 'POST',
                    }).done(function (response) {
                        console.log(response);
                        $.each(response, function (key, value) {
                            $('#category_filter')
                                    .append($("<option></option>")
                                            .attr("value", value['id'])
                                            .text(value['category']))

                        });
                    });
                }


            });

        </script>
    </body>
</html>