<div class="container">
	<div class="row">
<?php

//    $user_details = $user->getUserDetails($_SESSION['user_token']);
//    echo "<pre>";
//    print_r($user_details);
//    echo "</pre>";        
?>
<div class="tabbable">
  <ul class="nav nav-tabs">
    <li class="active col-md-6"><a href="#tab1" data-toggle="tab">Single Games</a></li>
    <li class="col-md-6"><a href="#tab2" data-toggle="tab">Group Games</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="tab1">
        <table class="table table-striped">
        <thead>
          <tr>
            <th>Name</th>
            <th>Next Draw</th>
            <th>Jackpot</th>
            <th>Price</th>          
          </tr>
        </thead>
        <tbody>
<?php
    foreach ($user->getLotteries("variant/0/lang/en/timezone/Europe/Bucharest")['data'] as $value) {
        echo "<tr><td>".$value['name']."</td>";
        echo "<td>".$value['next_draw']."</td>";
        echo "<td>".$value['jackpot']."</td>";
        echo "<td>".$value['price'].$value['currency']."</td></tr>";                    
    }
?>
        </tbody>
        </table>        
    </div>
    <div class="tab-pane" id="tab2">
        <table class="table table-striped">
        <thead>
          <tr>
            <th>Name</th>
            <th>Next Draw</th>
            <th>Jackpot</th>
            <th>Price</th>          
          </tr>
        </thead>
        <tbody>
<?php
    foreach ($user->getLotteries("variant/1/lang/en/timezone/Europe/Bucharest")['data'] as $value) {
        echo "<tr><td>".$value['name']."</td>";
        echo "<td>".$value['next_draw']."</td>";
        echo "<td>".$value['jackpot']."</td>";
        echo "<td>".$value['price'].$value['currency']."</td></tr>";                    
    }
?>
        </tbody>
        </table>           
    </div>
  </div>
</div>
    
    
<!-- Modal -->
<div id="editProfile" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
   <form role="form" method="POST" action=""> 
       
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Profile</h4>
      </div>

      <div class="modal-body">
        <fieldset>
            <div class="form-group col-md-6">
                <label for="password">Firstname</label>
                <input type="text" class="form-control" name="name_first" id="name_first" placeholder="Firstname">
            </div>

            <div class="form-group col-md-6">
                <label for="confirm_password">Lastname</label>
                <input type="text" class="form-control" name="name_last" id="name_last" placeholder="Lastname">
            </div>

            <div class="form-group col-md-6">
                <label for="confirm_password">State</label>
                <input type="text" class="form-control" name="state" id="state" placeholder="State">
            </div>
            
            <div class="form-group col-md-6">
                <label for="password">City</label>
                <input type="text" class="form-control" name="city" id="city" placeholder="City">
            </div>
            
            <div class="form-group col-md-6">
                <label for="password">Street</label>
                <input type="text" class="form-control" name="street" id="street" placeholder="Street">
            </div>

            <div class="form-group col-md-3">
                <label for="confirm_password">Number</label>
                <input type="text" class="form-control" name="str_num" id="str_num" placeholder="Number">
            </div>
            
            <div class="form-group col-md-3">
                <label for="confirm_password">Zip</label>
                <input type="text" class="form-control" name="zip" id="zip" placeholder="Zip">
            </div>
        </fieldset>
          
      </div>
      <div class="modal-footer">
        <button type="submit" name="editProfile" class="btn btn-primary">Save</button>          
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </form>       
    </div>

  </div>
</div>
    
    
</div>
</div>  
    