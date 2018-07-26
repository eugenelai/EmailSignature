<html>
  <head>
    <?php $prefill = true;?>
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<body>
  <div class="container">
    <div class="row">
      <img src="img/logo-shiseido.png" alt="">
    </div>
    </div>
  </div>
  <div class="container">
    <div class="row" id="formdiv">
        <div class="title"><h4>Create Email Signature</h4></div>
        <form action="email_signature.php" method="post" name"email_signature" target="_blank">
          <label for="name">Full Name</label> <input type="text" name="name" placeholder="Enter your full name" required <?php if ($prefill) { ?> value="Eugene Lai" <?php } else { ?> value="" <?php } ?>><br>
          <label for="email">Email Address</label> <input type="email" name="email" placeholder="Enter your email address" required <?php if ($prefill) { ?> value="eugenelai@shiseido.com.hk" <?php } else { ?> value="" <?php } ?>><br>
          <label for="jobtitle">Job Title</label> <input type="text" name="jobtitle" placeholder="Enter your official job title" required<?php if ($prefill) { ?> value="Manager - Information & Technology Transformation" <?php } else { ?> value="" <?php } ?>> <br>
          <label for="telephone">Telephone</label> <input type="tel"  name="telephone" placeholder="e.g. 852 1234 5678" required <?php if ($prefill) { ?> value="852 2262 7393" <?php } else { ?> value="" <?php } ?>><br>
          <label for="telephone">Fax (optional)</label> <input type="tel"  name="fax" placeholder="e.g. 852 1234 5678" <?php if ($prefill) { ?> value="852 2262 7393" <?php } else { ?> value="" <?php } ?>><br>
          <label for="mobile">Mobile (optional)</label> <input type="tel" name="mobile" placeholder="e.g. 852 1234 5678" <?php if ($prefill) { ?> value="852 9488 1938" <?php } else { ?> value="" <?php } ?>><br>

          <label for="brand">Select Brand</label>
          <select class="selector" name="brand" required>
            <option value="" disabled selected>Select your brand</option>
            <option name="brand" value="shiseidogroup">Shiseido Group</option>
            <option name="brand" value="shiseidobrand">Shiseido Brand</option>
            <option name="brand" value="bareminerals">bare Minerals</option>
            <option name="brand" value="cpb">Cle de Peau Beauté</option>
            <option name="brand" value="ipsa">IPSA</option>
            <option name="brand" value="nars">NARS</option>
            <option name="brand" value="dandg">Dolce & Gabbana</option>
            <option name="brand" value="pbd">PBD</option>
            <option name="brand" value="cpc1">CPC1</option>
            <option name="brand" value="cpc2">CPC2</option>
            <option name="brand" value="za">Za</option>
            <option name="brand" value="ettusais">ettusais</option>
            <option name="brand" value="sfd">SFD</option>

          </select>
          <br/>
          <input class="confirmation" type="submit">
        </form>
        <a href="#howTo"  type="button" class="toggleHowTo" data-toggle="modal" data-target="#howTo">
          Show instructions
        </a>

    </div>
  </div>


  <div class="modal fade" id="howTo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <ol>
            <li>Fill out the form.</li>
            <li>Once you click submt your email signature will be generated.</li>
            <li>Press CTRL+A to select all.</li>
            <li>Press CTRL+C to copy your email signature to the clipboard.</li>
            <li>Open your Outlook and click <strong>New Email</strong> at the top left corner of the Home tab.</li>
            <li>Click <strong>Signature</strong> from the top panel, next to Attach Item. A dropdown menu will appear, with options to add an existing signature to the email you're working on.</li>
            <li>Select Signatures from this menu to open a Signatures and Stationery window.</li>
            <li>Click <strong>New</strong> in the Signatures and Stationery window to create a new signature template.</li>
            <li>Press CTRL+P to paste your signature into the Stationery window.</li>
            <li>Click <strong>OK</strong>.</li>
          </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btnclose" data-dismiss="modal">Got it!</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
