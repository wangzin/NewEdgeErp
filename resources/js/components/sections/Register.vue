<template>
    <div>
        <section class="divider parallax layer-overlay overlay-dark-8" data-stellar-background-ratio="0.5" data-bg-img="images/bg/bg1.jpg">
            <div class="container pt-0 pb-60">
            <div class="section-content">
                <div class="row">
                <div class="col-md-12 wow fadeInLeft mt-10 pr-30" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h3 class="bg-theme-colored p-15 pl-30 mb-0 text-white">Get Registration</h3>
                    <form id="volunteer_apply_form" class="bg-light p-30 pb-15" name="job_apply_form" action="#" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="form_name">Name <small>*</small></label>
                                <input id="form_name" name="form_name" type="text" placeholder="Enter Name" required="" class="form-control">
                            </div>
                        </div> 
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="form_email">Email <small>*</small></label>
                                <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-10">
                                <div class="styled-select">
                                <select id="booking_service" name="booking_service" class="form-control" required="">
                                    <option value="">- Select Your  Courses -</option>
                                <option value="Accounting Technoloiges">Accounting Technoloiges</option>
                                <option value="Chemical Engineering">Chemical Engineering</option>
                                <option value="Computer Technologies">Computer Technologies</option>
                                <option value="Software Engineering">Software Engineering</option>
                                </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="form_message">Message <small>*</small></label>
                        <textarea id="form_message" name="form_message" class="form-control required" rows="2" placeholder="Your cover letter/message sent to the employer"></textarea>
                    </div>
                    <div class="form-group">
                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                        <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Apply Now</button>
                    </div>
                    </form>
                    <!-- Job Form Validation-->
                </div>
                </div>
            </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
