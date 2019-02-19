<?php
include './server/connect.php';
?>
<div id="chat_data"> 
                    <?php
                      $query = $db->query("SELECT * FROM Messages Order By msg_date DESC", PDO::FETCH_ASSOC);
                      if ($query->rowCount() ){
                           foreach( $query as $msg ){ ?>
                               <p><span style="font-weight:650;">@<?php print $msg['msg_user']; ?>:</span> <?php print $msg['msg_content']; ?></p>
                      <? 
                        }
                      }
                    ?>
                </div>