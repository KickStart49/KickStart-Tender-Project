<?php 

$connect = mysqli_connect("127.0.0.1","root","","Kickstart");
$execute=mysqli_query($connect,"SELECT * FROM tender");
$ra = mysqli_num_rows($execute);
$cur = date("U");

while($datarow = mysqli_fetch_array($execute)){
  $form_last_date = strtotime($datarow["EndDate"]);
  $l = date("U",$form_last_date);
  $ld = date("d-m-Y h:i:s",$form_last_date);

  $form_id = $datarow["id"];
    if($cur <= $l){?>
    <script type="text/javascript">
           Notification.requestPermission().then(function(result) {
        if (result === 'denied') {
          console.log("Permission wasn't granted. Allow a retry.");
          return;
        }
        if (result === 'default') {
          console.log('The permission request was dismissed.');
          return;
        }
        // Do something with the granted permission.
      });
      if (!("Notification" in window)) {
          console.log("This browser does not support desktop notification");
        }

      else if (Notification.permission === "granted") {
        var not = "Form no. " + <?php echo $form_id;?> + " is ending on " + <?php echo $ld;?>; 
        
          var notification = new Notification(not);
          localStorage.setItem('notify', notification);
        
         notification.onclick = function(event) {
      event.preventDefault(); 
      window.open("http://127.0.0.1/TenderForm/view?fid=" + <?php echo $form_id;?>);
      
}
    
  }

 
  else if (Notification.permission !== 'denied' || Notification.permission === "default") {
    Notification.requestPermission(function (permission) {
      // If the user accepts, let's create a notification
      if (permission === "granted") {
        var notification = new Notification(not);
      }
    });
  }
</script><?php
}
}
?>
