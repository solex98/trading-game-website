<!-- displays a HTML form via which a user can submit a stock's symbol -->

<!DOCTYPE html>

<html>
   
   <body>
<form action="quote.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autofocus class="form-control" name="symbol" placeholder="Symbol" type="text"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </fieldset>
</form>
  </body>
</html>
