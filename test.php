<script id="myAlertTemplate" type="text/x-kendo-template">
        <div class="myAlert">System alert generated at #= time # : #= myMessage #</div>
    </script>

    <?php
    $warningTemplate = new \Kendo\UI\NotificationTemplate();
    $warningTemplate->type('warning');
    $warningTemplate->template('<div class="myWarning">Warning: #= myMessage #</div>');

    $alertTemplate = new \Kendo\UI\NotificationTemplate();
    $alertTemplate->type('timeAlert');
    $alertTemplate->template('<div class="myAlert">System alert generated at #= time # : #= myMessage #</div>');
    // template content can also be defined separately. The above line can be replaced with:
    
    $alertTemplate->templateId('myAlertTemplate');
    $notification = new \Kendo\UI\Notification('notification');
    $notification->addTemplate($warningTemplate);
    $notification->addTemplate($alertTemplate);

    echo $notification->render();
    ?>

    <script>
    $(function(){
        var n = $("#notification").data("kendoNotification");

        // show a warning message using the built-in shorthand method
        n.warning({
            myMessage: "some warning message here"
        });

        // show a "timeAlert" message using the default show() method
        n.show({
            time: new Date().toLocaleTimeString(),
            myMessage: "Server will be restarted."
        }, "timeAlert");
    });
    </script>