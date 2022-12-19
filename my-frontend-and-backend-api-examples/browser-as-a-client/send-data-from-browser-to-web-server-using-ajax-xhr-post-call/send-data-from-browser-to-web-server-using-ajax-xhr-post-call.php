<!-- send-data-from-browser-to-web-server-using-ajax-xhr-post-call -->

<link rel="stylesheet" type="text/css" href="browser-as-a-client/send-data-from-browser-to-web-server-using-ajax-xhr-post-call/css/send-data-from-browser-to-web-server-using-ajax-xhr-post-call.css">
<script type="text/javascript" src="browser-as-a-client/send-data-from-browser-to-web-server-using-ajax-xhr-post-call/js/addition.js"></script>
<script type="text/javascript" src="browser-as-a-client/send-data-from-browser-to-web-server-using-ajax-xhr-post-call/js/ajax_xhr_call_post.js"></script>

<div id="send-data-from-browser-to-web-server-using-ajax-xhr-post-call_wrapper">
    
    <!-- ------------------------------------------------------------------------------------------------------- -->
    <div id="picture_container">

        <img src="browser-as-a-client/send-data-from-browser-to-web-server-using-ajax-xhr-post-call/images/send-data-from-browser-to-web-server-using-ajax-xhr-post-call.jpg" alt="send-data-from-browser-to-web-server-using-ajax-xhr-post-call"/>

    </div>

    <!-- ------------------------------------------------------------------------------------------------------- -->
    <div class="comment_container">

        <h3> TRY IT </h3>
        <p>
            Two numbers will be
            sent from a browser (client)
            to a web server (server)
            that will calculate
            and return the sum.
        </p>
        <p>
            I used my
            <a href="https://www.jeffdecola.com/my-php-containers/index.php?page=dynamic_items_container"> dynamic_items_container </a>
            php container for the layout
        </p>

    </div>

    <!-- ------------------------------------------------------------------------------------------------------- -->
    <div id="equation_container"  class = "box_container">
        <div class = "box_items_container">
            
            <div id ="operand_1_item" class = "input_item box_item">
                <div class="input_title">
                    OPERAND 1
                </div>
                <div id="operand_1_input" class="input_enter">
                    <input  id="operand_1_input_field"
                            name="operand1"
                            autocomplete="off"
                            placeholder="enter"
                            type="number"
                            min="-999999999" max="999999999"
                            onchange="operand_1_onchange()">
                </div>
            </div>

            <div id="operation_1_item" class = "operation_item box_item">
                <br />
                +
            </div>

            <div id ="operand_2_item" class = "input_item box_item">
                <div class="input_title">
                    OPERAND 2
                </div>
                <div id="operand_2_input" class="input_enter">
                    <input  id="operand_2_input_field"
                            name="operand2"
                            autocomplete="off"
                            placeholder="enter"
                            type="number"
                            min="-999999999" max="999999999"
                            onchange="operand_2_onchange()">
                </div>
            </div>

            <div id="operation_2_item" class = "operation_item box_item">
                <br />
                =
            </div>

            <div id="sum_item" class = "display_item box_item">
                <div class="display_title">
                    SUM
                </div>
                <div id="sum_display" class="display_info"> 
                    <div id="sum_display_text" class="display_info_text">
                    </div>
                </div> 
            </div>

        </div>
    </div>

    <!-- ------------------------------------------------------------------------------------------------------- -->
    <div id="process_container"  class = "box_container">
        <div class = "box_items_container">

            <div id="add_button_item" class = "button_item box_item">
                <div class="button_title">
                </div>
                <div id="add_button_push" class="button_push"
                    onmouseover="add_button_onmouseover()"
                    onmouseout="add_button_onmouseout()"
                    onclick="add_button_onclick()">
                    <div id="add_button_text" class="button_push_text">
                        ADD
                    </div>
                </div> 
            </div>

            <div class = "spacer_item box_item"></div>
            
            <div id="reset_button_item" class = "button_item box_item">
                <div class="button_title">
                </div>
                <div id="reset_button_push" class="button_push" 
                    onmouseover="reset_button_onmouseover()"
                    onmouseout="reset_button_onmouseout()"
                    onclick="reset_button_onclick()">
                    <div id="reset_button_text" class="button_push_text">
                        RESET
                    </div>                
                </div> 
            </div>

        </div>
    </div>

</div>

