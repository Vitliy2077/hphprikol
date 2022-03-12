<div class="well">
 
<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="text" name="domain" placeholder="www.domainname.ru" value="<?=$domain;?>" required="required"
style="width:250px; height:37px;">
<input type="submit" class="pretty medium primary btn" value="Whois Lookup" name="Submit"
style="color:#fff;">
</form>
 
</div>
<?php
if($domain) {
    $domain = trim($domain);
    if(substr(strtolower($domain), 0, 7) == "http://") $domain = substr($domain, 7);
    if(substr(strtolower($domain), 0, 4) == "www.") $domain = substr($domain, 4);
    if(ValidateIP($domain)) {
        $result = LookupIP($domain);
    }
    elseif(ValidateDomain($domain)) {
        $result = LookupDomain($domain);
    }
    else die("Invalid Input!");
    echo "<pre>\n" . $result . "\n</pre>\n";
}
?>
</div>