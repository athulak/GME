<!-- SECTION -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
<style>
    .icon-home {

        font-size: 1.5em;
        font-weight: 700;
        vertical-align: middle;
        color:#FFFFFF !important;
    }


    .box-home {
        /*background-color: tra;*/
        border-radius: 30px;
        /*background: rgba(250, 250, 250, 0.8);*/
        max-width: 270px;
        /*background-color: #0077cc ;*/
        min-width: 270px;
        min-height: 270px;
        max-height: 270px;
        padding: 15px;
    }
    .box-home_2 {
        background-color: #444;
        border-radius: 30px;
        background: rgba(250, 250, 250, 0.8);
        max-width: 185px;
        min-width: 120px;
        min-height: 160px;
        max-height: 185px;
        padding: 15px;
        padding: 0px !important;
    }

    a:hover {
        background-color: #FFFFFF !important;
        color:#FFFFFF !important;
    }

    .fa {
        font-weight: 900;
    }

    .col-sm-12 {
        margin-bottom: 10px;
    }

    @media (min-width: 768px) and (max-width: 1000px)  {
        #home_first_section{
            height: 550px;
        }
    }

    @media (min-width: 1000px) and (max-width: 1400px)  {
        #home_first_section{
            height: 590px;
        }
    }

    @media (min-width: 1400px) and (max-width: 1600px)  {
        #home_first_section{
            height: 700px;
        }
    }

    @media (min-width: 1600px) and (max-width: 1800px)  {
        #home_first_section{
            height: 800px;
        }
    }

    @media (min-width: 1800px) and (max-width: 2200px)  {
        #home_first_section{
            height: 900px;
        }
    }

    @media (min-width: 2200px) and (max-width: 2800px)  {
        #home_first_section{
            height: 1100px;
        }
    }
    @media (min-width: 2800px) and (max-width: 3200px)  {
        #home_first_section{
            height: 1450px;
        }
    }

    @media (min-width: 3200px) and (max-width: 4200px)  {
        #home_first_section{
            height: 1950px;
        }
    }

    @media (min-width: 4200px) and (max-width: 6000px)  {
        #home_first_section{
            height: 2550px;
        }
    }
    .parallax{
        background-attachment:fixed !important;
        background-size: 110% auto !important;
    }

    .wrapper{
        background-color: #b4b8c3;
    }


</style>

<section class="parallax" style="background-image: url('<?= base_url() ?>front_assets/images/cco-gme-gravity_lobby-clearspace.png');background-size: cover; height:200% ">
    <div class="row" >
        <div class="col-md-3 col-md-offset-2" style="margin-top: -50px; position: fixed">
            <img id="kiosk-sponsor" src="<?= base_url() ?>front_assets/images/cco-gme-gravity_kiosk-sponsors.png" alt="welcome" class="" style="height: 350px; width: 350px;">
        </div>
        <div class="col-md-3 col-md-offset-7" style="margin-top: -50px; position: fixed">
            <img id="kiosk-welcome" src="<?= base_url() ?>front_assets/images/cco-gme-gravity_kiosk-welcome.png" alt="welcome" class="" style="height: 350px; width: 350px;">
        </div>
    </div>
    <div class="container container-fullscreen" id="home_first_section">
        <div class="text-middle">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center m-t-0">
                    </div>
                    <div class="row justify-content-center " style="text-align: -webkit-center;">
                        <div class="col-md-4 col-sm-12 ">
                            <div style="text-align: center !important;">
                                <a class="icon-home" href="<?= base_url() ?>sessions">
                                    <div class="col-lg box-home p-5 text-center col-md-offset-5">
                                        <img src="<?= base_url() ?>front_assets/images/button_sessions-175.png" alt="welcome" class="m-t-40" style="height: 150px; width: 160px;">
                                        <br>
                                        <br>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 " style="text-align: center">
                            <a class="icon-home" href="<?=base_url().'sessions/product_theaters'?>"">
                            <div class="col-lg box-home p-5 text-center col-md-offset-3">
                                <!--                                <span class="fa fa-desktop"  style="font-size: 135px !important; color: #22A5DA; margin-top:50px;"></span>-->
                                <img src="<?= base_url() ?>front_assets/images/button_product-theaters-175.png" alt="welcome" class="m-t-40" style="height: 150px; width: 160px;">
                                <br>
                                <br>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-4  col-sm-12">
                            <a class="icon-home" href="<?= base_url().'claimCredit'?>">
                                <div class="col-lg box-home ml-5 mr-5 p-5 text-center col-md-offset-0">
                                    <!--                                <span class="fa fa-clipboard-check"  style="font-size: 135px !important; color: #22A5DA; margin-top:50px;"></span>-->
                                    <img src="<?= base_url() ?>front_assets/images/button_claim-credit-175.png" alt="welcome" class="m-t-40" style="height: 150px; width: 160px;">
                                    <br>
                                    <br>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Live Support Chat -->
<?php if ($liveSupportChatStatus): ?>
    <script>
        let base_url = "<?=base_url()?>";
        let support_app_name = "<?=getAppName("") ?>";
        let attendee_id = "<?=$this->session->userdata('cid')?>";
        let attendee_name = "<?=$this->session->userdata('fullname')?>";
    </script>
    <script src="https://athulak.com/socket.io/socket.io.js"></script>
    <link rel="stylesheet" href="<?=base_url()?>front_assets/support_chat/style.css">
    <script src="<?= base_url() ?>front_assets/support_chat/live-support-chat.js"></script>
    <button class="live-support-open-button" onclick="openLiveSupportChat()"><i class="far fa-life-ring"></i> Live Support Chat</button>
    <div class="live-support-chat-popup" id="liveSupportChatForm">
        <span class="live-support-chat-title"><i class="far fa-life-ring"></i> Live Support Chat</span>
        <div class="live-support-chat-body">

            <div id="live-support-chat-texts" class="live-support-chat-texts">
                <!-- Will be filled by fillAllPreviousChats() function on pageReady -->
            </div>

            <div class="input-group text-center" style="width: 100%;position: absolute;bottom: 90px;">
                <span id="adminTypingHint" style="display: none;">Admin is typing...</span>
            </div>
            <div class="input-group" style="position: absolute;bottom: 45px;">
                <input id="liveSupportText" type="text" class="form-control" placeholder="Enter your message here...">
                <span class="input-group-btn">
                <button id="sendLiveSupportText" class="btn btn-default" type="button"><i class="far fa-paper-plane"></i> Send</button>
            </span>
            </div>

        </div>
        <button type="button" class="btn btn-sm end-chat-btn" onclick="endLiveSupportChat()">End Chat <i class="fas fa-times-circle"></i></button>
    </div>
<?php endif; ?>
<!-- End of Live Support Chat -->

<script type="text/javascript">
    $(document).ready(function () {
        var page_link = $(location).attr('href');
        var user_id = <?= $this->session->userdata("cid") ?>;
        var page_name = "User Dashboard";
        $.ajax({
            url: "<?= base_url() ?>home/add_user_activity",
            type: "post",
            data: {'user_id': user_id, 'page_name': page_name, 'page_link': page_link},
            dataType: "json",
            success: function (data) {
            }
        });

        $('#toolbox').hide();
    });

    $(document).ready(function(){
        var msg = "<?= $this->session->flashdata('msgsuccess')?>";
        var msgerr ="<?= $this->session->flashdata('msgerr')?>";
        if(msg){
            alertify.success(msg);
        }
        if(msgerr){
            alertify.error(msgerr);
        }
    });
</script>
