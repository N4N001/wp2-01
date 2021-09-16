<!DOC   TYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Převod měn</title>
</head>
<body>
<?php   $submit = filter_input(INPUT_POST, 'submit');
   
   if(isset($submit)) {
    $amount = $_POST['amount'];
    $currency = $_POST['currency'];
    
        if($currency == "czk_eur")
        {
            $exchange_rate = 0.04;
        }
        
        if($currency == "eur_czk")
        {
            $exchange_rate = 25;
        }
                
        $result = $amount * $exchange_rate;
        echo "$result"; 

   }


     else {?>
    <h1>Převod měn CZK, EUR</h1>
    <form method="post">
    <input type="number" id="amount" name="amount"> <label for="amount"> Částka </label>
     </br>
    <input type="radio" name="currency" id="czk_eur" value="czk_eur"> <label for="currency"> České Koruny na Euro</label> </br>
    <input type="radio" name="currency" id="eur_czk" value="eur_czk"> <lavel for="currency"> Euro na České Koruny </lavel>
  </select>
  </br>
  </br>
    
        <input type="submit" name="submit"> <label for="submit">Převést</label>

    <?php } ?>
</body>
</html>