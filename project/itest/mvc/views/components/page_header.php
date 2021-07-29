<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <title><?=$this->lang->line('panel_title')?></title>

        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <link rel="SHORTCUT ICON" href="<?=base_url("uploads/images/$siteinfos->photo")?>" />

        <link rel="stylesheet" href="<?=base_url('assets/pace/pace.css')?>">

        <script type="text/javascript" src="<?php echo base_url('assets/inilabs/jquery.min.js'); ?>"></script>
        <!-- <script type="text/javascript" src="<?php echo base_url('assets/slimScroll/jquery.slimscroll.min.js'); ?>"></script> -->

        <script type="text/javascript" src="<?php echo base_url('assets/toastr/toastr.min.js'); ?>"></script>


        <link href="<?php echo base_url('assets/bootstrap/bootstrap.min.css'); ?>" rel="stylesheet">

        <link href="<?php echo base_url('assets/fonts/font-awesome.css'); ?>" rel="stylesheet">

        <link href="<?php echo base_url('assets/fonts/icomoon.css'); ?>" rel="stylesheet">

        <link href="<?php echo base_url('assets/fonts/ini-icon.css'); ?>" rel="stylesheet">

        <link href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css'); ?>" rel="stylesheet">

        <link id="headStyleCSSLink" href="<?php echo base_url($backendThemePath.'/style.css'); ?>" rel="stylesheet">

        <link href="<?php echo base_url('assets/inilabs/hidetable.css'); ?>" rel="stylesheet">

        <link id="headInilabsCSSLink" href="<?php echo base_url($backendThemePath.'/inilabs.css'); ?>" rel="stylesheet">

        <link href="<?php echo base_url('assets/inilabs/responsive.css'); ?>" rel="stylesheet">

        <link href="<?php echo base_url('assets/toastr/toastr.min.css'); ?>" rel="stylesheet">

        <link href="<?php echo base_url('assets/inilabs/mailandmedia.css'); ?>" rel="stylesheet">

        <link rel="stylesheet" href="<?php echo base_url('assets/datatables/buttons.dataTables.min.css'); ?>" >

        <link rel="stylesheet" href="<?php echo base_url('assets/inilabs/combined.css'); ?>" >
<script type="text/javascript" src="<?php echo base_url('assets/inilabs/style.js'); ?>"></script>
        
        <?php
            if(isset($headerassets)) {
                foreach ($headerassets as $assetstype => $headerasset) {
                    if($assetstype == 'css') {
                      if(inicompute($headerasset)) {
                        foreach ($headerasset as $keycss => $css) {
                          echo '<link rel="stylesheet" href="'.base_url($css).'">'."\n";
                        }
                      }
                    } elseif($assetstype == 'js') {
                      if(inicompute($headerasset)) {
                        foreach ($headerasset as $keyjs => $js) {
                          echo '<script type="text/javascript" src="'.base_url($js).'"></script>'."\n";
                        }
                      }
                    }
                }
            }
        ?>

        <script type="text/javascript">
          //  document.getElementById("explain-hide").style.display = 'none'; 
        //   var data=$( ".treeview :contains('Administrator')" ).hide();
        // var adata = 
        // console.log(adata);
        // if(adata){
        //     alert(adata);
        // }
function getSelectValue()
        {
            var selectedValue = document.getElementById("list").value;
            console.log(selectedValue);
            if(selectedValue == "subjective")
            {
                var selectedValue = document.getElementById("list").value;
                //document.getElementById("explain-hide").show();
                console.log("not-done");
                document.getElementById("explain-hide").style.display = 'block';                
            }
            else if(selectedValue == "objective"){
               // var selectedValue = document.getElementByClassName("list").value;
                console.log("done");
                document.getElementById("explain-hide").style.display = 'none';
            }
        }
        //getSelectValue();
            function myFunction(value,explains) {
//alert(explains);
    var value = value;
    //console.log(value);
//console.log(document.getElementById("explain").value);



// var temp = "This is a string.";
// var count = (temp.match(/is/g) || []).length;
// console.log(count);
 const string = value;
const substring = explains;
//var names = 'Harry,John,Clark,Peter,Rohn,Alice';
var nameArr = substring.split(',');
console.log(substring);
//alert(value);
//console.log(string.includes(substring));
var matchfirst=string.includes(nameArr[0]);
var matchsecond=string.includes(nameArr[1]);
var matchthird=string.includes(nameArr[2]);
var matchfourth=string.includes(nameArr[3]);
var matchfifth=string.includes(nameArr[4]);
var matchsixth=string.includes(nameArr[5]);
var matchseven=string.includes(nameArr[6]);
var matcheight=string.includes(nameArr[7]);
var matchnine=string.includes(nameArr[8]);
var matchtenth=string.includes(nameArr[9]);

//alert(matchfirst);
//alert(matchsecond);
   // document.getElementById("fname").readOnly=true; 
// // let myVariable = "H" 
// let myReg = new RegExp(value + ".*") 
// let myMatch = myString.match(myReg) 
if(matchfirst == true)  
{
    console.log("fsfsf");
    $(".fa-check").first().click();
}   
 if(matchsecond == true)  
{
    alert("fsfsf");
    $(".fa-check:eq( 1 )").first().click();
}    
 if(matchthird == true)  
{
    console.log("fsfsf");
    $(".fa-check:eq( 2 )").first().click();
}  
 if(matchfourth == true)  
{
    console.log("fsfsf");
    $(".fa-check:eq( 3 )").first().click();
}           
 if(matchfifth == true)  
{
    console.log("fsfsf");
    $(".fa-check:eq( 4 )").first().click();
}      
 if(matchsixth == true)  
{
    console.log("fsfsf");
    $(".fa-check:eq( 5 )").first().click();
}  
 if(matchseven == true)  
{
    console.log("fsfsf");
    $(".fa-check:eq( 6 )").first().click();
}   
 if(matcheight == true)  
{
    console.log("fsfsf");
    $(".fa-check:eq( 7 )").first().click();
}   
 if(matchnine == true)  
{
    console.log("fsfsf");
    $(".fa-check:eq( 8 )").first().click();
}  
 if(matchtenth == true)  
{
    console.log("fsfsf");
    $(".fa-check:eq( 9 )").first().click();
}  
}
          $(window).load(function() {
            //var examdetails=$(".examdetails .text-green").hide();
            //console.log(examdetails);
            //document.getElementsByClassName("icon-administrator").style.display = 'none';
          // $( ".examdetails, .text-red" ).hide();
            $( ".treeview :contains('Administrator')" ).hide();
            $( ".treeview :contains('Settings')" ).hide();
            // $( ".treeview :contains('Certificate Report')" ).hide();
            //Certificate Report
            $(".se-pre-con").fadeOut("slow");
          });
        </script>
    </head>
    <body class="skin-blue fuelux">
        <div class="se-pre-con"></div>
