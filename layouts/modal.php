<?php

    function modal_message($message)
    {
        echo '
        <!-- #region SECTION: Modal for message -->
        <div class="modal-container" id="modal-container">
            <div id="modal-bg" class="modal-bg">
            </div>
            <div class="modal bounceInLeft animated" id="modal">
                <div class="row modal-body">
                    <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                        <div class="not-found-container">
                            <div class="not-found-bar">
                                <span></span>
                                <span></span>
                                <span class="_close"><i class="far fa-times-circle"></i></span>
                            </div>
                            <div class="not-found-header"></div>
                            <div class="not-found-body">
                                <div class="row"><i class="far fa-smile-beam"></i></div>
                                <div class="row">
                                    <p>' . $message . '</p>
                                    <!-- <p>Click anywhere to close this window !!</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #endregion -->';
    }